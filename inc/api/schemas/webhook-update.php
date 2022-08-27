<?php
/**
 * Schema for webhook@update.
 *
 * @package WP_Ultimo\API\Schemas
 * @since 2.0.11
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Schema for webhook@update.
 *
 * @since 2.0.11
 * @internal last-generated in 2022-08
 * @generated class generated by our build scripts, do not change!
 *
 * @since 2.0.11
 */
return array(
	'name'             => array(
		'description' => __('Webhook name, which is used as product title as well.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	),
	'webhook_url'      => array(
		'description' => __('The URL used for the webhook call.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	),
	'event'            => array(
		'description' => __('The event that needs to be fired for this webhook to be sent.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	),
	'event_count'      => array(
		'description' => __('How many times this webhook was sent.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => false,
	),
	'active'           => array(
		'description' => __('Set this webhook as active (true), which means available will fire when the event occur, or inactive (false).', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	),
	'hidden'           => array(
		'description' => __('Is this webhook hidden.', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	),
	'date_created'     => array(
		'description' => __('Date when this was created.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	),
	'integration'      => array(
		'description' => __('The integration that created this webhook.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	),
	'date_last_fail'   => array(
		'description' => __('The date when this webhook last fail.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	),
	'date_modified'    => array(
		'description' => __('Model last modification date.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	),
	'migrated_from_id' => array(
		'description' => __('The ID of the original 1.X model that was used to generate this item on migration.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => false,
	),
	'skip_validation'  => array(
		'description' => __('Set true to have field information validation bypassed when saving this event.', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	),
);
