<?php
class UsersController extends AppController {
	public $helpers = array('Html', 'Form');

	public function index(){
		$usersList = $this->User->find('all');	
		$this->set('usersList', $usersList);	
	}
	public function beforeFilter() {
		parent::beforeFilter();
		// $this->Auth->allow('add', 'logout');
	}

	public function login() {
		if ($this->request->is('post')) {
			print_r($this->Auth->login());die();
			if ($this->Auth->login()) {
				die($this->Auth->redirect());
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('Invalid username or password, try again'));
			}
		}
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}
	public function addUser(){
		if($this->request->is('post')){	
			$this->User->create();		
			if($this->User->save($this->data)){		
				$this->redirect(array('controller' => 'users', 'action' => 'index'));
			}
			else{
				//thông báo lỗi ko tạo thành công tài khoản mới
			}
		}
	}

	public function editUser($id = null) {
		if ($this->request->is('post')) {		
			$this->User->id = $id;	
			if ($this->User->save($this->request->data)) {
				return $this->redirect(array('action' => 'index'));
			}
		}
		if (!$this->request->data) {
			$user = $this->User->findById($id);	
			$this->request->data = $user;
			$this->set('user', $user);		
		}
	}

	public function deleteUser($id) {
		if ($this->User->delete($id)) {	
			return $this->redirect(array('action' => 'index'));
		}
	}
}
