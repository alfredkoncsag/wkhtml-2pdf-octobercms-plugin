<?php namespace Nitmedia\Wkhtmltopdf;

use App;
use Illuminate\Foundation\AliasLoader;
use System\Classes\PluginBase;

/**
 * Wkhtmltopdf Plugin Information File
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
            'name'        => 'Wkhtmltopdf',
            'description' => 'No description provided yet...',
            'author'      => 'Nitmedia',
            'icon'        => 'icon-leaf'
        ];
    }

	public function boot() {
        // Register service providers
        App::register('\Nitmedia\Wkhtml2pdf\L5Wkhtml2pdfServiceProvider');
//        App::register('L5Wkhtml2pdfServiceProvider');

        // Register facades
        $facade = AliasLoader::getInstance();
        $facade->alias('PDF', '\Nitmedia\Wkhtml2pdf\Facades\Wkhtml2pdf');

    }

}
