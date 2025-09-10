<?php
// basePath is the browsable path to jBin (i.e. on a web browser, e.g. "https://matthy.dev/jbin/" or "//localhost/jbin/").
// Tips:
// Local paths like localhost need 2 slashes in front of them for writing properly, so "localhost/jbin/" should be "//localhost/jbin/"
// Default: '//localhost/jbin/'
$basePath = '//localhost/jbin/';

// baseDirPath should be the *absolute* path to the jBin root directory, the same path as $basePath but in a file manager rather than a web browser.
// e.g. /var/www/jbin/
// Tips:
// Make sure this is an *absolute* path starting with "/", not a relative path like "./srv/"!
// Default: '/srv/http/jbin/'
$baseDirPath = '/srv/http/jbin/';

// storageUrlPath is appended onto basePath and baseDirPath for storing and viewing the files. 
// Tips:
// Resulting files will thus be stored in $basePath . $baseDirPath
// Examples:
//If $basePath is "//localhost/jbin/", $baseDirPath is "/srv/http/jbin", and "storageUrlPath" is "storage/", the text files will be stored in "/srv/http/jbin/storage/*.html", and browsable to via "//localhost/jbin/storage/*.html".
// Defauklt: 'storage/'
$storageUrlPath = 'storage/';

// rawPath is the path to retrieving *raw* text files from the server.
// Tips:
// rawPath is also appended to $basePath, but exists only symbolically, not as an actual directoiry. 
// Make sure to change .htaccess if you change this. 
// Examples:
// If you save a file containing "Hello, World!" to "storage/test123456.html", the HTML file will have additional stuff in it (almost a kilobyte of extra stuff). Meanwhile, "r/test123456.html" will contain just "Hello, World!" without the additional HTML jargon.
// Default: 'r/'
$rawPath = 'r/';

// urlLength is the length of random characters in the URL when you save a text file.
// Tips:
// Will generate $urlLength amount of characters in the regex pattern [A-Za-z0-9] (any alphanumeric character). 
// Examples:
// 03PUJ1GXs3 (with urlLength 10)
// 0nLKF (with urlLength 5)
// 2xJQhFQF0l315P9j (with urlLength 16)
// Default: 10
$urlLength = 10;

// DON'T MODIFY the below stuff!

$storagePath = $baseDirPath . $storageUrlPath;
$urlStoragePath = $basePath . $storageUrlPath;
?>
