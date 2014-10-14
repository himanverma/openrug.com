<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class Sentdesign extends AppModel {

    
    
/**
 * hasMany associations
 *
 * @var array
 */
    public $hasMany = array(
        'Sentimage' => array(
            'className' => 'Sentimage',
            'foreignKey' => 'sentdesign_id',
            'dependent' => true,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );
}
