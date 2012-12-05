<?php
/**
* 
*/
class ExporterPanelController extends AppController
{
	public $uses = array('Analysis','User','Exporter','Packer','Packinghouse','Request','Exportdetail','Attachment','Sample');
	public $components = array('RequestHandler');
	
	public function beforeFilter()
	{
		if($this->Auth->user('type') == 'D') {
			$this->redirect(array('controller' => 'DOAStaffPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'A') {
			$this->redirect(array('controller' => 'DOAHeadPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'H') {
			$this->redirect(array('controller' => 'LabAdminPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'T') {
			$this->redirect(array('controller' => 'LabStaffPanel', 'action' => 'index'));
		}
		$user = $this->Exporter->findByUserId($this->Auth->user('id'));
		$first_name = $user['Exporter']['name'];
		$this->set(compact('first_name'));
	}
	
	public function index()
	{
		$requests = $this->Request->findAllByExporterId($this->Auth->user('id'));
		//debug($requests);
		$this->set(compact('requests'));
	}

	public function requestApp()
	{
		if($this->request->is('post')) {
			$data = $this->request->data;

			$this->Packer->set($data);
			$result1 = $this->Packer->validates();
			$this->Packinghouse->set($data);
			$result2 = $this->Packinghouse->validates();
			$this->Request->set($data);
			$result3 = $this->Request->validates();
			$this->Exportdetail->set($data);
			$result4 = $this->Exportdetail->validates();

			$pass = $result1 && $result2 && $result3 && $result4;

			if($pass) {
				
				if ($this->Packer->save($this->request->data) 
					&& $this->Exportdetail->save($this->request->data)) {

					$packingHouse = $data['Packinghouse'];
				$lastPacker = $this->Packer->getLastInsertId();
				$lastEd = $this->Exportdetail->getLastInsertId();
				$packingHouse['packer_id'] = $lastPacker;
				
				if ($this->Packinghouse->save($packingHouse)) {
					$request = $data['Request'];
					$lastPH = $this->Packinghouse->getLastInsertId();

					$request['exporter_id'] = $this->Auth->user('id');
					$request['packer_id'] = $lastPacker;
					$request['exportdetail_id'] = $lastEd;
					$request['packingHouse_id'] = $lastPH;
					$request['receipt_no'] = date('Y').' / '.$lastPH;
					$request['receipt_date'] = date('Y-m-d H:i:s');

					if ($this->Request->save($request)) {
						$this->Session->setFlash('The request has been saved.');
						$this->redirect(array('action' => 'index'));
					}
				}
				
				else $this->Session->setFlash('The request could not be saved. Please try again.');
			}
			else $this->Session->setFlash('The request could not be saved. Please try again.');
		}
		else $this->Session->setFlash('Please fill all fields.');
	}
}

public function manual()
{
	
}


public function view_report_pk11($id = null)
{
	if ($this->request->is('post')) {
		$this->redirect(array('action' => 'index'));
	}
	if (isset($id)) {
		$data = $this->Request->findById($id);
		if ($data['Request']['exporter_id'] === $this->Auth->user('id')) {
			$this->request->data = $data;
				//debug($this->request->data);
		} else {
			$this->redirect(array('action' => 'index'));
			$this->Session->setFlash('Access denied');
		}

	} else {
		$this->redirect(array('action' => 'index'));
		$this->Session->setFlash('Access denied');
	}
}

public function labresult() {
	$samples = $this->Sample->findAllByExporterId($this->Auth->user('id'));
	
	$this->set('samples', $samples);
	$testresults;

	foreach ($samples as $samp) {
		$testresults = $samp['Analysis'];
	}
	
	
}

public function delete_by_id($id = null)
{
	if (isset($id)) {
		$data = $this->Request->findById($id);
		if ($data['Request']['exporter_id'] === $this->Auth->user('id')) {

			$result1 = $this->Packer->delete($data['Request']['packer_id']);
			$result2 = $this->Packinghouse->delete($data['Request']['packingHouse_id']);
			$result3 = $this->Exportdetail->delete($data['Request']['exportdetail_id']);
			$result4 = $this->Request->delete($id);
			
			$pass = $result1 && $result2 && $result3 && $result4;

			if ($pass) {
				$this->redirect(array('action' => 'index'));
				$this->Session->setFlash('This requests was cancel.');
			}
			else {
				$this->redirect(array('action' => 'index'));
				$this->Session->setFlash('Cannot Delete Request. Plases contect Staff.');
			}
		} else {
			$this->redirect(array('action' => 'index'));
			$this->Session->setFlash('Access denied');
		}
	} else {
		$this->redirect(array('action' => 'index'));
		$this->Session->setFlash('Access denied');
	}
}
}

?>