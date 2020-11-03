<?php
ob_start();
$website_title = 'Home';
include 'includes/init.php';
include 'includes/templates/head.php';
include 'includes/templates/topbar.php';
include 'includes/templates/header.php';
include 'includes/templates/nav.php';
include 'includes/templates/statusbars.php';
LoggedOutRedirect();
?>

<div class="mainContent container">
<div class="message-box"></div>
    <div class="row">
        <div class="col-12">
          <h3>Welcome <?=getCharacterStats($_SESSION['user_id'], '10')?></h3>
        </div>
    </div>
</div>
<?php include 'includes/templates/footer.php';?>