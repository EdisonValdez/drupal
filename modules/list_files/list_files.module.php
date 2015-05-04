<?php
function get_current_files()
{

    // the "files" directory
    $dir = drupal_realpath(file_default_scheme() . '://');

$finder = new \Symfony\Component\Finder\Finder();
$finder->in($dir)
    ->name('*.gif')
    ->date('since 1 day ago')
    ;
$files = array();
foreach($finder as $files ){
        $files[] = $file->getFilename();
    }

    return $files;
}

?>