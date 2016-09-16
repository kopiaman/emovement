<?php
require_once(getabspath("classes/cipherer.php"));
$tdatadepartment_sub = array();
	$tdatadepartment_sub[".NumberOfChars"] = 80; 
	$tdatadepartment_sub[".ShortName"] = "department_sub";
	$tdatadepartment_sub[".OwnerID"] = "";
	$tdatadepartment_sub[".OriginalTable"] = "department_sub";

//	field labels
$fieldLabelsdepartment_sub = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdepartment_sub["English"] = array();
	$fieldToolTipsdepartment_sub["English"] = array();
	$fieldLabelsdepartment_sub["English"]["subid"] = "Subid";
	$fieldToolTipsdepartment_sub["English"]["subid"] = "";
	$fieldLabelsdepartment_sub["English"]["dip"] = "Dip";
	$fieldToolTipsdepartment_sub["English"]["dip"] = "";
	$fieldLabelsdepartment_sub["English"]["subname"] = "Sector Name";
	$fieldToolTipsdepartment_sub["English"]["subname"] = "";
	$fieldLabelsdepartment_sub["English"]["subcode"] = "Sector Code";
	$fieldToolTipsdepartment_sub["English"]["subcode"] = "";
	$fieldLabelsdepartment_sub["English"][""] = "";
	$fieldToolTipsdepartment_sub["English"][""] = "";
	$fieldLabelsdepartment_sub["English"][""] = "Sub Sector";
	$fieldToolTipsdepartment_sub["English"][""] = "";
	$fieldLabelsdepartment_sub["English"][""] = "";
	$fieldToolTipsdepartment_sub["English"][""] = "";
	$fieldLabelsdepartment_sub["English"][""] = "Sub Sector";
	$fieldToolTipsdepartment_sub["English"][""] = "";
	$fieldLabelsdepartment_sub["English"][""] = "";
	$fieldToolTipsdepartment_sub["English"][""] = "";
	$fieldLabelsdepartment_sub["English"][""] = "";
	$fieldToolTipsdepartment_sub["English"][""] = "";
	$fieldLabelsdepartment_sub["English"]["subdepartment"] = "Subdepartment";
	$fieldToolTipsdepartment_sub["English"]["subdepartment"] = "";
	if (count($fieldToolTipsdepartment_sub["English"]))
		$tdatadepartment_sub[".isUseToolTips"] = true;
}
	
	
	$tdatadepartment_sub[".NCSearch"] = true;



$tdatadepartment_sub[".shortTableName"] = "department_sub";
$tdatadepartment_sub[".nSecOptions"] = 0;
$tdatadepartment_sub[".recsPerRowList"] = 1;
$tdatadepartment_sub[".mainTableOwnerID"] = "";
$tdatadepartment_sub[".moveNext"] = 1;
$tdatadepartment_sub[".nType"] = 0;

$tdatadepartment_sub[".strOriginalTableName"] = "department_sub";




$tdatadepartment_sub[".showAddInPopup"] = false;

$tdatadepartment_sub[".showEditInPopup"] = false;

$tdatadepartment_sub[".showViewInPopup"] = false;

$tdatadepartment_sub[".fieldsForRegister"] = array();

$tdatadepartment_sub[".listAjax"] = false;

	$tdatadepartment_sub[".audit"] = false;

	$tdatadepartment_sub[".locking"] = false;

$tdatadepartment_sub[".listIcons"] = true;
$tdatadepartment_sub[".inlineEdit"] = true;
$tdatadepartment_sub[".inlineAdd"] = true;



$tdatadepartment_sub[".delete"] = true;

$tdatadepartment_sub[".showSimpleSearchOptions"] = false;

$tdatadepartment_sub[".showSearchPanel"] = true;

if (isMobile())
	$tdatadepartment_sub[".isUseAjaxSuggest"] = false;
else 
	$tdatadepartment_sub[".isUseAjaxSuggest"] = true;

$tdatadepartment_sub[".rowHighlite"] = true;

// button handlers file names

