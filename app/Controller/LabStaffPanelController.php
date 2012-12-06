<?php

/**
* 
*/
class LabStaffPanelController extends AppController
{
	
	public $uses = array('Sample','Analysis');

	public function beforeFilter()
	{
		if ($this->Auth->user('type') == 'E') {
			$this->redirect(array('controller' => 'ExporterPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'D') {
			$this->redirect(array('controller' => 'DOAStaffPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'A') {
			$this->redirect(array('controller' => 'DOAHeadPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'H') {
			$this->redirect(array('controller' => 'LabAdminPanel', 'action' => 'index'));
		}
		
		$first_name = $this->Auth->user('username');
		$this->set(compact('first_name'));
	}

	public function index()
	{
		# code...
		$this->redirect(array('action' => 'sample'));
	}

	public function result(){
		# code...
		if($this->request->is('post')){
			$this->Analysis->save($this->request->data);
			$this->redirect(array('action' => 'index'));
			$this->setFlash('ส่งผลการทดสอบแล้ว');
		}
	}

	public function sample()
	{
		# code...
		if($this->request->is('post')){
			$this->Sample->save($this->request->data);
			$this->redirect(array('action' => 'index'));
			$this->setFlash('เก็บข้อมูลตัวอย่างแล้ว');
		}
	}

}

?>