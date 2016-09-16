<?php
require_once(getabspath("classes/cipherer.php"));
$tdatamy_timetable = array();
	$tdatamy_timetable[".NumberOfChars"] = 80; 
	$tdatamy_timetable[".ShortName"] = "my_timetable";
	$tdatamy_timetable[".OwnerID"] = "";
	$tdatamy_timetable[".OriginalTable"] = "timetable";

//	field labels
$fieldLabelsmy_timetable = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmy_timetable["English"] = array();
	$fieldToolTipsmy_timetable["English"] = array();
	$fieldLabelsmy_timetable["English"]["id"] = "Id";
	$fieldToolTipsmy_timetable["English"]["id"] = "";
	$fieldLabelsmy_timetable["English"]["fid"] = "Fid";
	$fieldToolTipsmy_timetable["English"]["fid"] = "";
	$fieldLabelsmy_timetable["English"]["start_time"] = "Start Time";
	$fieldToolTipsmy_timetable["English"]["start_time"] = "";
	$fieldLabelsmy_timetable["English"]["end_time"] = "End Time";
	$fieldToolTipsmy_timetable["English"]["end_time"] = "";
	$fieldLabelsmy_timetable["English"]["staffID"] = "Staff";
	$fieldToolTipsmy_timetable["English"]["staffID"] = "";
	$fieldLabelsmy_timetable["English"]["date"] = "Date";
	$fieldToolTipsmy_timetable["English"]["date"] = "";
	$fieldLabelsmy_timetable["English"]["endate"] = "Endate";
	$fieldToolTipsmy_timetable["English"]["endate"] = "";
	$fieldLabelsmy_timetable["English"]["category"] = "Category";
	$fieldToolTipsmy_timetable["English"]["category"] = "";
	$fieldLabelsmy_timetable["English"]["title"] = "Title";
	$fieldToolTipsmy_timetable["English"]["title"] = "";
	$fieldLabelsmy_timetable["English"]["level"] = "Participation Level";
	$fieldToolTipsmy_timetable["English"]["level"] = "";
	$fieldLabelsmy_timetable["English"]["location"] = "Location";
	$fieldToolTipsmy_timetable["English"]["location"] = "";
	$fieldLabelsmy_timetable["English"]["organizer"] = "Organizer";
	$fieldToolTipsmy_timetable["English"]["organizer"] = "";
	$fieldLabelsmy_timetable["English"]["summary"] = "Summary";
	$fieldToolTipsmy_timetable["English"]["summary"] = "";
	$fieldLabelsmy_timetable["English"]["attachment"] = "Attachment";
	$fieldToolTipsmy_timetable["English"]["attachment"] = "";
	$fieldLabelsmy_timetable["English"]["sstatus"] = "Status";
	$fieldToolTipsmy_timetable["English"]["sstatus"] = "";
	$fieldLabelsmy_timetable["English"]["day"] = "Day";
	$fieldToolTipsmy_timetable["English"]["day"] = "";
	$fieldLabelsmy_timetable["English"]["week"] = "Week";
	$fieldToolTipsmy_timetable["English"]["week"] = "";
	$fieldLabelsmy_timetable["English"]["month"] = "Month";
	$fieldToolTipsmy_timetable["English"]["month"] = "";
	$fieldLabelsmy_timetable["English"]["year"] = "Year";
	$fieldToolTipsmy_timetable["English"]["year"] = "";
	$fieldLabelsmy_timetable["English"]["department"] = "Function";
	$fieldToolTipsmy_timetable["English"]["department"] = "";
	$fieldLabelsmy_timetable["English"]["pos"] = "Pos";
	$fieldToolTipsmy_timetable["English"]["pos"] = "";
	$fieldLabelsmy_timetable["English"]["period"] = "Period";
	$fieldToolTipsmy_timetable["English"]["period"] = "";
	$fieldLabelsmy_timetable["English"]["note"] = "Note";
	$fieldToolTipsmy_timetable["English"]["note"] = "";
	$fieldLabelsmy_timetable["English"]["subdepartment"] = "Sector";
	$fieldToolTipsmy_timetable["English"]["subdepartment"] = "";
	$fieldLabelsmy_timetable["English"]["date_status"] = "Update";
	$fieldToolTipsmy_timetable["English"]["date_status"] = "";
	if (count($fieldToolTipsmy_timetable["English"]))
		$tdatamy_timetable[".isUseToolTips"] = true;
}
	
	



