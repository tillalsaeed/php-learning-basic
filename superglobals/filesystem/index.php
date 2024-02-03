<?php

// Magic Constants --------------------------------
 echo __DIR__  . '<br>'; // Show the directory

 echo __FILE__ . '<br>' ; // show the directory and file
// Create Directory --------------------------------
mkdir('test');
// Rename Directory --------------------------------
rename('test', 'myFolder');

// Delete Directory --------------------------------
rmdir('myFolder');
// Read files and folders --------------------------------
$file = scandir('./');
var_dump($file);
// file_get_contents, file_put_contents --------------------------------

// echo file_get_contents('data.docx');

// file_put_contents('text.txt', 'My Text' . PHP_EOL .file_get_contents('data.docx'));

// https://php.net/manual/en/book.filesystem.php
// files_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file
