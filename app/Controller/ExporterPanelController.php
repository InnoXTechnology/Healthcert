<?php
/**
* 
*/
class ExporterPanelController extends AppController
{
	public $uses = array('Analysis','User','Exporter','Packer','Packinghouse','Request','Exportdetail','Attachment','Sample','EditRequest','EditPacker','EditExportdetail');
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
		$editrequests = $this->EditRequest->findAllByExporterId($this->Auth->user('id'));
		//debug($requests);
		$this->set(compact('requests'));
		$this->set(compact('editrequests'));
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

public function view_pk11()
{
	$requests = $this->Request->find('all');
	$this->set(compact('requests'));
		
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

public function view_edit_report_pk11($id = null)
{
	if ($this->request->is('post')) {
		$this->redirect(array('action' => 'index'));
	}
	if (isset($id)) {
		$data = $this->EditRequest->findById($id);
		if ($data['EditRequest']['exporter_id'] === $this->Auth->user('id')) {
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

public function edit_report_pk11($id = null)
{
	if ($this->request->is('post')) {
		$direct = $this->Request->findById($id);
		//$this->Edit_Requests->save($this->request->data);
		$req1 = $this->EditRequest->create();
		$req2 = $this->EditPacker->create();
		$req3 = $this->EditExportdetail->create();
		$data = $this->request->data;
			
			
		//debug($data);
		if (isset($data['Exporter']['id'])) {
			$req1['exporter_id'] = $data['Exporter']['id'];
		}
			$req1['receipt_no'] = $direct['Request']['receipt_no'];
			$req1['receipt_date'] = date('Y-m-d H:i:s');
			//$req1['receipt_name'] = $data['Request']['receipt_name'];
		if( isset($data['Request']['date'])){
			$req1['receipt_no'] = $data['Request']['date'];
		}
		if( isset($data['Request']['testing_type'])){
			$req1['receipt_no'] = $data['Request']['testing_type'];
		}
		if( isset($data['Request']['cert_no'])){
			$req1['receipt_no'] = $data['Request']['cert_no'];
		}
		if( isset($data['Request']['exportation_date'])){
			$req1['exportation_date'] = $data['Request']['exportation_date'];
		}
		$req1['oldRequest_id'] = $data['Request']['id'];
		$req1['exportdetail_id'] = $data['Exportdetail']['id'];
		$req1['packer_id'] = $data['Packer']['id'];
		$req1['packingHouse_id'] = $data['PackingHouse']['id'];
		$req1['vehicle'] = $data['Request']['vehicle'];
			
		$req1['product_name'] = $data['Request']['product_name'];
		$req1['product_weight'] = $data['Request']['product_weight'];
		$req1['product_value'] = $data['Request']['product_value'];
		$req1['gap_code'] = $data['Request']['gap_code'];
		$req1['status'] = $data['Request']['status'];
		$req1['is_microorganisms'] = $data['Request']['is_microorganisms'];
		$req1['is_harmful'] = $data['Request']['is_harmful'];
		$req2['id'] = $data['Packer']['id'];
		$req2['name'] = $data['Packer']['name'];
		$req2['address'] = $data['Packer']['address'];
		$req2['province'] = $data['Packer']['province'];
		$req2['postcode'] = $data['Packer']['postcode'];
		$req2['phone'] = $data['Packer']['phone'];
		$req2['fax'] = $data['Packer']['fax'];
		$req3['id'] = $data['Exportdetail']['id'];
		$req3['receiver'] = $data['Exportdetail']['receiver'];
		$req3['receiver_addr'] = $data['Exportdetail']['receiver_addr'];
		$req3['ship_date'] = $data['Exportdetail']['ship_date'];
		$req3['lot_no'] = $data['Exportdetail']['lot_no'];
		$req3['regis_no'] = $data['Exportdetail']['regis_no'];
		$req3['weight'] = $data['Exportdetail']['weight'];
		$this->EditRequest->save($req1);
		$this->EditPacker->save($req2);
		$this->EditExportdetail->save($req3);
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
				$this->Session->setFlash('Cannot Delete Request. Plases contact Staff.');
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

public function delete_edit_by_id($id = null)
{
	if (isset($id)) {
		$data = $this->EditRequest->findById($id);
		if ($data['EditRequest']['exporter_id'] === $this->Auth->user('id')) {

			$result1 = $this->EditPacker->delete($data['EditRequest']['packer_id']);
			$result3 = $this->EditExportdetail->delete($data['EditRequest']['exportdetail_id']);
			$result4 = $this->EditRequest->delete($id);
			
			$pass = $result1 && $result3 && $result4;

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