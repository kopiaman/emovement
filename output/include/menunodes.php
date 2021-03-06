<?php
	// create menu nodes arr
	$menuNodesObject->menuNodes = array();
		
	if(!$menuNodesObject->isAdminTable()){
		$menuNode = array();
		$menuNode["id"] = "1";
		$menuNode["name"] = "Home";
		$menuNode["href"] = "x_dashboard.php";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Home";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "2";
		$menuNode["name"] = "Apply";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "timetable";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "Add";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Apply";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "3";
		$menuNode["name"] = "My Application";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "my_timetable";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "My Application";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "4";
		$menuNode["name"] = "My Subordinate's Application";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "timetable";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "My Subordinate's Application";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "5";
		$menuNode["name"] = "My Profile";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "user_profile";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "My Profile";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "6";
		$menuNode["name"] = "Schedule";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Schedule";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "7";
		$menuNode["name"] = "Timbalan Pengarah";
		$menuNode["href"] = "x_timetable_month.php?who=timbalan";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "6";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "NewWindow";
			$menuNode["title"] = "Timbalan Pengarah";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "8";
		$menuNode["name"] = "KPP";
		$menuNode["href"] = "x_timetable_month.php?who=KPP";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "6";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "NewWindow";
			$menuNode["title"] = "KPP";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "9";
		$menuNode["name"] = "Pegawai";
		$menuNode["href"] = "x_timetable_month.php?who=Pegawai";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "6";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "NewWindow";
			$menuNode["title"] = "Pegawai";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "10";
		$menuNode["name"] = "All";
		$menuNode["href"] = "x_timetable_month.php";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "6";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "NewWindow";
			$menuNode["title"] = "All";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "11";
		$menuNode["name"] = "Users Management";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "User Access Level";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Users Management";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "12";
		$menuNode["name"] = "CONFIG";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "CONFIG";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "13";
		$menuNode["name"] = "Organization Info";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "campus_setting";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "12";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Organization Info";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "14";
		$menuNode["name"] = "Category & Field name";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "set_setting_category";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "12";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Category & Field name";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "15";
		$menuNode["name"] = "Function & Sector";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "department";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "12";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Function & Sector";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "16";
		$menuNode["name"] = "HELP";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "HELP";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "17";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "feedback";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "16";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Feedback";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "18";
		$menuNode["name"] = "User Manual";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "training";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "16";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "User Manual";
		$menuNodesObject->menuNodes[] = $menuNode;
			if($menuNodesObject->pageType == PAGE_MENU && IsAdmin())
		{
					$menuNode = array();
			$menuNode["id"] = "AAS";
			$menuNode["name"] = "-------";
			$menuNode["href"] = "";
			$menuNode["type"] = "Separator";
			$menuNode["table"] = "";
			$menuNode["style"] = "";
			$menuNode["title"] = "-------";
			$menuNode["params"] = "";
			$menuNode["parent"] = "0";
			$menuNode["nameType"] = "Text";
			$menuNode["linkType"] = "None";
			$menuNode["pageType"] = "";
			$menuNode["openType"] = "None";	
			$menuNodesObject->menuNodes[] = $menuNode;
			//Admin area Link
			$menuNode = array();
			$menuNode["id"] = "AA";
			$menuNode["name"] = "Admin Area";
			$menuNode["href"] = "admin_rights_list.php";
			$menuNode["type"] = "Leaf";
			$menuNode["table"] = "";
			$menuNode["style"] = "";
			$menuNode["title"] = "Admin Area";
			$menuNode["params"] = "";
			$menuNode["parent"] = "0";
			$menuNode["nameType"] = "Text";
			$menuNode["linkType"] = "External";
			$menuNode["pageType"] = "AdminArea";
			$menuNode["openType"] = "None";	
			$menuNodesObject->menuNodes[] = $menuNode;
		}
	}else{
		//Admin Area menu items
		// admin_rights item
		$menuNode = array();
		$menuNode["id"] = "admin_rights";
		$menuNode["name"] = "admin_rights";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_rights";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNode["title"] = "Permissions";
		$menuNode["href"] = "admin_rights_list.php";
		$menuNodesObject->menuNodes[] = $menuNode;
		// admin_members item
		$menuNode = array();
		$menuNode["id"] = "admin_members";
		$menuNode["name"] = "admin_members";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_members";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNode["title"] = "Assign users to groups";
		$menuNode["href"] = "admin_members_list.php";
		$menuNodesObject->menuNodes[] = $menuNode;
		// admin_users item
		$menuNode = array();
		$menuNode["id"] = "admin_users";
		$menuNode["name"] = "admin_users";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_users";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNode["title"] = "Add/Edit users";
		$menuNode["href"] = "admin_users_list.php";
		$menuNodesObject->menuNodes[] = $menuNode;
	}	
	
?>
