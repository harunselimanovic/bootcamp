<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 13:59:59
         compiled from "/Applications/MAMP/htdocs/bootcamp/engine/Library/ExtJs/overrides/Ext.form.field.Display.js" */ ?>
<?php /*%%SmartyHeaderCode:17387404745ca5f1bf723bd1-40846918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39a9e19d943bf84bcce9067bf2ced48cbfdb3689' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/engine/Library/ExtJs/overrides/Ext.form.field.Display.js',
      1 => 1551080956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17387404745ca5f1bf723bd1-40846918',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1bf729d48_23616565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1bf729d48_23616565')) {function content_5ca5f1bf729d48_23616565($_smarty_tpl) {?>/**
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
Ext.override(Ext.form.field.Display, {
    /**
     * Property which enables the unescaped output of html content
     * @default false
     * @boolean
     */
    allowHtml: false,

    /**
     * @inheritDoc
     */
    getDisplayValue: function() {
        var me = this,
            value = me.callParent(arguments);

        if (me.allowHtml !== true && typeof value === 'string') {
            value = Ext.String.getText(value);
        }

        return value;
    }
});
<?php }} ?>