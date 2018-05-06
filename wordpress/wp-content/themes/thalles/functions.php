<?php
    add_theme_support( 'post-thumbnails' );



    // BOTÃO [CONFIGURAÇÕES DO TEMA]
    function wp_admin_bar_new_item() {
        global $wp_admin_bar;

        $wp_admin_bar->add_menu(array(
            'id' => 'wp-admin-bar-new-item',
            'title' => __('CONFIGURAÇÕES DO SITE'),
            'href' => get_bloginfo('url'). '/wp-admin/post.php?post=36&action=edit'
        ));
        
    }
    add_action('wp_before_admin_bar_render', 'wp_admin_bar_new_item');



    // Remover item do menu admin
    function custom_menu_page_removing() {

        // remove_menu_page( 'easy-content-types/easy-content-types.php' );
        remove_menu_page('edit.php?post_type=configuracoes'); 
        remove_menu_page('themes.php');
        remove_menu_page('edit-comments.php');
        

    }
    add_action( 'admin_menu', 'custom_menu_page_removing' );