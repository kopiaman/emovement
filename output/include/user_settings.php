<?php
require_once(getabspath("classes/cipherer.php"));
$tdatauser = array();
	$tdatauser[".NumberOfChars"] = 80; 
	$tdatauser[".ShortName"] = "user";
	$tdatauser[".OwnerID"] = "";
	$tdatauser[".OriginalTable"] = "user";

//	field labels
$fieldLabelsuser = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuser["English"] = array();
	$fieldToolTipsuser["English"] = array();
	$fieldLabelsuser["English"]["id"] = "Id";
	$fieldToolTipsuser["English"]["id"] = "";
	$fieldLabelsuser["English"]["pass"] = "Password";
	$fieldToolTipsuser["English"]["pass"] = "";
	$fieldLabelsuser["English"]["fullname"] = "Fullname";
	$fieldToolTipsuser["English"]["fullname"] = "";
	$fieldLabelsuser["English"]["department"] = "Function";
	$fieldToolTipsuser["English"]["department"] = "";
	$fieldLabelsuser["English"]["umail"] = "Email";
	$fieldToolTipsuser["English"]["umail"] = "";
	$fieldLabelsuser["English"]["icno"] = "Username";
	$fieldToolTipsuser["English"]["icno"] = "";
	$fieldLabelsuser["English"]["pos"] = "Position";
	$fieldToolTipsuser["English"]["pos"] = "";
	$fieldLabelsuser["English"]["staffID"] = "Staff ID";
	$fieldToolTipsuser["English"]["staffID"] = "";
	$fieldLabelsuser["English"]["approverID"] = "Approver ID";
	$fieldToolTipsuser["English"]["approverID"] = "";
	$fieldLabelsuser["English"]["subdepartment"] = "Sector";
	$fieldToolTipsuser["English"]["subdepartment"] = "";
	$fieldLabelsuser["English"]["sstatus"] = "Status";
	$fieldToolTipsuser["English"]["sstatus"] = "";
	if (count($fieldToolTipsuser["English"]))
		$tdatauser[".isUseToolTips"] = true;
}
	
	
	$tdatauser[".NCSearch"] = true;



$tdatauser[".shortTableName"] = "user";
$tdatauser[".nSecOptions"] = 0;
$tdatauser[".recsPerRowList"] = 1;
$tdatauser[".mainTableOwnerID"] = "";
$tdatauser[".moveNext"] = 1;
$tdatauser[".nType"] = 0;

$tdatauser[".strOriginalTableName"] = "user";




$tdatauser[".showAddInPopup"] = false;

$tdatauser[".showEditInPopup"] = false;

$tdatauser[".showViewInPopup"] = false;

$tdatauser[".fieldsForRegister"] = array();

$tdatauser[".listAjax"] = false;

	$tdatauser[".audit"] = false;

	$tdatauser[".locking"] = false;

$tdatauser[".listIcons"] = true;
$tdatauser[".view"] = true;




$tdatauser[".showSimpleSearchOptions"] = false;

$tdatauser[".showSearchPanel"] = true;

if (isMobile())
	$tdatauser[".isUseAjaxSuggest"] = false;
else 
	$tdatauser[".isUseAjaxSuggest"] = true;

$tdatauser[".rowHighlite"] = true;

// button handlers file names

