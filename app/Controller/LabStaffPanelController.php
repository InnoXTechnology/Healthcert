<?php

/**
* 
*/
class LabStaffPanelController extends AppController
{
	
	public $uses = array('Sample','Analysis');

	public function index()
	{
		# code...
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