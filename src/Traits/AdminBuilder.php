<?php

namespace Ibrhaim13\Admin\Traits;

use Ibrhaim13\Admin\Form;
use Ibrhaim13\Admin\Grid;
use Ibrhaim13\Admin\Tree;

/**
 * @deprecated
 */
trait AdminBuilder
{
    /**
     * @param \Closure $callback
     *
     * @return Grid
     */
    public static function grid(\Closure $callback)
    {
        return new Grid(new static(), $callback);
    }

    /**
     * @param \Closure $callback
     *
     * @return Form
     */
    public static function form(\Closure $callback)
    {
        return new Form(new static(), $callback);
    }

    /**
     * @param \Closure $callback
     *
     * @return Tree
     */
    public static function tree(\Closure $callback = null)
    {
        return new Tree(new static(), $callback);
    }
}
