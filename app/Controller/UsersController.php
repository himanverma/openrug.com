<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property Order $Order
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
        
        public function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->allow(array('admin_login','add','forgetpwd','resetpass','order','login'));
        }

/**
 * info method
 *
 * @return void
 */
        public function order() {
            $this->loadModel('Order');
            $this->Order->recursive=2;
            $orderLists=$this->Order->find('all',array(
                    conditions=>array('Order.id'=>$this->Auth->User('id')),
                    'contain'=>array('Inlineitem'=>array('Genrug'))
                    ,'order'=>array('Order.id DESC')
                    ));
            $this->set('orderLists',$orderLists);
	}
        
        public function info(){
                $this->User->id=$this->Auth->User('id');
		if (!$this->User->exists($this->Auth->User('id'))) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'info'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $this->Auth->User('id')));
			$this->request->data = $this->User->find('first', $options);
		}
        }
        
/**
 * admin_changepass method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */        
        
        public function admin_changepass(){
	      if ($this->request->is('post')) {		
		   $password =AuthComponent::password($this->data['User']['old_password']);	
                   $em= $this->Auth->user('email');
		   $pass=$this->User->find('first',array('conditions'=>
                       array('AND'=>array('User.password'=>$password,'User.email' => $em))));
		   if($pass){
			  if($this->data['User']['new_password'] != $this->data['User']['cpassword'] ){
				$this->Session->setFlash("New password and Confirm password field do not match");		  
			  }
			  else {  
                                $this->User->data['User']['password'] = $this->data['User']['new_password'];
                                $this->User->id = $pass['User']['id'];
                                if($this->User->exists()){
                                        $pass['User']['password'] = $this->data['User']['new_password'];
                                        if($this->User->save($this->request->data)) {
                                          $this->Session->setFlash("Password updated");
                                          $this->redirect(array('controller'=>'users','action' => 'index'));
                                        }
                                }
			   }
		   }
		   else{
			   $this->Session->setFlash("Your old password did not match.");
		   }
	      }
        }
        
        
        
        
