<?php

/**
 * SCSSPHP
 *
 * @copyright 2012-2020 Leaf Corcoran
 *
 * @license http://opensource.org/licenses/MIT MIT
 *
 * @link http://scssphp.github.io/scssphp
 */
namespace WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Ast\Sass\Expression;

use WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Ast\Sass\ArgumentDeclaration;
use WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Ast\Sass\ArgumentInvocation;
use WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Ast\Sass\CallableInvocation;
use WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Ast\Sass\Expression;
use WP_Ultimo\Dependencies\ScssPhp\ScssPhp\SourceSpan\FileSpan;
use WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Visitor\ExpressionVisitor;
/**
 * A ternary expression.
 *
 * This is defined as a separate syntactic construct rather than a normal
 * function because only one of the `$if-true` and `$if-false` arguments are
 * evaluated.
 *
 * @internal
 */
final class IfExpression implements Expression, CallableInvocation
{
    /**
     * The arguments passed to `if()`.
     *
     * @var ArgumentInvocation
     * @readonly
     */
    private $arguments;
    /**
     * @var FileSpan
     * @readonly
     */
    private $span;
    /**
     * @var ArgumentDeclaration|null
     */
    private static $declaration;
    public function __construct(ArgumentInvocation $arguments, FileSpan $span)
    {
        $this->span = $span;
        $this->arguments = $arguments;
    }
    /**
     * The declaration of `if()`, as though it were a normal function.
     */
    public static function getDeclaration() : ArgumentDeclaration
    {
        if (self::$declaration === null) {
            self::$declaration = ArgumentDeclaration::parse('@function if($condition, $if-true, $if-false) {');
        }
        return self::$declaration;
    }
    public function getArguments() : ArgumentInvocation
    {
        return $this->arguments;
    }
    public function getSpan() : FileSpan
    {
        return $this->span;
    }
    public function accept(ExpressionVisitor $visitor)
    {
        return $visitor->visitIfExpression($this);
    }
    public function __toString() : string
    {
        return 'if' . $this->arguments;
    }
}
