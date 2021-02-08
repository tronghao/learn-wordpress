<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" 
      action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<input type="search" id="<?php echo $unique_id; ?>" 
		       class="form-control" 
		       name="s"  
		       placeholder="<?php esc_attr_e( 'Search', 'text_domain' ); ?>" />
		<span class="input-group-btn">
			<button type="submit" class="btn btn-danger"><i class="icon-search"></i></button>
		</span>
	</div>
</form>