<?php
require_once(getabspath("classes/cipherer.php"));
$tdatauser_profile = array();
	$tdatauser_profile[".NumberOfChars"] = 80; 
	$tdatauser_profile[".ShortName"] = "user_profile";
	$tdatauser_profile[".OwnerID"] = "id";
	$tdatauser_profile[".OriginalTable"] = "user";

//	field labels
$fieldLabelsuser_profile = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuser_profile["English"] = array();
	$fieldToolTipsuser_profile["English"] = array();
	$fieldLabelsuser_profile["English"]["id"] = "Id";
	$fieldToolTipsuser_profile["English"]["id"] = "";
	$fieldLabelsuser_profile["English"]["pass"] = "Password";
	$fieldToolTipsuser_profile["English"]["pass"] = "";
	$fieldLabelsuser_profile["English"]["fullname"] = "Fullname";
	$fieldToolTipsuser_profile["English"]["fullname"] = "";
	$fieldLabelsuser_profile["English"]["department"] = "Function";
	$fieldToolTipsuser_profile["English"]["department"] = "";
	$fieldLabelsuser_profile["English"]["umail"] = "Email";
	$fieldToolTipsuser_profile["English"]["umail"] = "";
	$fieldLabelsuser_profile["English"]["icno"] = "Username";
	$fieldToolTipsuser_profile["English"]["icno"] = "";
	$fieldLabelsuser_profile["English"]["pos"] = "Position";
	$fieldToolTipsuser_profile["English"]["pos"] = "";
	$fieldLabelsuser_profile["English"]["subdepartment"] = "Sector";
	$fieldToolTipsuser_profile["English"]["subdepartment"] = "";
	$fieldLabelsuser_profile["English"]["sstatus"] = "Status";
	$fieldToolTipsuser_profile["English"]["sstatus"] = "";
	if (count($fieldToolTipsuser_profile["English"]))
		$tdatauser_profile[".isUseToolTips"] = true;
}
	
	
	$tdatauser_profile[".NCSearch"] = true;



$tdatauser_profile[".shortTableName"] = "user_profile";
$tdatauser_profile[".nSecOptions"] = 1;
$tdatauser_profile[".recsPerRowList"] = 1;
$tdatauser_profile[".mainTableOwnerID"] = "id";
$tdatauser_profile[".moveNext"] = 1;
$tdatauser_profile[".nType"] = 1;

$tdatauser_profile[".strOriginalTableName"] = "user";




$tdatauser_profile[".showAddInPopup"] = false;

$tdatauser_profile[".showEditInPopup"] = false;

$tdatauser_profile[".showViewInPopup"] = false;

$tdatauser_profile[".fieldsForRegister"] = array();

$tdatauser_profile[".listAjax"] = false;

	$tdatauser_profile[".audit"] = false;

	$tdatauser_profile[".locking"] = false;

$tdatauser_profile[".listIcons"] = true;
$tdatauser_profile[".edit"] = true;




$tdatauser_profile[".showSimpleSearchOptions"] = false;

$tdatauser_profile[".showSearchPanel"] = true;

if (isMobile())
	$tdatauser_profile[".isUseAjaxSuggest"] = false;
else 
	$tdatauser_profile[".isUseAjaxSuggest"] = true;

$tdatauser_profile[".rowHighlite"] = true;

// button handlers file names

