<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:09
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/theme/model/settings.js" */ ?>
<?php /*%%SmartyHeaderCode:2466284475ca5f1c9e68593-36783406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24702cf3fadf30c2ab1cdb02ac78261fca01ebca' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/theme/model/settings.js',
      1 => 1551080958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2466284475ca5f1c9e68593-36783406',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1c9e7eeb8_19170493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1c9e7eeb8_19170493')) {function content_5ca5f1c9e7eeb8_19170493($_smarty_tpl) {?>/**
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
 * Shopware Application
 *
 * @category  Shopware
 * @package   Shopware
 * @copyright Copyright (c) shopware AG (http://www.shopware.de)
 */

//

//

Ext.define('Shopware.apps.Theme.model.Settings', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            controller: 'Theme',
            detail: 'Shopware.apps.Theme.view.settings.Settings',
            proxy: {
                type: 'ajax',
                api: {
                    detail:  '<?php echo '/bootcamp/shopware.php/backend/base/loadSettings';?>',
                    create:  '<?php echo '/bootcamp/shopware.php/backend/base/saveSettings';?>',
                    update:  '<?php echo '/bootcamp/shopware.php/backend/base/saveSettings';?>'
                },
                reader: {
                    type: 'json',
                    root: 'data',
                    totalProperty: 'total'
                }
            }
        };
    },

    fields: [
        { name: 'id', type: 'integer' },
        { name: 'forceCompile', type: 'boolean' },
        { name: 'createSourceMap', type: 'boolean' },
        { name: 'compressCss', type: 'boolean' },
        { name: 'compressJs', type: 'boolean' },
        { name: 'reloadSnippets', type: 'boolean' }
    ]
});

//

<?php }} ?>