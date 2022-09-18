<?php

function comp_enqueue()

{

 wp_register_style(
  'comp_font_rubik_and_pacifico',
  'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap',
  [],
  null
 );
 wp_register_style(
  'comp_bootstrap_icon',
  get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css')
 );
 wp_register_style(
  'comp_theme',
  get_theme_file_uri('assets/public/index.css')
 );


 wp_enqueue_style('comp_font_rubik_and_pacifico');
 wp_enqueue_style('comp_bootstrap_icon');
 wp_enqueue_style('comp_theme');
}