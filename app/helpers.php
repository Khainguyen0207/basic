<?php

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View;

if (! function_exists('admin_template_basic_view')) {
    /**
     * Get the evaluated view contents for the given view.
     *
     * @param string|null $view
     * @param array|Arrayable $data
     * @param array $mergeData
     * @return ($view is null ? ViewFactory : View)
     */
    function admin_template_basic_view(string $view = null, array|Arrayable $data = [], array $mergeData = []): View|ViewFactory
    {
        $factory = app(ViewFactory::class);

        if (func_num_args() === 0) {
            return $factory;
        }

        $view = 'admin-template.template-basic.' . $view;

        return $factory->make($view, $data, $mergeData);
    }
}
