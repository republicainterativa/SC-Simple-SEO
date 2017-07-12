<?php

// description
function scseo_description_render() {
    $options = get_option( 'scseo_settings' ); ?>
    <div class="form-group">
        <textarea class='form-control' name='scseo_settings[scseo_description]' rows='10'><?php echo $options['scseo_description']; ?></textarea>
    </div><?php
}

// tags
function scseo_tags_render() {
    $options = get_option( 'scseo_settings' ); ?>
    <div class="form-group">
        <input type='text' class='form-control' name='scseo_settings[scseo_tags]' value='<?php echo $options['scseo_tags']; ?>'>
    </div> <?php
}

// author
function scseo_author_render() {
    $options = get_option( 'scseo_settings' ); ?>
    <div class="form-group">
        <input type='text' class='form-control' name='scseo_settings[scseo_author]' value='<?php echo $options['scseo_author']; ?>'>
    </div> <?php
}

// subject
function scseo_subject_render() {
    $options = get_option( 'scseo_settings' ); ?>
    <div class="form-group">
        <input type='text' class='form-control' name='scseo_settings[scseo_subject]' value='<?php echo $options['scseo_subject']; ?>'>
    </div> <?php
}

// city and state
function scseo_location_render() {
    $options = get_option( 'scseo_settings' ); ?>
    <div class="form-group">
        <input type='text' class='form-control' name='scseo_settings[scseo_location]' value='<?php echo $options['scseo_location']; ?>' placeholder="Salvador, Bahia, Brazil">
    </div> <?php
}

// language
function scseo_language_render() {
    $options = get_option( 'scseo_language' ); ?>
    <div class="form-group">
        <input type='text' class='form-control' name='scseo_settings[scseo_language]' value='<?php echo $options['scseo_language']; ?>' placeholder="PT-BR">
    </div> <?php
}

// coordinates
function scseo_coordinates_render() {
    $options = get_option( 'scseo_settings' ); ?>
    <div class="form-group">
        <input type='text' class='form-control' name='scseo_settings[scseo_coordinates]' value='<?php echo $options['scseo_coordinates']; ?>' placeholder="-13.000671, -38.452555">
    </div> <?php
}

// analytics
function scseo_analytics_render() {
    $options = get_option( 'scseo_settings' ); ?>
    <div class="form-group">
        <input type='text' class='form-control' name='scseo_settings[scseo_analytics]' value='<?php echo $options['scseo_analytics']; ?>' placeholder='UA-XXXXXX-X'>
    </div> <?php
}


function scseo_settings_section_callback() {
    echo __( 'Insert the required information for a better SEO', 'scseo' );
}


function sc_simple_seo_options_page() { ?>
    <div class="wrap sc-to-top-page container">
        <form action='options.php' method='post'>

            <?php
            settings_fields( 'scSimpleSEO' );
            do_settings_sections( 'scSimpleSEO' );
            submit_button();
            ?>

        </form>
    </div> <?php
}