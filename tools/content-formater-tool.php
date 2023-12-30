<?php

/**
 * Content Formater Tool
 */
defined('ABSPATH') or die('No script kiddies please!');
function wah_content_formater_tool()
{
?>
    <div id="wah-content-formater" class="wah wah-tools-wr">
        <div id="wah-content-formater-close" class="wah-trigger-close"></div>
        <div class="tools-player">
            <div class="wah-tools-box">
                <label for="wah-content-formater-content">Masukan Kontent</label>
                <textarea name="wah-content-formater-content" id="wah-content-formater-content" cols="30" rows="3"></textarea>
            </div>
            <div class="wah-tools-box">
                <ul class="wah-no-border wah-box-wr">
                    <li data-action="pmaker">P</li>
                    <li data-action="h1maker">H 1</li>
                    <li data-action="h2maker">H 2</li>
                    <li data-action="h3maker">H 3</li>
                    <li data-action="h4maker">H 4</li>
                    <li data-action="h5maker">H 5</li>
                    <li data-action="h6maker">H 6</li>
                    <li data-action="quotemaker">Quote</li>
                    <li data-action="olmaker">ol</li>
                    <li data-action="ulmaker">ul</li>
                    <li data-action="locasemaker">Lowercase</li>
                    <li data-action="capcasemaker">Capitalize</li>
                    <li data-action="uppercasemaker">Uppercase</li>
                    <li data-action="spctodashedmaker">Space to dashed</li>
                    <li data-action="spctounderscore">Space to Underscore</li>
                    <li data-action="newlinetocommamaker">Newline to Comma</li>
                    <li data-action="commatonewlinemaker">Comma to Newline</li>
                    <li data-action="shortascmaker">Short ASC</li>
                    <li data-action="shortdescmaker">Short DESC</li>
                    <li data-action="googleadskeywordpharesmaker">Keyword Phrase</li>
                    <li data-action="googleadskeywordmatchedmaker">Keyword Matched</li>
                    <li data-action="windowsfilenamesafemaker">Windows Safe Name</li>
                </ul>
            </div>
            <div class="wah-tools-box">
                <label for="wah-content-formater-content-result">Hasil</label>
                <textarea name="wah-content-formater-content-result" id="wah-content-formater-content-result" cols="30" rows="3"></textarea>
            </div>
            <div class="wah-tools-box wah-button-wr">
                <button id="wah-copy">Copy</button>
                <button id="wah-reset">Reset</button>
            </div>
        </div>
    </div>
<?php
}
add_action('wp_footer', 'wah_content_formater_tool', 100);
