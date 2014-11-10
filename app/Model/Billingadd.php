<?php
App::uses('AppModel', 'Model');
/**
 * Billingadd Model
 *
 * @property User $User
 */
class Billingadd extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed
    
    public $hasMany = array(
        'Order' => array(
            'className' => 'Order',
            'foreignKey' => 'billingadd_id',
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

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