$tdatauser_profile[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauser_profile[".isUseTimeForSearch"] = false;




$tdatauser_profile[".allSearchFields"] = array();


$tdatauser_profile[".googleLikeFields"][] = "id";
$tdatauser_profile[".googleLikeFields"][] = "pass";
$tdatauser_profile[".googleLikeFields"][] = "fullname";
$tdatauser_profile[".googleLikeFields"][] = "department";
$tdatauser_profile[".googleLikeFields"][] = "subdepartment";
$tdatauser_profile[".googleLikeFields"][] = "umail";
$tdatauser_profile[".googleLikeFields"][] = "icno";
$tdatauser_profile[".googleLikeFields"][] = "pos";
$tdatauser_profile[".googleLikeFields"][] = "sstatus";



$tdatauser_profile[".isTableType"] = "list";

	
$tdatauser_profile[".isVerLayout"] = true;



// Access doesn't support subqueries from the same table as main



$tdatauser_profile[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauser_profile[".strOrderBy"] = $tstrOrderBy;

$tdatauser_profile[".orderindexes"] = array();

$tdatauser_profile[".sqlHead"] = "SELECT id,   pass,   fullname,   department,   subdepartment,   umail,   icno,   pos,   sstatus";
$tdatauser_profile[".sqlFrom"] = "FROM `user`";
$tdatauser_profile[".sqlWhereExpr"] = "";
$tdatauser_profile[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauser_profile[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauser_profile[".arrGroupsPerPage"] = $arrGPP;

$tableKeysuser_profile = array();
$tableKeysuser_profile[] = "id";
$tdatauser_profile[".Keys"] = $tableKeysuser_profile;

$tdatauser_profile[".listFields"] = array();
$tdatauser_profile[".listFields"][] = "fullname";
$tdatauser_profile[".listFields"][] = "department";
$tdatauser_profile[".listFields"][] = "subdepartment";
$tdatauser_profile[".listFields"][] = "umail";
$tdatauser_profile[".listFields"][] = "icno";

$tdatauser_profile[".viewFields"] = array();

$tdatauser_profile[".addFields"] = array();

$tdatauser_profile[".inlineAddFields"] = array();

$tdatauser_profile[".editFields"] = array();
$tdatauser_profile[".editFields"][] = "fullname";
$tdatauser_profile[".editFields"][] = "department";
$tdatauser_profile[".editFields"][] = "subdepartment";
$tdatauser_profile[".editFields"][] = "umail";
$tdatauser_profile[".editFields"][] = "icno";

$tdatauser_profile[".inlineEditFields"] = array();

$tdatauser_profile[".exportFields"] = array();

$tdatauser_profile[".printFields"] = array();

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
	
		
		
	$tdatauser_profile["id"] = $fdata;
//	pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pass";
	$fdata["GoodName"] = "pass";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Password"; 
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
	
		
		
	$tdatauser_profile["pass"] = $fdata;
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
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["inputStyle"] = " width:340px;";
	$edata["controlWidth"] = 340;
	
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatauser_profile["fullname"] = $fdata;
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
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "dip";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "dname";
	
		
	$edata["LookupTable"] = "department";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
			//	dependent dropdowns	
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "subdepartment";
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatauser_profile["department"] = $fdata;
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
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
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
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatauser_profile["subdepartment"] = $fdata;
//	umail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "umail";
	$fdata["GoodName"] = "umail";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Email"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
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
	
		
		
	$tdatauser_profile["umail"] = $fdata;
//	icno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "icno";
	$fdata["GoodName"] = "icno";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Username"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=12";
	
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatauser_profile["icno"] = $fdata;
//	pos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "pos";
	$fdata["GoodName"] = "pos";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Position"; 
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatauser_profile["pos"] = $fdata;
//	sstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sstatus";
	$fdata["GoodName"] = "sstatus";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "sstatus"; 
		$fdata["FullName"] = "sstatus";
	
		
		
				
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
	
		
		
	$tdatauser_profile["sstatus"] = $fdata;

	
$tables_data["user_profile"]=&$tdatauser_profile;
$field_labels["user_profile"] = &$fieldLabelsuser_profile;
$fieldToolTips["user_profile"] = &$fieldToolTipsuser_profile;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["user_profile"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["user_profile"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_user_profile()
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
$queryData_user_profile = createSqlQuery_user_profile();
									$tdatauser_profile[".sqlquery"] = $queryData_user_profile;

include_once(getabspath("include/user_profile_events.php"));
$tableEvents["user_profile"] = new eventclass_user_profile;
$tdatauser_profile[".hasEvents"] = true;

$cipherer = new RunnerCipherer("user_profile");

?>