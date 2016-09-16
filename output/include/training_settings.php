<?php
require_once(getabspath("classes/cipherer.php"));
$tdatatraining = array();
	$tdatatraining[".NumberOfChars"] = 80; 
	$tdatatraining[".ShortName"] = "training";
	$tdatatraining[".OwnerID"] = "";
	$tdatatraining[".OriginalTable"] = "training";

//	field labels
$fieldLabelstraining = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining["English"] = array();
	$fieldToolTipstraining["English"] = array();
	$fieldLabelstraining["English"]["tid"] = "Tid";
	$fieldToolTipstraining["English"]["tid"] = "";
	$fieldLabelstraining["English"]["files"] = "Files";
	$fieldToolTipstraining["English"]["files"] = "";
	$fieldLabelstraining["English"]["notes"] = "Notes";
	$fieldToolTipstraining["English"]["notes"] = "";
	$fieldLabelstraining["English"]["dates"] = "Dates";
	$fieldToolTipstraining["English"]["dates"] = "";
	if (count($fieldToolTipstraining["English"]))
		$tdatatraining[".isUseToolTips"] = true;
}
	
	
	$tdatatraining[".NCSearch"] = true;



$tdatatraining[".shortTableName"] = "training";
$tdatatraining[".nSecOptions"] = 0;
$tdatatraining[".recsPerRowList"] = 2;
$tdatatraining[".mainTableOwnerID"] = "";
$tdatatraining[".moveNext"] = 1;
$tdatatraining[".nType"] = 0;

$tdatatraining[".strOriginalTableName"] = "training";




$tdatatraining[".showAddInPopup"] = false;

$tdatatraining[".showEditInPopup"] = false;

$tdatatraining[".showViewInPopup"] = false;

$tdatatraining[".fieldsForRegister"] = array();

$tdatatraining[".listAjax"] = false;

	$tdatatraining[".audit"] = false;

	$tdatatraining[".locking"] = false;

$tdatatraining[".listIcons"] = true;
$tdatatraining[".inlineEdit"] = true;
$tdatatraining[".inlineAdd"] = true;



$tdatatraining[".delete"] = true;

$tdatatraining[".showSimpleSearchOptions"] = false;

$tdatatraining[".showSearchPanel"] = true;

if (isMobile())
	$tdatatraining[".isUseAjaxSuggest"] = false;
else 
	$tdatatraining[".isUseAjaxSuggest"] = true;

$tdatatraining[".rowHighlite"] = true;

// button handlers file names

$tdatatraining[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining[".isUseTimeForSearch"] = false;




$tdatatraining[".allSearchFields"] = array();


$tdatatraining[".googleLikeFields"][] = "tid";
$tdatatraining[".googleLikeFields"][] = "files";
$tdatatraining[".googleLikeFields"][] = "notes";
$tdatatraining[".googleLikeFields"][] = "dates";



$tdatatraining[".isTableType"] = "list";

	
$tdatatraining[".isVerLayout"] = true;



// Access doesn't support subqueries from the same table as main



$tdatatraining[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatraining[".strOrderBy"] = $tstrOrderBy;

$tdatatraining[".orderindexes"] = array();

$tdatatraining[".sqlHead"] = "SELECT tid,   files,   notes,   dates";
$tdatatraining[".sqlFrom"] = "FROM training";
$tdatatraining[".sqlWhereExpr"] = "";
$tdatatraining[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining[".arrGroupsPerPage"] = $arrGPP;

$tableKeystraining = array();
$tableKeystraining[] = "tid";
$tdatatraining[".Keys"] = $tableKeystraining;

$tdatatraining[".listFields"] = array();
$tdatatraining[".listFields"][] = "files";
$tdatatraining[".listFields"][] = "notes";
$tdatatraining[".listFields"][] = "dates";

$tdatatraining[".viewFields"] = array();

$tdatatraining[".addFields"] = array();

$tdatatraining[".inlineAddFields"] = array();
$tdatatraining[".inlineAddFields"][] = "files";
$tdatatraining[".inlineAddFields"][] = "notes";
$tdatatraining[".inlineAddFields"][] = "dates";

$tdatatraining[".editFields"] = array();

$tdatatraining[".inlineEditFields"] = array();
$tdatatraining[".inlineEditFields"][] = "files";
$tdatatraining[".inlineEditFields"][] = "notes";
$tdatatraining[".inlineEditFields"][] = "dates";

$tdatatraining[".exportFields"] = array();

$tdatatraining[".printFields"] = array();

//	tid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tid";
	$fdata["GoodName"] = "tid";
	$fdata["ownerTable"] = "training";
	$fdata["Label"] = "Tid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "tid"; 
		$fdata["FullName"] = "tid";
	
		
		
				
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
	
		
		
	$tdatatraining["tid"] = $fdata;
//	files
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "files";
	$fdata["GoodName"] = "files";
	$fdata["ownerTable"] = "training";
	$fdata["Label"] = "Files"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "files"; 
		$fdata["FullName"] = "files";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
						$edata["acceptFileTypes"] .= "|ppt";
						$edata["acceptFileTypes"] .= "|pptx";
						$edata["acceptFileTypes"] .= "|rtf";
						$edata["acceptFileTypes"] .= "|txt";
						$edata["acceptFileTypes"] .= "|xls";
						$edata["acceptFileTypes"] .= "|xlsx";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
	
		
		
	$tdatatraining["files"] = $fdata;
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "training";
	$fdata["Label"] = "Notes"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "notes"; 
		$fdata["FullName"] = "notes";
	
		
		
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
	
		
		
	$tdatatraining["notes"] = $fdata;
//	dates
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dates";
	$fdata["GoodName"] = "dates";
	$fdata["ownerTable"] = "training";
	$fdata["Label"] = "Dates"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
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
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatatraining["dates"] = $fdata;

	
$tables_data["training"]=&$tdatatraining;
$field_labels["training"] = &$fieldLabelstraining;
$fieldToolTips["training"] = &$fieldToolTipstraining;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["training"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["training"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_training()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tid,   files,   notes,   dates";
$proto0["m_strFrom"] = "FROM training";
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
	"m_strName" => "tid",
	"m_strTable" => "training"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "files",
	"m_strTable" => "training"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "training"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "dates",
	"m_strTable" => "training"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "training";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "tid";
$proto14["m_columns"][] = "files";
$proto14["m_columns"][] = "notes";
$proto14["m_columns"][] = "dates";
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
$queryData_training = createSqlQuery_training();
				$tdatatraining[".sqlquery"] = $queryData_training;

$tableEvents["training"] = new eventsBase;
$tdatatraining[".hasEvents"] = false;

$cipherer = new RunnerCipherer("training");

?>