<?php
$zipNo =$_GET['zipname'];
$files=array();
$file_name='';
if($zipNo==1){
$files = array(
    $_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Crop Production-App/FMO01-01-Application Crop Production.docx',
    $_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Crop Production-App/FMO01-Application General Information.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Crop Production-App/FMO04-Certification Agreement.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Crop Production-App/FMO05-Scale of Fees.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Crop Production-App/FMO06-Sanction Catalogue.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Crop Production-App/FMO22-01-Organic Plan-Crop Production.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Crop Production-App/FairCert_Certification Procedure.pdf',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Crop Production-App/FMO26- GMO List.docx'
	
);
$file_name='CropApplicationPacket';

}else if($zipNo==2){
	$files = array(
    $_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Grower Group-App/FMO01-04-Application Grower Group.docx',
    $_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Grower Group-App/FMO01-Application General Information.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Grower Group-App/FMO04-Certification Agreement.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Grower Group-App/FMO05-Scale of Fees.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Grower Group-App/FMO06-Sanction Catalogue.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Grower Group-App/FMO22-01-Organic Plan-Crop Production.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Grower Group-App/FairCert_Certification Procedure.pdf',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Grower Group-App/FMO22-04- Organic Plan-Grower Group.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Grower Group-App/FMO26- GMO List.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Grower Group-App/FMO58-Annexure Farmer List.xls'
	
);
$file_name='Grower_group_ApplicationPacket.zip';

}else if($zipNo==3){
	$files = array(
    $_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Wild_App_Packet/FMO01-07- Application Wild Harvest.docx',
    $_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Wild_App_Packet/FMO01-Application General Information.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Wild_App_Packet/FMO04-Certification Agreement.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Wild_App_Packet/FMO05-Scale of Fees.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Wild_App_Packet/FMO06-Sanction Catalogue.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Wild_App_Packet/FMO22-07-Organic Plan-Wild Harvest.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Wild_App_Packet/FairCert_Certification Procedure.pdf',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Wild_App_Packet/FMO26- GMO List.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Wild_App_Packet/FMO58-Annexure Farmer List.xls'
	
);
$file_name='Wild_App_Packet.zip';

}else if($zipNo==4){
	$files = array(
    $_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Tender_App_App/FMO01-03-Application Trading.docx',
    $_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Tender_App_App/FMO01-Application General Information.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Tender_App_App/FMO04-Certification Agreement.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Tender_App_App/FMO05-Scale of Fees.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Tender_App_App/FMO06-Sanction Catalogue.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Tender_App_App/FFMO22-03-Organic Plan-Trading.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Tender_App_App/FairCert_Certification Procedure.pdf',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Tender_App_App/FMO26- GMO List.docx'
	
);
$file_name='Trading_App_Packet.zip';

}else if($zipNo==5){
	$files = array(
    $_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Processor_App/FMO01-02-Application Processing.docx',
    $_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Processor_App/FMO01-Application General Information.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Processor_App/FMO04-Certification Agreement.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Processor_App/FMO05-Scale of Fees.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Processor_App/FMO06-Sanction Catalogue.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Processor_App/FMO22-02-Organic Plan-Processing.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Processor_App/FairCert_Certification Procedure.pdf',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Processor_App/FMO26- GMO List.docx'
	
);
$file_name='Prossing_App_Packet.zip';

}else if($zipNo==6){
	$files = array(
    $_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Processor_App/FMO01-05- Application Animal Husbandry.docx',
    $_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Processor_App/FMO01-Application General Information.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Processor_App/FMO04-Certification Agreement.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Processor_App/FMO05-Scale of Fees.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Processor_App/FMO06-Sanction Catalogue.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Processor_App/FMO22-05-Organic Plan-Animal Husbandry.docx',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Processor_App/FairCert_Certification Procedure.pdf',
	$_SERVER['DOCUMENT_ROOT'].'fairfinal 31-10-2015/faircert_website/images/demo/src/Processor_App/FMO26- GMO List.docx'
	
);
$file_name='Live_stock_App_Packet.zip';

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