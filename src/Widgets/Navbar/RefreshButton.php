<?php

namespace Ibrhaim13\Admin\Widgets\Navbar;

use Ibrhaim13\Admin\Admin;
use Illuminate\Contracts\Support\Renderable;

class RefreshButton implements Renderable
{
    public function render()
    {
        return Admin::component('admin::components.refresh-btn');
    }
}
