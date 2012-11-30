<?php
/**
* 
*/
class DOAStaffPanelController extends AppController
{
	public $uses = array('User','Exporter','Packer','PackingHouse','Request','Exportdetail','Attachment');
	public $components = array('RequestHandler');
	
	public function beforeFilter()
	{
		if($this->Auth->user('type') == 'E') {
			$this->redirect(array('controller' => 'ExporterPanel', 'action' => 'index'));
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
		$first_name = $this->Auth->user('username');
		$this->set(compact('first_name'));
	}
	
	public function index()
	{
		$requests = $this->Request->find('all');
		//debug($requests);
		$this->set(compact('requests'));
	}
	
	public function view_pk11()
	{
		$requests = $this->Request->find('all');
		//debug($requests);
		$this->set(compact('requests'));
	}
	
	public function view_report_pk11($id = null)
	{
		
		if (isset($id)) {
			if ($this->request->is('post')) {
				$this->Request->save($this->request->data);
				$this->Exporter->save($this->request->data);
				$this->Packer->save($this->request->data);
				$this->Exportdetail->save($this->request->data);
				$this->PackingHouse->save($this->request->data);
				$this->redirect(array('action' => 'index'));
			} else {
				$data = $this->Request->findById($id);
				
				$this->request->data = $data;
				//debug($this->request->data);
			}

		} else {
			$this->redirect(array('action' => 'index'));
			$this->Session->setFlash('Access denied');
		}
	}
	
	public function delete_by_id($id = null)
	{
		if (isset($id)) {
			$data = $this->Request->findById($id);
			
			$result1 = $this->Packer->delete($data['Request']['packer_id']);
			$result2 = $this->PackingHouse->delete($data['Request']['packingHouse_id']);
			$result3 = $this->Exportdetail->delete($data['Request']['exportdetail_id']);
			$result4 = $this->Request->delete($id);
				
			$pass = $result1 && $result2 && $result3 && $result4;

			if ($pass) {
				$this->redirect(array('action' => 'index'));
				$this->Session->setFlash('This requests was cancel.');
			}
			else {
				$this->redirect(array('action' => 'index'));
				$this->Session->setFlash('Cannot Delete Request.');
			}
		}
				
	}

	public function requestApp()
	{
		
	}

	public function manual()
	{

	}
}
?>