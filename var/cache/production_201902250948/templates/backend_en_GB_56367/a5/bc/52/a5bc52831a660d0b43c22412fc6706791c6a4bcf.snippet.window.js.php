<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:04
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/benchmark/view/overview/window.js" */ ?>
<?php /*%%SmartyHeaderCode:4263311325ca5f1c481f386-81471021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5bc52831a660d0b43c22412fc6706791c6a4bcf' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/benchmark/view/overview/window.js',
      1 => 1551080958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4263311325ca5f1c481f386-81471021',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1c4857c49_95131612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1c4857c49_95131612')) {function content_5ca5f1c4857c49_95131612($_smarty_tpl) {?>
//
//
Ext.define('Shopware.apps.Benchmark.view.overview.Window', {
    extend: 'Enlight.app.Window',
    layout: 'fit',
    width: 1050,
    height: 670,

    alias: 'widget.benchmark-overview-window',

    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'overview/title','default'=>'Benchmark Overview','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'overview/title','default'=>'Benchmark Overview','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopware BI Overview<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'overview/title','default'=>'Benchmark Overview','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    initComponent: function () {
        var me = this;

        me.items = me.getItems();

        if (me.isTeaser) {
            me.checkbox = Ext.create('Ext.form.field.Checkbox', {
                padding: '0 0 0 5px',
                itemId: 'disableBenchmarkTeaser',
                width: 150,
                boxLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'do_not_show_again','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'do_not_show_again','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Do not show again<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'do_not_show_again','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            });

            me.dockedItems = [{
                xtype: 'toolbar',
                dock: 'bottom',
                items:[me.checkbox, '->', me.cancelButton]
            }];
        }

        me.callParent(arguments);
    },

    /**
     * @returns { Ext.container.Container[] }
     */
    getItems: function () {
        var url = '<?php echo '/bootcamp/shopware.php/backend/BenchmarkOverview';?>';

        if (this.shopId) {
            url = '<?php echo '/bootcamp/shopware.php/backend/BenchmarkOverview/index/shopId/replaceShopId';?>';
            url = url.replace('replaceShopId', this.shopId);
        }

        return [
            Ext.create('Ext.container.Container', {
                html: '<iframe src="' + url + '" width="100%" height="100%"></iframe>'
            })
        ];
    }
});
//
<?php }} ?>