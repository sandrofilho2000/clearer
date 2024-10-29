<form method="get" class="searchform themeform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<input type="text" class="search" name="s" onblur="if(this.value=='')this.value='<?php esc_attr_e('Pesquisar...','clearer'); ?>';" onfocus="if(this.value=='<?php esc_attr_e('Pesquisar...','clearer'); ?>')this.value='';" value="<?php esc_attr_e('Pesquisar...','clearer'); ?>" />
	</div>
</form>