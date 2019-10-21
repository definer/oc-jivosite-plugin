<?php namespace Definer\Jivosite\Models;

use October\Rain\Database\Model;

/**
 * Class Settings
 * @package Definer\Jivosite\Models
 */
class Settings extends Model
{
    /**
     * @var array
     */
    public $implement = ['System.Behaviors.SettingsModel'];
    
    /**
     * @var string
     */
    public $settingsCode = 'definer_jivosite_settings';

    /**
     * @var string
     */
    public $settingsFields = 'fields.yaml';
}