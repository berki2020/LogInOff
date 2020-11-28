<?php

if (exif_imagetype('image.php')) {
    $file = 'count.txt';

    if (!file_exists($file)) {
        fclose(fopen($file, 'w'));
    }

    $counter = file_get_contents($file);
    file_put_contents($file, ++$counter);
}
