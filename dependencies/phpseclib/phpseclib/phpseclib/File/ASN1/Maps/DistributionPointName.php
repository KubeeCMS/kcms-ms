<?php

/**
 * DistributionPointName
 *
 * PHP version 5
 *
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2016 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */
declare (strict_types=1);
namespace phpseclib3\File\ASN1\Maps;

use phpseclib3\File\ASN1;
/**
 * DistributionPointName
 *
 * @author  Jim Wigginton <terrafrost@php.net>
 */
abstract class DistributionPointName
{
    public const MAP = ['type' => ASN1::TYPE_CHOICE, 'children' => ['fullName' => ['constant' => 0, 'optional' => \true, 'implicit' => \true] + \phpseclib3\File\ASN1\Maps\GeneralNames::MAP, 'nameRelativeToCRLIssuer' => ['constant' => 1, 'optional' => \true, 'implicit' => \true] + \phpseclib3\File\ASN1\Maps\RelativeDistinguishedName::MAP]];
}
