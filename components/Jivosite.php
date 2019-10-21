<?php namespace Definer\Jivosite\Components;

use Lang;
use Cms\Classes\ComponentBase;
use Definer\Jivosite\Models\Settings;

/**
 * Class Jivosite
 * @package Definer\Jivosite\Components
 */
class Jivosite extends ComponentBase
{
    /**
     * @return array
     */
    public function componentDetails(): array
    {
        return [
            'name' => 'definer.jivosite::lang.components.jivosite.name',
            'description' => 'definer.jivosite::lang.components.jivosite.description'
        ];
    }

    /**
     * @return array
     */
    public function defineProperties(): array
    {
        return [
            'jivosite_id' => [
                'title' => Lang::get('definer.jivosite::lang.components.jivosite.jivosite_id'),
                'description' => Lang::get('definer.jivosite::lang.components.jivosite.jivosite_id_desc'),
                'default' => '',
                'type' => 'string'
            ]
        ];
    }

    /**
     * @return string
     */
    public function jivositeId(): string
    {
        return $this->property('jivosite_id') ?: Settings::get('jivosite_id');
    }
}
