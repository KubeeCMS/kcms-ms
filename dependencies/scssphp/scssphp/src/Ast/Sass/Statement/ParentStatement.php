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
namespace WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Ast\Sass\Statement;

use WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Ast\Sass\Import\DynamicImport;
use WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Ast\Sass\Statement;
/**
 * A {@see Statement} that can have child statements.
 *
 * This has a generic parameter so that its subclasses can choose whether or
 * not their children lists are nullable.
 *
 * @template T
 * @psalm-template T of (Statement[]|null)
 *
 * @internal
 */
abstract class ParentStatement implements Statement
{
    /**
     * @var T
     * @readonly
     */
    private $children;
    /**
     * @var bool
     * @readonly
     */
    private $declarations;
    /**
     * @param T $children
     */
    public function __construct(?array $children)
    {
        $this->children = $children;
        if ($children === null) {
            $this->declarations = \false;
            return;
        }
        foreach ($children as $child) {
            if ($child instanceof VariableDeclaration || $child instanceof FunctionRule || $child instanceof MixinRule) {
                $this->declarations = \true;
                return;
            }
            if ($child instanceof ImportRule) {
                foreach ($child->getImports() as $import) {
                    if ($import instanceof DynamicImport) {
                        $this->declarations = \true;
                        return;
                    }
                }
            }
        }
        $this->declarations = \false;
    }
    /**
     * @return T
     */
    public final function getChildren()
    {
        return $this->children;
    }
    public final function hasDeclarations() : bool
    {
        return $this->declarations;
    }
}
