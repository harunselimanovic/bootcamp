<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:03
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/customer/model/batch.js" */ ?>
<?php /*%%SmartyHeaderCode:7344065955ca5f1c3b095d5-32703462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f20d79cdf818db627cf93359bf85eeef14199729' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/customer/model/batch.js',
      1 => 1551080958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7344065955ca5f1c3b095d5-32703462',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1c3b1b782_31860038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1c3b1b782_31860038')) {function content_5ca5f1c3b1b782_31860038($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

// 

/**
 * Shopware Model - Customer list backend module.
 *
 * The customer model of the customer module represent a data row of the s_user or the
 * Shopware\Models\Customer\Customer doctrine model, with some additional data for the additional information panel.
 */
// 
Ext.define('Shopware.apps.Customer.model.Batch', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',
    /**
     * Contains the model fields
     * @array
     */
    fields: [
        // 
        { name: 'id', type: 'int' }
    ],

    /**
     * Define the associations of the customer model.
     * One customer has a billing, shipping address and a debit information.
     * @array
     */
    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Base.model.OrderStatus', name: 'getOrderStatus', associationKey: 'orderStatus' },
        { type: 'hasMany', model: 'Shopware.apps.Base.model.PaymentStatus', name: 'getPaymentStatus', associationKey: 'paymentStatus' },
        { type: 'hasMany', model: 'Shopware.apps.Base.model.Payment', name: 'getPayment', associationKey: 'payment' },
        { type: 'hasMany', model: 'Shopware.apps.Base.model.Dispatch', name: 'getDispatch', associationKey: 'dispatch' },
        { type: 'hasMany', model: 'Shopware.apps.Base.model.Shop', name: 'getShop', associationKey: 'shop' },
        { type: 'hasMany', model: 'Shopware.apps.Base.model.Country', name: 'getCountry', associationKey: 'country' },
        { type: 'hasMany', model: 'Shopware.apps.Base.model.CustomerGroup', name: 'getCustomerGroup', associationKey: 'customerGroup' }
    ]

});
// 
<?php }} ?>