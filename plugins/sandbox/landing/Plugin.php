<?php namespace Sandbox\Landing;

use Backend;
use System\Classes\PluginBase;

/**
 * landing Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'landing',
            'description' => 'No description provided yet...',
            'author' => 'sandbox',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Sandbox\Landing\Components\Page' => 'Page'
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'sandbox.landing.some_permission' => [
                'tab' => 'landing',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'landing' => [
                'label' => 'landing',
                'url' => Backend::url('sandbox/landing/pages'),
                'icon' => 'icon-leaf',
                'permissions' => ['sandbox.landing.*'],
                'order' => 500,
            ],
        ];
    }
}
