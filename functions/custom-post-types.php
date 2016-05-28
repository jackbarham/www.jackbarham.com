<?php


/*	PORTFOLIO
--------------------------------- */

	// REGISTER POST TYPE

	function custom_post_portfolio() { 
		register_post_type( 'portfolio',
			array('labels' => array(
				'name' => __('Portfolio', 'post type general name'), /* This is the Title of the Group */
				'singular_name' => __('Portfolio', 'post type singular name'), /* This is the individual type */
				'add_new' => __('Add New', 'custom post type item'), /* The add new menu item */
				'add_new_item' => __('Add New'), /* Add New Display Title */
				'edit' => __( 'Edit' ), /* Edit Dialog */
				'edit_item' => __('Edit'), /* Edit Display Title */
				'new_item' => __('New '), /* New Display Title */
				'view_item' => __('View'), /* View Display Title */
				'search_items' => __('Search Post Type'), /* Search Custom Type Title */ 
				'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */ 
				'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
				'parent_item_colon' => ''
				), /* end of arrays */
				'description' => __( 'This is the example custom post type' ), /* Custom Type Description */
				'public' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => false,
				'show_ui' => true,
				'query_var' => true,
				'menu_position' => 5, /* this is what order you want it to appear in on the left hand side menu */ 
				'capability_type' => 'post',
				'hierarchical' => false,
				'rewrite' => array('slug' => 'portfolio'),
				/* the next one is important, it tells what's enabled in the post editor */
				'supports' => array( 'title', 'editor', 'thumbnail')
		 	)
		);
		
		// register_taxonomy_for_object_type('category', 'movies');
		// register_taxonomy_for_object_type('post_tag', 'movies');
		
	} 


	// REGISTER TAXOMONIES

	add_action( 'init', 'custom_post_portfolio');
    register_taxonomy( 'custom_portfolio', 
    	array('portfolio'), /* if you change the name of register_post_type( 'movies', then you have to change this */
    	array('hierarchical' => true,                    
    		'labels' => array(
    			'name' => __( 'Portfolio Categories' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Portfolio Category' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Portfolio Categories' ), /* search title for taxomony */
    			'all_items' => __( 'All Portfolio Categories' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Portfolio Category' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Portfolio Category:' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Portfolio Category' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Portfolio Category' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Portfolio' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Custom Portfolio' ) /* name title for taxonomy */
    		),
    		'show_ui' => true,
    		'query_var' => true,
    	)
    );


/*	ARTICLES
--------------------------------- */

	// REGISTER POST TYPE

	function custom_post_articles() { 
		register_post_type( 'articles',
			array('labels' => array(
				'name' => __('Articles', 'post type general name'), /* This is the Title of the Group */
				'singular_name' => __('Article', 'post type singular name'), /* This is the individual type */
				'add_new' => __('Add New', 'custom post type item'), /* The add new menu item */
				'add_new_item' => __('Add New'), /* Add New Display Title */
				'edit' => __( 'Edit' ), /* Edit Dialog */
				'edit_item' => __('Edit'), /* Edit Display Title */
				'new_item' => __('New '), /* New Display Title */
				'view_item' => __('View'), /* View Display Title */
				'search_items' => __('Search Post Type'), /* Search Custom Type Title */ 
				'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */ 
				'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
				'parent_item_colon' => ''
				), /* end of arrays */
				'description' => __( 'This is the example custom post type' ), /* Custom Type Description */
				'public' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => false,
				'show_ui' => true,
				'query_var' => true,
				'menu_position' => 5, /* this is what order you want it to appear in on the left hand side menu */ 
				'capability_type' => 'post',
				'hierarchical' => false,
				'rewrite' => array('slug' => 'articles'),
				/* the next one is important, it tells what's enabled in the post editor */
				'supports' => array( 'title', 'editor', 'thumbnail', 'comments')
		 	)
		);
		
		// register_taxonomy_for_object_type('category', 'movies');
		// register_taxonomy_for_object_type('post_tag', 'movies');
		
	} 


	// REGISTER TAXOMONIES

	add_action( 'init', 'custom_post_articles');
    register_taxonomy( 'custom_articles', 
    	array('articles'), /* if you change the name of register_post_type( 'movies', then you have to change this */
    	array('hierarchical' => true,                    
    		'labels' => array(
    			'name' => __( 'Article Categories' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Article Category' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Article Categories' ), /* search title for taxomony */
    			'all_items' => __( 'All Article Categories' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Article Category' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Article Category:' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Article Category' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Article Category' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Article' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Custom Article' ) /* name title for taxonomy */
    		),
    		'show_ui' => true,
    		'query_var' => true,
    	)
    );



