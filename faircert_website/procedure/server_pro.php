<?php 
$zipNo =$_GET['zipname'];
$files=array();
$file_name='';
if($zipNo==1){
$files = array($_SERVER['DOCUMENT_ROOT'].'/faircert_website/images/demo/src/FairCert Certification Procedure160108PK.pdf');
$file_name='Certification Procedure';

}
# create new zip opbject
$zip = new ZipArchive();

# create a temp file & open it
$tmp_file = tempnam('.','');
$zip->open($tmp_file, ZipArchive::CREATE);

# loop through each file
foreach($files as $file){

    # download file
    $download_file = file_get_contents($file);

    #add it to the zip
    $zip->addFromString(basename($file),$download_file);

}

# close zip
$zip->close();

# send the file to the browser as a download
header('Content-disposition: attachment; filename='.$file_name.'.zip');
header('Content-type: application/zip');
readfile($tmp_file);?>

?>