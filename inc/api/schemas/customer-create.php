<?php
/**
 * Schema for customer@create.
 *
 * @package WP_Ultimo\API\Schemas
 * @since 2.0.11
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Schema for customer@create.
 *
 * @since 2.0.11
 * @internal last-generated in 2022-06
 * @generated class generated by our build scripts, do not change!
 *
 * @since 2.0.11
 */
return array(
	'user_id'            => array(
		'description' => __('The WordPress user ID attached to this customer.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => true,
	),
	'date_registered'    => array(
		'description' => __('Date when the customer was created.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	),
	'email_verification' => array(
		'description' => __('Email verification status - either `none`, `pending`, or `verified`.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => true,
		'enum'        => array(
			'verified',
			'pending',
			'none',
		),
	),
	'last_login'         => array(
		'description' => __('Date this customer last logged in.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	),
	'has_trialed'        => array(
		'description' => __('Whether or not the customer has trialed before.', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	),
	'vip'                => array(
		'description' => __('If this customer is a VIP customer or not.', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	),
	'ips'                => array(
		'description' => __('List of IP addresses used by this customer.', 'wp-ultimo'),
		'type'        => 'array',
		'required'    => false,
	),
	'extra_information'  => array(
		'description' => __('Any extra information related to this customer.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	),
	'type'               => array(
		'description' => __("The customer type. Can be 'customer'.", 'wp-ultimo'),
		'type'        => 'string',
		'required'    => true,
		'enum'        => array(
			'customer',
		),
	),
	'signup_form'        => array(
		'description' => __('The form used to signup.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	),
	'date_created'       => array(
		'description' => __('Model creation date.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	),
	'date_modified'      => array(
		'description' => __('Model last modification date.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	),
	'migrated_from_id'   => array(
		'description' => __('The ID of the original 1.X model that was used to generate this item on migration.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => false,
	),
	'skip_validation'    => array(
		'description' => __('Set true to have field information validation bypassed when saving this event.', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	),
);
