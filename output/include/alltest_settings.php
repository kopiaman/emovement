<?php
require_once(getabspath("classes/cipherer.php"));
$tdataalltest = array();
	$tdataalltest[".NumberOfChars"] = 80; 
	$tdataalltest[".ShortName"] = "alltest";
	$tdataalltest[".OwnerID"] = "";
	$tdataalltest[".OriginalTable"] = "user";

//	field labels
$fieldLabelsalltest = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsalltest["English"] = array();
	$fieldToolTipsalltest["English"] = array();
	$fieldLabelsalltest["English"]["department"] = "Function";
	$fieldToolTipsalltest["English"]["department"] = "";
	$fieldLabelsalltest["English"]["pos"] = "Pos";
	$fieldToolTipsalltest["English"]["pos"] = "";
	$fieldLabelsalltest["English"]["staffname"] = "Staffname";
	$fieldToolTipsalltest["English"]["staffname"] = "";
	$fieldLabelsalltest["English"]["subname"] = "Subname";
	$fieldToolTipsalltest["English"]["subname"] = "";
	$fieldLabelsalltest["English"]["category"] = "Category";
	$fieldToolTipsalltest["English"]["category"] = "";
	$fieldLabelsalltest["English"]["location"] = "Location";
	$fieldToolTipsalltest["English"]["location"] = "";
	$fieldLabelsalltest["English"]["organizer"] = "Organizer";
	$fieldToolTipsalltest["English"]["organizer"] = "";
	$fieldLabelsalltest["English"]["title"] = "Title";
	$fieldToolTipsalltest["English"]["title"] = "";
	$fieldLabelsalltest["English"]["level"] = "Level";
	$fieldToolTipsalltest["English"]["level"] = "";
	$fieldLabelsalltest["English"]["stime"] = "Stime";
	$fieldToolTipsalltest["English"]["stime"] = "";
	$fieldLabelsalltest["English"]["etime"] = "Etime";
	$fieldToolTipsalltest["English"]["etime"] = "";
	$fieldLabelsalltest["English"]["dcode"] = "Dcode";
	$fieldToolTipsalltest["English"]["dcode"] = "";
	$fieldLabelsalltest["English"]["subcode"] = "Subcode";
	$fieldToolTipsalltest["English"]["subcode"] = "";
	if (count($fieldToolTipsalltest["English"]))
		$tdataalltest[".isUseToolTips"] = true;
}
	
	
	$tdataalltest[".NCSearch"] = true;



$tdataalltest[".shortTableName"] = "alltest";
$tdataalltest[".nSecOptions"] = 0;
$tdataalltest[".recsPerRowList"] = 1;
$tdataalltest[".mainTableOwnerID"] = "";
$tdataalltest[".moveNext"] = 1;
$tdataalltest[".nType"] = 1;

$tdataalltest[".strOriginalTableName"] = "user";




$tdataalltest[".showAddInPopup"] = false;

$tdataalltest[".showEditInPopup"] = false;

$tdataalltest[".showViewInPopup"] = false;

$tdataalltest[".fieldsForRegister"] = array();

$tdataalltest[".listAjax"] = false;

	$tdataalltest[".audit"] = false;

	$tdataalltest[".locking"] = false;

$tdataalltest[".listIcons"] = true;




$tdataalltest[".showSimpleSearchOptions"] = false;

$tdataalltest[".showSearchPanel"] = true;

if (isMobile())
	$tdataalltest[".isUseAjaxSuggest"] = false;
else 
	$tdataalltest[".isUseAjaxSuggest"] = true;

$tdataalltest[".rowHighlite"] = true;

// button handlers file names

