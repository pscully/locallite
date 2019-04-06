<?php

function theme_settings_page()
{
    ?>
    <div class="wrap">
        <h1>Local WP Theme Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields("section");
            do_settings_sections("theme-options");
            submit_button();
            ?>
        </form>
    </div>
<?php

}

function add_theme_menu_item()
{
    add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

function display_phone_number()
{
    ?>
    <input type="text" name="phone_number" id="phone_number" value="<?php echo get_option('phone_number'); ?>" />
<?php
}

function display_email_address()
{
    ?>
    <input type="text" name="email_address" id="email_address" value="<?php echo get_option('email_address'); ?>" />
<?php
}

function display_twitter_element()
{
    ?>
    <input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
<?php
}

function display_facebook_element()
{
    ?>
    <input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
<?php
}

function display_layout_element()
{
	?>
		<input type="checkbox" name="theme_layout" value="1" <?php checked(1, get_option('theme_layout'), true); ?> /> 
	<?php
}

function display_theme_panel_fields()
{
    add_settings_section("section", "All Settings", null, "theme-options");
    
    add_settings_field("phone_number", "Phone Number", "display_phone_number", "theme-options", "section");
    add_settings_field("email_address", "Email Address", "display_email_address", "theme-options", "section");
    add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "section");
    add_settings_field("theme_layout", "Dark theme?", "display_layout_element", "theme-options", "section");

    register_setting("section", "phone_number");
    register_setting("section", "email_address");
    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
    register_setting("section", "theme_layout");
}

add_action("admin_init", "display_theme_panel_fields");



?>