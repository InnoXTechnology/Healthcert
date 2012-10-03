<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Exporter $Exporter
 * @property Packer $Packer
 */
class User extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'Users';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'username' => array(
			'rule-1' => array(
				'rule' => array('notEmpty'),
				'message' =>  'Username must not be empty.'
			),
			'rule-2' => array(
				'rule' => array('isUnique'),
				'message' => "This username is already registered."
			)
		),
		'password' => array(
			'rule-1' => array(
				'rule' => array('notEmpty'),
				'message' =>  'Password must not be empty.'
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Exporter' => array(
			'className' => 'Exporter',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Packer' => array(
			'className' => 'Packer',
			'foreignKey' => 'user_id',
			'dependent' => false,
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
