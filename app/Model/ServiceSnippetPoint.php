<?php
App::uses('AppModel', 'Model');
/**
 * ServiceSnippetPoint Model
 *
 * @property ServiceSnippets $ServiceSnippets
 */
class ServiceSnippetPoint extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ServiceSnippets' => array(
			'className' => 'ServiceSnippets',
			'foreignKey' => 'service_snippets_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
