window.addEventListener('DOMContentLoaded', (event) => {

    jQuery(function () {

        // PRISM CREATOR TOOL START

        jQuery('#wah-prism').slideUp();


        function wahCallPrismCreatorTool() {
            jQuery('#wah-call-prism-creator-tool').click(function () {
                var $wahPrism = jQuery('#wah-prism');
                $wahPrism.slideDown();
                jQuery('#wah-main-container').slideUp();
                jQuery('#tools-main-container').slideUp();
                jQuery('#wah-trigger').slideUp();
            });
        }
        wahCallPrismCreatorTool();

        function wahPrismCreatorToolClose() {
            jQuery('#wah-prism-close').click(function () {
                var $wahPrism = jQuery('#wah-prism');
                $wahPrism.slideUp();
                jQuery('#tools-main-container').slideDown();
                jQuery('#wah-trigger').slideDown();
            });
        }
        wahPrismCreatorToolClose();


        // PRISM CREATOR TOOL END




        // temporary end


        wahTrigger();
        function wahTrigger() {
            var $wahTrigger = jQuery('#wah-trigger');
            $wahTrigger.on('click', function () {
                var $wahMainContainer = jQuery('#wah-main-container');
                $wahMainContainer.slideDown(); // temporary
            });
        }


        wahToolsMainContainer();
        function wahToolsMainContainer() {
            var $wahToolsMainContainer = jQuery('#tools-main-container');
            $wahToolsMainContainer.slideUp(); // temporary
        }

        wahCallToolsMainContainer();
        function wahCallToolsMainContainer() {
            jQuery('#wah-call-tools-main-container').click(function () {
                var $wahToolsMainContainer = jQuery('#tools-main-container');
                $wahToolsMainContainer.slideDown(); // temporary
                jQuery('#wah-main-container').slideUp();

            });
        }


        // membuka content formater
        wahCallContentFormater();
        function wahCallContentFormater() {
            jQuery('#wah-call-content-formater').click(function () {
                var $wahContentFormater = jQuery('#wah-content-formater');
                $wahContentFormater.slideDown(); // temporary
                jQuery('#wah-main-container').slideUp();
                jQuery('#tools-main-container').slideUp();
                jQuery('#wah-trigger').slideUp();
            });
        }


        wahCloseContainer();
        function wahCloseContainer() {
            var $wahCloseContainer = jQuery('#wah-close-container');
            $wahCloseContainer.on('click', function () {
                var $wahMainContainer = jQuery('#wah-main-container');
                $wahMainContainer.slideUp(); // temporary
            });
        }


        wahMainContainer();
        function wahMainContainer() {
            var $wahMainContainer = jQuery('#wah-main-container');
            $wahMainContainer.slideUp(); // temporary
        }



        wahContentFormater();
        function wahContentFormater() {
            var $contentFormater = jQuery('#wah-content-formater');
            $contentFormater.slideUp(); // temporary
        }


        //menutup content formater
        wahContentFormaterClose();
        function wahContentFormaterClose() {
            var $contentFormaterClose = jQuery('#wah-content-formater-close');
            $contentFormaterClose.on('click', function () {
                var $contentFormater = jQuery('#wah-content-formater');
                $contentFormater.slideUp();
                jQuery('#tools-main-container').slideDown();
                jQuery('#wah-trigger').slideDown();
            });

        }

        wahCloseToolsContainer();
        function wahCloseToolsContainer() {
            var $wahCloseToolsContainer = jQuery('#wah-close-tools-container');
            $wahCloseToolsContainer.on('click', function () {
                var $wahToolsMainContainer = jQuery('#tools-main-container');
                $wahToolsMainContainer.slideUp(); // temporary
                jQuery('#wah-main-container').slideDown();
            });

        }



        wahLoadShortcutContainer();
        function wahLoadShortcutContainer() {
            var $wahShortcutContainer = jQuery('.wah-shortcut-container');
            $wahShortcutContainer.slideUp(); // Menutup semua container ketika halaman dimuat

            var $wahShortcutTrigger = jQuery('.wah-shortcut-trigger');

            $wahShortcutTrigger.on('click', function () {
                var $this = jQuery(this);
                var $nextContainer = $this.next('.wah-shortcut-container');

                if ($nextContainer.hasClass('active')) {
                    // Jika container berikutnya sudah aktif, tutup container ini saja
                    $nextContainer.slideUp().removeClass('active');
                    $this.removeClass('active');
                } else {
                    // Tutup semua container lainnya dan buka container yang di-klik
                    $wahShortcutContainer.slideUp().removeClass('active');
                    $wahShortcutTrigger.removeClass('active');
                    $nextContainer.slideDown().addClass('active');
                    $this.addClass('active');
                }
            });


        }






















    });


});