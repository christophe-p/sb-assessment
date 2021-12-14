<?php

// Hide specific dashboard menus for non-admin users
function azarahealthcare_hide_admin_menus() {
    if (current_user_can( 'create_users' )) return;
		// Uncomment to allow certain non-admin users to see the hidden dashboard menus
    //if (wp_get_current_user()->display_name == "Lorem") return;
    remove_menu_page( 'plugins.php' );
    remove_menu_page( 'themes.php' );
    remove_menu_page( 'tools.php' );
    remove_menu_page( 'users.php' );
    remove_menu_page( 'edit.php?post_type=page' );
    remove_menu_page( 'options-general.php' );
}
add_action( 'admin_menu', 'azarahealthcare_hide_admin_menus' );
