<?php
if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar( array(
		'id' => 'sidebar-left',
		'name' => __( 'Sidebar Left', 'powettv' ),
		'before_widget' => '<li id="%1$s" class="sidebaritem">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'id' => 'sidebar-right',
		'name' => __( 'Sidebar Right', 'powettv' ),
		'before_widget' => '<li id="%1$s" class="sidebaritem">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'id' => 'sidebar-full',
		'name' => __( 'Sidebar Full', 'powettv' ),
		'before_widget' => '<li id="%1$s" class="sidebaritem">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );

	// Test new dynamic sidebar.
	register_sidebar( array(
		'id' => 'top-ad',
		'name' => __( 'Top Ad', 'powettv' ),
		'before_widget' => '<li id="%1$s" class="sidebaritem">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );
	// Test new dynamic sidebar.
	register_sidebar( array(
		'id' => 'top-ad_games',
		'name' => __( 'Top Ad - Games', 'powettv' ),
		'before_widget' => '<li id="%1$s" class="sidebaritem">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );
	// Test new dynamic sidebar.
	register_sidebar( array(
		'id' => 'top-ad_comics',
		'name' => __( 'Top Ad - Comics', 'powettv' ),
		'before_widget' => '<li id="%1$s" class="sidebaritem">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );
	// Test new dynamic sidebar.
	register_sidebar( array(
		'id' => 'top-ad_tv',
		'name' => __( 'Top Ad - TV', 'powettv' ),
		'before_widget' => '<li id="%1$s" class="sidebaritem">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );
	// Test new dynamic sidebar.
	register_sidebar( array(
		'id' => 'top-ad_movies',
		'name' => __( 'Top Ad - Movies', 'powettv' ),
		'before_widget' => '<li id="%1$s" class="sidebaritem">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );
	// Test new dynamic sidebar.
	register_sidebar( array(
		'id' => 'top-ad_toys',
		'name' => __( 'Top Ad - Toys', 'powettv' ),
		'before_widget' => '<li id="%1$s" class="sidebaritem">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );
}

// *** User-defined functions *** //
function get_category_name_link($strName, $strDisplay=''){
	$strResult = '';

	if($strDisplay == ''){
	$strDisplay = $strName;
	}

	$strResult = 
	  '<a href="'
	. get_category_link(get_cat_ID($strName))
	. '">'
	. $strDisplay
	. '</a>';

	return ($strResult);
}
function get_tag_slug_link($strSlug, $strDisplay=''){
    $strResult = '';

/*
    if($strDisplay == ''){
      $strDisplay = $strSlug;
    }
    
    $strResult = 
      '<a href="'
    . get_tag_link(get_term_by('slug', $strSlug, 'tag')->term_id)
    . '">'
    . $strDisplay
    . '</a>';
*/
    
    return ($strResult);
}
?>