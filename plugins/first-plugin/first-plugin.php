<?php

/*
plugin name: firstttt plugin
*/

class WordCountAndTimePlguin
{
    function __construct()
    {
        add_action('admin_menu', array($this, 'adminPage'));
        add_action('admin_init', array($this, 'settings'));
    }

    function settings()
    {
        add_settings_field('wcp_location', 'display locatopm', 'locationHTML', 'word-coun-setting-page', 'wcp_first');
        register_setting('word count plugin', 'wcp_location', array('sanitize_callback' => 'sanitize_text_fiels', 'default' => '0'));
    }

    function adminPage()
    {
        add_options_page('Word Count Settings', 'w c', 'manage_options', 'word-coun-setting-page', array($this, 'ourHTML'), 0);
    }
    function ourHTML()
    { ?>
        <div class="wrap">
            <h1>Wprd Count settings</h1>
            <div class="form_container">
                Hello
            </div>
        </div>
<?php }
}


$wordCountAndTimePlguin = new WordCountAndTimePlguin();
