window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function () {
        wahSeoTools();
        function wahSeoTools() {
            jQuery('#wah-seo-tools').slideUp();
            var hostName = window.location.hostname;
            var protocol = window.location.protocol;
            var pathName = window.location.pathname;
            var href = window.location.href;
            var $seoToolsItem = jQuery('.seo-tool-item');
            $seoToolsItem.on('click', function () {
                var $cekThis = jQuery(this).attr('data-seo-tools');
                //cek global index
                if ($cekThis == 'cek-global-index') {
                    window.open('https://www.google.com/search?q=site:' + hostName, '_blank');
                }
                //curent page index
                if ($cekThis == 'cek-current-index') {
                    window.open('https://www.google.com/search?q=site:' + href, '_blank');
                }
                //cek global cache
                if ($cekThis == 'cek-global-cache') {
                    window.open('https://webcache.googleusercontent.com/search?q=cache:' + href, '_blank');
                }
                //cek whois
                if ($cekThis == 'cek-whois') {
                    window.open('https://who.is/whois/' + hostName, '_blank');
                }
                if ($cekThis == 'cek-backlink') {
                    window.open('https://app.neilpatel.com/en/seo_analyzer/backlinks?domain=' + href + '&lang=id&locId=2360&mode=domain', '_blank');
                }
                // ceck page speed
                if ($cekThis == 'cek-page-speed') {
                    window.open('https://developers.google.com/speed/pagespeed/insights/?url=' + href, '_blank');
                }
                //cek mobile friendly
                if ($cekThis == 'cek-mobile-friendly') {
                    window.open('https://search.google.com/test/mobile-friendly?url=' + href, '_blank');
                }
                //cek ssl
                if ($cekThis == 'cek-ssl') {
                    window.open('https://www.sslshopper.com/ssl-checker.html#hostname=' + hostName, '_blank');
                }
                //cek robot.txt
                if ($cekThis == 'cek-robot-txt') {
                    window.open(protocol + '//' + hostName + '/robots.txt', '_blank');
                }
                //cek sitemap
                if ($cekThis == 'cek-sitemap') {
                    window.open(protocol + '//' + hostName + '/sitemap.xml', '_blank');
                }
                //cek domain authority
                if ($cekThis == 'cek-domain-authority') {
                    window.open('https://www.prepostseo.com/domain-authority-checker', '_blank');
                }
                //cek page authority
                if ($cekThis == 'cek-page-authority') {
                    window.open('https://www.prepostseo.com/page-authority-checker', '_blank');
                }
                //cek moz rank
                if ($cekThis == 'cek-moz-rank') {
                    window.open('https://www.prepostseo.com/mozrank-checker', '_blank');
                }
            });
        }








        wahCallSeoTools();
        function wahCallSeoTools() {
            jQuery('#wah-call-seo-tools').click(function () {
                var $wahSeoTools = jQuery('#wah-seo-tools');
                $wahSeoTools.slideDown(); // temporary
                jQuery('#wah-main-container').slideUp();
            });
        }

        wahCloseSeoTools();
        function wahCloseSeoTools() {
            var $wahCloseSeoTools = jQuery('#wah-seo-tools-close');
            $wahCloseSeoTools.on('click', function () {
                var $wahSeoTools = jQuery('#wah-seo-tools');
                $wahSeoTools.slideUp(); // temporary
            });
        }




















    });
});