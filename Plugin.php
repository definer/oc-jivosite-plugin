<?php namespace Definer\Jivosite;

use Backend;
use System\Classes\PluginBase;

/**
 * Jivosite Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails(): array
    {
        return [
            'name'        => 'definer.jivosite::lang.plugin.name',
            'description' => 'definer.jivosite::lang.plugin.description',
            'author'      => 'Definer',
            'icon'        => 'icon-comments'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents(): array
    {
        return [
            'Definer\Jivosite\Components\Jivosite' => 'jivoSite'
        ];
    }

    /**
     * @return array
     */
    public function registerSettings(): array
    {
        return [
            'config' => [
                'label' => 'definer.jivosite::lang.plugin.name',
                'icon' => 'icon-comments',
                'description' => 'definer.jivosite::lang.settings.jivosite_id.description',
                'class' => 'Definer\Jivosite\Models\Settings',
                'permissions' => ['definer.jivosite.settings'],
                'order' => 600
            ]
        ];
    }
}
