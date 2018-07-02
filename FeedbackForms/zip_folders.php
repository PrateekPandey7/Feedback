<?php

    $zipname = 'EmpanelmentReport.zip';
    $zip = new ZipArchive;
    $zip->open($zipname, ZipArchive::CREATE);
    if ($handle = opendir('.')) 
    {
      while (false !== ($entry = readdir($handle))) 
      {
        echo "hi";
        if ($entry != "." && $entry != ".." && strstr($entry, '.pdf')) //!strstr($entry,'.php') && !strstr($entry,'.zip')) 
        {
            $zip->addFile($entry);
        }
      }
      closedir($handle);
    }

    $zip->close();

    header('Content-Type: application/zip');
    header("Content-Disposition: attachment; filename= $zipname");
    header('Content-Length: ' . filesize($zipname));
    header("Location: $zipname");

?>