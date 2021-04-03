<?php
/**
 * @subpackage Paymant plugin for Roskassa
 * @copyright 2005-2021  Syntlex Dev
 * @author  Syntlex Dev https://syntlex.info
 * @Product	: Paymant plugin for Roskassa
 * @Date	: 24 February 2021
 * @Contact	: cmsmodulsdever@gmail.com
 * @Licence	: GNU General Public License
 * This plugin is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License
 *  as published by the Free Software Foundation; either version 2 (GPLv2) of the License, or (at your option) any later version.
 *
 * This plugin is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 *  without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU General Public License for more details <http://www.gnu.org/licenses/>.
 *
 **/

namespace Rkassa\Payment;

use Illuminate\Support\ServiceProvider;

class RkassaServiceProvider extends ServiceProvider{

    public function boot(){
        $this->publishes([
            __DIR__.'/../config/rkassa.php' => config_path('rkassa.php'),
        ]);
        $this->loadViewsFrom(__DIR__.'/../resource/views', 'rkassa');
     }

    public function register(){

        $this->app->singleton(Rkassa::class);
    }
}
