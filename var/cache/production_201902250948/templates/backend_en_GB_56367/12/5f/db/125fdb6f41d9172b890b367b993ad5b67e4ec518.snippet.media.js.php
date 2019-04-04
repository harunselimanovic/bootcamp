<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 14:00:03
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/article/model/media.js" */ ?>
<?php /*%%SmartyHeaderCode:4753608565ca5f1c3a400a5-71563664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '125fdb6f41d9172b890b367b993ad5b67e4ec518' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/article/model/media.js',
      1 => 1551080958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4753608565ca5f1c3a400a5-71563664',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1c3a8b0d2_39084339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1c3a8b0d2_39084339')) {function content_5ca5f1c3a8b0d2_39084339($_smarty_tpl) {?>/**
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
 * Shopware Model - Article backend module.
 *
 * @license http://www.shopware.de/license
 * @package Article
 * @subpackage Detail
 */
//
Ext.define('Shopware.apps.Article.model.Media', {

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

    /**
     * Fields array which contains the model fields
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'mediaId', type: 'int' },
        { name: 'main', type: 'int', defaultValue: 2 },
        { name: 'position', type: 'int' },
        { name: 'description', type: 'string' },
        { name: 'extension', type: 'string' },
        { name: 'path', type: 'string' },
        {
            name: 'hasConfig',
            type: 'boolean',
            convert: function(value, record) {
                if (record.getMappings() && record.getMappings().getCount() > 0) {
                    return true;
                }
                if (record && record.raw && record.raw.mappings && record.raw.mappings.length > 0) {
                    return true;
                }
                return false;
            }
        },


        {
            name: 'original',
            type: 'string'
        },
        {
            name: 'thumbnail',
            type: 'string'
        }
    ],

    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Article.model.MediaMapping', name: 'getMappings', associationKey: 'mappings'}
    ]
});
//

<?php }} ?>