<?php
require_once(getabspath("classes/cipherer.php"));
$tdataUser_Access_Level = array();
	$tdataUser_Access_Level[".NumberOfChars"] = 80; 
	$tdataUser_Access_Level[".ShortName"] = "User_Access_Level";
	$tdataUser_Access_Level[".OwnerID"] = "";
	$tdataUser_Access_Level[".OriginalTable"] = "user";

//	field labels
$fieldLabelsUser_Access_Level = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsUser_Access_Level["English"] = array();
	$fieldToolTipsUser_Access_Level["English"] = array();
	$fieldLabelsUser_Access_Level["English"]["id"] = "Id";
	$fieldToolTipsUser_Access_Level["English"]["id"] = "";
	$fieldLabelsUser_Access_Level["English"]["fullname"] = "Fullname";
	$fieldToolTipsUser_Access_Level["English"]["fullname"] = "";
	$fieldLabelsUser_Access_Level["English"]["department"] = "Function";
	$fieldToolTipsUser_Access_Level["English"]["department"] = "";
	$fieldLabelsUser_Access_Level["English"]["umail"] = "Email";
	$fieldToolTipsUser_Access_Level["English"]["umail"] = "";
	$fieldLabelsUser_Access_Level["English"]["icno"] = "Username";
	$fieldToolTipsUser_Access_Level["English"]["icno"] = "";
	$fieldLabelsUser_Access_Level["English"]["pos"] = "Position";
	$fieldToolTipsUser_Access_Level["English"]["pos"] = "";
	$fieldLabelsUser_Access_Level["English"]["staffID"] = "Staff ID";
	$fieldToolTipsUser_Access_Level["English"]["staffID"] = "";
	$fieldLabelsUser_Access_Level["English"]["approverID"] = "Approver ID";
	$fieldToolTipsUser_Access_Level["English"]["approverID"] = "";
	$fieldLabelsUser_Access_Level["English"]["subdepartment"] = "Sector";
	$fieldToolTipsUser_Access_Level["English"]["subdepartment"] = "";
	$fieldLabelsUser_Access_Level["English"]["sstatus"] = "Status";
	$fieldToolTipsUser_Access_Level["English"]["sstatus"] = "";
	$fieldLabelsUser_Access_Level["English"]["totalrecord"] = "Records";
	$fieldToolTipsUser_Access_Level["English"]["totalrecord"] = "";
	if (count($fieldToolTipsUser_Access_Level["English"]))
		$tdataUser_Access_Level[".isUseToolTips"] = true;
}
	
	
	$tdataUser_Access_Level[".NCSearch"] = true;



$tdataUser_Access_Level[".shortTableName"] = "User_Access_Level";
$tdataUser_Access_Level[".nSecOptions"] = 0;
$tdataUser_Access_Level[".recsPerRowList"] = 1;
$tdataUser_Access_Level[".mainTableOwnerID"] = "";
$tdataUser_Access_Level[".moveNext"] = 1;
$tdataUser_Access_Level[".nType"] = 1;

$tdataUser_Access_Level[".strOriginalTableName"] = "user";




$tdataUser_Access_Level[".showAddInPopup"] = false;

$tdataUser_Access_Level[".showEditInPopup"] = false;

$tdataUser_Access_Level[".showViewInPopup"] = false;

$tdataUser_Access_Level[".fieldsForRegister"] = array();

$tdataUser_Access_Level[".listAjax"] = false;

	$tdataUser_Access_Level[".audit"] = false;

	$tdataUser_Access_Level[".locking"] = false;

$tdataUser_Access_Level[".listIcons"] = true;
$tdataUser_Access_Level[".inlineEdit"] = true;
$tdataUser_Access_Level[".inlineAdd"] = true;
$tdataUser_Access_Level[".view"] = true;



$tdataUser_Access_Level[".delete"] = true;

$tdataUser_Access_Level[".showSimpleSearchOptions"] = false;

$tdataUser_Access_Level[".showSearchPanel"] = true;

if (isMobile())
	$tdataUser_Access_Level[".isUseAjaxSuggest"] = false;
else 
	$tdataUser_Access_Level[".isUseAjaxSuggest"] = true;

$tdataUser_Access_Level[".rowHighlite"] = true;

