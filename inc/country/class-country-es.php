<?php
/**
 * Country Class for Spain (ES).
 *
 * State/province count: 28
 * City count: 6693
 * City count per state/province:
 * - LE: 1948 cities
 * - CM: 808 cities
 * - AN: 724 cities
 * - AR: 620 cities
 * - CT: 558 cities
 * - VC: 477 cities
 * - EX: 349 cities
 * - GA: 227 cities
 * - MD: 188 cities
 * - NC: 176 cities
 * - RI: 159 cities
 * - PV: 149 cities
 * - CN: 105 cities
 * - PM: 87 cities
 * - S: 58 cities
 * - MC: 57 cities
 * - CE: 2 cities
 * - ML: 1 cities
 *
 * @package WP_Ultimo\Country
 * @since 2.0.11
 */

namespace WP_Ultimo\Country;

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Country Class for Spain (ES).
 *
 * @since 2.0.11
 * @internal last-generated in 2022-08
 * @generated class generated by our build scripts, do not change!
 *
 * @property-read string $code
 * @property-read string $currency
 * @property-read int $phone_code
 */
class Country_ES extends Country {

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
		'country_code' => 'ES',
		'currency'     => 'EUR',
		'phone_code'   => 34,
	);

	/**
	 * The type of nomenclature used to refer to the country sub-divisions.
	 *
	 * @since 2.0.11
	 * @var string
	 */
	protected $state_type = 'autonomous_community';

	/**
	 * Return the country name.
	 *
	 * @since 2.0.11
	 * @return string
	 */
	public function get_name() {

		return __('Spain', 'wp-ultimo');

	} // end get_name;

	/**
	 * Returns the list of states for ES.
	 *
	 * @since 2.0.11
	 * @return array The list of state/provinces for the country.
	 */
	protected function states() {

		return array(
			'AN' => __('Andalusia', 'wp-ultimo'),
			'AR' => __('Aragon', 'wp-ultimo'),
			'AS' => __('Asturias', 'wp-ultimo'),
			'PM' => __('Balearic Islands', 'wp-ultimo'),
			'PV' => __('Basque Country', 'wp-ultimo'),
			'BU' => __('Burgos Province', 'wp-ultimo'),
			'CN' => __('Canary Islands', 'wp-ultimo'),
			'CB' => __('Cantabria', 'wp-ultimo'),
			'CL' => __('Castile and León', 'wp-ultimo'),
			'CM' => __('Castilla La Mancha', 'wp-ultimo'),
			'CT' => __('Catalonia', 'wp-ultimo'),
			'CE' => __('Ceuta', 'wp-ultimo'),
			'EX' => __('Extremadura', 'wp-ultimo'),
			'GA' => __('Galicia', 'wp-ultimo'),
			'RI' => __('La Rioja', 'wp-ultimo'),
			'LE' => __('Léon', 'wp-ultimo'),
			'MD' => __('Madrid', 'wp-ultimo'),
			'ML' => __('Melilla', 'wp-ultimo'),
			'MC' => __('Murcia', 'wp-ultimo'),
			'NC' => __('Navarra', 'wp-ultimo'),
			'P' => __('Palencia Province', 'wp-ultimo'),
			'SA' => __('Salamanca Province', 'wp-ultimo'),
			'SG' => __('Segovia Province', 'wp-ultimo'),
			'SO' => __('Soria Province', 'wp-ultimo'),
			'VC' => __('Valencia', 'wp-ultimo'),
			'VA' => __('Valladolid Province', 'wp-ultimo'),
			'ZA' => __('Zamora Province', 'wp-ultimo'),
			'AV' => __('Ávila', 'wp-ultimo'),
		);

	} // end states;

} // end class Country_ES;
