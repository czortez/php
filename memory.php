<?php
$allocatedMemory = memory_get_usage();

if ($allocatedMemory < 640) {
    echo '640 KB wystarczy kazdemu';
} else {
    echo "Bill Gates nie maial racji";
};


