<?php
App::uses('AppModel', 'Model');
/**
 * ServiceSnippetPoint Model
 *
 * @property ServiceSnippet $ServiceSnippet
 */
class ServiceSnippetPoint extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ServiceSnippet' => array(
			'className' => 'ServiceSnippet',
			'foreignKey' => 'service_snippet_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
