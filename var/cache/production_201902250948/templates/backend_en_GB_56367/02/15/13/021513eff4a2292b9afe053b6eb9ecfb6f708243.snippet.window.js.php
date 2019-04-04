<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:04
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/benchmark/view/settings/window.js" */ ?>
<?php /*%%SmartyHeaderCode:17303558885ca5f1c485f227-81710822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '021513eff4a2292b9afe053b6eb9ecfb6f708243' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/benchmark/view/settings/window.js',
      1 => 1551080958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17303558885ca5f1c485f227-81710822',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1c48e0056_85019656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1c48e0056_85019656')) {function content_5ca5f1c48e0056_85019656($_smarty_tpl) {?>
//
//
Ext.define('Shopware.apps.Benchmark.view.settings.Window', {
    extend: 'Enlight.app.Window',
    alias: 'widget.benchmark-settings-window',
    height: 450,
    width: 440,
    layout: {
        type: 'vbox',
        pack: 'start',
        align: 'stretch'
    },

    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/title','default'=>'Shopware BI Settings','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/title','default'=>'Shopware BI Settings','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopware BI Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/title','default'=>'Shopware BI Settings','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    initComponent: function () {
        this.items = this.createItems();

        this.callParent(arguments);
    },

    loadRecord: function (record) {
        this.down('form[name=benchmark-settings-panel]').loadRecord(record);
    },

    /**
     * @returns { Ext.form.Panel[] }
     */
    createItems: function () {
        var me = this,
            shopFieldSet = this.createShopFieldSet();

        return [
            Ext.create('Ext.form.Panel', {
                flex: 1,
                name: 'benchmark-settings-panel',
                bodyPadding: 10,
                items: [
                    shopFieldSet,
                    this.createIndustryFieldSet(),
                    /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'manage'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
                    this.createBusinessPlanFieldSet()
                    /*<?php }?>*/
                ],

                /**
                 * @param { Object } settingsData
                 */
                loadSettingsRecord: function (settingsData) {
                    var active = settingsData.data.active;

                    me.deActivationContainer[~~(active) === 1 ? 'show' : 'hide']();
                    me.activationContainer[~~(active) === 0 ? 'show' : 'hide']();

                    this.loadRecord(settingsData);
                }
            })];
    },

    /**
     * @returns { Ext.form.FieldSet }
     */
    createShopFieldSet: function () {
        this.activationContainer = this.createActivationContainer();
        this.deActivationContainer = this.createDeactivationContainer();

        return Ext.create('Ext.form.FieldSet', {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/fieldsets/shop/title','default'=>'Shop selection','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/shop/title','default'=>'Shop selection','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shop selection<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/shop/title','default'=>'Shop selection','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            name: 'shopFieldSet',
            items: [
                this.createShopSelection(),
                this.activationContainer,
                this.deActivationContainer
            ]
        });
    },

    /**
     * @returns { Ext.form.field.ComboBox }
     */
    createShopSelection: function () {
        var me = this;

        me.comboBox = Ext.create('Ext.form.field.ComboBox', {
            anchor: '100%',
            name: 'shopSelection',
            displayField: 'shopName',
            valueField: 'shopId',
            editable: false,
            store: Ext.create('Shopware.apps.Benchmark.store.ShopConfigs').load(function () {
                me.fireEvent('shopConfigLoaded', this, me.comboBox);
            }),
            fieldLabel: 'Shop',
            listeners: {
                select: function (combo, records) {
                    me.fireEvent('configSelected', me, combo, records[0]);
                }
            }
        });

        return me.comboBox;
    },

    /**
     * @returns { Ext.container.Container }
     */
    createActivationContainer: function () {
        var me = this;

        return Ext.create('Ext.container.Container', {
            layout: 'hbox',
            name: 'activationContainer',
            style: {
                margin: '20px 0'
            },
            hidden: true,
            items: [
                /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'manage'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>*/
                {
                    xtype: 'container',
                    html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/fieldsets/shop/activation_text','default'=>'I would like to participate.','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/shop/activation_text','default'=>'I would like to participate.','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
I would like to participate.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/shop/activation_text','default'=>'I would like to participate.','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    style: {
                        fontWeight: 'bold',
                        fontSize: '11px',
                        color: '#475c6a'
                    },
                    flex: 1
                },
                {
                    xtype: 'button',
                    text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/fieldsets/shop/activation_button','default'=>'Participate now','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/shop/activation_button','default'=>'Participate now','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Participate now<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/shop/activation_button','default'=>'Participate now','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    cls: 'primary',
                    flex: 1,
                    handler: function () {
                        me.fireEvent('activateBenchmark');
                    }
                }
                /*<?php }?>*/
            ]
        });
    },

    /**
     * @returns { Ext.form.FieldSet }
     */
    createDeactivationContainer: function () {
        var me = this;

        return Ext.create('Ext.container.Container', {
            layout: 'hbox',
            name: 'deActivationContainer',
            style: {
                margin: '20px 0'
            },
            hidden: true,
            items: [
                /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'manage'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?>*/
                {
                    xtype: 'container',
                    html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/fieldsets/shop/deactivation_text','default'=>'I want to stop the service.','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/shop/deactivation_text','default'=>'I want to stop the service.','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
I want to stop the service.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/shop/deactivation_text','default'=>'I want to stop the service.','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    style: {
                        fontWeight: 'bold',
                        fontSize: '11px',
                        color: '#475c6a'
                    },
                    flex: 1
                }, {
                    xtype: 'button',
                    text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/fieldsets/shop/deactivation_button','default'=>'Stop the service','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/shop/deactivation_button','default'=>'Stop the service','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Stop the service<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/shop/deactivation_button','default'=>'Stop the service','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    cls: 'primary',
                    flex: 1,
                    handler: function () {
                        me.fireEvent('deactivateBenchmark');
                    }
                }
                /*<?php }?>*/
            ]
        });
    },

    /**
     * @returns { Ext.form.FieldSet }
     */
    createIndustryFieldSet: function () {
        return Ext.create('Ext.form.FieldSet', {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/fieldsets/industry/title','default'=>'Industry','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/industry/title','default'=>'Industry','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Industry<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/industry/title','default'=>'Industry','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            name: 'industryFieldSet',
            items: [{
                xtype: 'industryfield',
                name: 'industry',
                fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/industry_window/label','default'=>'Choose industry','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/industry_window/label','default'=>'Choose industry','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Choose industry<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/industry_window/label','default'=>'Choose industry','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                labelWidth: 200,
                store: Ext.create('Shopware.apps.Benchmark.store.Industry')
            }]
        });
    },

    /**
     * @returns { Ext.form.FieldSet }
     */
    createBusinessPlanFieldSet: function () {
        var me = this,
            b2bText = '<b><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/fieldsets/business_plan/b2bText','default'=>'Business to Business','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/business_plan/b2bText','default'=>'Business to Business','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Business to Business<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/business_plan/b2bText','default'=>'Business to Business','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 (<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/fieldsets/business_plan/b2bShortText','default'=>'B2B','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/business_plan/b2bShortText','default'=>'B2B','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
B2B<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/business_plan/b2bShortText','default'=>'B2B','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
)</b>',
            b2cText = '<b><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/fieldsets/business_plan/b2cText','default'=>'Business to Consumer','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/business_plan/b2cText','default'=>'Business to Consumer','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Business to Consumer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/business_plan/b2cText','default'=>'Business to Consumer','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 (<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/fieldsets/business_plan/b2cShortText','default'=>'(B2C)','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/business_plan/b2cShortText','default'=>'(B2C)','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
