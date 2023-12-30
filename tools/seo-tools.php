<?php

/**
 * SEO Tools
 */

defined('ABSPATH') or die('No script kiddies please!');


function wah_seo_tools()
{
?>
    <div id="wah-seo-tools" class="wah wah-fixed wah-h100">
        <div id="wah-seo-tools-close" class="wah-trigger-close"></div>
        <ul>
            <li class="seo-tool-item" data-seo-tools="cek-global-index">Cek Global Index</li>
            <li class="seo-tool-item" data-seo-tools="cek-current-index">Cek current index</li>
            <li class="seo-tool-item" data-seo-tools="cek-global-cache">Cek Global Cache</li>
            <li class="seo-tool-item" data-seo-tools="cek-whois">Cek Whois</li>
            <li class="seo-tool-item" data-seo-tools="cek-backlink">Cek Backlink</li>
            <li class="seo-tool-item" data-seo-tools="cek-page-speed">Cek Page Speed</li>
            <li class="seo-tool-item" data-seo-tools="cek-mobile-friendly">Cek Responsive</li>
            <li class="seo-tool-item" data-seo-tools="cek-ssl">Cek SSL</li>
            <li class="seo-tool-item" data-seo-tools="cek-robots">Cek Robots</li>
            <li class="seo-tool-item" data-seo-tools="cek-sitemap">Cek Sitemap</li>
            <!-- domain authority -->
            <li class="seo-tool-item" data-seo-tools="cek-domain-authority">Cek Domain Authority</li>
            <li class="seo-tool-item" data-seo-tools="cek-page-authority">Cek Page Authority</li>
            <li class="seo-tool-item" data-seo-tools="cek-moz-rank">Cek Moz Rank</li>

        </ul>
    </div>
<?php
}

add_action('wp_footer', 'wah_seo_tools', 100);
