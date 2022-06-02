<?php

namespace Ibrhaim13\Admin\Form\Field;

use Ibrhaim13\Admin\Form\Field;

class Nullable extends Field
{
    public function __construct()
    {
    }

    public function __call($method, $parameters)
    {
        return $this;
    }
}
