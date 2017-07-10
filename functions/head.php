<?php

function inserthead() {
    global $post;
    $options = get_option( 'scseo_settings' );

    // General Variables
    $mtitle_default = get_bloginfo('name');
    $title_default  = get_bloginfo('name');
    $keys_default   = "'" . $options['scseo_tags'] . "'";
    $mlink_default  = get_bloginfo('url');
    $link_default   = get_bloginfo('url');
    $desc_default   = $options['scseo_description'];
    $subj_default   = $options['scseo_subject'];
    $image_default  = get_template_directory_uri().'/screenshot.png';
    if (is_single() || is_page()) {
        $title_default = get_the_title($post->ID);
        $link_default  = get_permalink();
        if(has_post_thumbnail()){
            $image_ID      = get_post_thumbnail_id( $post->ID );
            $image_default = wp_get_attachment_image_src($image_ID, 'large');
            $image_default = $image_default[0];
        }
    }

    if (!is_404()) {
        $posttags = wp_get_post_tags( $post->ID );
    } else {
        $posttags = 'error 404, 404, not found, page not found';
    }
    ?>

    <?php if ($options['scseo_author']) 		{ ?> <meta name="author" content="<?php echo $options['scseo_author']; ?>" /> <?php } ?>
    <?php if ($options['scseo_tags']) 			{ ?> <meta name="keywords" content="<?php echo $keys_default; ?>, <?php if($posttags){foreach($posttags as $tag){echo $tag->name . ', ';}}; ?>" /> <?php } ?>
    <meta name="description" content="<?php echo $desc_default; ?>" />

    <meta name="copyright" content="&copy; Copyright <?php echo date('Y'); ?> <?php echo $title_default; ?>" />
    <?php
    if(is_single() || is_page() || is_category() || is_home()) {
        echo '<meta name="robots" content="all,noodp" />';
        echo "\n";
    }
    else if(is_archive()) {
        echo '<meta name="robots" content="noarchive,noodp" />';
        echo "\n";
    }
    else if(is_search() || is_404()) {
        echo '<meta name="robots" content="noindex,noarchive" />';
        echo "\n";
    }
    ?>

    <!-- Opeh Graph Meta Tags -->
    <meta property="og:title" content="<?php echo $title_default; ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?php echo $link_default; ?>"/>
    <meta property="og:image" content="<?php echo $image_default; ?>"/>
    <meta property="og:site_name" content="<?php echo $title_default; ?>"/>
    <meta property="og:description" content="<?php echo $desc_default; ?>"/>

    <!-- Dublin Core Meta Tags -->
     <meta name="dc.language" content="<?php echo $options['scseo_language']; ?>">
    <meta name="dc.source" content="<?php echo $mlink_default; ?>">
    <meta name="dc.relation" content="<?php echo $link_default; ?>">
    <meta name="dc.title" content="<?php echo $mtitle_default; ?>">
    <meta name="dc.keywords" content="<?php echo $keys_default; ?>, <?php if($posttags){foreach($posttags as $tag){echo $tag->name . ', ';}}; ?>">
    <meta name="dc.subject" content="<?php echo $options['scseo_subject']; ?>">
    <meta name="dc.description" content="<?php echo $desc_default; ?>">

    <!-- Google Geo Location -->
    <!-- <meta name="geo.region" content="BR-BA" /> -->
    <meta name="geo.placename" content="<?php echo $options['scseo_location']; ?>" />
    <meta name="geo.position" content="<?php echo $options['scseo_coordinates']; ?>" />
    <meta name="ICBM" content="<?php echo $options['scseo_coordinates']; ?>" />

    <!-- Dublin Core Meta Data -->
    <meta name="dc.language" content="<?php echo $options['scseo_language']; ?>">
    <meta name="dc.creator" content="<?php echo $mtitle_default; ?>">
    <meta name="dc.publisher" content="<?php echo $mtitle_default; ?>">
    <meta name="dc.source" content="<?php echo $mlink_default; ?>">
    <meta name="dc.relation" content="<?php echo $link_default; ?>">
    <meta name="dc.title" content="<?php echo $title_default; ?>">
    <meta name="dc.keywords" content="<?php echo $keys_default; ?>, <?php if($posttags){foreach($posttags as $tag){echo $tag->name . ', ';}}; ?>">
    <meta name="dc.subject" content="<?php echo $subj_default; ?>">
    <meta name="dc.description" content="<?php echo $desc_default; ?>"> <?php

}
add_action('wp_head', 'inserthead');