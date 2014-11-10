<?php
App::uses('AppModel', 'Model');
/**
 * Order Model
 *
 */
class Order extends AppModel {

    
    
    public $hasMany = array(
        'Inlineitem' => array(
            'className' => 'Inlineitem',
            'foreignKey' => 'order_id',
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
    
    
    public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
                'Billingadd' => array(
			'className' => 'Billingadd',
			'foreignKey' => 'billingadd_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
