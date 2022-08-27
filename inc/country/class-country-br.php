<?php
/**
 * Country Class for Brazil (BR).
 *
 * State/province count: 27
 * City count: 5646
 * City count per state/province:
 * - MG: 856 cities
 * - SP: 655 cities
 * - RS: 501 cities
 * - BA: 421 cities
 * - PR: 400 cities
 * - SC: 315 cities
 * - GO: 246 cities
 * - PI: 225 cities
 * - PB: 224 cities
 * - MA: 219 cities
 * - PE: 193 cities
 * - CE: 187 cities
 * - RN: 169 cities
 * - PA: 147 cities
 * - MT: 143 cities
 * - TO: 139 cities
 * - AL: 102 cities
 * - RJ: 95 cities
 * - MS: 82 cities
 * - ES: 80 cities
 * - SE: 75 cities
 * - AM: 62 cities
 * - RO: 56 cities
 * - AC: 22 cities
 * - AP: 16 cities
 * - RR: 14 cities
 * - DF: 2 cities
 *
 * @package WP_Ultimo\Country
 * @since 2.0.11
 */

namespace WP_Ultimo\Country;

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Country Class for Brazil (BR).
 *
 * @since 2.0.11
 * @internal last-generated in 2022-08
 * @generated class generated by our build scripts, do not change!
 *
 * @property-read string $code
 * @property-read string $currency
 * @property-read int $phone_code
 */
class Country_BR extends Country {

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
		'country_code' => 'BR',
		'currency'     => 'BRL',
		'phone_code'   => 55,
	);

	/**
	 * The type of nomenclature used to refer to the country sub-divisions.
	 *
	 * @since 2.0.11
	 * @var string
	 */
	protected $state_type = 'state';

	/**
	 * Return the country name.
	 *
	 * @since 2.0.11
	 * @return string
	 */
	public function get_name() {

		return __('Brazil', 'wp-ultimo');

	} // end get_name;

	/**
	 * Returns the list of states for BR.
	 *
	 * @since 2.0.11
	 * @return array The list of state/provinces for the country.
	 */
	protected function states() {

		return array(
			'AC' => __('Acre', 'wp-ultimo'),
			'AL' => __('Alagoas', 'wp-ultimo'),
			'AP' => __('Amapá', 'wp-ultimo'),
			'AM' => __('Amazonas', 'wp-ultimo'),
			'BA' => __('Bahia', 'wp-ultimo'),
			'CE' => __('Ceará', 'wp-ultimo'),
			'ES' => __('Espírito Santo', 'wp-ultimo'),
			'DF' => __('Federal District', 'wp-ultimo'),
			'GO' => __('Goiás', 'wp-ultimo'),
			'MA' => __('Maranhão', 'wp-ultimo'),
			'MT' => __('Mato Grosso', 'wp-ultimo'),
			'MS' => __('Mato Grosso do Sul', 'wp-ultimo'),
			'MG' => __('Minas Gerais', 'wp-ultimo'),
			'PR' => __('Paraná', 'wp-ultimo'),
			'PB' => __('Paraíba', 'wp-ultimo'),
			'PA' => __('Pará', 'wp-ultimo'),
			'PE' => __('Pernambuco', 'wp-ultimo'),
			'PI' => __('Piauí', 'wp-ultimo'),
			'RN' => __('Rio Grande do Norte', 'wp-ultimo'),
			'RS' => __('Rio Grande do Sul', 'wp-ultimo'),
			'RJ' => __('Rio de Janeiro', 'wp-ultimo'),
			'RO' => __('Rondônia', 'wp-ultimo'),
			'RR' => __('Roraima', 'wp-ultimo'),
			'SC' => __('Santa Catarina', 'wp-ultimo'),
			'SE' => __('Sergipe', 'wp-ultimo'),
			'SP' => __('São Paulo', 'wp-ultimo'),
			'TO' => __('Tocantins', 'wp-ultimo'),
		);

	} // end states;

} // end class Country_BR;
