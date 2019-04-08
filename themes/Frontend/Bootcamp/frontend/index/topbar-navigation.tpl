{* Top bar main *}
{block name="frontend_index_top_bar_main"}
    <div class="top-bar">

        {* Top bar main container *}
        {block name="frontend_index_top_bar_main_container"}
            <div class="container block-group">

                {* Top bar navigation *}
                {block name="frontend_index_top_bar_nav"}
                    <nav class="top-bar--navigation block" role="menubar">

                        {action module=widgets controller=index action=shopMenu}

                        {* Article Compare *}
                        {block name='frontend_index_navigation_inline'}
                            {if {config name="compareShow"}}
                                <div class="navigation--entry entry--compare is--hidden" role="menuitem" aria-haspopup="true" data-drop-down-menu="true">
                                    {block name='frontend_index_navigation_compare'}
                                        {action module=widgets controller=compare}
                                    {/block}
                                </div>
                            {/if}
                        {/block}

                    {* My account entry ADDED *}
                    {block name="frontend_index_checkout_actions_my_options"}
                    <li class="navigation--entry entry--account{if {config name=useSltCookie} || $sOneTimeAccount} with-slt{/if}"
                        role="menuitem"
                        data-offcanvas="true"
                        data-offCanvasSelector=".account--dropdown-navigation">
                        {block name="frontend_index_checkout_actions_account"}
                            <a href="{url controller='account'}"
                               title="{"{if $userInfo}{s name="AccountGreetingBefore" namespace="frontend/account/sidebar"}{/s}{$userInfo['firstname']}{s name="AccountGreetingAfter" namespace="frontend/account/sidebar"}{/s} - {/if}{s namespace='frontend/index/checkout_actions' name='IndexLinkAccount'}{/s}"|escape}"
                        class="btn is--icon-left entry--link account--link{if $userInfo} account--user-loggedin{/if}">

                {if $userInfo}
                    <span class="account--display navigation--personalized">
                        <span class="account--display-greeting">
                            {s name="AccountGreetingBefore" namespace="frontend/account/sidebar"}{/s}
                            {$userInfo['firstname']}
                            {s name="AccountGreetingAfter" namespace="frontend/account/sidebar"}{/s}
                        </span>
                        {s namespace='frontend/index/checkout_actions' name='IndexLinkAccount'}{/s}
                    </span>
                {else}
                    <span class="account--display">
                        {s namespace='frontend/index/checkout_actions' name='IndexLinkAccount'}{/s}
                    </span>
                {/if}
            </a>
        {/block}

        {if {config name=useSltCookie} || $sOneTimeAccount}
            {block name="frontend_index_checkout_actions_account_navigation"}
                <div class="account--dropdown-navigation">

                    {block name="frontend_index_checkout_actions_account_navigation_smartphone"}
                        <div class="navigation--smartphone">
                            <div class="entry--close-off-canvas">
                                <a href="#close-account-menu"
                                   class="account--close-off-canvas"
                                   title="{s namespace='frontend/index/menu_left' name="IndexActionCloseMenu"}{/s}">
                                    {s namespace='frontend/index/menu_left' name="IndexActionCloseMenu"}{/s} <i class="icon--arrow-right"></i>
                    </a>
                    </div>
                    </div>
                    {/block}

                        {block name="frontend_index_checkout_actions_account_menu"}
                            {include file="frontend/account/sidebar.tpl" showSidebar=true inHeader=true}
                        {/block}
                    </div>
                    {/block}
                    {/if}
                    </li>
                    {/block}



                        {* Service / Support drop down *}
                        {*DELETED*}
                    </nav>
                {/block}
            </div>
        {/block}
    </div>
{/block}

