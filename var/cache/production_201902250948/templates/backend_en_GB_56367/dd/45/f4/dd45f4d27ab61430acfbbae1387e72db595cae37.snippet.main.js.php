<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:04
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/benchmark/controller/main.js" */ ?>
<?php /*%%SmartyHeaderCode:139287985ca5f1c4a129d0-51218329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd45f4d27ab61430acfbbae1387e72db595cae37' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/benchmark/controller/main.js',
      1 => 1551080958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139287985ca5f1c4a129d0-51218329',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1c4a2f783_42676709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1c4a2f783_42676709')) {function content_5ca5f1c4a2f783_42676709($_smarty_tpl) {?>
//
Ext.define('Shopware.apps.Benchmark.controller.Main', {
    extend: 'Ext.app.Controller',

    refs: [
        { ref: 'settingsPanel', selector: 'form[name=benchmark-settings-panel]' }
    ],

    init: function () {
        var me = this,
            windowName = 'overview.Window',
            params = {};

        me.control({
            'benchmark-overview-window': {
                'beforeclose': me.onBeforeCloseOverviewWindow
            }
        });

        if (me.subApplication.params) {
            if (me.subApplication.params.isTeaser) {
                params = {
                    isTeaser: true,
                    height: 700
                };
            }

            if (me.subApplication.params.shopId) {
                params = {
                    shopId: me.subApplication.params.shopId
                };
            }
        }

        if (this.subApplication.action === 'Settings') {
            windowName = 'settings.Window';
            params = {};
        }

        me.mainWindow = me.getView(windowName).create(params).show();

        window.addEventListener('message', function (msg) {
            if (msg.data === 'closeWindow') {
                me.mainWindow.destroy();
            }
        }, false);

        me.callParent(arguments);
    },

    /**
     * @param { Ext.window.Window } win
     */
    onBeforeCloseOverviewWindow: function (win) {
        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'manage'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
        var el =  win.down('#disableBenchmarkTeaser');

        if (el && el.getValue()) {
            Ext.Ajax.request({
                url: '<?php echo '/bootcamp/shopware.php/backend/Benchmark/disableBenchmarkTeaser';?>'
            });
        }
        /*<?php }?>*/
    }
});
//
<?php }} ?>