<?php 
/**
* 
*/
class DOAHeadPanelController extends AppController
{
	public $uses = array('User','Exporter','Packer','PackingHouse','Request','Exportdetail','Attachment');
	
	public function beforeFilter()
	{
		if ($this->Auth->user('type') == 'E') {
			$this->redirect(array('controller' => 'ExporterPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'D') {
			$this->redirect(array('controller' => 'DOAStaffPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'F') {
			$this->redirect(array('controller' => 'DOAStaff2Panel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'H') {
			$this->redirect(array('controller' => 'LabAdminPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'T') {
			$this->redirect(array('controller' => 'LabStaffPanel', 'action' => 'index'));
		}

		$first_name = $this->Auth->user('username');
		$this->set(compact('first_name'));
	}

	public function index()
	{
		//Find
	}

	public function apply_status($id)
	{
		if (isset($id)) {
			if ($this->request->is('post')) {
				//Save
			} else {
				//Find
			}
		}
		else {
			$this->redirect(array('action' => 'index'));
			$this->Session->setFlash('Access denied');
		}
		
	}

}
 ?>