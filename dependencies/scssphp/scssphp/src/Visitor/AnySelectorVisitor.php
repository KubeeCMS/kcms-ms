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
namespace WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Visitor;

use WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Ast\Selector\AttributeSelector;
use WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Ast\Selector\ClassSelector;
use WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Ast\Selector\ComplexSelector;
use WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Ast\Selector\CompoundSelector;
use WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Ast\Selector\IDSelector;
use WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Ast\Selector\ParentSelector;
use WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Ast\Selector\PlaceholderSelector;
use WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Ast\Selector\PseudoSelector;
use WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Ast\Selector\SelectorList;
use WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Ast\Selector\TypeSelector;
use WP_Ultimo\Dependencies\ScssPhp\ScssPhp\Ast\Selector\UniversalSelector;
/**
 * A visitor that visits each selector in a Sass selector AST and returns
 * `true` if any of the individual methods return `true`.
 *
 * Each method returns `false` by default.
 *
 * @template-implements SelectorVisitor<bool>
 * @internal
 */
abstract class AnySelectorVisitor implements SelectorVisitor
{
    public function visitComplexSelector(ComplexSelector $complex) : bool
    {
        foreach ($complex->getComponents() as $component) {
            if ($this->visitCompoundSelector($component->getSelector())) {
                return \true;
            }
        }
        return \false;
    }
    public function visitCompoundSelector(CompoundSelector $compound) : bool
    {
        foreach ($compound->getComponents() as $simple) {
            if ($simple->accept($this)) {
                return \true;
            }
        }
        return \false;
    }
    public function visitPseudoSelector(PseudoSelector $pseudo) : bool
    {
        $selector = $pseudo->getSelector();
        return $selector === null ? \false : $selector->accept($this);
    }
    public function visitSelectorList(SelectorList $list) : bool
    {
        foreach ($list->getComponents() as $complex) {
            if ($this->visitComplexSelector($complex)) {
                return \true;
            }
        }
        return \false;
    }
    public function visitAttributeSelector(AttributeSelector $attribute) : bool
    {
        return \false;
    }
    public function visitClassSelector(ClassSelector $klass) : bool
    {
        return \false;
    }
    public function visitIDSelector(IDSelector $id) : bool
    {
        return \false;
    }
    public function visitParentSelector(ParentSelector $parent) : bool
    {
        return \false;
    }
    public function visitPlaceholderSelector(PlaceholderSelector $placeholder) : bool
    {
        return \false;
    }
    public function visitTypeSelector(TypeSelector $type) : bool
    {
        return \false;
    }
    public function visitUniversalSelector(UniversalSelector $universal) : bool
    {
        return \false;
    }
}
