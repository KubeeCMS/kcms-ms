<?php

/**
 * SignedPublicKeyAndChallenge
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
 * SignedPublicKeyAndChallenge
 *
 * @author  Jim Wigginton <terrafrost@php.net>
 */
abstract class SignedPublicKeyAndChallenge
{
    public const MAP = ['type' => ASN1::TYPE_SEQUENCE, 'children' => ['publicKeyAndChallenge' => \phpseclib3\File\ASN1\Maps\PublicKeyAndChallenge::MAP, 'signatureAlgorithm' => \phpseclib3\File\ASN1\Maps\AlgorithmIdentifier::MAP, 'signature' => ['type' => ASN1::TYPE_BIT_STRING]]];
}
