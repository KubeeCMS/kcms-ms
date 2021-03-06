<?php

/**
 * League.Uri (http://uri.thephpleague.com)
 *
 * @package    League\Uri
 * @subpackage League\Uri\Modifiers
 * @author     Ignace Nyamagana Butera <nyamsprod@gmail.com>
 * @copyright  2016 Ignace Nyamagana Butera
 * @license    https://github.com/thephpleague/uri-manipulations/blob/master/LICENSE (MIT License)
 * @version    1.5.0
 * @link       https://github.com/thephpleague/uri-manipulations
 */
namespace WP_Ultimo\Dependencies\League\Uri\Modifiers;

use WP_Ultimo\Dependencies\League\Uri\Interfaces\Uri as DeprecatedLeagueUriInterface;
use WP_Ultimo\Dependencies\League\Uri\UriInterface;
use Psr\Http\Message\UriInterface as Psr7UriInterface;
/**
 * URI Middleware Interface
 *
 * @package    League\Uri
 * @subpackage League\Uri\Modifiers
 * @author     Ignace Nyamagana Butera <nyamsprod@gmail.com>
 * @since      1.0.0
 */
interface UriMiddlewareInterface
{
    /**
     * Process and return an Uri
     *
     * This method MUST retain the state of the submitted URI instance, and return
     * an URI instance of the same type containing the applied modifications.
     *
     * This method MUST be transparent when dealing with error and exceptions.
     * It MUST not alter of silence them apart from validating its own parameters.
     *
     * @param DeprecatedLeagueUriInterface|Psr7UriInterface|UriInterface $uri
     *
     * @throws Exception If the submitted URI is invalid
     *
     * @return DeprecatedLeagueUriInterface|Psr7UriInterface|UriInterface
     */
    public function process($uri);
}
