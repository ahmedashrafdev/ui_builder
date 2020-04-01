<?php

function getFiles($directory , $execlude = null)
{
    $execlude = $execlude !== null ? $execlude : ['.' , '..'];
    //using array calues to reset array indexes to start from 0
    // using array dif to unset . , .. values from scan dir array
    $folders = array_values(array_diff(scandir($directory),$execlude));
    
    $mainFiles = [];
    foreach ($folders as $folder) {
        $subDirectory = $directory . '/' . $folder;
        try{
            $folders = array_values(array_diff(scandir($directory),$execlude));

            $files = array_values(array_diff(scandir($subDirectory), ['.', '..']));
            foreach ($files as $file) {
                $file = $folder . '/' . $file;
                $file = str_replace('.blade.php' , '' ,$file);
                array_push($mainFiles, $file);
            }
        }catch(Exception $e){
            $folder = str_replace('.blade.php' , '' ,$folder);

            array_push($mainFiles, $folder);
        }
        
    }
   return $mainFiles;
}



function extractFiles($dir , $execlude = null)
{
    
    $files = getFiles($dir , $execlude);
    $contents = [];
    foreach ($files as $file) {
        $fileParts = explode('/', $file);
        $name = str_replace('_' , ' ' , $fileParts[1]);
        $name = str_replace('.blade.php' , '' , $name);
        $content = [
            'name' => $name,
            'slug' => $file,
            'path' => str_replace(resource_path('views/') , '' ,$dir),
        ];

        array_push($contents, $content);

    }
   return $contents;
}
