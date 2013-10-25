<?php
namespace Jlyu;

class TinyConfig {
    function __construct($path = './conf') {
        $files = scandir($path);
        foreach ($files as $file) {
            if (!strrpos($file, '.php')) {
                continue;
            }

            $config = new \stdClass();
            foreach (require "$path/$file" as $key => $value) {
                $config->$key = $value;
            }

            $nameStart = strpos($file, '-');
            $nameEnd = strpos($file, '.');
            $group = substr($file, $nameStart + 1, $nameEnd - $nameStart - 1);

            $this->$group = $config;
        }
    }
}
