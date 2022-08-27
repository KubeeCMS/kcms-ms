<?php
/**
 * Country Class for Niger (NE).
 *
 * State/province count: 7
 * City count: 70
 * City count per state/province:
 * - 6: 14 cities
 * - 5: 15 cities
 * - 4: 12 cities
 * - 7: 9 cities
 * - 3: 8 cities
 * - 2: 6 cities
 * - 1: 6 cities
 *
 * @package WP_Ultimo\Country
 * @since 2.0.11
 */

namespace WP_Ultimo\Country;

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Country Class for Niger (NE).
 *
 * @since 2.0.11
 * @internal last-generated in 2022-08
 * @generated class generated by our build scripts, do not change!
 *
 * @property-read string $code
 * @property-read string $currency
 * @property-read int $phone_code
 */
class Country_NE extends Country {

	use \WP_Ultimo\Traits\Singleton;

	/**
	 * General country attributes.
	 *
	 * This might be useful, might be not.
	 * In case of doubt, keep it.
	 *
	 * @since 2.0.11
	 * @var array
	 */
	protected $attributes = array(
		'country_code' => 'NE',
		'currency'     => 'XOF',
		'phone_code'   => 227,
	);

	/**
	 * The type of nomenclature used to refer to the country sub-divisions.
	 *
	 * @since 2.0.11
	 * @var string
	 */
	protected $state_type = 'unknown';

	/**
	 * Return the country name.
	 *
	 * @since 2.0.11
	 * @return string
	 */
	public function get_name() {

		return __('Niger', 'wp-ultimo');

	} // end get_name;

	/**
	 * Returns the list of states for NE.
	 *
	 * @since 2.0.11
	 * @return array The list of state/provinces for the country.
	 */
	protected function states() {

		return array(
			'1' => __('Agadez Region', 'wp-ultimo'),
			'2' => __('Diffa Region', 'wp-ultimo'),
			'3' => __('Dosso Region', 'wp-ultimo'),
			'4' => __('Maradi Region', 'wp-ultimo'),
			'5' => __('Tahoua Region', 'wp-ultimo'),
			'6' => __('Tillabéri Region', 'wp-ultimo'),
			'7' => __('Zinder Region', 'wp-ultimo'),
		);

	} // end states;

} // end class Country_NE;
