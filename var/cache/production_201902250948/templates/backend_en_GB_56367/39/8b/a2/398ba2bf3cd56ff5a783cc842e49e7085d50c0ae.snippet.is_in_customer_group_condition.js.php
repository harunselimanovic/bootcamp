<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:04
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/customer/view/customer_stream/conditions/is_in_customer_group_condition.js" */ ?>
<?php /*%%SmartyHeaderCode:8905463255ca5f1c484d816-21940826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '398ba2bf3cd56ff5a783cc842e49e7085d50c0ae' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/customer/view/customer_stream/conditions/is_in_customer_group_condition.js',
      1 => 1551080958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8905463255ca5f1c484d816-21940826',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1c4860d45_07772939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1c4860d45_07772939')) {function content_5ca5f1c4860d45_07772939($_smarty_tpl) {?>/**
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
 * @subpackage CustomerStream
 * @version    $Id$
 * @author shopware AG
 */

// 
// 
Ext.define('Shopware.apps.Customer.view.customer_stream.conditions.IsInCustomerGroupCondition', {

    getLabel: function() {
        return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'is_in_customer_group_condition','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'is_in_customer_group_condition','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Is in customer group<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'is_in_customer_group_condition','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
    },

    supports: function(conditionClass) {
        return (conditionClass == 'Shopware\\Bundle\\CustomerSearchBundle\\Condition\\IsInCustomerGroupCondition');
    },

    create: function(callback) {
        callback(this._create());
    },

    load: function(conditionClass, items, callback) {
        callback(this._create());
    },

    _create: function() {
        var factory = Ext.create('Shopware.attribute.SelectionFactory');

        return {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'is_in_customer_group_condition_selection','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'is_in_customer_group_condition_selection','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Assigned to one of the following customer groups<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'is_in_customer_group_condition_selection','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            conditionClass: 'Shopware\\Bundle\\CustomerSearchBundle\\Condition\\IsInCustomerGroupCondition',
            items: [{
                xtype: 'shopware-form-field-grid',
                name: 'ids',
                flex: 1,
                allowSorting: false,
                useSeparator: false,
                allowBlank: false,
                store: factory.createEntitySearchStore('Shopware\\Models\\Customer\\Group'),
                searchStore: factory.createEntitySearchStore('Shopware\\Models\\Customer\\Group')
            }]
        };
    }
});
// 
<?php }} ?>