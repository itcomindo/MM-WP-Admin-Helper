<?php

/**
 * Prism Creator Tool
 */

defined('ABSPATH') or die('No script kiddies please!');

function wah_prism_creator_tool()
{
?>
    <div id="wah-prism" class="wah wah-fixed wah tools-box-wr">
        <div id="wah-prism-close" class="wah-trigger-close"></div>
        <div class="wah-tools-box">
            <label for="original-code">Masukan Kode</label>
            <textarea name="original-code" id="original-code" cols="5" rows="3"></textarea>
        </div>
        <div class="wah-tools-box">
            <ul id="wah-prism-items-wr" class="wah-no-border wah-cursor">
                <li data-action-prism="html">HTML</li>
                <li data-action-prism="css">CSS</li>
                <li data-action-prism="javascript">Javascript</li>
                <li data-action-prism="php">PHP</li>
                <li data-action-prism="bash">Bash</li>
                <li data-action-prism="c">C</li>
                <li data-action-prism="csharp">C#</li>
                <li data-action-prism="cpp">C++</li>
                <li data-action-prism="git">Git</li>
                <li data-action-prism="java">Java</li>
                <li data-action-prism="json">JSON</li>
                <li data-action-prism="markdown">Markdown</li>
            </ul>
        </div>
        <div class="wah-tools-box">
            <label for="result-code">Hasil</label>
            <textarea name="result-code" id="result-code" cols="5" rows="3"></textarea>
        </div>

        <div class="wah-tools-box wah-button-wr">
            <button id="wah-copy-prism" class="wah-button wah-copy">Copy</button>
            <button id="wah-reset-prism" class="wah-button wah-copy">Reset</button>
        </div>




    </div>
<?php
}


add_action('wp_footer', 'wah_prism_creator_tool', 100);
