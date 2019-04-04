<?php /* Smarty version Smarty-3.1.12, created on 2019-04-04 13:59:59
         compiled from "/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/base/model/user.js" */ ?>
<?php /*%%SmartyHeaderCode:14882477655ca5f1bfecbf43-01429236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a572a7a23f8a8dc46b4a11400fdef6573468bf79' => 
    array (
      0 => '/Applications/MAMP/htdocs/bootcamp/themes/Backend/ExtJs/backend/base/model/user.js',
      1 => 1551080958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14882477655ca5f1bfecbf43-01429236',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5ca5f1bfeedbf9_26600446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca5f1bfeedbf9_26600446')) {function content_5ca5f1bfeedbf9_26600446($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Global Stores and Models
 *
 * The user model represents a data row of the s_core_auth or the
 * Shopware\Models\User\User doctrine model.
 */
//
Ext.define('Shopware.apps.Base.model.User', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName:'Shopware.model.User',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty:'id',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name:'id', type:'int' },
        { name:'roleId', type:'int' },
        { name:'username', type:'string' },
        { name:'password', type:'string' },
        { name:'localeId', type:'int' },
        { name:'sessionId', type:'string' },
        { name:'lastLogin', type:'date' },
        { name:'name', type:'string' },
        { name:'email', type:'string' },
        { name:'active', type:'int' },
        { name:'failedLogins', type:'int' },
        { name:'lockedUntil', type:'date' }
    ]
});
//

<?php }} ?>