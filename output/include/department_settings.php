<?php
require_once(getabspath("classes/cipherer.php"));
$tdatadepartment = array();
	$tdatadepartment[".NumberOfChars"] = 80; 
	$tdatadepartment[".ShortName"] = "department";
	$tdatadepartment[".OwnerID"] = "";
	$tdatadepartment[".OriginalTable"] = "department";

//	field labels
$fieldLabelsdepartment = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdepartment["English"] = array();
	$fieldToolTipsdepartment["English"] = array();
	$fieldLabelsdepartment["English"]["dip"] = "Dip";
	$fieldToolTipsdepartment["English"]["dip"] = "";
	$fieldLabelsdepartment["English"]["dname"] = "Function";
	$fieldToolTipsdepartment["English"]["dname"] = "";
	$fieldLabelsdepartment["English"]["dcode"] = "Function Code";
	$fieldToolTipsdepartment["English"]["dcode"] = "";
	$fieldLabelsdepartment["English"]["department"] = "Department";
	$fieldToolTipsdepartment["English"]["department"] = "";
	if (count($fieldToolTipsdepartment["English"]))
		$tdatadepartment[".isUseToolTips"] = true;
}
	
	
	$tdatadepartment[".NCSearch"] = true;



$tdatadepartment[".shortTableName"] = "department";
$tdatadepartment[".nSecOptions"] = 0;
$tdatadepartment[".recsPerRowList"] = 1;
$tdatadepartment[".mainTableOwnerID"] = "";
$tdatadepartment[".moveNext"] = 1;
$tdatadepartment[".nType"] = 0;

$tdatadepartment[".strOriginalTableName"] = "department";




$tdatadepartment[".showAddInPopup"] = false;

$tdatadepartment[".showEditInPopup"] = false;

$tdatadepartment[".showViewInPopup"] = false;

$tdatadepartment[".fieldsForRegister"] = array();

$tdatadepartment[".listAjax"] = false;

	$tdatadepartment[".audit"] = false;

	$tdatadepartment[".locking"] = false;

$tdatadepartment[".listIcons"] = true;
$tdatadepartment[".inlineEdit"] = true;
$tdatadepartment[".inlineAdd"] = true;



$tdatadepartment[".delete"] = true;

$tdatadepartment[".showSimpleSearchOptions"] = false;

$tdatadepartment[".showSearchPanel"] = true;

if (isMobile())
	$tdatadepartment[".isUseAjaxSuggest"] = false;
else 
	$tdatadepartment[".isUseAjaxSuggest"] = true;

$tdatadepartment[".rowHighlite"] = true;

// button handlers file names

$tdatadepartment[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadepartment[".isUseTimeForSearch"] = false;



$tdatadepartment[".useDetailsPreview"] = true;

$tdatadepartment[".allSearchFields"] = array();


$tdatadepartment[".googleLikeFields"][] = "dip";
$tdatadepartment[".googleLikeFields"][] = "dname";
$tdatadepartment[".googleLikeFields"][] = "dcode";



$tdatadepartment[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdatadepartment[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadepartment[".strOrderBy"] = $tstrOrderBy;

$tdatadepartment[".orderindexes"] = array();

$tdatadepartment[".sqlHead"] = "SELECT dip,   dname,   dcode";
$tdatadepartment[".sqlFrom"] = "FROM department";
$tdatadepartment[".sqlWhereExpr"] = "";
$tdatadepartment[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadepartment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadepartment[".arrGroupsPerPage"] = $arrGPP;

$tableKeysdepartment = array();
$tableKeysdepartment[] = "dip";
$tdatadepartment[".Keys"] = $tableKeysdepartment;

$tdatadepartment[".listFields"] = array();
$tdatadepartment[".listFields"][] = "dname";
$tdatadepartment[".listFields"][] = "dcode";

$tdatadepartment[".viewFields"] = array();

$tdatadepartment[".addFields"] = array();

$tdatadepartment[".inlineAddFields"] = array();
$tdatadepartment[".inlineAddFields"][] = "dname";
$tdatadepartment[".inlineAddFields"][] = "dcode";

$tdatadepartment[".editFields"] = array();

$tdatadepartment[".inlineEditFields"] = array();
$tdatadepartment[".inlineEditFields"][] = "dname";
$tdatadepartment[".inlineEditFields"][] = "dcode";

$tdatadepartment[".exportFields"] = array();

$tdatadepartment[".printFields"] = array();

//	dip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dip";
	$fdata["GoodName"] = "dip";
	$fdata["ownerTable"] = "department";
	$fdata["Label"] = "Dip"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "dip"; 
		$fdata["FullName"] = "dip";
	
		
		
				
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
	
		
		
	$tdatadepartment["dip"] = $fdata;
//	dname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dname";
	$fdata["GoodName"] = "dname";
	$fdata["ownerTable"] = "department";
	$fdata["Label"] = "Function"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "dname"; 
		$fdata["FullName"] = "dname";
	
		
		
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
	
		
		
	$tdatadepartment["dname"] = $fdata;
//	dcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dcode";
	$fdata["GoodName"] = "dcode";
	$fdata["ownerTable"] = "department";
	$fdata["Label"] = "Function Code"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "dcode"; 
		$fdata["FullName"] = "dcode";
	
		
		
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
	
		
		
	$tdatadepartment["dcode"] = $fdata;

	
$tables_data["department"]=&$tdatadepartment;
$field_labels["department"] = &$fieldLabelsdepartment;
$fieldToolTips["department"] = &$fieldToolTipsdepartment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["department"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="department_sub";
	$detailsParam["dDataSourceTable"]="department_sub";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="department_sub";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["department"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["department"][$dIndex]["masterKeys"][]="dip";
		$detailsTablesData["department"][$dIndex]["detailKeys"][]="dip";

	
// tables which are master tables for current table (detail)
$masterTablesData["department"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_department()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dip,   dname,   dcode";
$proto0["m_strFrom"] = "FROM department";
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
	"m_strName" => "dip",
	"m_strTable" => "department"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "dname",
	"m_strTable" => "department"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "dcode",
	"m_strTable" => "department"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "department";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "dip";
$proto12["m_columns"][] = "dname";
$proto12["m_columns"][] = "dcode";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_alias"] = "";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = "0";
$proto13["m_inBrackets"] = "0";
$proto13["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_department = createSqlQuery_department();
			$tdatadepartment[".sqlquery"] = $queryData_department;

$tableEvents["department"] = new eventsBase;
$tdatadepartment[".hasEvents"] = false;

$cipherer = new RunnerCipherer("department");

?>