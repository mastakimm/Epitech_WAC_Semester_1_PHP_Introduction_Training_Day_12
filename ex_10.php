<?php

array_shift($argv);

foreach ($argv as $arg) {
    echo sha1($arg) . PHP_EOL;
}
