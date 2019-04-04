<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:04
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/benchmark/store/shop_configs.js" */ ?>
<?php /*%%SmartyHeaderCode:7145851165ca5f1c49ff434-07564961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d53f5d74a84d87756f08afcbf86ba0f828196c3' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/benchmark/store/shop_configs.js',
      1 => 1551080958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7145851165ca5f1c49ff434-07564961',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1c4a0b7c8_44788606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1c4a0b7c8_44788606')) {function content_5ca5f1c4a0b7c8_44788606($_smarty_tpl) {?>//
//
Ext.define('Shopware.apps.Benchmark.store.ShopConfigs', {
    extend: 'Ext.data.Store',
    autoLoad: false,
    model: 'Shopware.apps.Benchmark.model.ShopConfig',

    proxy: {
        type: 'ajax',
        url: '<?php echo '/bootcamp/shopware.php/backend/Benchmark/getShopConfigs';?>',
        reader: {
            type: 'json',
            root: 'data'
        }
    },
});
//
<?php }} ?>