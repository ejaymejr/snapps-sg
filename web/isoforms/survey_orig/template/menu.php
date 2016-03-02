<?php
// $Source$
// $Id$

?>


<?php if (isset($currentLogin) && $currentLogin && 
            ($currentLogin->info['user_level'] == ACCESS_SA ||
            $currentLogin->info['user_level'] == ACCESS_ADMIN) ) : ?>

<ul>
    <li><a href="<?php echo PATH_ADMIN; ?>">Home</a></li>
    <li><a href="<?php echo PATH_ADMIN; ?>result.php">Survey Results</a></li>
    <li><a href="<?php echo PATH_ADMIN; ?>email.php">Send Invitation Email</a></li>
</ul>

<?php elseif (isset($currentLogin) && $currentLogin && $currentLogin->ID) : ?>

<ul>
    <li><a href="<?php echo PATH_ADMIN; ?>">Home</a></li>
</ul>
<?php endif; ?>
