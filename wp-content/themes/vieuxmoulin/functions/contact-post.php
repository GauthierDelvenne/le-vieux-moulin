<?php
register_post_type('contact_message', [
    'label' => 'Contact message',
    'description' => 'Les messages',
    'public' => false,
    'show_ui' => true,
    'menu_position' => 10,
    'menu_icon' => 'dashicons-email',
    'supports' => ['title', 'editor'],
]);
