<?php
// $Source$
// $Id$



?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title><?php echo SITE_TITLE; ?></title>
<?php include_once PATH_TEMPLATE_ADMIN . 'css/style_css.php'; ?>

<script language="javascript" src="<?php echo PATH_TEMPLATE_ADMIN . 'js/form.js'; ?>"></script>
<script language="javascript" src="<?php echo PATH_TEMPLATE_ADMIN . 'js/grid.js'; ?>"></script>
<script language="javascript" src="<?php echo PATH_TEMPLATE_ADMIN . 'js/rating.js'; ?>"></script>

<script language="JavaScript">
    var adminPath = '<?php echo PATH_ADMIN; ?>';
</script>


<link href="<?php echo PATH_MAIN; ?>3rdparty/star_rating/star_rating.css" rel="stylesheet" type="text/css">


  <!-- calendar stylesheet -->
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo PATH_MAIN; ?>3rdparty/calendar/skins/aqua/theme.css" title="win2k-cold-1" />
  <!-- main calendar program -->
  <script type="text/javascript" src="<?php echo PATH_MAIN; ?>3rdparty/calendar/calendar.js"></script>
  <!-- language for the calendar -->
  <script type="text/javascript" src="<?php echo PATH_MAIN; ?>3rdparty/calendar/lang/calendar-en.js"></script>
  <!-- the following script defines the Calendar.setup helper function, which makes
       adding a calendar a matter of 1 or 2 lines of code. -->
  <script type="text/javascript" src="<?php echo PATH_MAIN; ?>3rdparty/calendar/calendar-setup.js"></script>

</head>

<body>

<div id="htmlpage">
<div id="container">
    <div id="userinfo-box">
    
        <?php         
        if (isset($currentLogin) && $currentLogin && $currentLogin->ID) {
            ?>
            Logged-in as <b><?php echo $currentLogin->info['username']; ?></b>
            &nbsp; | &nbsp;
            <?php echo $ACCESS_STRING[$currentLogin->info['user_level']]; ?>
            &nbsp; | &nbsp;
            <a href="<?php echo PATH_MAIN; ?>logout.php">Logout</a>
            <?php
        }
        ?>
    
    </div>
    <div id="banner">
        <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td><a title="back to main panel..." href="<?php echo PATH_MAIN; ?>"><img id="logo" 
                src="<?php echo PATH_TEMPLATE_ADMIN; ?>images/micronclean_logo.gif"
                alt="CRIS"
                border="0" /></a></td>
            <td><h1>Customer Satisfaction Survey</h1>
            </td>
        </tr>
        </table>
    </div>
    <div id="menu">
        <?php include_once PATH_TEMPLATE_ADMIN . 'menu.php'; ?>
    </div>
    <div id="page-title">
        <?php if (isset($pageTitle)) echo $pageTitle; ?>
    </div>
    <!-- 
    <div id="submenu">    
        <?php include_once PATH_TEMPLATE_ADMIN . 'submenu.php'; ?>
    </div>
    -->

	<div id="content">    
        
        <?php if (isset($breadCrumb)) { ?>
        <div id="breadcrumb">
            <?php $breadCrumb->displayHTML(); ?>
        </div>
        <?php } ?>
        
    