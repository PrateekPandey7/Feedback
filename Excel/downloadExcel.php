<?php
    $prog = $_GET["name"];
    $zipname = "Excel-".$prog.'.zip';
    $zip = new ZipArchive;
    $zip->open($zipname, ZipArchive::CREATE);
    if ($handle = opendir('.')) 
    {
      while (false !== ($entry = readdir($handle))) 
      {
        if ($entry != "." && $entry != ".." && strstr($entry, '('.$prog.')'.'.csv')) //!strstr($entry,'.php') && !strstr($entry,'.zip')) 
        {
            $zip->addFile($entry);
        }
      }
      closedir($handle);
    }

    $zip->close();

    header('Content-Type: application/zip');
    //header('Content-Length: ' . filesize($zipname));
    //header("Content-Disposition: attachment; filename= $zipname");
    header("Location: $zipname");

?>