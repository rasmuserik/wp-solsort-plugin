<?php
/**
 * @package solsort.js
 * @version 0.0.2
 */
/*
Plugin Name: solsort.js
Description: Just add solsort.js to page
Author: RasmusErik
Version: 0.0.2
Author URI: https://solsort.com
*/


function script_solsortjs() {
  echo "<script type=\"text/javascript\"> var _paq = _paq || []; _paq.push([\"setCookieDomain\", \"*.solsort.com\"]); _paq.push([\"setDomains\", [\"*.solsort.com\"]]); _paq.push(['trackPageView']); _paq.push(['enableLinkTracking']); (function() { var u=\"/piwik/\"; _paq.push(['setTrackerUrl', u+'piwik.php']); _paq.push(['setSiteId', 1]); var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s); })(); </script><noscript><p><img src=\"/piwik/piwik.php?idsite=1\" style=\"border:0;\" alt=\"\" /></p></noscript>";
	echo '<script src="/solsort.js"></script>';
}

add_action( 'wp_print_footer_scripts', 'script_solsortjs' );

/**
 * Solsort Logo Widget
 */
class Solsort_Logo extends WP_Widget {
    /** constructor */
    function __construct() {
        parent::__construct(false, $name = 'Solsort logo');  
    }
    /** @see WP_Widget::widget */
    function widget($args, $instance) { 
        ?>
<aside style="text-align: center" class="widget">
  <a href="https://solsort.com/">
    <img src=/icons/solsort.png width=50%>
    <h2 class="widget-title">solsort.com</h2>
  </a>
</aside>
<?php
    }
}
add_action('widgets_init', function() {
  register_widget( 'Solsort_Logo' );
});
?>
