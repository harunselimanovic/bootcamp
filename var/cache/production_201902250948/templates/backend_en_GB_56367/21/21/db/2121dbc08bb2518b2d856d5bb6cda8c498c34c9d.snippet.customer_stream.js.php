<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:04
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/customer/store/customer_stream.js" */ ?>
<?php /*%%SmartyHeaderCode:14287953065ca5f1c4c32fd3-41998667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2121dbc08bb2518b2d856d5bb6cda8c498c34c9d' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/customer/store/customer_stream.js',
      1 => 1551080958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14287953065ca5f1c4c32fd3-41998667',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1c4c3e657_05703124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1c4c3e657_05703124')) {function content_5ca5f1c4c3e657_05703124($_smarty_tpl) {?>/**
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
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

// 
// 
Ext.define('Shopware.apps.Customer.store.CustomerStream', {
    extend: 'Shopware.store.Listing',
    configure: function() {
        return {
            controller: 'CustomerStream'
        };
    },
    model: 'Shopware.apps.Customer.model.CustomerStream'
});
// 
<?php }} ?>