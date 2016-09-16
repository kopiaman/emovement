<?php
require_once(getabspath("classes/cipherer.php"));
$tdataadmin_members = array();
	$tdataadmin_members[".NumberOfChars"] = 80; 
	$tdataadmin_members[".ShortName"] = "admin_members";
	$tdataadmin_members[".OwnerID"] = "";
	$tdataadmin_members[".OriginalTable"] = "user";

//	field labels
$fieldLabelsadmin_members = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_members["English"] = array();
	$fieldToolTipsadmin_members["English"] = array();
	$fieldLabelsadmin_members["English"]["id"] = "Id";
	$fieldToolTipsadmin_members["English"]["id"] = "";
	$fieldLabelsadmin_members["English"]["pass"] = "Pass";
	$fieldToolTipsadmin_members["English"]["pass"] = "";
	$fieldLabelsadmin_members["English"]["fullname"] = "Fullname";
	$fieldToolTipsadmin_members["English"]["fullname"] = "";
	$fieldLabelsadmin_members["English"]["department"] = "Function";
	$fieldToolTipsadmin_members["English"]["department"] = "";
	$fieldLabelsadmin_members["English"]["umail"] = "Umail";
	$fieldToolTipsadmin_members["English"]["umail"] = "";
	$fieldLabelsadmin_members["English"]["icno"] = "Icno";
	$fieldToolTipsadmin_members["English"]["icno"] = "";
	$fieldLabelsadmin_members["English"]["pos"] = "Pos";
	$fieldToolTipsadmin_members["English"]["pos"] = "";
	$fieldLabelsadmin_members["English"]["subdepartment"] = "Sector";
	$fieldToolTipsadmin_members["English"]["subdepartment"] = "";
	$fieldLabelsadmin_members["English"]["sstatus"] = "Sstatus";
	$fieldToolTipsadmin_members["English"]["sstatus"] = "";
	if (count($fieldToolTipsadmin_members["English"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
	
	
	$tdataadmin_members[".NCSearch"] = true;



$tdataadmin_members[".shortTableName"] = "admin_members";
$tdataadmin_members[".nSecOptions"] = 0;
$tdataadmin_members[".recsPerRowList"] = 1;
$tdataadmin_members[".mainTableOwnerID"] = "";
$tdataadmin_members[".moveNext"] = 1;
$tdataadmin_members[".nType"] = 1;

$tdataadmin_members[".strOriginalTableName"] = "user";




$tdataadmin_members[".showAddInPopup"] = false;

$tdataadmin_members[".showEditInPopup"] = false;

$tdataadmin_members[".showViewInPopup"] = false;

$tdataadmin_members[".fieldsForRegister"] = array();

$tdataadmin_members[".listAjax"] = false;

	$tdataadmin_members[".audit"] = false;

	$tdataadmin_members[".locking"] = false;

$tdataadmin_members[".listIcons"] = true;




$tdataadmin_members[".showSimpleSearchOptions"] = false;

$tdataadmin_members[".showSearchPanel"] = true;

if (isMobile())
	$tdataadmin_members[".isUseAjaxSuggest"] = false;
else 
	$tdataadmin_members[".isUseAjaxSuggest"] = true;

$tdataadmin_members[".rowHighlite"] = true;

// button handlers file names

$tdataadmin_members[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_members[".isUseTimeForSearch"] = false;




$tdataadmin_members[".allSearchFields"] = array();


$tdataadmin_members[".googleLikeFields"][] = "fullname";
$tdataadmin_members[".googleLikeFields"][] = "department";
$tdataadmin_members[".googleLikeFields"][] = "subdepartment";
$tdataadmin_members[".googleLikeFields"][] = "umail";
$tdataadmin_members[".googleLikeFields"][] = "icno";
$tdataadmin_members[".googleLikeFields"][] = "pos";
$tdataadmin_members[".googleLikeFields"][] = "sstatus";

$tdataadmin_members[".panelSearchFields"][] = "department";
$tdataadmin_members[".panelSearchFields"][] = "subdepartment";
$tdataadmin_members[".panelSearchFields"][] = "umail";
$tdataadmin_members[".panelSearchFields"][] = "icno";
$tdataadmin_members[".panelSearchFields"][] = "pos";
$tdataadmin_members[".panelSearchFields"][] = "sstatus";
$tdataadmin_members[".panelSearchFields"][] = "fullname";


$tdataadmin_members[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataadmin_members[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_members[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_members[".orderindexes"] = array();

$tdataadmin_members[".sqlHead"] = "SELECT id,   pass,   fullname,   department,   subdepartment,   umail,   icno,   pos,   sstatus";
$tdataadmin_members[".sqlFrom"] = "FROM `user`";
$tdataadmin_members[".sqlWhereExpr"] = "";
$tdataadmin_members[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_members[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_members[".arrGroupsPerPage"] = $arrGPP;

$tableKeysadmin_members = array();
$tableKeysadmin_members[] = "id";
$tdataadmin_members[".Keys"] = $tableKeysadmin_members;

$tdataadmin_members[".listFields"] = array();
$tdataadmin_members[".listFields"][] = "fullname";
$tdataadmin_members[".listFields"][] = "department";
$tdataadmin_members[".listFields"][] = "subdepartment";
$tdataadmin_members[".listFields"][] = "umail";
$tdataadmin_members[".listFields"][] = "icno";
$tdataadmin_members[".listFields"][] = "pos";
$tdataadmin_members[".listFields"][] = "sstatus";

$tdataadmin_members[".viewFields"] = array();

$tdataadmin_members[".addFields"] = array();

$tdataadmin_members[".inlineAddFields"] = array();

$tdataadmin_members[".editFields"] = array();

$tdataadmin_members[".inlineEditFields"] = array();

$tdataadmin_members[".exportFields"] = array();

$tdataadmin_members[".printFields"] = array();

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
	
		
		
	$tdataadmin_members["id"] = $fdata;
//	pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pass";
	$fdata["GoodName"] = "pass";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Pass"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "pass"; 
		$fdata["FullName"] = "pass";
	
		
		
				
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
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataadmin_members["pass"] = $fdata;
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Fullname"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "fullname"; 
		$fdata["FullName"] = "fullname";
	
		
		
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
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataadmin_members["fullname"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Function"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "department"; 
		$fdata["FullName"] = "department";
	
		
		
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
	
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataadmin_members["department"] = $fdata;
//	subdepartment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "subdepartment";
	$fdata["GoodName"] = "subdepartment";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Sector"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "subdepartment"; 
		$fdata["FullName"] = "subdepartment";
	
		
		
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
	
		
		
	$tdataadmin_members["subdepartment"] = $fdata;
//	umail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "umail";
	$fdata["GoodName"] = "umail";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Umail"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "umail"; 
		$fdata["FullName"] = "umail";
	
		
		
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
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataadmin_members["umail"] = $fdata;
//	icno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "icno";
	$fdata["GoodName"] = "icno";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Icno"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "icno"; 
		$fdata["FullName"] = "icno";
	
		
		
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
			$edata["EditParams"].= " maxlength=12";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataadmin_members["icno"] = $fdata;
//	pos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "pos";
	$fdata["GoodName"] = "pos";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Pos"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "pos"; 
		$fdata["FullName"] = "pos";
	
		
		
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
	
		
		
	$tdataadmin_members["pos"] = $fdata;
//	sstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sstatus";
	$fdata["GoodName"] = "sstatus";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Sstatus"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "sstatus"; 
		$fdata["FullName"] = "sstatus";
	
		
		
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
	
		
		
	$tdataadmin_members["sstatus"] = $fdata;

	
$tables_data["admin_members"]=&$tdataadmin_members;
$field_labels["admin_members"] = &$fieldLabelsadmin_members;
$fieldToolTips["admin_members"] = &$fieldToolTipsadmin_members;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_members"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["admin_members"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_members()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   pass,   fullname,   department,   subdepartment,   umail,   icno,   pos,   sstatus";
$proto0["m_strFrom"] = "FROM `user`";
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
	"m_strName" => "id",
	"m_strTable" => "user"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "pass",
	"m_strTable" => "user"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "user"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "user"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "subdepartment",
	"m_strTable" => "user"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "umail",
	"m_strTable" => "user"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "icno",
	"m_strTable" => "user"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "pos",
	"m_strTable" => "user"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "sstatus",
	"m_strTable" => "user"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "user";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id";
$proto24["m_columns"][] = "pass";
$proto24["m_columns"][] = "fullname";
$proto24["m_columns"][] = "department";
$proto24["m_columns"][] = "subdepartment";
$proto24["m_columns"][] = "umail";
$proto24["m_columns"][] = "icno";
$proto24["m_columns"][] = "pos";
$proto24["m_columns"][] = "sstatus";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_alias"] = "";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = "0";
$proto25["m_inBrackets"] = "0";
$proto25["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_members = createSqlQuery_admin_members();
									$tdataadmin_members[".sqlquery"] = $queryData_admin_members;

$tableEvents["admin_members"] = new eventsBase;
$tdataadmin_members[".hasEvents"] = false;

$cipherer = new RunnerCipherer("admin_members");

?>