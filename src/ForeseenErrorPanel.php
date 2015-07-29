<?php

namespace obo;

class ForeseenErrorPanel {

    public static function addPanel($e) {
        if ($e instanceof \obo\Exceptions\Exception && $e->foreseenFileError !== null && $e->foreseenLineError !== null) {
            return [
                "tab" =>"Foreseen Error",
                "panel" => \Tracy\BlueScreen::highlightFile($e->foreseenFileError, (int) $e->foreseenLineError, 20)
            ];
        }
    }
}
