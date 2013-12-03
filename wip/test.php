<?php
// This is trying to see whether glob is inherently too slow.
// Compared with DirectoryIterator, it's not significantly different...
require_once '../boost_expire_wildcard.module';

$path = "/home/kendall/tmp/vertica";

/*
clearstatcache();
print "\nGLOB----------------------";
$start = microtime_float();
$files = glob_recursive($path . '/*');
$end = microtime_float();
$time = $end - $start;
print "\n$time: glob found " . count($files) . " files";
print "\nfirst file: " . $files[0];

 */

print "\n";


clearstatcache();
print "\nITERATOR----------------------";
$start = microtime_float();
$files = scan_files($path);
$end = microtime_float();
$time = $end - $start;
print "\n$time: scan_files found " . count($files) . " files";
print "\nfirst file: " . $files[0];



function scan_files($path) {
  $files = array();

  $directory = new RecursiveDirectoryIterator($path);
  foreach (new RecursiveIteratorIterator($directory) as $filename=>$current) {
    $file = $current->getFileName();
    if ($file == '.' || $file == '..') {
      continue;
    }
    print "\n".$filename;
    $files[] = $filename;
  }

  return $files;
}



function microtime_float() {
  list($usec, $sec) = explode(" ", microtime());
  return ((float)$usec + (float)$sec);
}