$tdatamy_timetable[".shortTableName"] = "my_timetable";
$tdatamy_timetable[".nSecOptions"] = 0;
$tdatamy_timetable[".recsPerRowList"] = 1;
$tdatamy_timetable[".mainTableOwnerID"] = "";
$tdatamy_timetable[".moveNext"] = 1;
$tdatamy_timetable[".nType"] = 1;

$tdatamy_timetable[".strOriginalTableName"] = "timetable";




$tdatamy_timetable[".showAddInPopup"] = false;

$tdatamy_timetable[".showEditInPopup"] = false;

$tdatamy_timetable[".showViewInPopup"] = false;

$tdatamy_timetable[".fieldsForRegister"] = array();

$tdatamy_timetable[".listAjax"] = false;

	$tdatamy_timetable[".audit"] = false;

	$tdatamy_timetable[".locking"] = false;

$tdatamy_timetable[".listIcons"] = true;
$tdatamy_timetable[".view"] = true;



$tdatamy_timetable[".delete"] = true;

$tdatamy_timetable[".showSimpleSearchOptions"] = false;

$tdatamy_timetable[".showSearchPanel"] = true;

if (isMobile())
	$tdatamy_timetable[".isUseAjaxSuggest"] = false;
else 
	$tdatamy_timetable[".isUseAjaxSuggest"] = true;

$tdatamy_timetable[".rowHighlite"] = true;

// button handlers file names

