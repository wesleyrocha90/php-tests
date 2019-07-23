<?php

class HTML {

    private static $script = '';

    static function input($inputValue) {
        $id = self::randomId();

        self::appendScript("$('#{$id}').puiinputtext();\n");
        return "<input id={$id} value={$inputValue}>";
    }

    private static function randomId() {
        return bin2hex(random_bytes(10));;
    }

    private static function appendScript($script) {
        self::$script .= $script;
    }

    static function script() {
        return self::$script;
    }
}

?>