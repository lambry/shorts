<?php
/**
 * Generator
 */

namespace Mild\Shortcodes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) die;

/* Generator Class */
class Generator {

	/*
	* Construct
	*/
    public function __construct() {

		// Add shortcodes
		add_shortcode( __( 'row', 'mild-sc' ),       [ $this, 'row' ] );
		add_shortcode( __( 'col', 'mild-sc' ),       [ $this, 'col' ] );
		add_shortcode( __( 'icon', 'mild-sc' ),      [ $this, 'icon' ] );
		add_shortcode( __( 'button', 'mild-sc' ),    [ $this, 'button' ] );
		add_shortcode( __( 'panel', 'mild-sc' ),     [ $this, 'panel' ] );
		add_shortcode( __( 'align', 'mild-sc' ),     [ $this, 'align' ] );
		add_shortcode( __( 'accordion', 'mild-sc' ), [ $this, 'accordion' ] );
		add_shortcode( __( 'posts', 'mild-sc' ),     [ $this, 'posts' ] );
		add_shortcode( __( 'login', 'mild-sc' ),     [ $this, 'login' ] );
		add_shortcode( __( 'sitemap', 'mild-sc' ),   [ $this, 'sitemap' ] );
		add_shortcode( __( 'map', 'mild-sc' ),       [ $this, 'map' ] );
		add_shortcode( __( 'iframe', 'mild-sc' ),    [ $this, 'iframe' ] );
		add_shortcode( __( 'image', 'mild-sc' ),     [ $this, 'image' ] );
		add_shortcode( __( 'link', 'mild-sc' ),      [ $this, 'link' ] );

    }

	/*
	* Row shortcode
	*/
	public function row( $params, $content = null ) {
	    extract( shortcode_atts([
	        'class' => ''
	    ], $params) );
	    return "<div class='row {$class}'>" . do_shortcode( $content ) . "</div>";
	}

	/*
	* Col shortcode
	*/
	public function col( $params, $content = null ) {
	    extract( shortcode_atts([
	        'width' => '6',
	        'class' => ''
	    ], $params) );
	    return "<div class='col col-{$width} {$class}'>" . do_shortcode( $content ) . "</div>";
	}

	/*
	* Icon shortcode
	*/
	public function icon( $params ) {
	    extract( shortcode_atts([
	        'icon'   => '',
	        'color'  => '',
	        'size'   => '',
            'align'  => '',
	        'link'   => '',
	        'target' => 'self',
	        'class'  => ''
	    ], $params) );
	    $html = "<i class='fa fa-{$icon} text-{$color} {$size} align{$align} {$class}'></i>";
	    return self::wrap_with_anchor( $link, $target, $html );
	}

	/*
	* Button shortcode
	*/
	public function button( $params, $content = null ) {
	    extract( shortcode_atts([
	        'icon'   => '',
	        'color'  => '',
	        'size'   => '',
            'align'  => '',
	        'link'   => '',
	        'target' => 'self',
	        'class'  => ''
	    ], $params) );
	    $icon = self::create_icon( $icon );
	    $el = ( $link ) ? 'a' : 'button';
	    $href = ( $link ) ? " href='{$link}' target='_{$target}'" : '';
	    return "<{$el}{$href} class='button bg-{$color} {$size} align{$align} {$class}'>{$icon}" . do_shortcode( $content ) . "</{$el}>";
	}

	/*
	* Panel shortcode
	*/
	public function panel( $params, $content = null ) {
	    extract( shortcode_atts([
	        'icon'  => '',
	        'color' => '',
	        'size'  => '',
            'align' => '',
	        'class' => ''
	    ], $params) );
	    $icon = self::create_icon( $icon );
	    return "<div class='panel bg-{$color} {$size} align{$align} {$class}'>{$icon}" . do_shortcode( $content ) . "</div>";
	}

	/*
	* Align shortcode
	*/
	public function align( $params, $content = null ) {
	    extract( shortcode_atts([
	        'align' => '',
	        'width' => '4',
	        'class' => ''
	    ], $params) );
	    return "<div class='align align{$align} col-{$width} {$class}'>" . do_shortcode( $content ) . "</div>";
	}

	/*
	* Accordian shortcode
	*/
	public function accordion( $params, $content = null ) {
	    extract( shortcode_atts([
	        'title' => '',
	        'icon'  => '',
	        'class' => ''
	    ], $params) );
        $id = sanitize_title_with_dashes( $title );
	    $icon = self::create_icon( $icon );
	    $icon_plus = self::create_icon( 'plus' );
	    return "<div id='{$id}' class='accordion {$class}'>
		    		<h3 class='accordion-title'><a href='#{$id}'>{$icon}{$title}{$icon_plus}</a></h3>
		            <div class='accordion-content'>" . do_shortcode( $content ) . "</div>
	            </div>";
	}

