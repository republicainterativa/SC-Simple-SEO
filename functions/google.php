<?php

/*
 * Google Analytics
 */
function google_analytics() {
    $options = get_option( 'scseo_settings' );
    if ( $options["scseo_analytics"] ) { ?>
        <script type='text/javascript'>
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', '<?php echo $options["scseo_analytics"]; ?>']);
            _gaq.push(['_trackPageview']);
            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script> <?php
    }
}
add_action('wp_footer', 'google_analytics');