$tdataalltest[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalltest[".isUseTimeForSearch"] = false;




$tdataalltest[".allSearchFields"] = array();

$tdataalltest[".allSearchFields"][] = "category";
$tdataalltest[".allSearchFields"][] = "location";
$tdataalltest[".allSearchFields"][] = "organizer";
$tdataalltest[".allSearchFields"][] = "title";
$tdataalltest[".allSearchFields"][] = "department";
$tdataalltest[".allSearchFields"][] = "level";
$tdataalltest[".allSearchFields"][] = "stime";
$tdataalltest[".allSearchFields"][] = "etime";
$tdataalltest[".allSearchFields"][] = "staffname";
$tdataalltest[".allSearchFields"][] = "pos";
$tdataalltest[".allSearchFields"][] = "dcode";
$tdataalltest[".allSearchFields"][] = "subcode";
$tdataalltest[".allSearchFields"][] = "subname";

$tdataalltest[".googleLikeFields"][] = "category";
$tdataalltest[".googleLikeFields"][] = "location";
$tdataalltest[".googleLikeFields"][] = "organizer";
$tdataalltest[".googleLikeFields"][] = "title";
$tdataalltest[".googleLikeFields"][] = "department";
$tdataalltest[".googleLikeFields"][] = "level";
$tdataalltest[".googleLikeFields"][] = "stime";
$tdataalltest[".googleLikeFields"][] = "etime";
$tdataalltest[".googleLikeFields"][] = "staffname";
$tdataalltest[".googleLikeFields"][] = "pos";
$tdataalltest[".googleLikeFields"][] = "dcode";
$tdataalltest[".googleLikeFields"][] = "subcode";
$tdataalltest[".googleLikeFields"][] = "subname";


$tdataalltest[".advSearchFields"][] = "category";
$tdataalltest[".advSearchFields"][] = "location";
$tdataalltest[".advSearchFields"][] = "organizer";
$tdataalltest[".advSearchFields"][] = "title";
$tdataalltest[".advSearchFields"][] = "department";
$tdataalltest[".advSearchFields"][] = "level";
$tdataalltest[".advSearchFields"][] = "stime";
$tdataalltest[".advSearchFields"][] = "etime";
$tdataalltest[".advSearchFields"][] = "staffname";
$tdataalltest[".advSearchFields"][] = "pos";
$tdataalltest[".advSearchFields"][] = "dcode";
$tdataalltest[".advSearchFields"][] = "subcode";
$tdataalltest[".advSearchFields"][] = "subname";

$tdataalltest[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataalltest[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataalltest[".strOrderBy"] = $tstrOrderBy;

$tdataalltest[".orderindexes"] = array();

$tdataalltest[".sqlHead"] = "SELECT timetable.category,  timetable.location,  timetable.organizer,  timetable.title,  timetable.department,  timetable.`level`,  timetable.start_time AS stime,  timetable.end_time AS etime,  `user`.fullname AS staffname,  `user`.pos,  department.dcode,  department_sub.subcode,  department_sub.subname";
$tdataalltest[".sqlFrom"] = "FROM timetable  LEFT OUTER JOIN `user` ON timetable.staffID = `user`.id  LEFT OUTER JOIN department ON `user`.department = department.dip  LEFT OUTER JOIN department_sub ON `user`.subdepartment = department_sub.subid";
$tdataalltest[".sqlWhereExpr"] = "(timetable.id =14)";
$tdataalltest[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalltest[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalltest[".arrGroupsPerPage"] = $arrGPP;

$tableKeysalltest = array();
$tdataalltest[".Keys"] = $tableKeysalltest;

$tdataalltest[".listFields"] = array();
$tdataalltest[".listFields"][] = "category";
$tdataalltest[".listFields"][] = "location";
$tdataalltest[".listFields"][] = "organizer";
$tdataalltest[".listFields"][] = "title";
$tdataalltest[".listFields"][] = "department";
$tdataalltest[".listFields"][] = "level";
$tdataalltest[".listFields"][] = "stime";
$tdataalltest[".listFields"][] = "etime";
$tdataalltest[".listFields"][] = "staffname";
$tdataalltest[".listFields"][] = "pos";
$tdataalltest[".listFields"][] = "dcode";
$tdataalltest[".listFields"][] = "subcode";
$tdataalltest[".listFields"][] = "subname";

$tdataalltest[".viewFields"] = array();
$tdataalltest[".viewFields"][] = "category";
$tdataalltest[".viewFields"][] = "location";
$tdataalltest[".viewFields"][] = "organizer";
$tdataalltest[".viewFields"][] = "title";
$tdataalltest[".viewFields"][] = "level";
$tdataalltest[".viewFields"][] = "stime";
$tdataalltest[".viewFields"][] = "etime";
$tdataalltest[".viewFields"][] = "dcode";
$tdataalltest[".viewFields"][] = "subcode";

$tdataalltest[".addFields"] = array();

$tdataalltest[".inlineAddFields"] = array();
$tdataalltest[".inlineAddFields"][] = "category";
$tdataalltest[".inlineAddFields"][] = "location";
$tdataalltest[".inlineAddFields"][] = "organizer";
$tdataalltest[".inlineAddFields"][] = "title";
$tdataalltest[".inlineAddFields"][] = "level";
$tdataalltest[".inlineAddFields"][] = "stime";
$tdataalltest[".inlineAddFields"][] = "etime";
$tdataalltest[".inlineAddFields"][] = "dcode";
$tdataalltest[".inlineAddFields"][] = "subcode";

$tdataalltest[".editFields"] = array();

$tdataalltest[".inlineEditFields"] = array();
$tdataalltest[".inlineEditFields"][] = "category";
$tdataalltest[".inlineEditFields"][] = "location";
$tdataalltest[".inlineEditFields"][] = "organizer";
$tdataalltest[".inlineEditFields"][] = "title";
$tdataalltest[".inlineEditFields"][] = "level";
$tdataalltest[".inlineEditFields"][] = "stime";
$tdataalltest[".inlineEditFields"][] = "etime";
$tdataalltest[".inlineEditFields"][] = "dcode";
$tdataalltest[".inlineEditFields"][] = "subcode";

$tdataalltest[".exportFields"] = array();
$tdataalltest[".exportFields"][] = "category";
$tdataalltest[".exportFields"][] = "location";
$tdataalltest[".exportFields"][] = "organizer";
$tdataalltest[".exportFields"][] = "title";
$tdataalltest[".exportFields"][] = "level";
$tdataalltest[".exportFields"][] = "stime";
$tdataalltest[".exportFields"][] = "etime";
$tdataalltest[".exportFields"][] = "dcode";
$tdataalltest[".exportFields"][] = "subcode";

$tdataalltest[".printFields"] = array();
$tdataalltest[".printFields"][] = "category";
$tdataalltest[".printFields"][] = "location";
$tdataalltest[".printFields"][] = "organizer";
$tdataalltest[".printFields"][] = "title";
$tdataalltest[".printFields"][] = "level";
$tdataalltest[".printFields"][] = "stime";
$tdataalltest[".printFields"][] = "etime";
$tdataalltest[".printFields"][] = "dcode";
$tdataalltest[".printFields"][] = "subcode";

//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Category"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "category"; 
		$fdata["FullName"] = "timetable.category";
	
		
		
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
	
		
		
	$tdataalltest["category"] = $fdata;
//	location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "location";
	$fdata["GoodName"] = "location";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Location"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "location"; 
		$fdata["FullName"] = "timetable.location";
	
		
		
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
	
		
		
	$tdataalltest["location"] = $fdata;
//	organizer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "organizer";
	$fdata["GoodName"] = "organizer";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Organizer"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "organizer"; 
		$fdata["FullName"] = "timetable.organizer";
	
		
		
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
	
		
		
	$tdataalltest["organizer"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Title"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "title"; 
		$fdata["FullName"] = "timetable.title";
	
		
		
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
	
		
		
	$tdataalltest["title"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Function"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "department"; 
		$fdata["FullName"] = "timetable.department";
	
		
		
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
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "Value";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=20";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataalltest["department"] = $fdata;
//	level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "level";
	$fdata["GoodName"] = "level";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Level"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "level"; 
		$fdata["FullName"] = "timetable.`level`";
	
		
		
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
	
		
		
	$tdataalltest["level"] = $fdata;
//	stime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "stime";
	$fdata["GoodName"] = "stime";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Stime"; 
	$fdata["FieldType"] = 134;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "start_time"; 
		$fdata["FullName"] = "timetable.start_time";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataalltest["stime"] = $fdata;
//	etime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "etime";
	$fdata["GoodName"] = "etime";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Etime"; 
	$fdata["FieldType"] = 134;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "end_time"; 
		$fdata["FullName"] = "timetable.end_time";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataalltest["etime"] = $fdata;
//	staffname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "staffname";
	$fdata["GoodName"] = "staffname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Staffname"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "fullname"; 
		$fdata["FullName"] = "`user`.fullname";
	
		
		
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
	
		
		
	$tdataalltest["staffname"] = $fdata;
//	pos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "pos";
	$fdata["GoodName"] = "pos";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Pos"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "pos"; 
		$fdata["FullName"] = "`user`.pos";
	
		
		
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
	
		
		
	$tdataalltest["pos"] = $fdata;
//	dcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "dcode";
	$fdata["GoodName"] = "dcode";
	$fdata["ownerTable"] = "department";
	$fdata["Label"] = "Dcode"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "dcode"; 
		$fdata["FullName"] = "department.dcode";
	
		
		
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
	
		
		
	$tdataalltest["dcode"] = $fdata;
//	subcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "subcode";
	$fdata["GoodName"] = "subcode";
	$fdata["ownerTable"] = "department_sub";
	$fdata["Label"] = "Subcode"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "subcode"; 
		$fdata["FullName"] = "department_sub.subcode";
	
		
		
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
	
		
		
	$tdataalltest["subcode"] = $fdata;
//	subname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "subname";
	$fdata["GoodName"] = "subname";
	$fdata["ownerTable"] = "department_sub";
	$fdata["Label"] = "Subname"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "subname"; 
		$fdata["FullName"] = "department_sub.subname";
	
		
		
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
	
		
		
	$tdataalltest["subname"] = $fdata;

	
$tables_data["alltest"]=&$tdataalltest;
$field_labels["alltest"] = &$fieldLabelsalltest;
$fieldToolTips["alltest"] = &$fieldToolTipsalltest;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["alltest"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["alltest"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_alltest()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "timetable.category,  timetable.location,  timetable.organizer,  timetable.title,  timetable.department,  timetable.`level`,  timetable.start_time AS stime,  timetable.end_time AS etime,  `user`.fullname AS staffname,  `user`.pos,  department.dcode,  department_sub.subcode,  department_sub.subname";
$proto0["m_strFrom"] = "FROM timetable  LEFT OUTER JOIN `user` ON timetable.staffID = `user`.id  LEFT OUTER JOIN department ON `user`.department = department.dip  LEFT OUTER JOIN department_sub ON `user`.subdepartment = department_sub.subid";
$proto0["m_strWhere"] = "(timetable.id =14)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "timetable.id =14";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "timetable"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=14";
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
	"m_strName" => "category",
	"m_strTable" => "timetable"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "location",
	"m_strTable" => "timetable"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "organizer",
	"m_strTable" => "timetable"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "timetable"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "timetable"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "level",
	"m_strTable" => "timetable"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "start_time",
	"m_strTable" => "timetable"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "stime";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "end_time",
	"m_strTable" => "timetable"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "etime";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "user"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "staffname";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "pos",
	"m_strTable" => "user"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "dcode",
	"m_strTable" => "department"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "subcode",
	"m_strTable" => "department_sub"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "subname",
	"m_strTable" => "department_sub"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "timetable";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "id";
$proto32["m_columns"][] = "fid";
$proto32["m_columns"][] = "start_time";
$proto32["m_columns"][] = "end_time";
$proto32["m_columns"][] = "staffID";
$proto32["m_columns"][] = "date";
$proto32["m_columns"][] = "endate";
$proto32["m_columns"][] = "category";
$proto32["m_columns"][] = "title";
$proto32["m_columns"][] = "level";
$proto32["m_columns"][] = "location";
$proto32["m_columns"][] = "organizer";
$proto32["m_columns"][] = "department";
$proto32["m_columns"][] = "subdepartment";
$proto32["m_columns"][] = "pos";
$proto32["m_columns"][] = "sstatus";
$proto32["m_columns"][] = "date_status";
$proto32["m_columns"][] = "summary";
$proto32["m_columns"][] = "attachment";
$proto32["m_columns"][] = "note";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_alias"] = "";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = "0";
$proto33["m_inBrackets"] = "0";
$proto33["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
												$proto35=array();
$proto35["m_link"] = "SQLL_LEFTJOIN";
			$proto36=array();
$proto36["m_strName"] = "user";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "id";
$proto36["m_columns"][] = "pass";
$proto36["m_columns"][] = "fullname";
$proto36["m_columns"][] = "department";
$proto36["m_columns"][] = "subdepartment";
$proto36["m_columns"][] = "umail";
$proto36["m_columns"][] = "icno";
$proto36["m_columns"][] = "pos";
$proto36["m_columns"][] = "sstatus";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_alias"] = "";
$proto37=array();
$proto37["m_sql"] = "timetable.staffID = `user`.id";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "staffID",
	"m_strTable" => "timetable"
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "= `user`.id";
$proto37["m_havingmode"] = "0";
$proto37["m_inBrackets"] = "0";
$proto37["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
												$proto39=array();
$proto39["m_link"] = "SQLL_LEFTJOIN";
			$proto40=array();
$proto40["m_strName"] = "department";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "dip";
$proto40["m_columns"][] = "dname";
$proto40["m_columns"][] = "dcode";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_alias"] = "";
$proto41=array();
$proto41["m_sql"] = "`user`.department = department.dip";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "user"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "= department.dip";
$proto41["m_havingmode"] = "0";
$proto41["m_inBrackets"] = "0";
$proto41["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
												$proto43=array();
$proto43["m_link"] = "SQLL_LEFTJOIN";
			$proto44=array();
$proto44["m_strName"] = "department_sub";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "subid";
$proto44["m_columns"][] = "dip";
$proto44["m_columns"][] = "subname";
$proto44["m_columns"][] = "subcode";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_alias"] = "";
$proto45=array();
$proto45["m_sql"] = "`user`.subdepartment = department_sub.subid";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "subdepartment",
	"m_strTable" => "user"
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "= department_sub.subid";
$proto45["m_havingmode"] = "0";
$proto45["m_inBrackets"] = "0";
$proto45["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_alltest = createSqlQuery_alltest();
													$tdataalltest[".sqlquery"] = $queryData_alltest;

$tableEvents["alltest"] = new eventsBase;
$tdataalltest[".hasEvents"] = false;

$cipherer = new RunnerCipherer("alltest");

?>