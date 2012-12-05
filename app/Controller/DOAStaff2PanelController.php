<?php 
/**
* 
*/
class DOAStaff2PanelController extends AppController
{
	public $uses = array('User','Exporter','Packer','PackingHouse','Request','Exportdetail','Attachment','Analysis');
	public $components = array('RequestHandler');


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