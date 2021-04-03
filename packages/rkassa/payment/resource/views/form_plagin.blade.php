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

?>    <div class="col-5  mx-auto pt-5 mt-5">
    <form method="post" id="submit" action="https://pay.roskassa.net/form/">
      <input type="hidden" name="_method" value="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="shop_id" value="{{$data['shop_id']}}">
      <input type="hidden" name="order_id" value="{{$data['order_id']}}">
      <input type="hidden" name="amount" value="{{$data['amount']}}">
      <input type="hidden" name="currency" value="{{$data['currency']}}">
      <input type="hidden" name="sign" value="{{$data['sign']}}">
      <input type="hidden" name="payment_system" value="{{$data['payment_system']}}">
      <input type="hidden" name="fields[email]" value="{{$data['email']}}">
      <p>Вы будете переноправлены через несколько секунд ...</p>
      <p class="align-items-center">Чтобы не жать нажмите на кнопку <button type="submit" class="btn btn-primary mt-2 md-2">Оплатить</button></p>
    </form>
    </div>
    <script>
      const form  = document.getElementById('submit');
      console.log(form);
      function getpay(){
        form.submit();
      }
      setTimeout(getpay,3000);
    </script>
