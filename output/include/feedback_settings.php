<?php
require_once(getabspath("classes/cipherer.php"));
$tdatafeedback = array();
	$tdatafeedback[".NumberOfChars"] = 80; 
	$tdatafeedback[".ShortName"] = "feedback";
	$tdatafeedback[".OwnerID"] = "";
	$tdatafeedback[".OriginalTable"] = "feedback";

//	field labels
$fieldLabelsfeedback = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfeedback["English"] = array();
	$fieldToolTipsfeedback["English"] = array();
	$fieldLabelsfeedback["English"]["fid"] = "Fid";
	$fieldToolTipsfeedback["English"]["fid"] = "";
	$fieldLabelsfeedback["English"]["title"] = "Title";
	$fieldToolTipsfeedback["English"]["title"] = "";
	$fieldLabelsfeedback["English"]["dates"] = "Date";
	$fieldToolTipsfeedback["English"]["dates"] = "";
	$fieldLabelsfeedback["English"]["categories"] = "Categories";
	$fieldToolTipsfeedback["English"]["categories"] = "";
	$fieldLabelsfeedback["English"]["feedback"] = "Feedback";
	$fieldToolTipsfeedback["English"]["feedback"] = "";
	$fieldLabelsfeedback["English"]["reply"] = "Reply";
	$fieldToolTipsfeedback["English"]["reply"] = "";
	$fieldLabelsfeedback["English"]["fstatus"] = "Status";
	$fieldToolTipsfeedback["English"]["fstatus"] = "";
	$fieldLabelsfeedback["English"]["fdate"] = "Reply Date";
	$fieldToolTipsfeedback["English"]["fdate"] = "";
	$fieldLabelsfeedback["English"]["attachment"] = "Attachment";
	$fieldToolTipsfeedback["English"]["attachment"] = "";
	$fieldLabelsfeedback["English"]["userid"] = "User";
	$fieldToolTipsfeedback["English"]["userid"] = "";
	if (count($fieldToolTipsfeedback["English"]))
		$tdatafeedback[".isUseToolTips"] = true;
}
	
	
	$tdatafeedback[".NCSearch"] = true;



$tdatafeedback[".shortTableName"] = "feedback";
$tdatafeedback[".nSecOptions"] = 0;
$tdatafeedback[".recsPerRowList"] = 1;
$tdatafeedback[".mainTableOwnerID"] = "";
$tdatafeedback[".moveNext"] = 1;
$tdatafeedback[".nType"] = 0;

$tdatafeedback[".strOriginalTableName"] = "feedback";




$tdatafeedback[".showAddInPopup"] = false;

$tdatafeedback[".showEditInPopup"] = false;

$tdatafeedback[".showViewInPopup"] = false;

$tdatafeedback[".fieldsForRegister"] = array();

$tdatafeedback[".listAjax"] = false;

	$tdatafeedback[".audit"] = false;

	$tdatafeedback[".locking"] = false;

$tdatafeedback[".listIcons"] = true;
$tdatafeedback[".edit"] = true;



$tdatafeedback[".delete"] = true;

$tdatafeedback[".showSimpleSearchOptions"] = false;

$tdatafeedback[".showSearchPanel"] = true;

if (isMobile())
	$tdatafeedback[".isUseAjaxSuggest"] = false;
else 
	$tdatafeedback[".isUseAjaxSuggest"] = true;

$tdatafeedback[".rowHighlite"] = true;

// button handlers file names

