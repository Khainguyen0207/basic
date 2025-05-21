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

        $view = 'admin-template.template-basic.pages.' . $view;

        return $factory->make($view, $data, $mergeData);
    }
}

if (! function_exists('admin_template_basic_theme')) {
    function admin_template_basic_theme(string $view): string
    {
        return 'admin-template.template-basic.' .$view;
    }
}

if (! function_exists('asset_admin_template_basic')) {
    /**
     * Generate an asset path for the application.
     *
     * @param string $path
     * @param bool|null $secure
     * @return string
     */
    function asset_admin_template_basic(string $path, bool $secure = null): string
    {
        $path = 'admin-template/template-basic/' .$path;
        return app('url')->asset($path, $secure);
    }
}
