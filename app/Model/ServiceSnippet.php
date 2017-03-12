<?php
App::uses('AppModel', 'Model');
/**
 * ServiceSnippet Model
 *
 * @property ServiceSnippetPoints $ServiceSnippetPoints
 */
class ServiceSnippet extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ServiceSnippetPoints' => array(
			'className' => 'ServiceSnippetPoints',
			'foreignKey' => 'service_snippet_points_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
