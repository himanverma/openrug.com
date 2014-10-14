<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class Sentimage extends AppModel {

    
    
/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Sentdesign' => array(
			'className' => 'Sentdesign',
			'foreignKey' => 'sentdesign_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        
        public function beforeSave($options = array()) {
            App::uses("HtmlHelper", "View/Helper");
            $html = new HtmlHelper(new View());
            if($this->data[$this->alias]['name']!=""){
                $ext=pathinfo($this->data[$this->alias]['name'], PATHINFO_EXTENSION);
                $image_name = date('YmdHis').rand(1,999) . "." . $ext;
                $this->data[$this->alias]['path'] =$html->url("/files/sentdesigns/".$image_name,true);
                $destination="files/sentdesigns/".$image_name;
                move_uploaded_file($this->data[$this->alias]['tmp_name'],$destination);
            }
            parent::beforeSave($options);
        }
}
