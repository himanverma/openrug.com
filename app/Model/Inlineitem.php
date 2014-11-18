<?php
App::uses('AppModel', 'Model');
/**
 * Inlineitem Model
 *
 */
class Inlineitem extends AppModel {


    
    public $belongsTo = array(
        'Order' => array(
            'className' => 'Order',
            'foreignKey' => 'order_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Genrug' => array(
            'className' => 'Genrug',
            'foreignKey' => 'genrug_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    
   
}
