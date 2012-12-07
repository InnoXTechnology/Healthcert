<?php
class LabAdminPanelController extends AppController {
    public $uses = array('Analysis', 'Sample', 'Testing');
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
		else if($this->Auth->user('type') == 'T') {
			$this->redirect(array('controller' => 'LabStaffPanel', 'action' => 'sample'));
		}
		
		$first_name = $this->Auth->user('username');
		$this->set(compact('first_name'));
	}

    public function index() {
    	
        $analyses = $this->Analysis->query("SELECT * FROM analyses where approve = ''");
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