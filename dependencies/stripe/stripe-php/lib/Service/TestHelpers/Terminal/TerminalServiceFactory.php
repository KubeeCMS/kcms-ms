<?php

// File generated from our OpenAPI spec
namespace WP_Ultimo\Dependencies\Stripe\Service\TestHelpers\Terminal;

/**
 * Service factory class for API resources in the Terminal namespace.
 *
 * @property ReaderService $readers
 */
class TerminalServiceFactory extends \WP_Ultimo\Dependencies\Stripe\Service\AbstractServiceFactory
{
    /**
     * @var array<string, string>
     */
    private static $classMap = ['readers' => ReaderService::class];
    protected function getServiceClass($name)
    {
        return \array_key_exists($name, self::$classMap) ? self::$classMap[$name] : null;
    }
}