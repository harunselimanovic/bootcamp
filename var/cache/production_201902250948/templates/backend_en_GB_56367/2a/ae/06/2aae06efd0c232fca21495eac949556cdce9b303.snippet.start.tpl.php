<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:05
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/benchmark/template/local/start.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6779132345ca5f1c56fb724-46352075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aae06efd0c232fca21495eac949556cdce9b303' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/benchmark/template/local/start.tpl',
      1 => 1551080958,
      2 => 'file',
    ),
    'bf1be189dab7019daeb1c7976f206f6d166e14d7' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/benchmark/template/local/index.tpl',
      1 => 1551080958,
      2 => 'snippet',
    ),
    '64313e27381fe9e3be1cb3c377bcdea27598c81a' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/benchmark/template/local/include/loading_indicator.tpl',
      1 => 1551080958,
      2 => 'snippet',
    ),
    '307dd591c3cc2fc18be9f701a908e5c7b4298f6c' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/benchmark/template/local/include/language_switch.tpl',
      1 => 1551080958,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '6779132345ca5f1c56fb724-46352075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'benchmarkData' => 0,
    'benchmarkTranslations' => 0,
    'benchmarkDefaultLanguage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1c57563f7_09009743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1c57563f7_09009743')) {function content_5ca5f1c57563f7_09009743($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    
        <meta charset="UTF-8">
        <title>Shopware BI - Start</title>

        <link href="/bootcamp/themes/Backend/ExtJs/backend/benchmark/template/local/all.css" media="all" rel="stylesheet" type="text/css" />
        <link href="/bootcamp/themes/Backend/ExtJs/backend/benchmark/template/local/vendor/components/LiquidButton/css/style.css" media="all" rel="stylesheet" type="text/css" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script type="text/javascript">
            var onClickLiquidButton = function () {
                $('html, body').animate({
                    scrollTop: $(".special-note").offset().top
                }, 800);
            };

            (function () {
                <?php if ($_smarty_tpl->tpl_vars['benchmarkData']->value){?>
                    window.benchmarkData = JSON.parse('<?php echo $_smarty_tpl->tpl_vars['benchmarkData']->value;?>
');
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['benchmarkTranslations']->value){?>
                    window.benchmarkTranslations = JSON.parse('<?php echo $_smarty_tpl->tpl_vars['benchmarkTranslations']->value;?>
');
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['benchmarkDefaultLanguage']->value){?>
                    window.benchmarkDefaultLanguage = '<?php echo $_smarty_tpl->tpl_vars['benchmarkDefaultLanguage']->value;?>
';
                <?php }?>
            } )();
        </script>

        
            <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16"></script>
            <script src="https://unpkg.com/vue-i18n/dist/vue-i18n.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
            <script src="/bootcamp/themes/Backend/ExtJs/backend/benchmark/template/local/js/translation.js"></script>
            <script src="/bootcamp/themes/Backend/ExtJs/backend/benchmark/template/local/js/vue_wrapper.js"></script>
        
    
</head>


    <body id="swag-start">
        <?php /*  Call merged included template "backend/benchmark/template/local/include/loading_indicator.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("backend/benchmark/template/local/include/loading_indicator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '6779132345ca5f1c56fb724-46352075');
content_5ca5f1c5733045_75609772($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "backend/benchmark/template/local/include/loading_indicator.tpl" */?>
        <?php /*  Call merged included template "backend/benchmark/template/local/include/language_switch.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("backend/benchmark/template/local/include/language_switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '6779132345ca5f1c56fb724-46352075');
content_5ca5f1c5743542_39184812($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "backend/benchmark/template/local/include/language_switch.tpl" */?>
        <div class="wrapper">
            <div class="swag-onbording">

                <div class="tob-bar">
                    <ul class="top-benefits">
                        <li>[[ $t('freeText') ]]</li>
                        <li>[[ $t('anonymousText') ]]</li>
                        <li>[[ $t('nonBindingText') ]]</li>
                    </ul>
                </div>

                <div class="preview-screen"></div>

                <div class="teaser-text">
                    <div class="funny-graph"></div>
                    <div class="row">
                        <div class="col-100">
                            <h1>[[ $t('startHeadline') ]]</h1>
                            <p>[[ $t('startText') ]]</p>
                        </div>

                        <div class="col-100">
                            <form method="get" action="<?php echo '/bootcamp/shopware.php/backend/BenchmarkLocalOverview/render/template/info';?>">
                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['benchmarkDefaultLanguage']->value;?>
" name="lang"/>
                                <button class="btn primary" type="submit">
                                    [[ $t('startButtonText') ]]
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>


</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:05
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/benchmark/template/local/include/loading_indicator.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ca5f1c5733045_75609772')) {function content_5ca5f1c5733045_75609772($_smarty_tpl) {?><div class="loading-wrapper">
    <div class="loading-text">LOADING</div>
    <div class="loading-content"></div>

    <div class="oval-one"></div>
    <div class="oval-two"></div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:05
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/benchmark/template/local/include/language_switch.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ca5f1c5743542_39184812')) {function content_5ca5f1c5743542_39184812($_smarty_tpl) {?><div class="language-switch" data-language-switch="true">
    <span class="language german-language<?php if ($_smarty_tpl->tpl_vars['benchmarkDefaultLanguage']->value==='de'){?> active<?php }?>" data-language-key="de">DE</span>
    <span class="language-separator">|</span>
    <span class="language english-language<?php if ($_smarty_tpl->tpl_vars['benchmarkDefaultLanguage']->value==='en'){?> active<?php }?>" data-language-key="en">EN</span>
</div><?php }} ?>