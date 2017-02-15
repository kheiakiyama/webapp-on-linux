<?php

echo('dummy/index.php');

foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}