window.addEventListener('DOMContentLoaded', (event) => {

    jQuery(function () {
















        // Fungsi untuk mengubah string menjadi HTML entities
        function encodeHtmlEntities(str) {
            return jQuery('<div/>').text(str).html();
        }

        // Fungsi untuk membungkus kode dengan tag pre dan code sesuai bahasa
        function wrapCodeWithPrism(code, language) {
            return '<pre><code class="line-numbers language-' + language + '">' + code + '</code></pre>';
        }

        // Event handler untuk klik pada setiap li
        jQuery('#wah-prism-items-wr li').click(function () {
            var language = jQuery(this).data('action-prism');
            var originalCode = jQuery('#original-code').val();
            var encodedCode = encodeHtmlEntities(originalCode);
            var wrappedCode = wrapCodeWithPrism(encodedCode, language);

            // Menampilkan kode hasil di textarea
            jQuery('#result-code').val(wrappedCode);

            // Mengosongkan textarea original-code
            jQuery('#original-code').val('');

            // Menyalin kode ke clipboard
            navigator.clipboard.writeText(wrappedCode);

            // Mengaktifkan tombol copy dan reset
            jQuery('#wah-copy-prism, #wah-reset-prism').prop('disabled', false);
        });

        // Event handler untuk tombol copy
        jQuery('#wah-copy-prism').click(function () {
            var resultCode = jQuery('#result-code').val();
            navigator.clipboard.writeText(resultCode);
        });

        // Event handler untuk tombol reset
        jQuery('#wah-reset-prism').click(function () {
            jQuery('#original-code, #result-code').val('');
        });
    });



});