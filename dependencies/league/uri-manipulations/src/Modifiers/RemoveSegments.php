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
declare (strict_types=1);
namespace WP_Ultimo\Dependencies\League\Uri\Modifiers;

/**
 * Remove segments from the URI path
 *
 * @package    League\Uri
 * @subpackage League\Uri\Modifiers
 * @author     Ignace Nyamagana Butera <nyamsprod@gmail.com>
 * @since      1.0.0
 */
class RemoveSegments implements UriMiddlewareInterface
{
    use PathMiddlewareTrait;
    use UriMiddlewareTrait;
    /**
     * The list of keys to remove
     *
     * @var array
     */
    protected $keys;
    /**
     * New instance
     *
     * @param int[] $keys
     */
    public function __construct(array $keys)
    {
        $this->keys = $this->filterInt($keys);
    }
    /**
     * Modify a URI part
     *
     * @param string $str the URI part string representation
     *
     * @return string the modified URI part string representation
     */
    protected function modifyPath(string $str) : string
    {
        return (string) $this->filterSegment($str)->withoutSegments($this->keys);
    }
}