/*	PLAYGROUND
--------------------------------- */

	// REGISTER POST TYPE

	function custom_post_playground() { 
		register_post_type( 'playground',
			array('labels' => array(
				'name' => __('Playground', 'post type general name'), /* This is the Title of the Group */
				'singular_name' => __('Playground', 'post type singular name'), /* This is the individual type */
				'add_new' => __('Add New', 'custom post type item'), /* The add new menu item */
				'add_new_item' => __('Add New'), /* Add New Display Title */
				'edit' => __( 'Edit' ), /* Edit Dialog */
				'edit_item' => __('Edit'), /* Edit Display Title */
				'new_item' => __('New '), /* New Display Title */
				'view_item' => __('View'), /* View Display Title */
				'search_items' => __('Search Post Type'), /* Search Custom Type Title */ 
				'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */ 
				'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
				'parent_item_colon' => ''
				), /* end of arrays */
				'description' => __( 'This is the example custom post type' ), /* Custom Type Description */
				'public' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => false,
				'show_ui' => true,
				'query_var' => true,
				'menu_position' => 5, /* this is what order you want it to appear in on the left hand side menu */ 
				'capability_type' => 'post',
				'hierarchical' => false,
				'rewrite' => array('slug' => 'playground'),
				/* the next one is important, it tells what's enabled in the post editor */
				'supports' => array( 'title', 'editor', 'thumbnail')
		 	)
		);
		
		// register_taxonomy_for_object_type('category', 'movies');
		// register_taxonomy_for_object_type('post_tag', 'movies');
		
	} 


	// REGISTER TAXOMONIES

	add_action( 'init', 'custom_post_playground');
    register_taxonomy( 'custom_playground', 
    	array('playground'), /* if you change the name of register_post_type( 'movies', then you have to change this */
    	array('hierarchical' => true,                    
    		'labels' => array(
    			'name' => __( 'Playground Categories' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Playground Category' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Article Categories' ), /* search title for taxomony */
    			'all_items' => __( 'All Playground Categories' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Playground Category' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Article Category:' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Playground Category' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Playground Category' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Playground' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Custom Playground' ) /* name title for taxonomy */
    		),
    		'show_ui' => true,
    		'query_var' => true,
    	)
    );
    
    

/*	NEWS
--------------------------------- */

	// REGISTER POST TYPE

	function custom_post_news() { 
		register_post_type( 'news',
			array('labels' => array(
				'name' => __('News', 'post type general name'), /* This is the Title of the Group */
				'singular_name' => __('News', 'post type singular name'), /* This is the individual type */
				'add_new' => __('Add New', 'custom post type item'), /* The add new menu item */
				'add_new_item' => __('Add New'), /* Add New Display Title */
				'edit' => __( 'Edit' ), /* Edit Dialog */
				'edit_item' => __('Edit'), /* Edit Display Title */
				'new_item' => __('New '), /* New Display Title */
				'view_item' => __('View'), /* View Display Title */
				'search_items' => __('Search Post Type'), /* Search Custom Type Title */ 
				'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */ 
				'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
				'parent_item_colon' => ''
				), /* end of arrays */
				'description' => __( 'This is the example custom post type' ), /* Custom Type Description */
				'public' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => false,
				'show_ui' => true,
				'query_var' => true,
				'menu_position' => 5, /* this is what order you want it to appear in on the left hand side menu */ 
				'capability_type' => 'post',
				'hierarchical' => false,
				'rewrite' => array('slug' => 'news'),
				/* the next one is important, it tells what's enabled in the post editor */
				'supports' => array( 'title', 'editor', 'thumbnail')
		 	)
		);
		
		// register_taxonomy_for_object_type('category', 'movies');
		// register_taxonomy_for_object_type('post_tag', 'movies');
		
	} 


	// REGISTER TAXOMONIES

	add_action( 'init', 'custom_post_news');
    register_taxonomy( 'custom_news', 
    	array('news'), /* if you change the name of register_post_type( 'movies', then you have to change this */
    	array('hierarchical' => true,                    
    		'labels' => array(
    			'name' => __( 'News Categories' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'News Category' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Article Categories' ), /* search title for taxomony */
    			'all_items' => __( 'All News Categories' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent News Category' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent News Category:' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit News Category' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update News Category' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New News' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Custom News' ) /* name title for taxonomy */
    		),
    		'show_ui' => true,
    		'query_var' => true,
    	)
    );
    

?>