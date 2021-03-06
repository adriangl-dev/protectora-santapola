
<!-- Block categories module -->
{if $blockCategTree != ''}
	<div class="ma-nav-mobile-container hidden-desktop">
		<div class="container">
			<div class="container-inner">
				<div class="navbar">
					<div id="navbar-inner" class="navbar-inner navbar-inactive">
						<a class="btn btn-navbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<span class="brand">{l s='Categorías'}</span>
						<ul id="ma-mobilemenu" class="tree {if $isDhtml}dhtml{/if}  mobilemenu nav-collapse collapse">
							{foreach from=$blockCategTree.children item=child name=blockCategTree}
								{if $smarty.foreach.blockCategTree.last}
									{include file="$branche_tpl_path" node=$child last='true'}
								{else}
									{include file="$branche_tpl_path" node=$child}
								{/if}
							{/foreach}
						</ul>
		                                <script type="text/javascript">
		                                // <![CDATA[
		                                        // we hide the tree only if JavaScript is activated
		                                        $('div#categories_block_left ul.dhtml').hide();
		                                // ]]>
		                                </script>
		                </div>                
					</div>
				</div>
		</div>
</div>
{/if}
<!-- /Block categories module -->

<div class="nav-container visible-desktop">
	<div class="container">
	    <div id="pt_custommenu" class="pt_custommenu">
	        {$megamenu}
	    </div>
	</div>    
</div>

<script type="text/javascript">
//<![CDATA[
var CUSTOMMENU_POPUP_EFFECT = {$effect};
var CUSTOMMENU_POPUP_TOP_OFFSET = {$top_offset};
//]]>
</script>