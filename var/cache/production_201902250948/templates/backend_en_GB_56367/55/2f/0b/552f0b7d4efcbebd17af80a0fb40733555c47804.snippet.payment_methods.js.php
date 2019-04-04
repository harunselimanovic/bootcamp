<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:04
         compiled from "/Applications/MAMP/htdocs/bootcamp/engine/Shopware/Plugins/Default/Core/PaymentMethods/Views/emotion/backend/order/payment_methods/view/detail/payment_methods.js" */ ?>
<?php /*%%SmartyHeaderCode:4731744385ca5f1c4e891d3-05627010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '552f0b7d4efcbebd17af80a0fb40733555c47804' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/engine/Shopware/Plugins/Default/Core/PaymentMethods/Views/emotion/backend/order/payment_methods/view/detail/payment_methods.js',
      1 => 1551080958,
      2 => 'file',
    ),
    '47375e0b9d7217971992c0869b7d84277e6dae80' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/engine/Shopware/Plugins/Default/Core/PaymentMethods/Views/emotion/backend/order/payment_methods/controller/detail.js',
      1 => 1551080958,
      2 => 'file',
    ),
    'cbf2bd83e50ee64b39a7708e318382d869381d00' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/order/model/batch.js',
      1 => 1551080958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4731744385ca5f1c4e891d3-05627010',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1c4eadd34_64615231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1c4eadd34_64615231')) {function content_5ca5f1c4eadd34_64615231($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    Order
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

//
Ext.define('Shopware.apps.Order.model.Batch', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Shopware.apps.Order.model.Order',

    /**
     * Add properties for the batch processing status
     * @array
     */
    fields: [
        //
        { name : 'success', type: 'bool', default: null },
        { name : 'errorMessage', type: 'string', useNull: true, default: null }
    ],
});
//

<?php }} ?>