<?php

$source = __DIR__ . '/vendor/igorescobar/jquery-mask-plugin/dist/jquery.mask.min.js';
$destination = __DIR__ . '/assets/js/jquery.mask.min.js';

// Check if the source file exists
if (file_exists($source)) {
    // Create the destination directory if it doesn't exist
    $destinationDir = dirname($destination);
    if (!is_dir($destinationDir)) {
        mkdir($destinationDir, 0777, true);
    }
    
    // Copy the file
    if (copy($source, $destination)) {
        echo "Copied jQuery mask plugin successfully.\n";
    } else {
        echo "Failed to copy jQuery mask plugin.\n";
    }
} else {
    echo "Source file does not exist: $source\n";
}