$tdatauser[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauser[".isUseTimeForSearch"] = false;




$tdatauser[".allSearchFields"] = array();

$tdatauser[".allSearchFields"][] = "pass";
$tdatauser[".allSearchFields"][] = "icno";
$tdatauser[".allSearchFields"][] = "umail";
$tdatauser[".allSearchFields"][] = "id";
$tdatauser[".allSearchFields"][] = "fullname";
$tdatauser[".allSearchFields"][] = "department";
$tdatauser[".allSearchFields"][] = "subdepartment";
$tdatauser[".allSearchFields"][] = "pos";
$tdatauser[".allSearchFields"][] = "sstatus";

$tdatauser[".googleLikeFields"][] = "id";
$tdatauser[".googleLikeFields"][] = "pass";
$tdatauser[".googleLikeFields"][] = "fullname";
$tdatauser[".googleLikeFields"][] = "department";
$tdatauser[".googleLikeFields"][] = "subdepartment";
$tdatauser[".googleLikeFields"][] = "umail";
$tdatauser[".googleLikeFields"][] = "icno";
$tdatauser[".googleLikeFields"][] = "pos";
$tdatauser[".googleLikeFields"][] = "sstatus";


$tdatauser[".advSearchFields"][] = "pass";
$tdatauser[".advSearchFields"][] = "icno";
$tdatauser[".advSearchFields"][] = "umail";
$tdatauser[".advSearchFields"][] = "id";
$tdatauser[".advSearchFields"][] = "fullname";
$tdatauser[".advSearchFields"][] = "department";
$tdatauser[".advSearchFields"][] = "subdepartment";
$tdatauser[".advSearchFields"][] = "pos";
$tdatauser[".advSearchFields"][] = "sstatus";

$tdatauser[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatauser[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauser[".strOrderBy"] = $tstrOrderBy;

$tdatauser[".orderindexes"] = array();

$tdatauser[".sqlHead"] = "SELECT id,   pass,   fullname,   department,   subdepartment,   umail,   icno,   pos,   sstatus";
$tdatauser[".sqlFrom"] = "FROM `user`";
$tdatauser[".sqlWhereExpr"] = "";
$tdatauser[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauser[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauser[".arrGroupsPerPage"] = $arrGPP;

$tableKeysuser = array();
$tableKeysuser[] = "id";
$tdatauser[".Keys"] = $tableKeysuser;

$tdatauser[".listFields"] = array();
$tdatauser[".listFields"][] = "fullname";
$tdatauser[".listFields"][] = "department";
$tdatauser[".listFields"][] = "subdepartment";
$tdatauser[".listFields"][] = "pos";
$tdatauser[".listFields"][] = "sstatus";

$tdatauser[".viewFields"] = array();
$tdatauser[".viewFields"][] = "fullname";
$tdatauser[".viewFields"][] = "department";
$tdatauser[".viewFields"][] = "subdepartment";
$tdatauser[".viewFields"][] = "pos";
$tdatauser[".viewFields"][] = "sstatus";

$tdatauser[".addFields"] = array();

$tdatauser[".inlineAddFields"] = array();

$tdatauser[".editFields"] = array();

$tdatauser[".inlineEditFields"] = array();

$tdatauser[".exportFields"] = array();

$tdatauser[".printFields"] = array();

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
	
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatauser["id"] = $fdata;
//	pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pass";
	$fdata["GoodName"] = "pass";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Password"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "pass"; 
		$fdata["FullName"] = "pass";
	
		
		
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
	
		
		
	$tdatauser["pass"] = $fdata;
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
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		$edata["inputStyle"] = " width:340px;";
	$edata["controlWidth"] = 340;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatauser["fullname"] = $fdata;
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
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatauser["department"] = $fdata;
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
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatauser["subdepartment"] = $fdata;
//	umail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "umail";
	$fdata["GoodName"] = "umail";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Email"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatauser["umail"] = $fdata;
//	icno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "icno";
	$fdata["GoodName"] = "icno";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Username"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatauser["icno"] = $fdata;
//	pos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "pos";
	$fdata["GoodName"] = "pos";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Position"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdatauser["pos"] = $fdata;
//	sstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sstatus";
	$fdata["GoodName"] = "sstatus";
	$fdata["ownerTable"] = "user";
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
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Readonly");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatauser["sstatus"] = $fdata;

	
$tables_data["user"]=&$tdatauser;
$field_labels["user"] = &$fieldLabelsuser;
$fieldToolTips["user"] = &$fieldToolTipsuser;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["user"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["user"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_user()
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
$queryData_user = createSqlQuery_user();
									$tdatauser[".sqlquery"] = $queryData_user;

$tableEvents["user"] = new eventsBase;
$tdatauser[".hasEvents"] = false;

$cipherer = new RunnerCipherer("user");

?>