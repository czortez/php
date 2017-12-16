<?php
$allocatedMemory = memory_get_usage();
$megaByte = ($allocatedMemory / 1024 /1204);
if ($allocatedMemory < 640) {
    echo '640 KB wystarczy kazdemu';
} else {
    echo ' Potrzebujesz  ' .$megaByte. ' MB ';
};