$tdatadepartment_sub[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadepartment_sub[".isUseTimeForSearch"] = false;




$tdatadepartment_sub[".allSearchFields"] = array();


$tdatadepartment_sub[".googleLikeFields"][] = "subid";
$tdatadepartment_sub[".googleLikeFields"][] = "dip";
$tdatadepartment_sub[".googleLikeFields"][] = "subname";
$tdatadepartment_sub[".googleLikeFields"][] = "subcode";



$tdatadepartment_sub[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatadepartment_sub[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadepartment_sub[".strOrderBy"] = $tstrOrderBy;

$tdatadepartment_sub[".orderindexes"] = array();

$tdatadepartment_sub[".sqlHead"] = "SELECT subid,   dip,   subname,   subcode";
$tdatadepartment_sub[".sqlFrom"] = "FROM department_sub";
$tdatadepartment_sub[".sqlWhereExpr"] = "";
$tdatadepartment_sub[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadepartment_sub[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadepartment_sub[".arrGroupsPerPage"] = $arrGPP;

$tableKeysdepartment_sub = array();
$tableKeysdepartment_sub[] = "subid";
$tdatadepartment_sub[".Keys"] = $tableKeysdepartment_sub;

$tdatadepartment_sub[".listFields"] = array();
$tdatadepartment_sub[".listFields"][] = "subname";
$tdatadepartment_sub[".listFields"][] = "subcode";

$tdatadepartment_sub[".viewFields"] = array();

$tdatadepartment_sub[".addFields"] = array();

$tdatadepartment_sub[".inlineAddFields"] = array();
$tdatadepartment_sub[".inlineAddFields"][] = "subname";
$tdatadepartment_sub[".inlineAddFields"][] = "subcode";

$tdatadepartment_sub[".editFields"] = array();

$tdatadepartment_sub[".inlineEditFields"] = array();
$tdatadepartment_sub[".inlineEditFields"][] = "subname";
$tdatadepartment_sub[".inlineEditFields"][] = "subcode";

$tdatadepartment_sub[".exportFields"] = array();

$tdatadepartment_sub[".printFields"] = array();

//	subid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "subid";
	$fdata["GoodName"] = "subid";
	$fdata["ownerTable"] = "department_sub";
	$fdata["Label"] = "Subid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "subid"; 
		$fdata["FullName"] = "subid";
	
		
		
				
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
	
		
		
	$tdatadepartment_sub["subid"] = $fdata;
//	dip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dip";
	$fdata["GoodName"] = "dip";
	$fdata["ownerTable"] = "department_sub";
	$fdata["Label"] = "Dip"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
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
	
		
		
	$tdatadepartment_sub["dip"] = $fdata;
//	subname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "subname";
	$fdata["GoodName"] = "subname";
	$fdata["ownerTable"] = "department_sub";
	$fdata["Label"] = "Sector Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "subname"; 
		$fdata["FullName"] = "subname";
	
		
		
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
	
		
		
	$tdatadepartment_sub["subname"] = $fdata;
//	subcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "subcode";
	$fdata["GoodName"] = "subcode";
	$fdata["ownerTable"] = "department_sub";
	$fdata["Label"] = "Sector Code"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "subcode"; 
		$fdata["FullName"] = "subcode";
	
		
		
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
	
		
		
	$tdatadepartment_sub["subcode"] = $fdata;

	
$tables_data["department_sub"]=&$tdatadepartment_sub;
$field_labels["department_sub"] = &$fieldLabelsdepartment_sub;
$fieldToolTips["department_sub"] = &$fieldToolTipsdepartment_sub;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["department_sub"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["department_sub"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="department";
	$masterParams["mDataSourceTable"]="department";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "department";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["department_sub"][$mIndex] = $masterParams;	
		$masterTablesData["department_sub"][$mIndex]["masterKeys"][]="dip";
		$masterTablesData["department_sub"][$mIndex]["detailKeys"][]="dip";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_department_sub()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "subid,   dip,   subname,   subcode";
$proto0["m_strFrom"] = "FROM department_sub";
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
	"m_strName" => "subid",
	"m_strTable" => "department_sub"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "dip",
	"m_strTable" => "department_sub"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "subname",
	"m_strTable" => "department_sub"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "subcode",
	"m_strTable" => "department_sub"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "department_sub";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "subid";
$proto14["m_columns"][] = "dip";
$proto14["m_columns"][] = "subname";
$proto14["m_columns"][] = "subcode";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_alias"] = "";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = "0";
$proto15["m_inBrackets"] = "0";
$proto15["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_department_sub = createSqlQuery_department_sub();
				$tdatadepartment_sub[".sqlquery"] = $queryData_department_sub;

$tableEvents["department_sub"] = new eventsBase;
$tdatadepartment_sub[".hasEvents"] = false;

$cipherer = new RunnerCipherer("department_sub");

?>