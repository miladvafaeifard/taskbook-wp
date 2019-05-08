<?php

define( 'TASK_LOGGER', array(
    'var' => 'task_logger',
    'label' => 'Task Logger',
));

/**
 * Register Task Logger role.
 */
function taskbook_register_role() {
    add_role(TASK_LOGGER['var'], TASK_LOGGER['label']);
}

/**
 * Unregister Task Logger role.
 */
function taskbook_unregister_role() {
    remove_role(TASK_LOGGER['var'], TASK_LOGGER['label']);
}

/**
 * Grant Task-level capabilities to Administrator, Editor, and Task Logger.
 */
function taskbook_add_capabilities() {
    $roles = array( 'administrator', 'editor', TASK_LOGGER['var'] );

    foreach( $roles as $the_role ) {
        $role = get_role( $the_role );
		$role->add_cap( 'read' );
		$role->add_cap( 'edit_tasks' );
		$role->add_cap( 'publish_tasks' );
		$role->add_cap( 'edit_published_tasks' );
    }

    $manager_roles = array( 'administrator', 'editor' );

    foreach( $manager_roles as $the_role ) {
		$role = get_role( $the_role );
		$role->add_cap( 'read_private_tasks' );
		$role->add_cap( 'edit_others_tasks' );
		$role->add_cap( 'edit_private_tasks' );
		$role->add_cap( 'delete_tasks' );
		$role->add_cap( 'delete_published_tasks' );
		$role->add_cap( 'delete_private_tasks' );
		$role->add_cap( 'delete_others_tasks' );
    }
}

function taskbook_remove_capabilities() {
    $roles = array( 'administrator', 'editor', TASK_LOGGER['var'] );

    foreach( $manager_roles as $the_role ) {
        $role = get_role( $the_role );
        $role->remove_cap( 'read' );
		$role->remove_cap( 'edit_tasks' );
		$role->remove_cap( 'publish_tasks' );
		$role->remove_cap( 'edit_published_tasks' );
		$role->remove_cap( 'read_private_tasks' );
		$role->remove_cap( 'edit_others_tasks' );
		$role->remove_cap( 'edit_private_tasks' );
		$role->remove_cap( 'delete_tasks' );
		$role->remove_cap( 'delete_published_tasks' );
		$role->remove_cap( 'delete_private_tasks' );
		$role->remove_cap( 'delete_others_tasks' );
    }
}
