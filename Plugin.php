<?php namespace Albrightlabs\FieldMasking;

use Event;
use Backend;
use System\Classes\PluginBase;

/**
 * FieldMasking Plugin Information File
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
            'name'        => 'Field Masking',
            'description' => 'Adds the ability to mask form fields simply by adding a CSS class to the field config.',
            'author'      => 'Albright Labs LLC',
            'icon'        => 'icon-user-secret',
            'icon-svg'    => '/plugins/albrightlabs/fieldmasking/assets/images/plugin-icon.svg',
            'homepage'    => 'https://albrightlabs.com/',
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
     * @return void
     */
    public function boot()
    {
        /**
         * Adds field masking plugin and mask js
         */
        Event::listen('backend.page.beforeDisplay', function($controller, $action, $params){
            $controller->addJs('/plugins/albrightlabs/fieldmasking/vendor/igorescobar/jquery-mask-plugin/dist/jquery.mask.min.js');
            $controller->addJs('/plugins/albrightlabs/fieldmasking/assets/js/mask.js');
        });
    }
}
