window.addEventListener('DOMContentLoaded', (event) => {

    jQuery(function ($) {

        // wahDragAble();

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

            // $(".wah-tools-wr").draggable();
            $("#wah-content-formater").draggable();
            $(".tools-player").resizable(
                {
                    // aspectRatio: 1 / 1,
                    minWidth: 300,
                    maxWidth: 600,
                    minHeight: 300,
                    // maxHeight: 600,
                }
            );

        }

        wahDragAble();





















        // function wahDragAble() {
        //     var elem = $('.wah-tools-wr');
        //     var height = elem.outerHeight();
        //     var width = elem.outerWidth();
        //     var marginTop = -height / 2;
        //     var marginLeft = -width / 2;
        //     elem.css({
        //         'margin-top': marginTop + 'px',
        //         'margin-left': marginLeft + 'px'
        //     });
        //     $(".wah-tools-wr").resizable();
        //     $("#wcf").resizable();
        // }

        // $(".wah-tools-wr").draggable();
        // $("#wcf").resizable();

        //dragaable
        // $(".wah-tools-wr").draggable({ cursor: "move", cursorAt: { top: 56, left: 56 } });






        // Fungsi untuk menangani aksi berdasarkan tombol yang ditekan
        $('.wah-box-wr li').click(function () {
            var action = $(this).data('action');
            var content = $('#wah-content-formater-content').val();


            if (action === 'pmaker') {
                content = content.split('\n') // Memisahkan konten berdasarkan baris baru
                    .filter(line => line.trim() !== '') // Mengabaikan baris kosong
                    .map(line => '<p>' + line.trim() + '</p>') // Membungkus setiap baris dengan tag <p>
                    .join('\n'); // Menggabungkan semua elemen dengan baris baru sebagai pemisah

                $('#wah-content-formater-content').val('');
                $('#wah-content-formater-content-result').val(content);
            }


            //mengubah menjadi heading 1
            if (action === 'h1maker') {
                content = '<h1>' + content + '</h1>';
                $('#wah-content-formater-content').val('');
            }

            //mengubah menjadi heading 2
            if (action === 'h2maker') {
                content = '<h2>' + content + '</h2>';
                $('#wah-content-formater-content').val('');
            }

            //mengubah menjadi heading 3
            if (action === 'h3maker') {
                content = '<h3>' + content + '</h3>';
                $('#wah-content-formater-content').val('');
            }

            //mengubah menjadi heading 4
            if (action === 'h4maker') {
                content = '<h4>' + content + '</h4>';
                $('#wah-content-formater-content').val('');
            }

            //mengubah menjadi heading 5
            if (action === 'h5maker') {
                content = '<h5>' + content + '</h5>';
                $('#wah-content-formater-content').val('');
            }

            //mengubah menjadi heading 6
            if (action === 'h6maker') {
                content = '<h6>' + content + '</h6>';
                $('#wah-content-formater-content').val('');
            }

            //mengubah jadi blockquote
            if (action === 'quotemaker') {
                content = '<blockquote>' + content + '</blockquote>';
                $('#wah-content-formater-content').val('');
            }

            //mengubah jadi ol list
            if (action === 'olmaker') {
                content = content.split('\n') // Memisahkan konten berdasarkan baris baru
                    .filter(line => line.trim() !== '') // Mengabaikan baris kosong
                    .map(line => '<li>' + line.trim() + '</li>') // Membungkus setiap baris dengan tag <li>
                    .join('\n'); // Menggabungkan semua elemen dengan baris baru sebagai pemisah

                content = '<ol>\n' + content + '\n</ol>'; // Membungkus semua item dalam tag <ol>

                $('#wah-content-formater-content').val('');
                $('#wah-content-formater-content-result').val(content);
            }

            //mengubah jadi ul list
            if (action === 'ulmaker') {
                content = content.split('\n')
                    .filter(line => line.trim() !== '')
                    .map(line => '<li>' + line.trim() + '</li>')
                    .join('\n');
                content = '<ul>\n' + content + '\n</ul>';
                $('#wah-content-formater-content').val('');
                $('#wah-content-formater-content-result').val(content);
            }


            //mengubah jadi lowercase
            if (action === 'locasemaker') {
                content = content.toLowerCase();
                $('#wah-content-formater-content').val('');
                $('#wah-content-formater-content-result').val(content);
            }

            //mengubah jadi capitalize
            if (action === 'capcasemaker') {
                content = content.toLowerCase().replace(/\b[a-z]/g, function (letter) {
                    return letter.toUpperCase();
                });
                $('#wah-content-formater-content').val('');
            }


            // Contoh: Mengubah ke uppercase
            if (action === 'uppercasemaker') {
                content = content.toUpperCase();
                $('#wah-content-formater-content').val('');
            }

            // mengubah space to dash
            if (action === 'spctodashedmaker') {
                content = content.replace(/\s+/g, '-');
                $('#wah-content-formater-content').val('');
            }

            // mengubah space to underscore
            if (action === 'spctounderscore') {
                content = content.replace(/\s+/g, '_');
                $('#wah-content-formater-content').val('');
            }

            //mengubah new line to comma
            if (action === 'newlinetocommamaker') {
                content = content.split('\n')
                    .filter(line => line.trim() !== '') // Menghilangkan baris kosong
                    .join(', ');
                $('#wah-content-formater-content-result').val(content);
                $('#wah-content-formater-content').val('');
            }


            //mengubah comma to new line
            if (action === 'commatonewlinemaker') {
                content = content.replace(/\s*,\s*/g, '\n');
                $('#wah-content-formater-content-result').val(content);
                $('#wah-content-formater-content').val('');
            }


            //mengubah sort ascending
            if (action === 'shortascmaker') {
                content = content.split('\n').sort().join('\n');
                $('#wah-content-formater-content').val('');
            }

            //mengubah sort descending
            if (action === 'shortdescmaker') {
                content = content.split('\n').sort().reverse().join('\n');
                $('#wah-content-formater-content').val('');
            }

            //menambahkan prefix " dan suffix "
            if (action === 'googleadskeywordpharesmaker') {
                content = content.split('\n')
                    .filter(line => line.trim() !== '')
                    .map(line => '"' + line.trim() + '"')
                    .join('\n');
                $('#wah-content-formater-content-result').val(content);
                $('#wah-content-formater-content').val('');
            }

            //menambahkan prefix [ dan suffix ]
            if (action === 'googleadskeywordmatchedmaker') {
                content = content.split('\n')
                    .filter(line => line.trim() !== '')
                    .map(line => '[' + line.trim() + ']')
                    .join('\n');
                $('#wah-content-formater-content-result').val(content);
                $('#wah-content-formater-content').val('');
            }


            // membuat windows safe filename windowsfilenamesafemaker
            if (action === 'windowsfilenamesafemaker') {
                content = content.replace(/[^a-z0-9]/gi, '-').toLowerCase();
                $('#wah-content-formater-content').val('');
            }




            // Setelah diproses, masukkan hasil ke textarea result dan salin ke clipboard
            $('#wah-content-formater-content-result').val(content);
            navigator.clipboard.writeText(content);
        });

        // Handler untuk tombol copy
        $('#wah-copy').click(function () {
            var content = $('#wah-content-formater-content-result').val();
            navigator.clipboard.writeText(content);
        });

        // Handler untuk tombol reset
        $('#wah-reset').click(function () {
            $('#wah-content-formater-content').val('');
            $('#wah-content-formater-content-result').val('');
        });
    });



});