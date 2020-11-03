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
          <h3 class="text-center">Welcome <?=getCharacterStats($_SESSION['user_id'], '10')?></h3>
        </div>
    </div>
    <div class="row">
    <div class="col-6">
      <h4 class="text-center">What do you want to do?</h4>
    </div>
    <div class="col-6">
      <h4 class="text-center">Quests & Tasks</h4>
    </div>
    </div>
</div>
<?php include 'includes/templates/footer.php';?>