// button handlers file names
$tdataUser_Access_Level[".isUsebuttonHandlers"] = true;

$tdataUser_Access_Level[".addPageEvents"] = false;

// use timepicker for search panel
$tdataUser_Access_Level[".isUseTimeForSearch"] = false;



$tdataUser_Access_Level[".useDetailsPreview"] = true;

$tdataUser_Access_Level[".allSearchFields"] = array();

$tdataUser_Access_Level[".allSearchFields"][] = "icno";
$tdataUser_Access_Level[".allSearchFields"][] = "fullname";
$tdataUser_Access_Level[".allSearchFields"][] = "department";
$tdataUser_Access_Level[".allSearchFields"][] = "subdepartment";
$tdataUser_Access_Level[".allSearchFields"][] = "pos";
$tdataUser_Access_Level[".allSearchFields"][] = "sstatus";

$tdataUser_Access_Level[".googleLikeFields"][] = "fullname";
$tdataUser_Access_Level[".googleLikeFields"][] = "department";
$tdataUser_Access_Level[".googleLikeFields"][] = "subdepartment";
$tdataUser_Access_Level[".googleLikeFields"][] = "umail";
$tdataUser_Access_Level[".googleLikeFields"][] = "icno";
$tdataUser_Access_Level[".googleLikeFields"][] = "pos";
$tdataUser_Access_Level[".googleLikeFields"][] = "sstatus";
$tdataUser_Access_Level[".googleLikeFields"][] = "totalrecord";

$tdataUser_Access_Level[".panelSearchFields"][] = "icno";
$tdataUser_Access_Level[".panelSearchFields"][] = "umail";
$tdataUser_Access_Level[".panelSearchFields"][] = "fullname";
$tdataUser_Access_Level[".panelSearchFields"][] = "department";
$tdataUser_Access_Level[".panelSearchFields"][] = "subdepartment";
$tdataUser_Access_Level[".panelSearchFields"][] = "pos";
$tdataUser_Access_Level[".panelSearchFields"][] = "sstatus";

$tdataUser_Access_Level[".advSearchFields"][] = "icno";
$tdataUser_Access_Level[".advSearchFields"][] = "fullname";
$tdataUser_Access_Level[".advSearchFields"][] = "department";
$tdataUser_Access_Level[".advSearchFields"][] = "subdepartment";
$tdataUser_Access_Level[".advSearchFields"][] = "pos";
$tdataUser_Access_Level[".advSearchFields"][] = "sstatus";

