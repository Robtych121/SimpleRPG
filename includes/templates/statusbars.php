<div class="container text-center status-bars">
<div class="row">
    <div class="col-md-3">
      <span><b>Experience - Level <?=getCharacterStats($_SESSION['user_id'], '7')?></b></span><br>
      <div class="exp-box">
        <div class="exp-bar-red"></div>
        <div class="exp-bar-blue"></div>
        <div class="exp-bar"></div>
        <div class="exp-bar-text">
          <span id="exp-percent"></span> - <span id="exp-current"></span> / <span id="exp-max"></span>
        </div>
      </div>
    </div>
    <div class="col-md-3">
    <span><b>Health</b></span><br>
      <div class="health-box">
        <div class="health-bar-red"></div>
        <div class="health-bar-blue"></div>
        <div class="health-bar"></div>
        <div class="health-bar-text">
          <span id="hp-percent"></span> - <span id="hp-current"></span> / <span id="hp-max"></span>
        </div>
      </div>
    </div>
    <div class="col-md-3">
    <span><b>Energy (1/5s) </b></span><br>
    <div class="energy-box">
        <div class="energy-bar-red"></div>
        <div class="energy-bar-blue"></div>
        <div class="energy-bar"></div>
        <div class="energy-bar-text">
          <span id="en-percent"></span> - <span id="en-current"></span> / <span id="en-max"></span>
        </div>
      </div></div>
    <div class="col-md-3">Gold</div>
</div>
</div>

<form id="playerStatsCon" action="">
  <input id="char_id" class="playerStats" type="hidden" name="char_id" value="<?=getCharacterStats($_SESSION['user_id'], '8')?>">
  <input id="current_hp" class="playerStats" type="hidden" name="current_hp" value="<?=getCharacterStats($_SESSION['user_id'], '2')?>">
  <input id="max_hp" class="playerStats" type="hidden" name="max_hp" value="<?=getCharacterStats($_SESSION['user_id'], '1')?>">
  <input id="current_energy" class="playerStats" type="hidden" name="current_energy" value="<?=getCharacterStats($_SESSION['user_id'], '4')?>">
  <input id="max_energy" class="playerStats" type="hidden" name="max_energy" value="<?=getCharacterStats($_SESSION['user_id'], '3')?>">
  <input id="current_exp" class="playerStats" type="hidden" name="current_exp" value="<?=getCharacterStats($_SESSION['user_id'], '6')?>">
  <input id="max_exp" class="playerStats" type="hidden" name="max_exp" value="<?=getCharacterStats($_SESSION['user_id'], '5')?>">
</form>