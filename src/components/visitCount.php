<?php
// File to store the visit count
$filename = "visit_count.txt";

// Check if the file exists and is readable
if (is_readable($filename)) {
    // Read the current count from the file
    $count = file_get_contents($filename);
    // Increment the count
    $count++;
} else {
    // If the file doesn't exist, start with 1
    $count = 1;
}

// Write the new count to the file
file_put_contents($filename, $count);

// Output the current count (for the front-end to use)
echo $count;
