<?php
\Tina4\Module::addModule("Login Module", "1.0.0", "login", static function (\Tina4\Config $config) {
    (new Content())->addConfigMethods($config);
});