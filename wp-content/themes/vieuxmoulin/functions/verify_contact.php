<?php
add_action('admin_post_vieuxmoulin_contact_form_submit', 'vieuxmoulin_handle_contact_form_submit');
add_action('admin_post_nopriv_vieuxmoulin_contact_form_submit', 'vieuxmoulin_handle_contact_form_submit');

require_once(__DIR__ . '/../forms/ContactForm.php');

function vieuxmoulin_handle_contact_form_submit()
{
    (new \vieuxmoulin\forms\ContactForm())
        ->rule('lastname', 'required')
        ->rule('email', 'required')
        ->rule('email', 'valid_email')
        ->rule('phone', 'required')
        ->rule('subject', 'required')
        ->rule('message', 'required')
        ->sanitize('lastname', 'sanitize_text_field')
        ->sanitize('email', 'sanitize_text_field')
        ->sanitize('phone', 'sanitize_text_field')
        ->sanitize('subject', 'sanitize_text_field')
        ->sanitize('message', 'sanitize_textarea_field')
        ->handle($_POST);

}