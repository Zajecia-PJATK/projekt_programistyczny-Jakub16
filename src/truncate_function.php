<?php
    function truncate($text, $length) {
        if(strlen($text) <= $length) {
            return $text;
        }
        else {
            return substr($text, 0, $length) . "(...)<div class = 'blog_redirect_text'><br>Kliknij aby przeczytać resztę!</div>";
        }
    }