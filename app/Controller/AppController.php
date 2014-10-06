<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */

App::uses('CakeEmail', 'Network/Email');
$mailComp = new CakeEmail();
class AppController extends Controller {

    public $components = array('Auth', 'Session');
    public $helpers = array('Cache', 'Html', 'Session', 'Form', 'Combinator.Combinator','PaypalIpn.Paypal');
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->authenticate = array(
            'all' => array(
                'userModel' => 'User',
            //'scope' => array('User.active' => 1) 
            ),
            'Form',
                //'Basic' 
        );
        $this->Auth->allow('admin_add');
        if ($this->request->param("prefix")) {
            $this->layout = "admin";
            $authUser = $this->User->find('first', array('conditions' => array('User.id' => $this->Auth->User('id'))));
            $this->set('authUser', $authUser);
        }
    }

    public function afterPaypalNotification($txnId) {
        //Here is where you can implement code to apply the transaction to your app.
        //for example, you could now mark an order as paid, a subscription, or give the user premium access.
        //retrieve the transaction using the txnId passed and apply whatever logic your site needs.

        $transaction = ClassRegistry::init('PaypalIpn.InstantPaymentNotification')->findById($txnId);
        $this->log($transaction['InstantPaymentNotification']['id'], 'paypal');

        //Tip: be sure to check the payment_status is complete because failure 
        //     are also saved to your database for review.

        if ($transaction['InstantPaymentNotification']['payment_status'] == 'Completed') {
            //Yay!  We have monies!
        } else {
            //Oh no, better look at this transaction to determine what to do; like email a decline letter.
        }
    }

}
