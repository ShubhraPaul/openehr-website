<!DOCTYPE HTML>

<html lang="en">

<head>
	
	<title>openEHR - <?php echo "$PageName";?></title>
	<meta charset="utf-8">	
	<meta name="description" content="openEHR provides open source specifications and reference implementations of future proof EHR systems">
	<meta name="keywords" content="archetypes, openEHR, EHR, electronic health record, electronic medical record, ADL, reference model, clinical models, healthcare, health informatics, medical informatics, EHR standards, ISO 18308, CEN 13606, health care software, open source software, knowledge modelling, patient-centric">
	<meta name="author" content="Sam Heard, Thomas Beale">
	<meta name="designer" content="Adriana Danilakova">
	<meta name="rating" content="General">
	<meta name="robots" content="All">
	<meta name="revisit-after" content="15 days">
	<meta name="viewport" content="1024">

	<link rel="stylesheet" href="/styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="/styles/pages.css"  type="text/css"> 
	<link rel="stylesheet" href="/styles/menu.css" type="text/css"> 
	
	<link rel="shortcut icon" href="/gui/favicon.ico">
	<link rel="home" href="http://www.openehr.org">
	<link rel="index" href="/sitemap">

	<script type="text/javascript" src="/menu/dropdown.js"></script> 
	
	<?php
	$pageOn = basename($_SERVER['PHP_SELF']);
	$portuguese = 'http://'.str_replace('.org','.org/pt',$_SERVER['SERVER_NAME']).$_SERVER['PHP_SELF'];
	?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		
		<div id="Logo">

			<a href="/home"></a>
			
		</div>
			
		<div id="Motto">
		
			An open domain-driven platform for<br/>developing flexible e-health systems
		
		</div>
		
		<div id="Utilities">
			
			<a href="<?php echo $portuguese;?>"><img src="/gui/brasil_flag.png" style="float:right; margin: 0 0 0 10px; padding: 0 0 0 0;"></a>
			<?php
			if( (isset($_SESSION['user_id'])) && (!strpos($_SERVER['PHP_SELF'],'logout.php')) ) { 
				echo '<a href="/login/user_home">User Home</a> | <a href="/login/logout">Logout</a> |';
			} 
			?> <a href="/about_this_website">About this Website</a> | <a href="/wiki" target="_blank">Wiki</a> | <a href="/issues" target="_blank">Jira</a> | <a href="http://www.openehr.org/ckm">CKM</a>
		
		</div>
		
		<div id="Search">
		
			<div id="cse-search-form" style="width: 100%;">Loading</div>
			
			<script src="http://www.google.com/jsapi" type="text/javascript"></script>
			<script type="text/javascript"> 
			  google.load('search', '1', {language : 'en', style : google.loader.themes.ESPRESSO});
			  google.setOnLoadCallback(function() {
				var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
				  '012150377208032227381:uwpn0z1deyi', customSearchOptions);
				customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
				var options = new google.search.DrawOptions();
				options.enableSearchboxOnly("http://www.openehr.org/search");
				customSearchControl.draw('cse-search-form', options);
			  }, true);
			</script>

		</div>
		
	</div>
	
	<div id="TopMenu">
		<?php include $_SERVER['DOCUMENT_ROOT'].'/menu/topmenu.php' ?>
	</div> 

	<div id="MainArea">
		
		<div id="SideMenu">
			<?php include 'menu.php' ?>
		</div>
		
