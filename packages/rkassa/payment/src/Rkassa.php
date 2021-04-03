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

class Rkassa{

    public static function getSing(array $params, string $secret){

        ksort($params);
        $str = http_build_query($params);
        return md5($str.$secret);
    }

    public static function checkPayment(array $params,string $secret){
        $key = $params['sign'];
        unset($params["sign"]);
        ksort($params);
        $sign = md5(http_build_query($params).$secret);
        if($sing === $key){
            return true;
        }else{
            return false;
        }
    }
    public static function sendData($params){
        $link = "https://".env('DOMAIN')."/?".http_build_query($params);
        return redirect($link);
    }

    public static function toPlug($data){
        return view('rkassa::form_plagin',compact('data'));
    }

}