$tdatamy_timetable[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamy_timetable[".isUseTimeForSearch"] = true;




$tdatamy_timetable[".allSearchFields"] = array();

$tdatamy_timetable[".allSearchFields"][] = "week";
$tdatamy_timetable[".allSearchFields"][] = "month";
$tdatamy_timetable[".allSearchFields"][] = "year";
$tdatamy_timetable[".allSearchFields"][] = "category";
$tdatamy_timetable[".allSearchFields"][] = "level";
$tdatamy_timetable[".allSearchFields"][] = "title";
$tdatamy_timetable[".allSearchFields"][] = "location";
$tdatamy_timetable[".allSearchFields"][] = "organizer";
$tdatamy_timetable[".allSearchFields"][] = "sstatus";
$tdatamy_timetable[".allSearchFields"][] = "start_time";
$tdatamy_timetable[".allSearchFields"][] = "end_time";
$tdatamy_timetable[".allSearchFields"][] = "date";
$tdatamy_timetable[".allSearchFields"][] = "endate";

$tdatamy_timetable[".googleLikeFields"][] = "subdepartment";
$tdatamy_timetable[".googleLikeFields"][] = "date_status";

$tdatamy_timetable[".panelSearchFields"][] = "week";
$tdatamy_timetable[".panelSearchFields"][] = "month";
$tdatamy_timetable[".panelSearchFields"][] = "year";
$tdatamy_timetable[".panelSearchFields"][] = "category";
$tdatamy_timetable[".panelSearchFields"][] = "sstatus";

$tdatamy_timetable[".advSearchFields"][] = "week";
$tdatamy_timetable[".advSearchFields"][] = "month";
$tdatamy_timetable[".advSearchFields"][] = "year";
$tdatamy_timetable[".advSearchFields"][] = "category";
$tdatamy_timetable[".advSearchFields"][] = "level";
$tdatamy_timetable[".advSearchFields"][] = "title";
$tdatamy_timetable[".advSearchFields"][] = "location";
$tdatamy_timetable[".advSearchFields"][] = "organizer";
$tdatamy_timetable[".advSearchFields"][] = "sstatus";
$tdatamy_timetable[".advSearchFields"][] = "start_time";
$tdatamy_timetable[".advSearchFields"][] = "end_time";
$tdatamy_timetable[".advSearchFields"][] = "date";
$tdatamy_timetable[".advSearchFields"][] = "endate";

$tdatamy_timetable[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatamy_timetable[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY `date` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamy_timetable[".strOrderBy"] = $tstrOrderBy;

$tdatamy_timetable[".orderindexes"] = array();
$tdatamy_timetable[".orderindexes"][] = array(14, (0 ? "ASC" : "DESC"), "`date`");

$tdatamy_timetable[".sqlHead"] = "SELECT id,  fid,  category,  `level`,  title,  location,  organizer,  summary,  attachment,  department,  start_time,  end_time,  staffID,  `date`,  DAYNAME(date) AS `day`,  WEEK(date) AS week,  MONTH(date) AS `month`,  YEAR(date) AS `year`,  endate,  sstatus,  pos,  DAY(endate)-DAY(`date`) AS period,  note,  subdepartment,  date_status";
$tdatamy_timetable[".sqlFrom"] = "FROM timetable";
$tdatamy_timetable[".sqlWhereExpr"] = "(fid IS NULL)";
$tdatamy_timetable[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "start_time";
	$tabFields[] = "end_time";
	$tabFields[] = "date";
	$tabFields[] = "endate";
$arrEditTabs[] = array('tabId'=>'Date_Time1',
					   'tabName'=>"Date Time",
					   'nType'=>'1',
					   'nOrder'=>9,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatamy_timetable[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "start_time";
	$tabFields[] = "end_time";
	$tabFields[] = "date";
	$tabFields[] = "endate";
$arrAddTabs[] = array('tabId'=>'Date_Time1',
					  'tabName'=>"Date Time",
					  'nType'=>'1',
					  'nOrder'=>9,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdatamy_timetable[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "start_time";
	$tabFields[] = "end_time";
	$tabFields[] = "date";
	$tabFields[] = "endate";
$arrViewTabs[] = array('tabId'=>'Date_Time1',
					   'tabName'=>"Date Time",
					   'nType'=>'1',
					   'nOrder'=>11,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatamy_timetable[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamy_timetable[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamy_timetable[".arrGroupsPerPage"] = $arrGPP;

$tableKeysmy_timetable = array();
$tableKeysmy_timetable[] = "id";
$tdatamy_timetable[".Keys"] = $tableKeysmy_timetable;

$tdatamy_timetable[".listFields"] = array();
$tdatamy_timetable[".listFields"][] = "title";
$tdatamy_timetable[".listFields"][] = "location";
$tdatamy_timetable[".listFields"][] = "start_time";
$tdatamy_timetable[".listFields"][] = "end_time";
$tdatamy_timetable[".listFields"][] = "date";
$tdatamy_timetable[".listFields"][] = "week";
$tdatamy_timetable[".listFields"][] = "sstatus";
$tdatamy_timetable[".listFields"][] = "date_status";
$tdatamy_timetable[".listFields"][] = "category";
$tdatamy_timetable[".listFields"][] = "note";

$tdatamy_timetable[".viewFields"] = array();
$tdatamy_timetable[".viewFields"][] = "category";
$tdatamy_timetable[".viewFields"][] = "level";
$tdatamy_timetable[".viewFields"][] = "title";
$tdatamy_timetable[".viewFields"][] = "location";
$tdatamy_timetable[".viewFields"][] = "organizer";
$tdatamy_timetable[".viewFields"][] = "summary";
$tdatamy_timetable[".viewFields"][] = "attachment";
$tdatamy_timetable[".viewFields"][] = "sstatus";
$tdatamy_timetable[".viewFields"][] = "date_status";
$tdatamy_timetable[".viewFields"][] = "note";
$tdatamy_timetable[".viewFields"][] = "start_time";
$tdatamy_timetable[".viewFields"][] = "end_time";
$tdatamy_timetable[".viewFields"][] = "date";
$tdatamy_timetable[".viewFields"][] = "endate";

$tdatamy_timetable[".addFields"] = array();

$tdatamy_timetable[".inlineAddFields"] = array();

$tdatamy_timetable[".editFields"] = array();

$tdatamy_timetable[".inlineEditFields"] = array();

$tdatamy_timetable[".exportFields"] = array();

$tdatamy_timetable[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
		
		
				
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
	
		
		
	$tdatamy_timetable["id"] = $fdata;
//	fid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fid";
	$fdata["GoodName"] = "fid";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Fid"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
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
	
		
		
	$tdatamy_timetable["fid"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Category"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "category"; 
		$fdata["FullName"] = "category";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=30";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=50";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["register"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=30";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=30";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdatamy_timetable["category"] = $fdata;
//	level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "level";
	$fdata["GoodName"] = "level";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Participation Level"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "level"; 
		$fdata["FullName"] = "`level`";
	
		
		
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
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=40";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamy_timetable["level"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Title"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "title"; 
		$fdata["FullName"] = "title";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
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
	
		$edata["inputStyle"] = " width:568px;";
	$edata["controlWidth"] = 568;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["inputStyle"] = " width:568px;";
	$edata["controlWidth"] = 568;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["register"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["inputStyle"] = " width:568px;";
	$edata["controlWidth"] = 568;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdatamy_timetable["title"] = $fdata;
//	location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "location";
	$fdata["GoodName"] = "location";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Location"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "location"; 
		$fdata["FullName"] = "location";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
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
	
		$edata["inputStyle"] = " width:348px;";
	$edata["controlWidth"] = 348;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["inputStyle"] = " width:348px;";
	$edata["controlWidth"] = 348;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["register"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["inputStyle"] = " width:348px;";
	$edata["controlWidth"] = 348;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdatamy_timetable["location"] = $fdata;
//	organizer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "organizer";
	$fdata["GoodName"] = "organizer";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Organizer"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "organizer"; 
		$fdata["FullName"] = "organizer";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
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
	
		$edata["inputStyle"] = " width:346px;";
	$edata["controlWidth"] = 346;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["inputStyle"] = " width:346px;";
	$edata["controlWidth"] = 346;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["register"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["inputStyle"] = " width:346px;";
	$edata["controlWidth"] = 346;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdatamy_timetable["organizer"] = $fdata;
//	summary
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "summary";
	$fdata["GoodName"] = "summary";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Summary"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "summary"; 
		$fdata["FullName"] = "summary";
	
		
		
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
	
		
		
		
				$edata["nRows"] = 188;
			$edata["nCols"] = 573;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamy_timetable["summary"] = $fdata;
//	attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "attachment";
	$fdata["GoodName"] = "attachment";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Attachment"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		
		
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
	
		$edata["maxFileSize"] = 4000;
	
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 900;
	
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamy_timetable["attachment"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Function"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "department"; 
		$fdata["FullName"] = "department";
	
		
		
				
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
	
		
		
	$tdatamy_timetable["department"] = $fdata;
//	start_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "start_time";
	$fdata["GoodName"] = "start_time";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Start Time"; 
	$fdata["FieldType"] = 134;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "start_time"; 
		$fdata["FullName"] = "start_time";
	
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 15,
									  "showSeconds" => 0);
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamy_timetable["start_time"] = $fdata;
//	end_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "end_time";
	$fdata["GoodName"] = "end_time";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "End Time"; 
	$fdata["FieldType"] = 134;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "end_time"; 
		$fdata["FullName"] = "end_time";
	
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 15,
									  "showSeconds" => 0);
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamy_timetable["end_time"] = $fdata;
//	staffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "staffID";
	$fdata["GoodName"] = "staffID";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Staff"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "staffID"; 
		$fdata["FullName"] = "staffID";
	
		
		
				
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
				if(strpos(GetUserPermissions("my_timetable"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "fullname";
	
		
	$edata["LookupTable"] = "user";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamy_timetable["staffID"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Date"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "date"; 
		$fdata["FullName"] = "`date`";
	
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 0; 
	$edata["LastYearFactor"] = 2; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamy_timetable["date"] = $fdata;
//	day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "day";
	$fdata["GoodName"] = "day";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Day"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "day"; 
		$fdata["FullName"] = "DAYNAME(date)";
	
		
		
				
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
	
		
		
	$tdatamy_timetable["day"] = $fdata;
//	week
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "week";
	$fdata["GoodName"] = "week";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Week"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "week"; 
		$fdata["FullName"] = "WEEK(date)";
	
		
		
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
	
		
		
	$tdatamy_timetable["week"] = $fdata;
//	month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "month";
	$fdata["GoodName"] = "month";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Month"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "month"; 
		$fdata["FullName"] = "MONTH(date)";
	
		
		
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
	
		
		
	$tdatamy_timetable["month"] = $fdata;
//	year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "year";
	$fdata["GoodName"] = "year";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Year"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "year"; 
		$fdata["FullName"] = "YEAR(date)";
	
		
		
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
	
		
		
	$tdatamy_timetable["year"] = $fdata;
//	endate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "endate";
	$fdata["GoodName"] = "endate";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Endate"; 
	$fdata["FieldType"] = 7;
	
		
		
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "endate"; 
		$fdata["FullName"] = "endate";
	
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 0; 
	$edata["LastYearFactor"] = 2; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamy_timetable["endate"] = $fdata;
//	sstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "sstatus";
	$fdata["GoodName"] = "sstatus";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "sstatus"; 
		$fdata["FullName"] = "sstatus";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
				$edata["LCType"] = 4;
			
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Pending";
	$edata["LookupValues"][] = "Approved";
	$edata["LookupValues"][] = "Reject";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamy_timetable["sstatus"] = $fdata;
//	pos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "pos";
	$fdata["GoodName"] = "pos";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Pos"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "pos"; 
		$fdata["FullName"] = "pos";
	
		
		
				
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
	
		
		
	$tdatamy_timetable["pos"] = $fdata;
//	period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "period";
	$fdata["GoodName"] = "period";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Period"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "period"; 
		$fdata["FullName"] = "DAY(endate)-DAY(`date`)";
	
		
		
				
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
	
		
		
	$tdatamy_timetable["period"] = $fdata;
//	note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "note";
	$fdata["GoodName"] = "note";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Note"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "note"; 
		$fdata["FullName"] = "note";
	
		
		
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
	
		
		
	$tdatamy_timetable["note"] = $fdata;
//	subdepartment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "subdepartment";
	$fdata["GoodName"] = "subdepartment";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Sector"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "subdepartment"; 
		$fdata["FullName"] = "subdepartment";
	
		
		
				
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
	
		
		
	$tdatamy_timetable["subdepartment"] = $fdata;
//	date_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "date_status";
	$fdata["GoodName"] = "date_status";
	$fdata["ownerTable"] = "timetable";
	$fdata["Label"] = "Update"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "date_status"; 
		$fdata["FullName"] = "date_status";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Datetime");
	
		
		
		
			
		
		
		
		
		
		
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
	
		
		
	$tdatamy_timetable["date_status"] = $fdata;

	
$tables_data["my_timetable"]=&$tdatamy_timetable;
$field_labels["my_timetable"] = &$fieldLabelsmy_timetable;
$fieldToolTips["my_timetable"] = &$fieldToolTipsmy_timetable;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["my_timetable"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["my_timetable"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_my_timetable()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  fid,  category,  `level`,  title,  location,  organizer,  summary,  attachment,  department,  start_time,  end_time,  staffID,  `date`,  DAYNAME(date) AS `day`,  WEEK(date) AS week,  MONTH(date) AS `month`,  YEAR(date) AS `year`,  endate,  sstatus,  pos,  DAY(endate)-DAY(`date`) AS period,  note,  subdepartment,  date_status";
$proto0["m_strFrom"] = "FROM timetable";
$proto0["m_strWhere"] = "(fid IS NULL)";
$proto0["m_strOrderBy"] = "ORDER BY `date` DESC";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "fid IS NULL";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "fid",
	"m_strTable" => "timetable"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "IS NULL";
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
	"m_strName" => "id",
	"m_strTable" => "timetable"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fid",
	"m_strTable" => "timetable"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "timetable"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "level",
	"m_strTable" => "timetable"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "timetable"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "location",
	"m_strTable" => "timetable"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "organizer",
	"m_strTable" => "timetable"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "summary",
	"m_strTable" => "timetable"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "attachment",
	"m_strTable" => "timetable"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "timetable"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "start_time",
	"m_strTable" => "timetable"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "end_time",
	"m_strTable" => "timetable"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "staffID",
	"m_strTable" => "timetable"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "timetable"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$proto34=array();
$proto34["m_functiontype"] = "SQLF_CUSTOM";
$proto34["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "date"
));

$proto34["m_arguments"][]=$obj;
$proto34["m_strFunctionName"] = "DAYNAME";
$obj = new SQLFunctionCall($proto34);

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "day";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$proto37=array();
$proto37["m_functiontype"] = "SQLF_CUSTOM";
$proto37["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "date"
));

$proto37["m_arguments"][]=$obj;
$proto37["m_strFunctionName"] = "WEEK";
$obj = new SQLFunctionCall($proto37);

$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "week";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$proto40=array();
$proto40["m_functiontype"] = "SQLF_CUSTOM";
$proto40["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "date"
));

$proto40["m_arguments"][]=$obj;
$proto40["m_strFunctionName"] = "MONTH";
$obj = new SQLFunctionCall($proto40);

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "month";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$proto43=array();
$proto43["m_functiontype"] = "SQLF_CUSTOM";
$proto43["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "date"
));

$proto43["m_arguments"][]=$obj;
$proto43["m_strFunctionName"] = "YEAR";
$obj = new SQLFunctionCall($proto43);

$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "year";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "endate",
	"m_strTable" => "timetable"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "sstatus",
	"m_strTable" => "timetable"
));

$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "pos",
	"m_strTable" => "timetable"
));

$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "DAY(endate)-DAY(`date`)"
));

$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "period";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "note",
	"m_strTable" => "timetable"
));

$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "subdepartment",
	"m_strTable" => "timetable"
));

$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "date_status",
	"m_strTable" => "timetable"
));

$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto59=array();
$proto59["m_link"] = "SQLL_MAIN";
			$proto60=array();
$proto60["m_strName"] = "timetable";
$proto60["m_columns"] = array();
$proto60["m_columns"][] = "id";
$proto60["m_columns"][] = "fid";
$proto60["m_columns"][] = "start_time";
$proto60["m_columns"][] = "end_time";
$proto60["m_columns"][] = "staffID";
$proto60["m_columns"][] = "date";
$proto60["m_columns"][] = "endate";
$proto60["m_columns"][] = "category";
$proto60["m_columns"][] = "title";
$proto60["m_columns"][] = "level";
$proto60["m_columns"][] = "location";
$proto60["m_columns"][] = "organizer";
$proto60["m_columns"][] = "department";
$proto60["m_columns"][] = "subdepartment";
$proto60["m_columns"][] = "pos";
$proto60["m_columns"][] = "sstatus";
$proto60["m_columns"][] = "date_status";
$proto60["m_columns"][] = "summary";
$proto60["m_columns"][] = "attachment";
$proto60["m_columns"][] = "note";
$obj = new SQLTable($proto60);

$proto59["m_table"] = $obj;
$proto59["m_alias"] = "";
$proto61=array();
$proto61["m_sql"] = "";
$proto61["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto61["m_column"]=$obj;
$proto61["m_contained"] = array();
$proto61["m_strCase"] = "";
$proto61["m_havingmode"] = "0";
$proto61["m_inBrackets"] = "0";
$proto61["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto61);

$proto59["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto59);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto63=array();
						$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "timetable"
));

$proto63["m_column"]=$obj;
$proto63["m_bAsc"] = 0;
$proto63["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto63);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_my_timetable = createSqlQuery_my_timetable();
																									$tdatamy_timetable[".sqlquery"] = $queryData_my_timetable;

include_once(getabspath("include/my_timetable_events.php"));
$tableEvents["my_timetable"] = new eventclass_my_timetable;
$tdatamy_timetable[".hasEvents"] = true;

$cipherer = new RunnerCipherer("my_timetable");

$query = &$queryData_my_timetable;
$table = "my_timetable";
// here goes EVENT_INIT_TABLE event
$query->addWhere("StaffID=$_SESSION[userid]");

;
unset($query); 
?>