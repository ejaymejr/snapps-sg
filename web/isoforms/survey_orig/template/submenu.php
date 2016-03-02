<?php
// $Source$
// $Id$

$submenuArray = array();

if (SITE_SECTION == 'admin_users') {
    $submenuArray[] = array('Manage Users', './index.php');       
    $submenuArray[] = array('Add User', './add.php');           
}


if(isset($submenuArray) && sizeof($submenuArray) > 0) {

    $count = 0;
    foreach($submenuArray as $tmpSub) {
        if($count) echo ' | ';
        $count++;

        $class = '';
        if (sizeof($tmpSub) > 2) {
            $class = ' class="' . $tmpSub[2] . '" ';
        }

        $js = '';
        if (sizeof($tmpSub) > 3) {
            $js = ' onClick="return confirm(\'' . $tmpSub[3] . '\');" ';
        }
        ?>
        <a href="<?=$tmpSub[1]?>"<?=$class?><?=$js?>><?=$tmpSub[0]?></a>
        <?php
    }

}
?>