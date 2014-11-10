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
App::uses('CakeEmail', 'Network/Email');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $components = array('Auth','Session','Seo.BlackList');
    public $helpers = array('Cache','Html','Session','Form','Combinator.Combinator','Seo.Seo');
    public function beforeFilter() {
        parent::beforeFilter();
        $ext = explode(".", $this->request->here);
        $ext = strtolower($ext[count($ext)-1]);
        if(!in_array($ext, array("gif","png","php","jpg","pdf")) && !strstr($this->request->here, "/admin")){
            $this->loadModel('Seo.SeoUri');
            $uri = $this->SeoUri->find('first',array('conditions'=>array('SeoUri.uri'=>$this->request->here)));
            if(empty($uri)){
                $this->SeoUri->create();
                $this->SeoUri->save(array(
                   'SeoUri' => array(
                       'uri' => $this->request->here,
                       'is_approved' => 1,
                       'created' => date("Y-m-d H:i:s",time()),
                       'modified' => date("Y-m-d H:i:s",time()),
                   )
                ));
            }
        }
        
        $this->Auth->authenticate = array( 
            'all' => array( 
                'userModel' => 'User', 
                //'scope' => array('User.active' => 1) 
                ), 
            'Form', 
            //'Basic' 
            );
        $this->Auth->allow('admin_add');
        if($this->request->param("prefix")){
            $this->layout = "admin";
        }
        $this->loadModel('User');
        $this->set('authUser',$this->User->find('first',array('conditions'=>array('User.id'=>$this->Auth->User('id')))));
    }
}
