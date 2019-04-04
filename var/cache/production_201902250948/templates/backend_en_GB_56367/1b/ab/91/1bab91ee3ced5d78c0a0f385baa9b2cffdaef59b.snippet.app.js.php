<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:03
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/product_stream/app.js" */ ?>
<?php /*%%SmartyHeaderCode:18273078445ca5f1c37017e6-06444063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bab91ee3ced5d78c0a0f385baa9b2cffdaef59b' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/product_stream/app.js',
      1 => 1551080958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18273078445ca5f1c37017e6-06444063',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1c3715e18_32923952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1c3715e18_32923952')) {function content_5ca5f1c3715e18_32923952($_smarty_tpl) {?>/**
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
 * @package    ProductStream
 * @version    $Id$
 * @author shopware AG
 */
//
Ext.define('Shopware.apps.ProductStream', {
    extend: 'Enlight.app.SubApplication',

    name:'Shopware.apps.ProductStream',

    loadPath: '<?php echo '/bootcamp/shopware.php/backend/ProductStream/load';?>',
    bulkLoad: true,

    controllers: [ 'Main' ],

    views: [
        'SearchGrid',

        'list.Window',
        'list.List',

        'common.Settings',
        'common.Attributes',

        'condition_list.Window',
        'condition_list.ConditionPanel',
        'condition_list.PreviewGrid',

        'condition_list.condition.AbstractCondition',
        'condition_list.condition.Price',
        'condition_list.condition.Manufacturer',
        'condition_list.condition.Attribute',
        'condition_list.condition.Property',
        'condition_list.condition.Category',
        'condition_list.condition.ReleaseDate',
        'condition_list.condition.CreateDate',
        'condition_list.condition.HasPseudoPrice',
        'condition_list.condition.IsNew',
        'condition_list.condition.ImmediateDelivery',
        'condition_list.condition.VoteAverage',
        'condition_list.condition.Sales',
        'condition_list.condition.SearchTerm',
        'condition_list.condition.Closeout',

        'condition_list.field.Grid',
        'condition_list.field.Range',
        'condition_list.field.Attribute',
        'condition_list.field.Property',
        'condition_list.field.PropertyWindow',
        'condition_list.field.ReleaseDate',
        'condition_list.field.CreateDate',
        'condition_list.field.AttributeWindow',
        'condition_list.field.VoteAverage',
        'condition_list.field.Sales',
        'condition_list.field.SearchTerm',
        'condition_list.condition.Height',
        'condition_list.condition.Width',
        'condition_list.condition.Length',
        'condition_list.condition.Weight',
        
        'selected_list.Window',
        'selected_list.Product'
    ],

    models: [ 'Stream', 'Product' ],
    stores: [ 'Stream', 'Preview', 'Attribute' ],

    launch: function() {
        return this.getController('Main').mainWindow;
    }
});
//<?php }} ?>