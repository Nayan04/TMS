<?php // HTTP Headers for ZIP File Downloads
// https://perishablepress.com/press/2010/11/17/http-headers-file-downloads/

// set example variables
$zip_name=$_REQUEST['zipname'];
$filename='';
$file_path='';
if($zip_name==7){
	$filename = "Crop Production_App Packet151201PK.zip";
	$filepath = $_SERVER['DOCUMENT_ROOT'].'/faircert_website/images/demo/src/npop/';
	}else if($zip_name==8){
		$filename = "Grower Group_App Packet151201PK.zip";	
		$filepath = $_SERVER['DOCUMENT_ROOT'].'/faircert_website/images/demo/src/npop/';
	}else if($zip_name==9){
		$filename = "Plant Product_EU_App Packet151201PK.zip";	
		$filepath = $_SERVER['DOCUMENT_ROOT'].'/faircert_website/images/demo/src/EEC/';
	}else if($zip_name==10){
		$filename = "Producer Group_EU_App Packet151201PK.zip";	
		$filepath = $_SERVER['DOCUMENT_ROOT'].'/faircert_website/images/demo/src/EEC/';
	}
		else if($zip_name==11){
		$filename = "Preparation of Product_EU_App Packet151201PK.zip";
		$filepath = $_SERVER['DOCUMENT_ROOT'].'/faircert_website/images/demo/src/EEC/';
		}
		else if($zip_name==12){
		$filename = "Livestock & Product_EU_App Packet151201PK.zip";
		$filepath = $_SERVER['DOCUMENT_ROOT'].'/faircert_website/images/demo/src/EEC/';
		}
		else if($zip_name==13){
		$filename = "Animal Feed_EU_App Packet151201PK.zip";
		$filepath = $_SERVER['DOCUMENT_ROOT'].'/faircert_website/images/demo/src/EEC/';
		}
		else if($zip_name==14){
		$filename = "Wild Harvest_EU_App Packet151201PK.zip";
		$filepath = $_SERVER['DOCUMENT_ROOT'].'/faircert_website/images/demo/src/EEC/';
		}
		else if($zip_name==15){
		$filename = "NPOP_Org Standard_Rev150601PK.zip";	
		$filepath = $_SERVER['DOCUMENT_ROOT'].'/faircert_website/images/demo/src/org_standard/';
		}
		else if($zip_name==16){
		$filename = "EU Standard151221PK.zip";
		$filepath = $_SERVER['DOCUMENT_ROOT'].'/faircert_website/images/demo/src/org_standard/';
		}
		else if($zip_name==17){
		$filename = "IACB-EU-Standard-Version9.zip";
	    $filepath = $_SERVER['DOCUMENT_ROOT'].'/faircert_website/images/demo/src/org_standard/';
		}



// http headers for zip downloads
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"".$filename."\"");
header("Content-Transfer-Encoding: binary");
header("Content-Length: ".filesize($filepath.$filename));
ob_end_flush();
@readfile($filepath.$filename);
?>