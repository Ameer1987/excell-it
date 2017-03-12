<?php
App::uses('AppModel', 'Model');
/**
 * ServiceSnippet Model
 *
 * @property ServiceSnippetPoint $ServiceSnippetPoint
 */
class ServiceSnippet extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ServiceSnippetPoint' => array(
			'className' => 'ServiceSnippetPoint',
			'foreignKey' => 'service_snippet_id',
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