	/*
	* Posts shortcode
	*/
	public function posts( $params ) {
	    extract( shortcode_atts([
	        'cat'   => '',
	        'tag'   => '',
	        'no'    => 5,
	        'type'  => 'post',
	        'date'  => false,
	        'image' => false,
	        'class' => ''
	    ], $params) );

	    $args = [
	        'category_name'  => $cat,
	        'tag'            => $tag,
	        'post_type'      => $type,
	        'posts_per_page' => $no
	    ];
	    $query = new \WP_Query( $args );

	    $html = "<div class='posts post-{$type} {$class}'>";
	        while( $query->have_posts() ) : $query->the_post();
	            $html .= "<div class='post'>
	                        <h4 class='post-title'><a href='" . get_permalink() . "'>" . get_the_title() . "</a></h4>";
	            if ( $date ) $html .= "<div class='post-date'>" . get_the_date() . "</div>";
	            if ( $image ) $html .= "<a href='" . get_permalink() . "' class='post-image'>" . get_the_post_thumbnail( $query->post->ID, 'thumbnail' ) . "</a>";
	            $html .= "<div class='post-content'>" . get_the_excerpt() . "</div></div>";
	        endwhile;
	        wp_reset_query();
	    $html .= '</div>';

	    return $html;
	}

	/*
	* Login shortcode
	*/
	public function login( $params ) {
	    extract( shortcode_atts([
	        'redirect' => '',
	        'display'  => 'block',
	        'class'    => ''
	    ], $params) );

        $login_options = [
            'echo'     => false,
            'redirect' => $redirect
        ];

        $html = "<div class='login login-style-{$display} {$class}'>";
            if ( ! is_user_logged_in() ) {
                $html .= wp_login_form( $login_options );
            } else {
                $html .= '<a href="' . wp_logout_url() .'" title="Logout" class="button">Logout</a>';
            }
        $html .= '</div>';

	    return $html;
	}

	/*
	* Sitemap shortcode
	*/
	public function sitemap( $params ) {
	    extract( shortcode_atts([
            'posts' => false,
            'pages' => false,
            'menus' => false,
	        'class' => ''
	    ], $params) );

	    $html = "<nav class='site-map {$class}'>";

	    if ( $menus ) {
	        $menus = get_terms( 'nav_menu', [ 'hide_empty' => true ] );
	        $html .= "<h4>" . __( 'Menus', 'mild-sc' ) . "</h4>";
	        foreach ( $menus as $menu ) {
	            $html .= wp_nav_menu( [ 'menu' => $menu->name, 'echo' => false ] );
	        }
	    }

	    if ( $pages ) {
	        $pages = get_pages();
            $html .= "<h4>" . __( 'Pages', 'mild-sc' ) . "</h4>";
	        $html .= "<ul class='sitemap sitemap-pages'>";
	            foreach ( $pages as $page ) {
	                $html .= "<li><a href='" . get_permalink( $page->ID ) . "'>";
	                $html .= $page->post_title;
	                $html .= "</a></li>";
	            }
	        $html .= "</ul>";
	    }

	    if ( $posts ) {
	        $posts = get_posts();
            $html .= "<h4>" . __( 'Posts', 'mild-sc' ) . "</h4>";
	        $html .= "<ul class='sitemap sitemap-posts'>";
	            foreach ( $posts as $post ) {
	                $html .= "<li><a href='" . get_permalink( $post->ID ) . "'>";
	                $html .= $post->post_title;
	                $html .= "</a></li>";
	            }
	        $html .= "</ul>";
	    }

	    $html .= "</nav>";

	    return $html;
	}

	/*
	* Map shortcode
	*/
	public function map( $params ) {
	    extract( shortcode_atts([
	        'width'    => '400',
	        'height'   => '300',
	        'location' => 'Australia',
	        'align'    => '',
	        'class'    => ''
	    ], $params) );
	    $location = str_replace( ' ', '+', $location );
	    return "<div class='fluid-iframe align{$align} {$class}'><iframe src='https://maps.google.com/maps?q={$location}&output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' width='{$width}px' height='{$height}px'></iframe></div>";
	}

	/*
	* iFrame shortcode
	*/
	public function iframe( $params ) {
	    extract( shortcode_atts([
	        'url'    => '',
	        'width'  => '400',
	        'height' => '300',
	        'align'  => '',
	        'class'  => ''
	    ], $params) );
	    return "<div class='fluid-iframe align{$align} {$class}'><iframe src='{$url}' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' width='{$width}px' height='{$height}px'></iframe></div>";
	}

	/*
	* Image shortcode
	*/
	public function image( $params ) {
	    extract( shortcode_atts([
	        'url'    => '',
	        'link'   => '',
	        'class'  => '',
	        'align'  => 'one',
	        'target' => 'self',
	    ], $params) );
	    $html = "<img src='{$url}' class='align{$align} {$class}'>";
	    return self::wrap_with_anchor( $link, $target, $html );
	}

	/*
	* Link shortcode
	*/
	public function link( $params, $content = null ) {
	    extract( shortcode_atts([
	        'link'   => '#',
	        'class'  => '',
	        'target' => 'self'
	    ], $params) );
	    return "<a href='{$to}' target='_{$target}' style='{$class}'>" . do_shortcode( $content ) . "</a>";
	}

	/*
	* Wrap with anchor helper
	*/
	private function wrap_with_anchor( $link, $target, $html ) {
	    return ( $link ) ? "<a href='{$link}' target='_{$target}'>{$html}</a>" : $html;
	}

	/*
	* Create icon helper
	*/
	private function create_icon( $icon ) {
	    return ( $icon ) ? "<i class='fa fa-{$icon}'></i>" : '';
	}

}