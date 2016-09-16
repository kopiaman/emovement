<?php
require_once(getabspath("classes/cipherer.php"));
$tdataUser_Level = array();
	$tdataUser_Level[".NumberOfChars"] = 80; 
	$tdataUser_Level[".ShortName"] = "User_Level";
	$tdataUser_Level[".OwnerID"] = "";
	$tdataUser_Level[".OriginalTable"] = "emov_ugmembers";

//	field labels
$fieldLabelsUser_Level = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsUser_Level["English"] = array();
	$fieldToolTipsUser_Level["English"] = array();
	$fieldLabelsUser_Level["English"]["UserName"] = "User Name";
	$fieldToolTipsUser_Level["English"]["UserName"] = "";
	$fieldLabelsUser_Level["English"]["GroupID"] = "Access Level";
	$fieldToolTipsUser_Level["English"]["GroupID"] = "";
	if (count($fieldToolTipsUser_Level["English"]))
		$tdataUser_Level[".isUseToolTips"] = true;
}
	
	
	$tdataUser_Level[".NCSearch"] = true;



$tdataUser_Level[".shortTableName"] = "User_Level";
$tdataUser_Level[".nSecOptions"] = 0;
$tdataUser_Level[".recsPerRowList"] = 1;
$tdataUser_Level[".mainTableOwnerID"] = "";
$tdataUser_Level[".moveNext"] = 1;
$tdataUser_Level[".nType"] = 1;

$tdataUser_Level[".strOriginalTableName"] = "emov_ugmembers";




$tdataUser_Level[".showAddInPopup"] = false;

$tdataUser_Level[".showEditInPopup"] = false;

$tdataUser_Level[".showViewInPopup"] = false;

$tdataUser_Level[".fieldsForRegister"] = array();

$tdataUser_Level[".listAjax"] = false;

	$tdataUser_Level[".audit"] = false;

	$tdataUser_Level[".locking"] = false;

$tdataUser_Level[".listIcons"] = true;
$tdataUser_Level[".inlineEdit"] = true;
$tdataUser_Level[".inlineAdd"] = true;



$tdataUser_Level[".delete"] = true;

$tdataUser_Level[".showSimpleSearchOptions"] = false;

$tdataUser_Level[".showSearchPanel"] = true;

if (isMobile())
	$tdataUser_Level[".isUseAjaxSuggest"] = false;
else 
	$tdataUser_Level[".isUseAjaxSuggest"] = true;

$tdataUser_Level[".rowHighlite"] = true;

// button handlers file names

$tdataUser_Level[".addPageEvents"] = false;

// use timepicker for search panel
$tdataUser_Level[".isUseTimeForSearch"] = false;




$tdataUser_Level[".allSearchFields"] = array();

$tdataUser_Level[".allSearchFields"][] = "GroupID";

$tdataUser_Level[".googleLikeFields"][] = "UserName";
$tdataUser_Level[".googleLikeFields"][] = "GroupID";


$tdataUser_Level[".advSearchFields"][] = "GroupID";

$tdataUser_Level[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataUser_Level[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataUser_Level[".strOrderBy"] = $tstrOrderBy;

$tdataUser_Level[".orderindexes"] = array();

$tdataUser_Level[".sqlHead"] = "SELECT UserName,   GroupID";
$tdataUser_Level[".sqlFrom"] = "FROM emov_ugmembers";
$tdataUser_Level[".sqlWhereExpr"] = "";
$tdataUser_Level[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataUser_Level[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataUser_Level[".arrGroupsPerPage"] = $arrGPP;

$tableKeysUser_Level = array();
$tableKeysUser_Level[] = "UserName";
$tableKeysUser_Level[] = "GroupID";
$tdataUser_Level[".Keys"] = $tableKeysUser_Level;

$tdataUser_Level[".listFields"] = array();
$tdataUser_Level[".listFields"][] = "GroupID";

$tdataUser_Level[".viewFields"] = array();
$tdataUser_Level[".viewFields"][] = "GroupID";

$tdataUser_Level[".addFields"] = array();
$tdataUser_Level[".addFields"][] = "GroupID";

$tdataUser_Level[".inlineAddFields"] = array();
$tdataUser_Level[".inlineAddFields"][] = "GroupID";

$tdataUser_Level[".editFields"] = array();
$tdataUser_Level[".editFields"][] = "GroupID";

$tdataUser_Level[".inlineEditFields"] = array();
$tdataUser_Level[".inlineEditFields"][] = "GroupID";

$tdataUser_Level[".exportFields"] = array();
$tdataUser_Level[".exportFields"][] = "GroupID";

$tdataUser_Level[".printFields"] = array();
$tdataUser_Level[".printFields"][] = "GroupID";

//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "emov_ugmembers";
	$fdata["Label"] = "User Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "UserName"; 
		$fdata["FullName"] = "UserName";
	
		
		
				
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
	
		
		
	$tdataUser_Level["UserName"] = $fdata;
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "emov_ugmembers";
	$fdata["Label"] = "Access Level"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "GroupID"; 
		$fdata["FullName"] = "GroupID";
	
		
		
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
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "GroupID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Label";
	
		
	$edata["LookupTable"] = "emov_uggroups";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
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
	
		
		
	$tdataUser_Level["GroupID"] = $fdata;

	
$tables_data["User_Level"]=&$tdataUser_Level;
$field_labels["User_Level"] = &$fieldLabelsUser_Level;
$fieldToolTips["User_Level"] = &$fieldToolTipsUser_Level;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["User_Level"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["User_Level"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="user";
	$masterParams["mDataSourceTable"]="User Access Level";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "User_Access_Level";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["User_Level"][$mIndex] = $masterParams;	
		$masterTablesData["User_Level"][$mIndex]["masterKeys"][]="icno";
		$masterTablesData["User_Level"][$mIndex]["detailKeys"][]="UserName";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_User_Level()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UserName,   GroupID";
$proto0["m_strFrom"] = "FROM emov_ugmembers";
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
	"m_strName" => "UserName",
	"m_strTable" => "emov_ugmembers"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "emov_ugmembers"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "emov_ugmembers";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "UserName";
$proto10["m_columns"][] = "GroupID";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_alias"] = "";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = "0";
$proto11["m_inBrackets"] = "0";
$proto11["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_User_Level = createSqlQuery_User_Level();
		$tdataUser_Level[".sqlquery"] = $queryData_User_Level;

$tableEvents["User_Level"] = new eventsBase;
$tdataUser_Level[".hasEvents"] = false;

$cipherer = new RunnerCipherer("User_Level");

?>