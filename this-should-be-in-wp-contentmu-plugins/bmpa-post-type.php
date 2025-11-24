<?php

function bmpa_post_type()
{
  register_post_type(
    'event',
    [
      'public' => true,
      'show_in_rest' => true, // modern Block Editor screen
      'labels' => [
        'name' => 'Events',
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Event',
        'all_itemts' => 'All Events',
        'singular_name' => 'Event'
      ],
      'menu_icon' => 'dashicons-calendar'
    ]
  );
};

add_action('init', 'bmpa_post_type');