/**
 * admin_index method
 *
 * @return void
 */        
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
                $this->User->id=$id;
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
        
        public function admin_login(){
            $this->layout="adminLogin";
            if($this->request->is('post')){
                if($this->Auth->login()){
                    $this->Session->setFlash('LoggedIn Successfully');
                    $this->redirect("/admin/rugs");
                }else{
                    $this->Session->setFlash('Something went wrong...');
                    $this->redirect("/dashboard");
                }
            }
        }
        public function admin_logout(){
            $this->Auth->logout();
            $this->Session->setFlash("Thanks For visiting us!!!");
            $this->redirect(array('controller'=>'users','action'=>'login'));
        }
        public function login(){
            if($this->request->is('post')){
                if($this->Auth->login()){
                    $this->Session->setFlash('LoggedIn Successfully');
                    $this->redirect($this->Auth->redirect());
                }else{
                    $this->Session->setFlash('Something went wrong...');
                    $this->redirect(array('controller'=>'users','action'=>'login'));
                }
            }
        }
        
        public function logout(){
            $this->Auth->logout();
            $this->Session->setFlash("Thanks For visiting us!!!");
            $this->redirect('/');
        }
        public function add(){
            if ($this->request->is('post')) {
                if ($this->User->hasAny(array('User.username' => $this->request->data['User']['username']))) {
                    $this->Session->setFlash('Username already exit please try again');
                    $this->redirect(array('controller'=>'users','action'=>'add'));
                } else {
                    if ($this->User->hasAny(array('User.email' => $this->request->data['User']['email']))) {
                        $response['error'] = '1';
                        $this->Session->setFlash('Email already exit please try again');
                        $this->redirect(array('controller'=>'users','action'=>'add'));
                    } else {
                        $this->User->create();
                        if ($this->User->save($this->request->data)) {
                            $id = base64_encode($this->User->getLastInsertID());
                            $url = FULL_BASE_URL . $this->webroot . 'Users/confirm/' . $id;
//                            $message = "You have successfully created your account .Please click on the following link to activate your account.<br>
//                                    <a href=". $url."><b>Click Here To Verify Your Email </b></a>";
//                            $l = new CakeEmail('smtp');
//                            $l->config('smtp')->emailFormat('html')->template('default', 'default')->subject('Active link')->to
//                                    ($this->request->data['User']['email'])->send($message);
                            $this->Session->setFlash('Registerd Successfully');
                            $this->redirect(array('controller'=>'users','action'=>'login'));
                        } else {
                            $this->Session->setFlash('Something went worng please try again');
                            $this->redirect(array('controller'=>'users','action'=>'add'));
                        }
                    }
                }
            }
        }
        
        
        public function forgetpwd() {
            $this->User->recursive = -1;
            if (!empty($this->data)) {
                if (empty($this->data['User']['email'])) {
                    $this->Session->setFlash('Please Provide Your Email Address that You used to Register with Us');
                } else {
                    $email = $this->data['User']['email'];
                    $fu = $this->User->find('first', array('conditions' => array('User.email' => $email)));
                    if ($fu) {
                        if ($fu['User']['status'] == "1") {
                            $key = Security::hash(String::uuid(), 'sha512', true);
                            $hash = sha1($fu['User']['username'] . rand(0, 100));
                            $url = Router::url(array('controller' => 'users', 'action' => 'resetpass'), true) . '/' . $key . '#' . $hash;
                            $ms = "<p>You are receiving this email as you have requested a change of password
                                    <br/> If you have not requested this change please ignore this email.
                                    Click the link below to reset your password...</p><p style='width:100%;'> 
                                    <a href=" . $url . " style='text-decoration:none'><b>Click me to reset your password.</b></a></p>";
                            $fu['User']['tokenhash'] = $key;
                            $this->User->id = $fu['User']['id'];
                            if ($this->User->saveField('tokenhash', $fu['User']['tokenhash'])) {
                                $l = new CakeEmail('smtp');
                                $l->emailFormat('html')->template('default', 'default')->subject('Reset Your Password')->to($fu['User']['email'])->send($ms);
                                $this->set('smtp_errors', "none");
                                $this->Session->setFlash(__('Check Your Email To Reset your password', true));
                                $this->redirect(array('controller' => 'pages', 'action' => 'home'));
                            } else {
                                $this->Session->setFlash("Error Generating Reset link");
                            }
                        } else {
                            $this->Session->setFlash('This Account is Blocked. Please Contact to Administrator...');
                        }
                    } else {
                        $this->Session->setFlash('Email does Not Exist');
                    }
                }
            }
        }

        public function resetpass($token = null) {
            $this->User->recursive = -1;
            if (!empty($token)) {
                $u = $this->User->findBytokenhash($token);
                if ($u) {
                    $this->User->id = $u['User']['id'];
                    if (!empty($this->data)) {
                        if ($this->data['User']['password'] != $this->data['User']['password_confirm']) {
                            $this->Session->setFlash("Both the passwords are not matching...");
                            return;
                        }
                        $this->User->data = $this->data;
                        $this->User->data['User']['username'] = $u['User']['username'];
                        $new_hash = sha1($u['User']['username'] . rand(0, 100)); //created token
                        $this->User->data['User']['tokenhash'] = $new_hash;
                        if ($this->User->validates(array('fieldList' => array('password', 'password_confirm')))) {
                            if ($this->User->save($this->User->data)) {
                                $this->Session->setFlash('Password Has been Updated');
                                $this->redirect("/");
                            }
                        } else {
                            $this->set('errors', $this->User->invalidFields());
                        }
                    }
                } else {
                    $this->Session->setFlash('Token Corrupted, Please Retry.the reset link 
                            <a style="cursor: pointer; color: rgb(0, 102, 0); 
                            text-decoration: none; background: url("http://files.adbrite.com/mb/images/green-double-underline-006600.gif") 
                            repeat-x scroll center bottom transparent; margin-bottom: -2px; padding-bottom: 2px;" name="AdBriteInlineAd_work"
                            id="AdBriteInlineAd_work" target="_top">work</a> only for once.');
                }
            } else {
                $this->Session->setFlash('Pls try again...');
                $this->redirect(array('/'));
            }
        }
/**
 * changepass method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */        
        
        public function changepass(){
	      if ($this->request->is('post')) {		
		   $password =AuthComponent::password($this->data['User']['old_password']);	
                   $em= $this->Auth->user('email');
		   $pass=$this->User->find('first',array('conditions'=>
                       array('AND'=>array('User.password'=>$password,'User.email' => $em))));
		   if($pass){
			  if($this->data['User']['new_password'] != $this->data['User']['cpassword'] ){
				$this->Session->setFlash("New password and Confirm password field do not match");		  
			  }
			  else {  
                                $this->User->data['User']['password'] = $this->data['User']['new_password'];
                                $this->User->id = $pass['User']['id'];
                                if($this->User->exists()){
                                        $pass['User']['password'] = $this->data['User']['new_password'];
                                        if($this->User->save($this->request->data)) {
                                          $this->Session->setFlash("Password updated");
                                          $this->redirect(array('controller'=>'users','action' => 'changepass'));
                                        }
                                }
			   }
		   }
		   else{
			   $this->Session->setFlash("Your old password did not match.");
		   }
	      }
        }
        public function account(){
            
        }
        public function checkout(){
            
        }
}
