add_action( 'init', 'cptui_register_my_cpts_portfolio' );
function cptui_register_my_cpts_portfolio() {
	$labels = array(
		"name" => __( 'portfolios', 'topname' ),
		"singular_name" => __( 'portfolio', 'topname' ),
		);

	$args = array(
		"label" => __( 'portfolios', 'topname' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "portfolio", "with_front" => true ),
		"query_var" => true,
				
		"supports" => array( "title", "editor", "thumbnail" ),				
	);
	register_post_type( "portfolio", $args );

// End of cptui_register_my_cpts_portfolio()
}
