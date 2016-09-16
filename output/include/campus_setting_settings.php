<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacampus_setting = array();
	$tdatacampus_setting[".NumberOfChars"] = 80; 
	$tdatacampus_setting[".ShortName"] = "campus_setting";
	$tdatacampus_setting[".OwnerID"] = "";
	$tdatacampus_setting[".OriginalTable"] = "campus_setting";

//	field labels
$fieldLabelscampus_setting = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscampus_setting["English"] = array();
	$fieldToolTipscampus_setting["English"] = array();
	$fieldLabelscampus_setting["English"]["id"] = "Id";
	$fieldToolTipscampus_setting["English"]["id"] = "";
	$fieldLabelscampus_setting["English"]["logo"] = "Logo";
	$fieldToolTipscampus_setting["English"]["logo"] = "";
	$fieldLabelscampus_setting["English"]["acronyim"] = "Acronyim";
	$fieldToolTipscampus_setting["English"]["acronyim"] = "";
	$fieldLabelscampus_setting["English"]["campus_name"] = "Organisation Name";
	$fieldToolTipscampus_setting["English"]["campus_name"] = "";
	$fieldLabelscampus_setting["English"]["address"] = "Address";
	$fieldToolTipscampus_setting["English"]["address"] = "";
	$fieldLabelscampus_setting["English"]["city"] = "City";
	$fieldToolTipscampus_setting["English"]["city"] = "";
	$fieldLabelscampus_setting["English"]["postcode"] = "Postcode";
	$fieldToolTipscampus_setting["English"]["postcode"] = "";
	$fieldLabelscampus_setting["English"]["state"] = "State";
	$fieldToolTipscampus_setting["English"]["state"] = "";
	$fieldLabelscampus_setting["English"]["faxNo"] = "Fax No";
	$fieldToolTipscampus_setting["English"]["faxNo"] = "";
	$fieldLabelscampus_setting["English"]["telephone"] = "Telephone";
	$fieldToolTipscampus_setting["English"]["telephone"] = "";
	$fieldLabelscampus_setting["English"]["email"] = "Email";
	$fieldToolTipscampus_setting["English"]["email"] = "";
	$fieldLabelscampus_setting["English"]["url"] = "Url";
	$fieldToolTipscampus_setting["English"]["url"] = "";
	if (count($fieldToolTipscampus_setting["English"]))
		$tdatacampus_setting[".isUseToolTips"] = true;
}
	
	
	$tdatacampus_setting[".NCSearch"] = true;



$tdatacampus_setting[".shortTableName"] = "campus_setting";
$tdatacampus_setting[".nSecOptions"] = 0;
$tdatacampus_setting[".recsPerRowList"] = 1;
$tdatacampus_setting[".mainTableOwnerID"] = "";
$tdatacampus_setting[".moveNext"] = 1;
$tdatacampus_setting[".nType"] = 0;

$tdatacampus_setting[".strOriginalTableName"] = "campus_setting";




$tdatacampus_setting[".showAddInPopup"] = false;

$tdatacampus_setting[".showEditInPopup"] = false;

$tdatacampus_setting[".showViewInPopup"] = false;

$tdatacampus_setting[".fieldsForRegister"] = array();

$tdatacampus_setting[".listAjax"] = false;

	$tdatacampus_setting[".audit"] = false;

	$tdatacampus_setting[".locking"] = false;

$tdatacampus_setting[".listIcons"] = true;
$tdatacampus_setting[".inlineEdit"] = true;




$tdatacampus_setting[".showSimpleSearchOptions"] = false;

$tdatacampus_setting[".showSearchPanel"] = true;

if (isMobile())
	$tdatacampus_setting[".isUseAjaxSuggest"] = false;
else 
	$tdatacampus_setting[".isUseAjaxSuggest"] = true;

$tdatacampus_setting[".rowHighlite"] = true;

// button handlers file names

