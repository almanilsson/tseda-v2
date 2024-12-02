<?php
$pagesDir = __DIR__ . '/../pages';

$pageFiles = array_filter(scandir($pagesDir), function ($file) use ($pagesDir) {
    return is_file("$pagesDir/$file") && pathinfo($file, PATHINFO_EXTENSION) === 'php';
}); # all php files

echo '<nav><ul>';
foreach ($pageFiles as $file) {
    $pageName = pathinfo($file, PATHINFO_FILENAME);
    $filePath = "$pagesDir/$file";

    
    $pageLabel = ucfirst(str_replace('_', ' ', $pageName)); 
    // fetching $pageLabel variable
    // meaning all pages now need to have this format, but it centralises the changes which is nice 
    if (preg_match('/\$pageLabel\s*=\s*[\'"]([^\'"]+)[\'"]/', file_get_contents($filePath), $matches)) {
        $pageLabel = $matches[1];
    }

    echo "<li><a href=\"index.php?page=$pageName\">$pageLabel</a></li>";
}
echo '</ul></nav>';
?>
