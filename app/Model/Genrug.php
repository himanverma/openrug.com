<?php
App::uses('AppModel', 'Model');
/**
 * Rugpng Model
 *
 * @property Rug $Rug
 */
class Genrug extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Rug' => array(
			'className' => 'Rug',
			'foreignKey' => 'rug_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
}
