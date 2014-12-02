/**
 *
 * Move the admin navbar to the bottom screen
 * You can also make this a plugin so that you can easily turn off the feature
 **/

function fb_move_admin_bar() {
  echo '
  <style type="text/css">
  body.admin-bar {
    margin-top: -28px;
    padding-bottom: 28px;
  }
  #wpadmin {
    top: auto !important;
    bottom: 0;
  }
  #wpadminbar .quicklinks>ul>li {
    position: relative;
  }
  #wpadminbar .ab-top-menu>.menupop>.ab-sub-wrapper {
    bottom: 28px;
  }
  </style>';
}

// on backen area
if ( is_admin_bar_showing() ) {
  add_action( 'admin_head', 'fb_move_admin_bar' );
}

// on frontend area
if (is_admin_bar_showing() ) {
  add_action( 'wp_head', 'fb_move_admin_bar' );
}



