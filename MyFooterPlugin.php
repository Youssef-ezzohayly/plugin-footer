<?php
if (!defined('ABSPATH')) {
  exit;
}
?>

<?php


/*
Plugin Name: Ready Footer
 
Plugin URI: https://github.com/Youssef-ezzohayly
 
Description: Customize Your Own Footer .
 
Version: 1.0.0
 
Author: YOUSSEF EZZOHAYLY
 
Author URI: https://github.com/Youssef-ezzohayly
 
License: GPLv2 or later
 
Text Domain:  Ready Footer 
 
*/

?>

<?php
add_action('admin_menu', 'my_admin_menu');

function my_admin_menu()
{

  // add_menu_page('Footer', 'MyCustomFooter', 'manage_options','footer_setting_page','myFooter_edit','dashicons-chart-area', 56);   
  
  // add_submenu_page(
  //     'footer_setting_page',               // parent slug
  //     'Footer',                      // page title
  //     'Footer',                      // menu title
  //     'manage_options',                   // capability
  //     'footer_setting_page',               // slug
  //     'myFooter_edit' // callback
  // ); 

  add_menu_page('Footer', 'Ready Footer', 'manage_options', 'footer_setting_page', 'myFooter_edit', 'dashicons-smiley  ', 100);
  //  add_submenu_page( 'footer_setting_page', 'Page title', 'Sub-menu title', 'manage_options', 'child-submenu-handle', 'my_magic_function'); 
}


function myFooter_edit()
{
  // echo '<h1> please fill all the fields</h1>';
  require_once 'custom-footer.php';
}

add_action('wp_footer', 'footer_text_admin_page');

function footer_text_admin_page()
{
  echo "
  <footer class='text-center text-white' style='background-color: #f1f1f1;'>
  <!-- Grid container -->
  <div class='container pt-4'>
    <!-- Section: Social media -->
    <section class='mb-4'>
      <!-- Facebook -->
      <a
        class='btn btn-link btn-floating btn-lg text-dark m-1'
        href='".get_option('facebook-icon')."'
        role='button'
        data-mdb-ripple-color='dark'
        ><i class='fab fa-facebook-f'></i
      ></a>

      <!-- Twitter -->
      <a
        class='btn btn-link btn-floating btn-lg text-dark m-1'
        href='". get_option('twitter-icon') ."'
        role='button'
        data-mdb-ripple-color='dark'
        ><i class='fab fa-twitter'></i
      ></a>

      <!-- Google -->
      <a
        class='btn btn-link btn-floating btn-lg text-dark m-1'
        href='". get_option('google-icon') ."'
        role='button'
        data-mdb-ripple-color='dark'
        ><i class='fab fa-google'></i
      ></a>

      <!-- Instagram -->
      <a
        class='btn btn-link btn-floating btn-lg text-dark m-1'
        href='". get_option('instagram-icon') ."'
        role='button'
        data-mdb-ripple-color='dark'
        ><i class='fab fa-instagram'></i
      ></a>

      <!-- Linkedin -->
      <a
        class='btn btn-link btn-floating btn-lg text-dark m-1'
        href='". get_option('linkedin-icon') ."'
        role='button'
        data-mdb-ripple-color='dark'
        ><i class='fab fa-linkedin'></i
      ></a>
      <!-- Github -->
      <a
        class='btn btn-link btn-floating btn-lg text-dark m-1'
        href='". get_option('github-icon') ."'
        role='button'
        data-mdb-ripple-color='dark'
        ><i class='fab fa-github'></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class='text-center text-dark p-3' style='background-color: rgba(0, 0, 0, 0.2);'>
    © 2021 Copyright:
    <a class='text-dark' href='https://youcode.ma/'> youcode.ma</a>
  </div>
  <!-- Copyright -->
</footer>
    ";
}


?>