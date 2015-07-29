<?php

namespace obo;

class TracyBridge {

    public static function initialize() {
        \Tracy\Debugger::getBar()->getPanel("Tracy:info")->data["Obo"] = \obo\obo::_VERSION;
        \Tracy\Debugger::getBlueScreen()->info[] = "Obo " . \obo\obo::_VERSION;
        \Tracy\Debugger::getBlueScreen()->addPanel("obo\\ForeseenErrorPanel::addPanel");
    }
}
