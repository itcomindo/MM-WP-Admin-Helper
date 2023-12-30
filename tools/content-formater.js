window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function ($) {

        function wahDragAble() {
            jQuery(function ($) {
                var elem = $('.wah-tools-wr');
                var height = elem.outerHeight();
                var width = elem.outerWidth();
                var marginTop = -height / 2;
                var marginLeft = -width / 2;
                elem.css({
                    'margin-top': marginTop + 'px',
                    'margin-left': marginLeft + 'px'
                });
            });

            $("#wah-content-formater").draggable();
            $(".tools-player").resizable(
                {
                    minWidth: 300,
                    maxWidth: 600,
                    minHeight: 300,
                    maxHeight: 600,
                }
            );
        }
        wahDragAble();
        $('.wah-box-wr li').click(function () {
            var action = $(this).data('action');
            var content = $('#wah-content-formater-content').val();
            if (action === 'pmaker') {
                content = content.split('\n')
                    .filter(line => line.trim() !== '')
                    .map(line => '<p>' + line.trim() + '</p>')
                    .join('\n');
                $('#wah-content-formater-content').val('');
                $('#wah-content-formater-content-result').val(content);
            }

            if (action === 'h1maker') {
                content = '<h1>' + content + '</h1>';
                $('#wah-content-formater-content').val('');
            }

            if (action === 'h2maker') {
                content = '<h2>' + content + '</h2>';
                $('#wah-content-formater-content').val('');
            }

            if (action === 'h3maker') {
                content = '<h3>' + content + '</h3>';
                $('#wah-content-formater-content').val('');
            }

            if (action === 'h4maker') {
                content = '<h4>' + content + '</h4>';
                $('#wah-content-formater-content').val('');
            }

            if (action === 'h5maker') {
                content = '<h5>' + content + '</h5>';
                $('#wah-content-formater-content').val('');
            }

            if (action === 'h6maker') {
                content = '<h6>' + content + '</h6>';
                $('#wah-content-formater-content').val('');
            }

            if (action === 'quotemaker') {
                content = '<blockquote>' + content + '</blockquote>';
                $('#wah-content-formater-content').val('');
            }

            if (action === 'olmaker') {
                content = content.split('\n')
                    .filter(line => line.trim() !== '')
                    .map(line => '<li>' + line.trim() + '</li>')
                    .join('\n');
                content = '<ol>\n' + content + '\n</ol>';
                $('#wah-content-formater-content').val('');
                $('#wah-content-formater-content-result').val(content);
            }

            if (action === 'ulmaker') {
                content = content.split('\n')
                    .filter(line => line.trim() !== '')
                    .map(line => '<li>' + line.trim() + '</li>')
                    .join('\n');
                content = '<ul>\n' + content + '\n</ul>';
                $('#wah-content-formater-content').val('');
                $('#wah-content-formater-content-result').val(content);
            }

            if (action === 'locasemaker') {
                content = content.toLowerCase();
                $('#wah-content-formater-content').val('');
                $('#wah-content-formater-content-result').val(content);
            }

            if (action === 'capcasemaker') {
                content = content.toLowerCase().replace(/\b[a-z]/g, function (letter) {
                    return letter.toUpperCase();
                });
                $('#wah-content-formater-content').val('');
            }

            if (action === 'uppercasemaker') {
                content = content.toUpperCase();
                $('#wah-content-formater-content').val('');
            }

            if (action === 'spctodashedmaker') {
                content = content.replace(/\s+/g, '-');
                $('#wah-content-formater-content').val('');
            }

            if (action === 'spctounderscore') {
                content = content.replace(/\s+/g, '_');
                $('#wah-content-formater-content').val('');
            }

            if (action === 'newlinetocommamaker') {
                content = content.split('\n')
                    .filter(line => line.trim() !== '')
                    .join(', ');
                $('#wah-content-formater-content-result').val(content);
                $('#wah-content-formater-content').val('');
            }

            if (action === 'commatonewlinemaker') {
                content = content.replace(/\s*,\s*/g, '\n');
                $('#wah-content-formater-content-result').val(content);
                $('#wah-content-formater-content').val('');
            }

            if (action === 'shortascmaker') {
                content = content.split('\n').sort().join('\n');
                $('#wah-content-formater-content').val('');
            }

            if (action === 'shortdescmaker') {
                content = content.split('\n').sort().reverse().join('\n');
                $('#wah-content-formater-content').val('');
            }

            if (action === 'googleadskeywordpharesmaker') {
                content = content.split('\n')
                    .filter(line => line.trim() !== '')
                    .map(line => '"' + line.trim() + '"')
                    .join('\n');
                $('#wah-content-formater-content-result').val(content);
                $('#wah-content-formater-content').val('');
            }

            if (action === 'googleadskeywordmatchedmaker') {
                content = content.split('\n')
                    .filter(line => line.trim() !== '')
                    .map(line => '[' + line.trim() + ']')
                    .join('\n');
                $('#wah-content-formater-content-result').val(content);
                $('#wah-content-formater-content').val('');
            }

            if (action === 'windowsfilenamesafemaker') {
                content = content.replace(/[^a-z0-9]/gi, '-').toLowerCase();
                $('#wah-content-formater-content').val('');
            }

            $('#wah-content-formater-content-result').val(content);
            navigator.clipboard.writeText(content);
        });

        $('#wah-copy').click(function () {
            var content = $('#wah-content-formater-content-result').val();
            navigator.clipboard.writeText(content);
        });

        $('#wah-reset').click(function () {
            $('#wah-content-formater-content').val('');
            $('#wah-content-formater-content-result').val('');
        });
    });
});