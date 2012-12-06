<?php
/**
* 
*/
class DOAStaffPanelController extends AppController
{
	public $uses = array('User','Exporter','Packer','PackingHouse','Request','Exportdetail','Attachment','EditRequest','EditPacker','EditExportdetail');
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
			$this->redirect(array('controller' => 'LabStaffPanel', 'action' => 'sample'));
		}

		$first_name = $this->Auth->user('username');
		$this->set(compact('first_name'));
	}
	
	public function index()
	{
		$requests = $this->Request->find('all');
		$editrequests = $this->EditRequest->find('all');
		$this->set(compact('requests'));
		$this->set(compact('editrequests'));
	}
	
	public function view_pk11()
	{
		$requests = $this->Request->find('all');
		
		$this->set(compact('requests'));
		
	}
	
	public function view_edit_pk11()
	{
		$editrequests = $this->EditRequest->find('all');
		$this->set(compact('editrequests'));
		
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
	
	public function view_edit_report_pk11($id = null)
	{
		
		if (isset($id)) {
			if ($this->request->is('post')) {
				$this->EditRequest->save($this->request->data);
				$this->EditPacker->save($this->request->data);
				$this->EditExportdetail->save($this->request->data);
				$this->redirect(array('action' => 'index'));
			} else {
				$data = $this->EditRequest->findById($id);
				
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
	
	public function delete_edit_by_id($id = null)
	{
		
		if (isset($id)) {
			$data = $this->EditRequest->findById($id);
			
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
				$this->Session->setFlash('Cannot Delete Request.');
			}
		}
	}

}
?>