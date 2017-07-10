<?php

// description
function scseo_description_render() {
    $options = get_option( 'scseo_settings' ); ?>
    <textarea name='scseo_settings[scseo_description]' rows='10'><?php echo $options['scseo_description']; ?></textarea><?php
}

// tags
function scseo_tags_render() {
    $options = get_option( 'scseo_settings' ); ?>
    <input type='text' name='scseo_settings[scseo_tags]' value='<?php echo $options['scseo_tags']; ?>'> <?php
}

// author
function scseo_author_render() {
    $options = get_option( 'scseo_settings' ); ?>
    <input type='text' name='scseo_settings[scseo_author]' value='<?php echo $options['scseo_author']; ?>'> <?php
}

// subject
function scseo_subject_render() {
    $options = get_option( 'scseo_settings' ); ?>
    <input type='text' name='scseo_settings[scseo_subject]' value='<?php echo $options['scseo_subject']; ?>'> <?php
}

// city and state
function scseo_location_render() {
    $options = get_option( 'scseo_settings' ); ?>
    <input type='text' name='scseo_settings[scseo_location]' value='<?php echo $options['scseo_location']; ?>' placeholder="Salvador, Bahia, Brazil"> <?php
}

// language
function scseo_language_render() {
    $options = get_option( 'scseo_language' ); ?>
    <input type='text' name='scseo_settings[scseo_language]' value='<?php echo $options['scseo_language']; ?>' placeholder="PT-BR"> <?php
}

// coordinates
function scseo_coordinates_render() {
    $options = get_option( 'scseo_settings' ); ?>
    <input type='text' name='scseo_settings[scseo_coordinates]' value='<?php echo $options['scseo_coordinates']; ?>' placeholder="-13.000671, -38.452555"> <?php
}

// analytics
function scseo_analytics_render() {
    $options = get_option( 'scseo_settings' ); ?>
    <input type='text' name='scseo_settings[scseo_analytics]' value='<?php echo $options['scseo_analytics']; ?>' placeholder='UA-XXXXXX-X'> <?php
}


function scseo_settings_section_callback() {
    echo __( 'Insert the required information for a better SEO', 'scseo' );
}


function sc_simple_seo_options_page() { ?>
    <form action='options.php' method='post'>

        <?php
        settings_fields( 'scSimpleSEO' );
        do_settings_sections( 'scSimpleSEO' );
        submit_button();
        ?>

    </form> <?php
}