$tdataUser_Access_Level[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdataUser_Access_Level[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY `user`.id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataUser_Access_Level[".strOrderBy"] = $tstrOrderBy;

$tdataUser_Access_Level[".orderindexes"] = array();
$tdataUser_Access_Level[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`user`.id");

$tdataUser_Access_Level[".sqlHead"] = "SELECT `user`.id,  `user`.fullname,  `user`.department,  `user`.subdepartment,  `user`.umail,  `user`.icno,  `user`.pos,  `user`.sstatus,  COUNT(timetable.id) AS totalrecord";
$tdataUser_Access_Level[".sqlFrom"] = "FROM `user`  LEFT OUTER JOIN timetable ON `user`.id = timetable.staffID";
$tdataUser_Access_Level[".sqlWhereExpr"] = "";
$tdataUser_Access_Level[".sqlTail"] = "GROUP BY `user`.id";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataUser_Access_Level[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataUser_Access_Level[".arrGroupsPerPage"] = $arrGPP;

$tableKeysUser_Access_Level = array();
$tableKeysUser_Access_Level[] = "id";
$tdataUser_Access_Level[".Keys"] = $tableKeysUser_Access_Level;

$tdataUser_Access_Level[".listFields"] = array();
$tdataUser_Access_Level[".listFields"][] = "icno";
$tdataUser_Access_Level[".listFields"][] = "umail";
$tdataUser_Access_Level[".listFields"][] = "fullname";
$tdataUser_Access_Level[".listFields"][] = "department";
$tdataUser_Access_Level[".listFields"][] = "subdepartment";
$tdataUser_Access_Level[".listFields"][] = "pos";
$tdataUser_Access_Level[".listFields"][] = "totalrecord";
$tdataUser_Access_Level[".listFields"][] = "sstatus";

$tdataUser_Access_Level[".viewFields"] = array();
$tdataUser_Access_Level[".viewFields"][] = "icno";
$tdataUser_Access_Level[".viewFields"][] = "umail";
$tdataUser_Access_Level[".viewFields"][] = "fullname";
$tdataUser_Access_Level[".viewFields"][] = "department";
$tdataUser_Access_Level[".viewFields"][] = "subdepartment";
$tdataUser_Access_Level[".viewFields"][] = "pos";
$tdataUser_Access_Level[".viewFields"][] = "totalrecord";
$tdataUser_Access_Level[".viewFields"][] = "sstatus";

$tdataUser_Access_Level[".addFields"] = array();

$tdataUser_Access_Level[".inlineAddFields"] = array();
$tdataUser_Access_Level[".inlineAddFields"][] = "icno";
$tdataUser_Access_Level[".inlineAddFields"][] = "umail";
$tdataUser_Access_Level[".inlineAddFields"][] = "fullname";
$tdataUser_Access_Level[".inlineAddFields"][] = "department";
$tdataUser_Access_Level[".inlineAddFields"][] = "subdepartment";
$tdataUser_Access_Level[".inlineAddFields"][] = "pos";
$tdataUser_Access_Level[".inlineAddFields"][] = "sstatus";

$tdataUser_Access_Level[".editFields"] = array();

$tdataUser_Access_Level[".inlineEditFields"] = array();
$tdataUser_Access_Level[".inlineEditFields"][] = "icno";
$tdataUser_Access_Level[".inlineEditFields"][] = "umail";
$tdataUser_Access_Level[".inlineEditFields"][] = "fullname";
$tdataUser_Access_Level[".inlineEditFields"][] = "department";
$tdataUser_Access_Level[".inlineEditFields"][] = "subdepartment";
$tdataUser_Access_Level[".inlineEditFields"][] = "pos";
$tdataUser_Access_Level[".inlineEditFields"][] = "sstatus";

$tdataUser_Access_Level[".exportFields"] = array();

$tdataUser_Access_Level[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "`user`.id";
	
		
		
				
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
	
		
		
	$tdataUser_Access_Level["id"] = $fdata;
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Fullname"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
			$edata["EditParams"].= " maxlength=100";
	
		$edata["inputStyle"] = " width:150px;";
	$edata["controlWidth"] = 150;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataUser_Access_Level["fullname"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Function"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "department"; 
		$fdata["FullName"] = "`user`.department";
	
		
		
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
				
		
			
	$edata["LinkField"] = "dip";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "dcode";
	
		
	$edata["LookupTable"] = "department";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
			//	dependent dropdowns	
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "subdepartment";
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataUser_Access_Level["department"] = $fdata;
//	subdepartment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "subdepartment";
	$fdata["GoodName"] = "subdepartment";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Sector"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "subdepartment"; 
		$fdata["FullName"] = "`user`.subdepartment";
	
		
		
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
				
		
			
	$edata["LinkField"] = "subid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "subname";
	
		
	$edata["LookupTable"] = "department_sub";
	$edata["LookupOrderBy"] = "";
	
		
		
		$edata["UseCategory"] = true; 
	$edata["CategoryControl"] = "department"; 
	$edata["CategoryFilter"] = "dip"; 
	
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:140px;";
	$edata["controlWidth"] = 140;
	
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataUser_Access_Level["subdepartment"] = $fdata;
//	umail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "umail";
	$fdata["GoodName"] = "umail";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Email"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "umail"; 
		$fdata["FullName"] = "`user`.umail";
	
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";
	
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataUser_Access_Level["umail"] = $fdata;
//	icno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "icno";
	$fdata["GoodName"] = "icno";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Username"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "icno"; 
		$fdata["FullName"] = "`user`.icno";
	
		
		
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
			$edata["EditParams"].= " maxlength=35";
	
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataUser_Access_Level["icno"] = $fdata;
//	pos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pos";
	$fdata["GoodName"] = "pos";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Position"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
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
	
		
		$edata["LookupWhere"] = "Class=50";
	
		
		
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataUser_Access_Level["pos"] = $fdata;
//	sstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sstatus";
	$fdata["GoodName"] = "sstatus";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "sstatus"; 
		$fdata["FullName"] = "`user`.sstatus";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		$edata["AutoUpdate"] = true; 
	
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Active";
	$edata["LookupValues"][] = "Not Active";

	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");
	
		
		$edata["AutoUpdate"] = true; 
	
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		$edata["AutoUpdate"] = true; 
	
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Active";
	$edata["LookupValues"][] = "Not Active";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdataUser_Access_Level["sstatus"] = $fdata;
//	totalrecord
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "totalrecord";
	$fdata["GoodName"] = "totalrecord";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Records"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "totalrecord"; 
		$fdata["FullName"] = "COUNT(timetable.id)";
	
		
		
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
	
		
		
	$tdataUser_Access_Level["totalrecord"] = $fdata;

	
$tables_data["User Access Level"]=&$tdataUser_Access_Level;
$field_labels["User_Access_Level"] = &$fieldLabelsUser_Access_Level;
$fieldToolTips["User Access Level"] = &$fieldToolTipsUser_Access_Level;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["User Access Level"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="emov_ugmembers";
	$detailsParam["dDataSourceTable"]="User_Level";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="User_Level";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["User Access Level"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["User Access Level"][$dIndex]["masterKeys"][]="icno";
		$detailsTablesData["User Access Level"][$dIndex]["detailKeys"][]="UserName";

	
// tables which are master tables for current table (detail)
$masterTablesData["User Access Level"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_User_Access_Level()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`user`.id,  `user`.fullname,  `user`.department,  `user`.subdepartment,  `user`.umail,  `user`.icno,  `user`.pos,  `user`.sstatus,  COUNT(timetable.id) AS totalrecord";
$proto0["m_strFrom"] = "FROM `user`  LEFT OUTER JOIN timetable ON `user`.id = timetable.staffID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `user`.id DESC";
$proto0["m_strTail"] = "GROUP BY `user`.id";
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
	"m_strName" => "id",
	"m_strTable" => "user"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "user"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "user"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "subdepartment",
	"m_strTable" => "user"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "umail",
	"m_strTable" => "user"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "icno",
	"m_strTable" => "user"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "pos",
	"m_strTable" => "user"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "sstatus",
	"m_strTable" => "user"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_COUNT";
$proto22["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "timetable"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto22);

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "totalrecord";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "user";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "pass";
$proto25["m_columns"][] = "fullname";
$proto25["m_columns"][] = "department";
$proto25["m_columns"][] = "subdepartment";
$proto25["m_columns"][] = "umail";
$proto25["m_columns"][] = "icno";
$proto25["m_columns"][] = "pos";
$proto25["m_columns"][] = "sstatus";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_alias"] = "";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = "0";
$proto26["m_inBrackets"] = "0";
$proto26["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_LEFTJOIN";
			$proto29=array();
$proto29["m_strName"] = "timetable";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "fid";
$proto29["m_columns"][] = "start_time";
$proto29["m_columns"][] = "end_time";
$proto29["m_columns"][] = "staffID";
$proto29["m_columns"][] = "date";
$proto29["m_columns"][] = "endate";
$proto29["m_columns"][] = "category";
$proto29["m_columns"][] = "title";
$proto29["m_columns"][] = "level";
$proto29["m_columns"][] = "location";
$proto29["m_columns"][] = "organizer";
$proto29["m_columns"][] = "department";
$proto29["m_columns"][] = "subdepartment";
$proto29["m_columns"][] = "pos";
$proto29["m_columns"][] = "sstatus";
$proto29["m_columns"][] = "date_status";
$proto29["m_columns"][] = "summary";
$proto29["m_columns"][] = "attachment";
$proto29["m_columns"][] = "note";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_alias"] = "";
$proto30=array();
$proto30["m_sql"] = "`user`.id = timetable.staffID";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "user"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= timetable.staffID";
$proto30["m_havingmode"] = "0";
$proto30["m_inBrackets"] = "0";
$proto30["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "user"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "user"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_User_Access_Level = createSqlQuery_User_Access_Level();
									$tdataUser_Access_Level[".sqlquery"] = $queryData_User_Access_Level;

include_once(getabspath("include/User_Access_Level_events.php"));
$tableEvents["User Access Level"] = new eventclass_User_Access_Level;
$tdataUser_Access_Level[".hasEvents"] = true;

$cipherer = new RunnerCipherer("User Access Level");

?>