B2C<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/business_plan/b2cShortText','default'=>'(B2C)','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
)</b>';

        return Ext.create('Ext.form.FieldSet', {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/fieldsets/business_plan/title','default'=>'Business plan','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/business_plan/title','default'=>'Business plan','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Business plan<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/business_plan/title','default'=>'Business plan','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            name: 'typeFieldSet',
            items: [
                Ext.create('Ext.form.RadioGroup', {
                    columns: 1,
                    name: 'typeRadios',
                    items: [
                        {
                            name: 'type',
                            inputValue: 'b2c',
                            boxLabel: b2cText
                        },
                        {
                            name: 'type',
                            inputValue: 'b2b',
                            boxLabel: b2bText
                        },
                    ]
                }),
                /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'manage'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4){?>*/
                {
                    xtype: 'button',
                    text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings/fieldsets/business_plan/save_button','default'=>'Save','namespace'=>'backend/benchmark/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/business_plan/save_button','default'=>'Save','namespace'=>'backend/benchmark/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings/fieldsets/business_plan/save_button','default'=>'Save','namespace'=>'backend/benchmark/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    cls: 'primary',
                    style: {
                        float: 'right'
                    },
                    handler: function () {
                        me.fireEvent('saveType');
                    }
                }
                /* <?php }?>*/
            ]
        });
    }
});
//
<?php }} ?>