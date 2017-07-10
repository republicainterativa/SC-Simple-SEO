<?php

add_action( 'admin_menu', 'scseo_add_admin_menu' );
add_action( 'admin_init', 'scseo_settings_init' );

function scseo_add_admin_menu() {

    add_menu_page(
        'SC Simple SEO',
        'SC Simple SEO',
        'manage_options',
        'sc_simple_seo',
        'sc_simple_seo_options_page',
        'dashicons-chart-area'
    );

}

function scseo_settings_init() {

    register_setting( 'scSimpleSEO', 'scseo_settings' );

    add_settings_section(
        'scseo_scSimpleSEO_section',
        __( 'SC Simple SEO', 'scseo' ),
        'scseo_settings_section_callback',
        'scSimpleSEO'
    );

    // description
    add_settings_field(
        'scseo_description',
        __( 'Describe your website', 'scseo' ),
        'scseo_description_render',
        'scSimpleSEO',
        'scseo_scSimpleSEO_section'
    );

    // tags
    add_settings_field(
        'scseo_tags',
        __( 'Insert tags associated to the site subject (separated by commas)', 'scseo' ),
        'scseo_tags_render',
        'scSimpleSEO',
        'scseo_scSimpleSEO_section'
    );

    // author
    add_settings_field(
        'scseo_author',
        __( 'Insert authors names (separated by commas)', 'scseo' ),
        'scseo_author_render',
        'scSimpleSEO',
        'scseo_scSimpleSEO_section'
    );

    // site subject
    add_settings_field(
        'scseo_subject',
        __( 'Insert the subject of the website', 'scseo' ),
        'scseo_subject_render',
        'scSimpleSEO',
        'scseo_scSimpleSEO_section'
    );

    // city and state
    add_settings_field(
        'scseo_location',
        __( 'Insert your location', 'scseo' ),
        'scseo_location_render',
        'scSimpleSEO',
        'scseo_scSimpleSEO_section'
    );

    // language
    add_settings_field(
        'scseo_language',
        __( 'Insert your language', 'scseo' ),
        'scseo_language_render',
        'scSimpleSEO',
        'scseo_scSimpleSEO_section'
    );

    // coordinates
    add_settings_field(
        'scseo_coordinates',
        __( 'Insert the coordinates (Google Maps)', 'scseo' ),
        'scseo_coordinates_render',
        'scSimpleSEO',
        'scseo_scSimpleSEO_section'
    );

    // analytics
    add_settings_field(
        'scseo_analytics',
        __( 'Insert your Google Analytics ID', 'scseo' ),
        'scseo_analytics_render',
        'scSimpleSEO',
        'scseo_scSimpleSEO_section'
    );


}