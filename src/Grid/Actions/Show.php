<?php

namespace Ibrhaim13\Admin\Grid\Actions;

use Ibrhaim13\Admin\Actions\RowAction;

class Show extends RowAction
{
    /**
     * @return array|null|string
     */
    public function name()
    {
        return __('admin.show');
    }

    /**
     * @return string
     */
    public function href()
    {
        return "{$this->getResource()}/{$this->getKey()}";
    }
}
