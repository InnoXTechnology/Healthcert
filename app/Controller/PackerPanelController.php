<?php
/**
* 
*/
class PackerPanelController extends AppController
{
	public $uses = array('User','Packer');
	
	public function beforeFilter()
	{
		if ($this->Auth->user('type') == 'E') {
			$this->redirect(array('controller' => 'ExporterPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'D') {
			$this->redirect(array('controller' => 'DOAStaffPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'L') {
			$this->redirect(array('controller' => 'LabStaffPanel', 'action' => 'index'));
		}
		$user = $this->Packer->findByUserId($this->Auth->user('id'));
		$first_name = $user['Packer']['name'];
		$this->set(compact('first_name'));
	}
	
	public function index()
	{

	}

	public function requestApp()
	{

	}

	public function manual()
	{

	}
}
?>