<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 13:59:59
         compiled from "/Applications/MAMP/htdocs/bootcamp/engine/Library/ExtJs/components/Enlight.app.SubWindow.js" */ ?>
<?php /*%%SmartyHeaderCode:12452308395ca5f1bf2c4610-85371281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d7eda1b2b438c5dd5741a5f28d9a87e42ba96e8' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/engine/Library/ExtJs/components/Enlight.app.SubWindow.js',
      1 => 1551080956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12452308395ca5f1bf2c4610-85371281',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1bf2e68d6_74914161',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1bf2e68d6_74914161')) {function content_5ca5f1bf2e68d6_74914161($_smarty_tpl) {?>/**
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
 */

/**
 * Shopware UI - Window
 *
 * This class overrides the default Ext.window.Window object
 * to add our necessary functionality.
 *
 * The class renders the Ext.window.Window in the active
 * desktop, renders the header tools and sets the needed
 * event listeners.
 */
Ext.define('Enlight.app.SubWindow', {
    extend: 'Enlight.app.Window',
    alias: 'widget.subwindow',
    footerButton: false,
    isSubWindow: true
});
<?php }} ?>