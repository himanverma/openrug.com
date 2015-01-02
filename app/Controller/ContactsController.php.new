<?php
App::uses('AppController', 'Controller');
/**
 * Contacts Controller
 *
 * @property Contact $Contact
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ContactsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
        
        public function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->allow(array('index'));
        }

/**
 * info method
 *
 * @return void
 */
        public function index() {
            if($this->request->is('post')){
                $to      = 'ajay_p@avainfotech.com';
                $from = $this->request->data['Contact']['email'];
                $subject = 'the subject';
                $message = 'hello';
                $headers = 'From: '.$from . "\r\n" .
                    'Reply-To: '.$from . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                mail($to, $subject, $message, $headers);
                $this->Session->setFlash("Message sent successfully");
            }else{
                $this->Session->setFlash("Something went wrong please try again");
            }
	}
}