$tdatafeedback[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafeedback[".isUseTimeForSearch"] = false;




$tdatafeedback[".allSearchFields"] = array();


$tdatafeedback[".googleLikeFields"][] = "fid";
$tdatafeedback[".googleLikeFields"][] = "title";
$tdatafeedback[".googleLikeFields"][] = "userid";
$tdatafeedback[".googleLikeFields"][] = "dates";
$tdatafeedback[".googleLikeFields"][] = "categories";
$tdatafeedback[".googleLikeFields"][] = "feedback";
$tdatafeedback[".googleLikeFields"][] = "reply";
$tdatafeedback[".googleLikeFields"][] = "fstatus";
$tdatafeedback[".googleLikeFields"][] = "fdate";
$tdatafeedback[".googleLikeFields"][] = "attachment";



$tdatafeedback[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatafeedback[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafeedback[".strOrderBy"] = $tstrOrderBy;

$tdatafeedback[".orderindexes"] = array();

$tdatafeedback[".sqlHead"] = "SELECT fid,   title,   userid,   dates,   categories,   feedback,   reply,   fstatus,   fdate,   attachment";
$tdatafeedback[".sqlFrom"] = "FROM feedback";
$tdatafeedback[".sqlWhereExpr"] = "";
$tdatafeedback[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "fstatus";
	$tabFields[] = "fdate";
	$tabFields[] = "reply";
$arrEditTabs[] = array('tabId'=>'Reply1',
					   'tabName'=>"Reply",
					   'nType'=>'1',
					   'nOrder'=>6,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatafeedback[".arrEditTabs"] = $arrEditTabs;



//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafeedback[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafeedback[".arrGroupsPerPage"] = $arrGPP;

$tableKeysfeedback = array();
$tableKeysfeedback[] = "fid";
$tdatafeedback[".Keys"] = $tableKeysfeedback;

$tdatafeedback[".listFields"] = array();
$tdatafeedback[".listFields"][] = "userid";
$tdatafeedback[".listFields"][] = "title";
$tdatafeedback[".listFields"][] = "dates";
$tdatafeedback[".listFields"][] = "categories";
$tdatafeedback[".listFields"][] = "feedback";
$tdatafeedback[".listFields"][] = "reply";
$tdatafeedback[".listFields"][] = "fstatus";

$tdatafeedback[".viewFields"] = array();

$tdatafeedback[".addFields"] = array();
$tdatafeedback[".addFields"][] = "title";
$tdatafeedback[".addFields"][] = "dates";
$tdatafeedback[".addFields"][] = "categories";
$tdatafeedback[".addFields"][] = "feedback";
$tdatafeedback[".addFields"][] = "attachment";

$tdatafeedback[".inlineAddFields"] = array();

$tdatafeedback[".editFields"] = array();
$tdatafeedback[".editFields"][] = "title";
$tdatafeedback[".editFields"][] = "dates";
$tdatafeedback[".editFields"][] = "categories";
$tdatafeedback[".editFields"][] = "feedback";
$tdatafeedback[".editFields"][] = "attachment";
$tdatafeedback[".editFields"][] = "fstatus";
$tdatafeedback[".editFields"][] = "fdate";
$tdatafeedback[".editFields"][] = "reply";

$tdatafeedback[".inlineEditFields"] = array();

$tdatafeedback[".exportFields"] = array();

$tdatafeedback[".printFields"] = array();

//	fid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fid";
	$fdata["GoodName"] = "fid";
	$fdata["ownerTable"] = "feedback";
	$fdata["Label"] = "Fid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "fid"; 
		$fdata["FullName"] = "fid";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafeedback["fid"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "feedback";
	$fdata["Label"] = "Title"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "title"; 
		$fdata["FullName"] = "title";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["inputStyle"] = " width:353px;";
	$edata["controlWidth"] = 353;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafeedback["title"] = $fdata;
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "feedback";
	$fdata["Label"] = "User"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "userid"; 
		$fdata["FullName"] = "userid";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafeedback["userid"] = $fdata;
//	dates
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dates";
	$fdata["GoodName"] = "dates";
	$fdata["ownerTable"] = "feedback";
	$fdata["Label"] = "Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "dates"; 
		$fdata["FullName"] = "dates";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 0; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafeedback["dates"] = $fdata;
//	categories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "categories";
	$fdata["GoodName"] = "categories";
	$fdata["ownerTable"] = "feedback";
	$fdata["Label"] = "Categories"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "categories"; 
		$fdata["FullName"] = "categories";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Bug";
	$edata["LookupValues"][] = "Improvement";
	$edata["LookupValues"][] = "Others";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafeedback["categories"] = $fdata;
//	feedback
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "feedback";
	$fdata["GoodName"] = "feedback";
	$fdata["ownerTable"] = "feedback";
	$fdata["Label"] = "Feedback"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "feedback"; 
		$fdata["FullName"] = "feedback";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 359;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafeedback["feedback"] = $fdata;
//	reply
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "reply";
	$fdata["GoodName"] = "reply";
	$fdata["ownerTable"] = "feedback";
	$fdata["Label"] = "Reply"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "reply"; 
		$fdata["FullName"] = "reply";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafeedback["reply"] = $fdata;
//	fstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fstatus";
	$fdata["GoodName"] = "fstatus";
	$fdata["ownerTable"] = "feedback";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "fstatus"; 
		$fdata["FullName"] = "fstatus";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafeedback["fstatus"] = $fdata;
//	fdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fdate";
	$fdata["GoodName"] = "fdate";
	$fdata["ownerTable"] = "feedback";
	$fdata["Label"] = "Reply Date"; 
	$fdata["FieldType"] = 135;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "fdate"; 
		$fdata["FullName"] = "fdate";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafeedback["fdate"] = $fdata;
//	attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "attachment";
	$fdata["GoodName"] = "attachment";
	$fdata["ownerTable"] = "feedback";
	$fdata["Label"] = "Attachment"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "attachment"; 
		$fdata["FullName"] = "attachment";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
				$vdata["ShowThumbnail"] = true; 
					$vdata["ShowIcon"] = true; 
				
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
							$edata["acceptFileTypes"] = "bmp";
						$edata["acceptFileTypes"] .= "|doc";
						$edata["acceptFileTypes"] .= "|docx";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|pdf";
						$edata["acceptFileTypes"] .= "|png";
						$edata["acceptFileTypes"] .= "|rtf";
						$edata["acceptFileTypes"] .= "|txt";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
		$edata["maxNumberOfFiles"] = 5;
	
		$edata["maxFileSize"] = 1000;
	
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;
	
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafeedback["attachment"] = $fdata;

	
$tables_data["feedback"]=&$tdatafeedback;
$field_labels["feedback"] = &$fieldLabelsfeedback;
$fieldToolTips["feedback"] = &$fieldToolTipsfeedback;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["feedback"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["feedback"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_feedback()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "fid,   title,   userid,   dates,   categories,   feedback,   reply,   fstatus,   fdate,   attachment";
$proto0["m_strFrom"] = "FROM feedback";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "fid",
	"m_strTable" => "feedback"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "feedback"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "feedback"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "dates",
	"m_strTable" => "feedback"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "categories",
	"m_strTable" => "feedback"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "feedback",
	"m_strTable" => "feedback"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "reply",
	"m_strTable" => "feedback"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "fstatus",
	"m_strTable" => "feedback"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "fdate",
	"m_strTable" => "feedback"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "attachment",
	"m_strTable" => "feedback"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "feedback";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "fid";
$proto26["m_columns"][] = "title";
$proto26["m_columns"][] = "userid";
$proto26["m_columns"][] = "dates";
$proto26["m_columns"][] = "categories";
$proto26["m_columns"][] = "feedback";
$proto26["m_columns"][] = "reply";
$proto26["m_columns"][] = "fstatus";
$proto26["m_columns"][] = "fdate";
$proto26["m_columns"][] = "attachment";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_alias"] = "";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = "0";
$proto27["m_inBrackets"] = "0";
$proto27["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_feedback = createSqlQuery_feedback();
										$tdatafeedback[".sqlquery"] = $queryData_feedback;

include_once(getabspath("include/feedback_events.php"));
$tableEvents["feedback"] = new eventclass_feedback;
$tdatafeedback[".hasEvents"] = true;

$cipherer = new RunnerCipherer("feedback");

?>