<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:03
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/order/model/shipping.js" */ ?>
<?php /*%%SmartyHeaderCode:11971131375ca5f1c39ed897-76819255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3923d4605f1b6fb0ed4f3dbd174f98abaa12e8f5' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/order/model/shipping.js',
      1 => 1551080958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11971131375ca5f1c39ed897-76819255',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1c39fb4b8_10052437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1c39fb4b8_10052437')) {function content_5ca5f1c39fb4b8_10052437($_smarty_tpl) {?>/**
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

/**
 * Shopware Model - Order list backend module.
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Order.model.Shipping', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.apps.Base.model.Address',

    /**
     * One or more BelongsTo associations for this model.
     * @string
     */
    belongsTo: 'Shopware.apps.Order.model.Order',

    /**
     * Extends the models fields with the order id field.
     * @array
     */
    fields: [
        //
        { name: 'orderId', type: 'int' },
        { name: 'stateId', type: 'int', useNull: true },
        { name: 'phone', type: 'string' }
    ]

});
//

<?php }} ?>