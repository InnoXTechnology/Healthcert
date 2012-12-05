<?php
class LabAdminPanelController extends AppController {
    public $uses = array('Analysis', 'Sample', 'Testing');
    public $components = array('RequestHandler');
	
	public function beforeFilter()
	{
		

		
		$first_name = $this->Auth->user('username');
		$this->set(compact('first_name'));
	}

    public function index() {
    	
        $analyses = $this->Analysis->query("SELECT * FROM analyses");
       
		$this->set('analyses', $analyses);
       
    }

    public function click_pass($id = null) {
    	$this->Analysis->id = $id;
		$this->Analysis->saveField('approve', 'ผ่าน');
		$this->redirect(array('action' => 'index'));
    }

    public function click_not_pass($id = null) {
    	$this->Analysis->id = $id;
		$this->Analysis->saveField('approve', 'ไม่ผ่าน');
		$this->redirect(array('action' => 'index'));
    }
    
}

?>