<?php
/**
 * Country Class for China (CN).
 *
 * State/province count: 34
 * City count: 1214
 * City count per state/province:
 * - HN: 118 cities
 * - FJ: 111 cities
 * - SD: 90 cities
 * - GD: 72 cities
 * - HL: 71 cities
 * - HB: 55 cities
 * - HA: 55 cities
 * - GZ: 54 cities
 * - JL: 52 cities
 * - TW: 52 cities
 * - LN: 51 cities
 * - SC: 49 cities
 * - ZJ: 41 cities
 * - HE: 39 cities
 * - XJ: 37 cities
 * - AH: 37 cities
 * - NM: 33 cities
 * - YN: 29 cities
 * - GX: 28 cities
 * - GS: 20 cities
 * - CQ: 18 cities
 * - SX: 18 cities
 * - JX: 16 cities
 * - SN: 14 cities
 * - HI: 14 cities
 * - XZ: 13 cities
 * - BJ: 8 cities
 * - QH: 8 cities
 * - NX: 7 cities
 * - SH: 4 cities
 *
 * @package WP_Ultimo\Country
 * @since 2.0.11
 */

namespace WP_Ultimo\Country;

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Country Class for China (CN).
 *
 * @since 2.0.11
 * @internal last-generated in 2022-08
 * @generated class generated by our build scripts, do not change!
 *
 * @property-read string $code
 * @property-read string $currency
 * @property-read int $phone_code
 */
class Country_CN extends Country {

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
		'country_code' => 'CN',
		'currency'     => 'CNY',
		'phone_code'   => 86,
	);

	/**
	 * The type of nomenclature used to refer to the country sub-divisions.
	 *
	 * @since 2.0.11
	 * @var string
	 */
	protected $state_type = 'province';

	/**
	 * Return the country name.
	 *
	 * @since 2.0.11
	 * @return string
	 */
	public function get_name() {

		return __('China', 'wp-ultimo');

	} // end get_name;

	/**
	 * Returns the list of states for CN.
	 *
	 * @since 2.0.11
	 * @return array The list of state/provinces for the country.
	 */
	protected function states() {

		return array(
			'AH' => __('Anhui', 'wp-ultimo'),
			'BJ' => __('Beijing', 'wp-ultimo'),
			'CQ' => __('Chongqing', 'wp-ultimo'),
			'FJ' => __('Fujian', 'wp-ultimo'),
			'GS' => __('Gansu', 'wp-ultimo'),
			'GD' => __('Guangdong', 'wp-ultimo'),
			'GX' => __('Guangxi Zhuang Autonomous Region', 'wp-ultimo'),
			'GZ' => __('Guizhou', 'wp-ultimo'),
			'HI' => __('Hainan', 'wp-ultimo'),
			'HE' => __('Hebei', 'wp-ultimo'),
			'HL' => __('Heilongjiang', 'wp-ultimo'),
			'HA' => __('Henan', 'wp-ultimo'),
			'HK' => __('Hong Kong', 'wp-ultimo'),
			'HB' => __('Hubei', 'wp-ultimo'),
			'HN' => __('Hunan', 'wp-ultimo'),
			'NM' => __('Inner Mongolia', 'wp-ultimo'),
			'JS' => __('Jiangsu', 'wp-ultimo'),
			'JX' => __('Jiangxi', 'wp-ultimo'),
			'JL' => __('Jilin', 'wp-ultimo'),
			'TW-KEE' => __('Keelung', 'wp-ultimo'),
			'LN' => __('Liaoning', 'wp-ultimo'),
			'MO' => __('Macau', 'wp-ultimo'),
			'NX' => __('Ningxia Hui Autonomous Region', 'wp-ultimo'),
			'QH' => __('Qinghai', 'wp-ultimo'),
			'SN' => __('Shaanxi', 'wp-ultimo'),
			'SD' => __('Shandong', 'wp-ultimo'),
			'SH' => __('Shanghai', 'wp-ultimo'),
			'SX' => __('Shanxi', 'wp-ultimo'),
			'SC' => __('Sichuan', 'wp-ultimo'),
			'TW' => __("Taiwan Province, People's Republic of China", 'wp-ultimo'),
			'XZ' => __('Tibet Autonomous Region', 'wp-ultimo'),
			'XJ' => __('Xinjiang', 'wp-ultimo'),
			'YN' => __('Yunnan', 'wp-ultimo'),
			'ZJ' => __('Zhejiang', 'wp-ultimo'),
		);

	} // end states;

} // end class Country_CN;
