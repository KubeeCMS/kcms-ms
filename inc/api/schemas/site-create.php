<?php
/**
 * Schema for site@create.
 *
 * @package WP_Ultimo\API\Schemas
 * @since 2.0.11
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Schema for site@create.
 *
 * @since 2.0.11
 * @internal last-generated in 2022-06
 * @generated class generated by our build scripts, do not change!
 *
 * @since 2.0.11
 */
return array(
	'categories'        => array(
		'description' => __('The categories this site belongs to.', 'wp-ultimo'),
		'type'        => 'array',
		'required'    => false,
	),
	'featured_image_id' => array(
		'description' => __('The ID of the feature image of the site.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => false,
	),
	'site_id'           => array(
		'description' => __('The network ID for this site.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => true,
	),
	'title'             => array(
		'description' => __('The site title.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => true,
	),
	'name'              => array(
		'description' => __('The site name.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => true,
	),
	'description'       => array(
		'description' => __('A description for the site, usually a short text.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => true,
	),
	'domain'            => array(
		'description' => __("The site domain. You don't need to put http or https in front of your domain in this field. e.g: example.com.", 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	),
	'path'              => array(
		'description' => __('Path of the site. Used when in sub-directory mode.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => true,
	),
	'registered'        => array(
		'description' => __('Date when the site was registered.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	),
	'last_updated'      => array(
		'description' => __('Date of the last update on this site.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	),
	'active'            => array(
		'description' => __('Holds the ID of the customer that owns this site.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => false,
	),
	'public'            => array(
		'description' => __('Set true if this site is a public one, false if not.', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	),
	'archived'          => array(
		'description' => __('Is this an archived site.', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	),
	'mature'            => array(
		'description' => __('Is this a site with mature content.', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	),
	'spam'              => array(
		'description' => __('Is this an spam site.', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	),
	'deleted'           => array(
		'description' => __('Is this site deleted.', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	),
	'lang_id'           => array(
		'description' => __('The ID of the language being used on this site.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => false,
	),
	'customer_id'       => array(
		'description' => __('The ID of the customer that owns this site.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => true,
	),
	'membership_id'     => array(
		'description' => __('The ID of the membership associated with this site, if any.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => true,
	),
	'template_id'       => array(
		'description' => __('The ID of the templated used to create this site.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => false,
	),
	'type'              => array(
		'description' => __('The type of this particular site. Can be default, site_template, customer_owned, pending, external, main or other values added by third-party add-ons.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => true,
		'enum'        => array(
			'default',
			'site_template',
			'customer_owned',
			'pending',
			'external',
			'main',
		),
	),
	'signup_options'    => array(
		'description' => __('Keeps signup options for the site.', 'wp-ultimo'),
		'type'        => 'array',
		'required'    => false,
	),
	'signup_meta'       => array(
		'description' => __('Keeps signup meta for the site.', 'wp-ultimo'),
		'type'        => 'array',
		'required'    => false,
	),
	'date_created'      => array(
		'description' => __('Model creation date.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	),
	'date_modified'     => array(
		'description' => __('Model last modification date.', 'wp-ultimo'),
		'type'        => 'string',
		'required'    => false,
	),
	'migrated_from_id'  => array(
		'description' => __('The ID of the original 1.X model that was used to generate this item on migration.', 'wp-ultimo'),
		'type'        => 'integer',
		'required'    => false,
	),
	'skip_validation'   => array(
		'description' => __('Set true to have field information validation bypassed when saving this event.', 'wp-ultimo'),
		'type'        => 'boolean',
		'required'    => false,
	),
);