$tdatacampus_setting[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacampus_setting[".isUseTimeForSearch"] = false;




$tdatacampus_setting[".allSearchFields"] = array();

$tdatacampus_setting[".allSearchFields"][] = "acronyim";
$tdatacampus_setting[".allSearchFields"][] = "campus_name";
$tdatacampus_setting[".allSearchFields"][] = "address";
$tdatacampus_setting[".allSearchFields"][] = "city";
$tdatacampus_setting[".allSearchFields"][] = "postcode";
$tdatacampus_setting[".allSearchFields"][] = "state";
$tdatacampus_setting[".allSearchFields"][] = "faxNo";
$tdatacampus_setting[".allSearchFields"][] = "telephone";
$tdatacampus_setting[".allSearchFields"][] = "email";
$tdatacampus_setting[".allSearchFields"][] = "url";

$tdatacampus_setting[".googleLikeFields"][] = "id";
$tdatacampus_setting[".googleLikeFields"][] = "logo";
$tdatacampus_setting[".googleLikeFields"][] = "acronyim";
$tdatacampus_setting[".googleLikeFields"][] = "campus_name";
$tdatacampus_setting[".googleLikeFields"][] = "address";
$tdatacampus_setting[".googleLikeFields"][] = "city";
$tdatacampus_setting[".googleLikeFields"][] = "postcode";
$tdatacampus_setting[".googleLikeFields"][] = "state";
$tdatacampus_setting[".googleLikeFields"][] = "faxNo";
$tdatacampus_setting[".googleLikeFields"][] = "telephone";
$tdatacampus_setting[".googleLikeFields"][] = "email";
$tdatacampus_setting[".googleLikeFields"][] = "url";


$tdatacampus_setting[".advSearchFields"][] = "acronyim";
$tdatacampus_setting[".advSearchFields"][] = "campus_name";
$tdatacampus_setting[".advSearchFields"][] = "address";
$tdatacampus_setting[".advSearchFields"][] = "city";
$tdatacampus_setting[".advSearchFields"][] = "postcode";
$tdatacampus_setting[".advSearchFields"][] = "state";
$tdatacampus_setting[".advSearchFields"][] = "faxNo";
$tdatacampus_setting[".advSearchFields"][] = "telephone";
$tdatacampus_setting[".advSearchFields"][] = "email";
$tdatacampus_setting[".advSearchFields"][] = "url";

$tdatacampus_setting[".isTableType"] = "list";

	
$tdatacampus_setting[".isVerLayout"] = true;



// Access doesn't support subqueries from the same table as main



$tdatacampus_setting[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacampus_setting[".strOrderBy"] = $tstrOrderBy;

$tdatacampus_setting[".orderindexes"] = array();

$tdatacampus_setting[".sqlHead"] = "SELECT id,   logo,   acronyim,   campus_name,   address,   city,   postcode,   `state`,   faxNo,   telephone,   email,   url";
$tdatacampus_setting[".sqlFrom"] = "FROM campus_setting";
$tdatacampus_setting[".sqlWhereExpr"] = "";
$tdatacampus_setting[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacampus_setting[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacampus_setting[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscampus_setting = array();
$tableKeyscampus_setting[] = "id";
$tdatacampus_setting[".Keys"] = $tableKeyscampus_setting;

$tdatacampus_setting[".listFields"] = array();
$tdatacampus_setting[".listFields"][] = "acronyim";
$tdatacampus_setting[".listFields"][] = "campus_name";
$tdatacampus_setting[".listFields"][] = "address";
$tdatacampus_setting[".listFields"][] = "city";
$tdatacampus_setting[".listFields"][] = "postcode";
$tdatacampus_setting[".listFields"][] = "state";
$tdatacampus_setting[".listFields"][] = "faxNo";
$tdatacampus_setting[".listFields"][] = "telephone";
$tdatacampus_setting[".listFields"][] = "email";
$tdatacampus_setting[".listFields"][] = "url";

$tdatacampus_setting[".viewFields"] = array();

$tdatacampus_setting[".addFields"] = array();

$tdatacampus_setting[".inlineAddFields"] = array();

$tdatacampus_setting[".editFields"] = array();

$tdatacampus_setting[".inlineEditFields"] = array();
$tdatacampus_setting[".inlineEditFields"][] = "acronyim";
$tdatacampus_setting[".inlineEditFields"][] = "campus_name";
$tdatacampus_setting[".inlineEditFields"][] = "address";
$tdatacampus_setting[".inlineEditFields"][] = "city";
$tdatacampus_setting[".inlineEditFields"][] = "postcode";
$tdatacampus_setting[".inlineEditFields"][] = "state";
$tdatacampus_setting[".inlineEditFields"][] = "faxNo";
$tdatacampus_setting[".inlineEditFields"][] = "telephone";
$tdatacampus_setting[".inlineEditFields"][] = "email";
$tdatacampus_setting[".inlineEditFields"][] = "url";

$tdatacampus_setting[".exportFields"] = array();

$tdatacampus_setting[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "campus_setting";
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
	
		
		
	$tdatacampus_setting["id"] = $fdata;
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Logo"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "logo"; 
		$fdata["FullName"] = "logo";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=500";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacampus_setting["logo"] = $fdata;
//	acronyim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "acronyim";
	$fdata["GoodName"] = "acronyim";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Acronyim"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "acronyim"; 
		$fdata["FullName"] = "acronyim";
	
		
		
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
	
		
		
	$tdatacampus_setting["acronyim"] = $fdata;
//	campus_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "campus_name";
	$fdata["GoodName"] = "campus_name";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Organisation Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "campus_name"; 
		$fdata["FullName"] = "campus_name";
	
		
		
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
			$edata["EditParams"].= " maxlength=500";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacampus_setting["campus_name"] = $fdata;
//	address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "address";
	$fdata["GoodName"] = "address";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Address"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "address"; 
		$fdata["FullName"] = "address";
	
		
		
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
			$edata["EditParams"].= " maxlength=500";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacampus_setting["address"] = $fdata;
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "City"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "city"; 
		$fdata["FullName"] = "city";
	
		
		
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
	
		
		
	$tdatacampus_setting["city"] = $fdata;
//	postcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "postcode";
	$fdata["GoodName"] = "postcode";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Postcode"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "postcode"; 
		$fdata["FullName"] = "postcode";
	
		
		
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
	
		
		
	$tdatacampus_setting["postcode"] = $fdata;
//	state
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "state";
	$fdata["GoodName"] = "state";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "State"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "state"; 
		$fdata["FullName"] = "`state`";
	
		
		
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
	
		
		
	$tdatacampus_setting["state"] = $fdata;
//	faxNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "faxNo";
	$fdata["GoodName"] = "faxNo";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Fax No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "faxNo"; 
		$fdata["FullName"] = "faxNo";
	
		
		
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
	
		
		
	$tdatacampus_setting["faxNo"] = $fdata;
//	telephone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "telephone";
	$fdata["GoodName"] = "telephone";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Telephone"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "telephone"; 
		$fdata["FullName"] = "telephone";
	
		
		
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
	
		
		
	$tdatacampus_setting["telephone"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Email"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "email"; 
		$fdata["FullName"] = "email";
	
		
		
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
			$edata["EditParams"].= " maxlength=150";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacampus_setting["email"] = $fdata;
//	url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "url";
	$fdata["GoodName"] = "url";
	$fdata["ownerTable"] = "campus_setting";
	$fdata["Label"] = "Url"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "url"; 
		$fdata["FullName"] = "url";
	
		
		
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
	
		
		
	$tdatacampus_setting["url"] = $fdata;

	
$tables_data["campus_setting"]=&$tdatacampus_setting;
$field_labels["campus_setting"] = &$fieldLabelscampus_setting;
$fieldToolTips["campus_setting"] = &$fieldToolTipscampus_setting;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["campus_setting"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["campus_setting"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_campus_setting()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   logo,   acronyim,   campus_name,   address,   city,   postcode,   `state`,   faxNo,   telephone,   email,   url";
$proto0["m_strFrom"] = "FROM campus_setting";
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
	"m_strTable" => "campus_setting"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "logo",
	"m_strTable" => "campus_setting"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "acronyim",
	"m_strTable" => "campus_setting"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "campus_name",
	"m_strTable" => "campus_setting"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "campus_setting"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "campus_setting"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "postcode",
	"m_strTable" => "campus_setting"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "state",
	"m_strTable" => "campus_setting"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "faxNo",
	"m_strTable" => "campus_setting"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "telephone",
	"m_strTable" => "campus_setting"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "campus_setting"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "url",
	"m_strTable" => "campus_setting"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "campus_setting";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id";
$proto30["m_columns"][] = "logo";
$proto30["m_columns"][] = "acronyim";
$proto30["m_columns"][] = "campus_name";
$proto30["m_columns"][] = "address";
$proto30["m_columns"][] = "city";
$proto30["m_columns"][] = "postcode";
$proto30["m_columns"][] = "state";
$proto30["m_columns"][] = "faxNo";
$proto30["m_columns"][] = "telephone";
$proto30["m_columns"][] = "email";
$proto30["m_columns"][] = "url";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_alias"] = "";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = "0";
$proto31["m_inBrackets"] = "0";
$proto31["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_campus_setting = createSqlQuery_campus_setting();
												$tdatacampus_setting[".sqlquery"] = $queryData_campus_setting;

$tableEvents["campus_setting"] = new eventsBase;
$tdatacampus_setting[".hasEvents"] = false;

$cipherer = new RunnerCipherer("campus_setting");

?>