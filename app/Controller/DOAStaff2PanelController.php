<?php 
/**
* 
*/
class DOAStaff2PanelController extends AppController
{
	public $uses = array('User','Exporter','Packer','PackingHouse','Request','Exportdetail','Attachment','Analysis');
	public $components = array('RequestHandler');

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
		else if($this->Auth->user('type') == 'T') {
			$this->redirect(array('controller' => 'LabStaffPanel', 'action' => 'index'));
		}
		
		$first_name = $this->Auth->user('username');
		$this->set(compact('first_name'));
	}

	public function index()
	{
		$analyses = $this->Analysis->query("SELECT * FROM analyses WHERE status = 'NOT SEEN'");
		//debug($analyses);
		$this->set(compact('analyses'));
	}

	public function pass($id)
	{
		$this->Analysis->id = $id;
		$this->Analysis->saveField('status', 'ผ่าน');
		$this->redirect(array('action' => 'index'));
	}

	public function not_pass($id)
	{
		$this->Analysis->id = $id;
		$this->Analysis->saveField('status', 'ไม่ผ่าน');
		$this->redirect(array('action' => 'index'));
	}
}
 ?>