<?php
/**
* 
*/
class UsersController extends AppController
{
	public $uses = array('User','Exporter', 'Packer');

	public function beforeFilter()
	{
		$this->Auth->allow('export_regis', 'forget_pass', 'packer_regis');
	}

	public function forget_pass()
	{
		if ($this->request->is('post'))
		{
			
		}
	}

	public function login()
	{

		if ($this->Auth->user('type') == 'E') {
			$this->redirect(array('controller' => 'ExporterPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'P') {
			$this->redirect(array('controller' => 'PackerPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'D') {
			$this->redirect(array('controller' => 'DOAStaffPanel', 'action' => 'index'));
		}
		else if($this->Auth->user('type') == 'L') {
			$this->redirect(array('controller' => 'LabStaffPanel', 'action' => 'index'));
		}

		if ($this->request->is('post'))
		{
			if ($this->Auth->login())
			{
				if ($this->Auth->user('type') == 'E') {
					$this->redirect(array('controller' => 'ExporterPanel', 'action' => 'index'));
				}
				else if($this->Auth->user('type') == 'P') {
					$this->redirect(array('controller' => 'PackerPanel', 'action' => 'index'));
				}
				else if($this->Auth->user('type') == 'D') {
					$this->redirect(array('controller' => 'DOAStaffPanel', 'action' => 'index'));
				}
				else if($this->Auth->user('type') == 'L') {
					$this->redirect(array('controller' => 'LabStaffPanel', 'action' => 'index'));
				}
			}
			else
			{
				$this->Session->setFlash('Invalid username or password, try again');
			}
		}
	}

	public function logout() {
		$this->Auth->logout();
		$this->redirect(array('action' => 'login'));
	}

	public function export_regis() {
		if ($this->request->is('post'))
		{
			if (empty($this->request->data['User']['password']) || $this->request->data['User']['password'] != $this->request->data['User']['repassword'])
			{
				$this->request->data['User']['password'] = '';
				$this->request->data['User']['repassword'] = '';
				$this->Session->setFlash('Password doesn\'t match.');
				return;
			}

			
			$this->Exporter->set($this->request->data);

			if (!$this->Exporter->validates()) {
				$this->Session->setFlash('Please fill all fleid.');
				return;
			}

			$this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);
			
			if ($this->User->save($this->request->data))
			{
				$data = $this->request->data;
				$exporter = $data['Exporter'];
				$lastUser = $this->User->findByUsername($data['User']['username']);
				$exporter['user_id'] = $lastUser['User']['id'];
				if ($this->Exporter->save($exporter)) {
					$this->Session->setFlash('The user has been saved.');
					$this->redirect(array('action' => 'login'));
				}
			}
			else
			{
				$this->request->data['User']['password'] = '';
				$this->request->data['User']['repassword'] = '';
				$this->Session->setFlash('The user could not be saved. Please try again.');
			}
			
		}
	}

	public function packer_regis() {
		if ($this->request->is('post'))
		{

			if (empty($this->request->data['User']['password']) || $this->request->data['User']['password'] != $this->request->data['User']['repassword'])
			{
				$this->request->data['User']['password'] = '';
				$this->request->data['User']['repassword'] = '';
				$this->Session->setFlash('Password doesn\'t match.');
				return;
			}

			$this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);

			if ($this->User->save($this->request->data))
			{
				$data = $this->request->data;
				$packer = $data['Packer'];
				$lastUser = $this->User->findByUsername($data['User']['username']);
				$packer['user_id'] = $lastUser['User']['id'];
				if ($this->Packer->save($packer)) {
					$this->Session->setFlash('The user has been saved.');
					$this->redirect(array('action' => 'login'));
				}
			}
			else
			{
				$this->request->data['User']['password'] = '';
				$this->request->data['User']['repassword'] = '';
				$this->Session->setFlash('The user could not be saved. Please try again.');
			}
		}
	}
}
?>