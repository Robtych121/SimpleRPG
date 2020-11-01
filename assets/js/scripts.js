// STATUS BARS 
// HP Setup
var maxHealth = parseInt($("#playerStatsCon #max_hp").val()),
curHealth = parseInt($("#playerStatsCon #current_hp").val());
$("#hp-percent").html(Math.round(curHealth * (100 / maxHealth)) + "%");
$("#hp-max").html(maxHealth);
$("#hp-current").html(maxHealth);
applyHPChange(curHealth);
$(".health-bar").css({"width": "100%"});

// Deals damage to the player
function removeHealth() {
  if (curHealth == 0) {
    $('.message-box').html("Is this the end??");
  } else {
    var damage = Math.floor((Math.random() * 100) + 50);
    $(".health-bar-red, .health-bar").stop();
    curHealth = curHealth - damage;
    if (curHealth < 0) {
      curHealth = 0;
    } else {
      $('.message-box').html("You took " + damage + " points of damage!");
    }
    applyHPChange(curHealth);
  }
};

// Add Health Back to the player
function addHealth() {
  if (curHealth == maxHealth) {
    $('.message-box').html("You are already at full health");
  } else {
    var heal = Math.floor((Math.random() * 100) + 5);
    $(".health-bar-red, .health-bar-blue, .health-bar").stop();
    curHealth = curHealth + heal;
    if (curHealth > maxHealth) {
      curHealth = maxHealth;
      $('.message-box').html("You're at full health");
    } else if (curHealth == 0) {
      $('.message-box').html("Miraculously! You regained your health by " + heal + " points and get back on to your feet!");
    } else {
      $('.message-box').html("You regained your health by " + heal + " points!");
    }
    applyHPChange(curHealth);
  }
};

function applyHPChange(curHealth) {
  var a = curHealth * (100 / maxHealth);
  $("#hp-percent").html(Math.round(a) + "%");
  $("#hp-max").html(maxHealth);
  $("#hp-current").html(curHealth);
  $("#playerStatsCon #current_hp").val(curHealth);
  $("#playerStatsCon #max_hp").val(maxHealth);
  $(".health-bar-red").animate({
    'width': a + "%"
  }, 700);
  $(".health-bar").animate({
    'width': a + "%"
  }, 500);
  $(".health-bar-blue").animate({
    'width': a + "%"
  }, 300);
  updateDB();
}


// Energy Setup
var maxEnergy = parseInt($("#playerStatsCon #max_energy").val()),
curEnergy = parseInt($("#playerStatsCon #current_energy").val());
$("#en-percent").html(Math.round(curEnergy * (100 / maxEnergy)) + "%");
$("#en-max").html(maxEnergy);
$("#en-current").html(maxEnergy);
applyENChange(curEnergy);
$(".energy-bar").css({"width": "100%"});


function removeEnergy() {
  if (curEnergy == 0) {
    $('.message-box').html("You are Exhausted, Take a rest");
  } else {
    var usedEgy = 5;
    $(".energy-bar-red, .energy-bar").stop();
    curEnergy = curEnergy - usedEgy;
    if (curEnergy < 0) {
      curEnergy = 0;
    } else {
      $('.message-box').html("You used " + usedEgy + " points of energy!");
    }
    applyENChange(curEnergy);
  }
};

function addEnergy(){
    var rest = 1
    $(".energy-bar-red, .energy-bar-blue, .energy-bar").stop();
    curEnergy = curEnergy + rest;
    if (curEnergy > maxEnergy) {
      curEnergy = maxEnergy;
    }
    applyENChange(curEnergy);
};

setInterval(addEnergy, 5000);

function applyENChange(curEnergy) {
  var a = curEnergy * (100 / maxEnergy);
  $("#en-percent").html(Math.round(a) + "%");
  $("#en-max").html(maxEnergy);
  $("#en-current").html(curEnergy);
  $("#playerStatsCon #current_energy").val(curEnergy);
  $("#playerStatsCon #max_energy").val(maxEnergy);
  $(".energy-bar-red").animate({
    'width': a + "%"
  }, 700);
  $(".energy-bar").animate({
    'width': a + "%"
  }, 500);
  $(".energy-bar-blue").animate({
    'width': a + "%"
  }, 300);
  updateDB();
}

// Experiance Setup
var maxExp = parseInt($("#playerStatsCon #max_exp").val()),
curExp = parseInt($("#playerStatsCon #current_exp").val());
$("#exp-percent").html(Math.round(curExp * (100 / maxExp)) + "%");
$("#exp-max").html(maxExp);
$("#exp-current").html(curExp);
applyXPChange(curExp);
$(".exp-bar").css({"width": "100%"});


function addExp(){
    var gainedexp = 1
    $(".exp-bar-red, .exp-bar-blue, .exp-bar").stop();
    curExp = curExp + gainedexp;
    if (curExp > maxExp) {
      curExp = 0;
    }
    applyXPChange(curExp);
};

function applyXPChange(curExp) {
  var a = curExp * (100 / maxExp);
  $("#exp-percent").html(Math.round(a) + "%");
  $("#exp-max").html(maxExp);
  $("#exp-current").html(curExp);
  $("#playerStatsCon #current_exp").val(curExp);
  $("#playerStatsCon #max_exp").val(maxExp);
  $(".exp-bar-red").animate({
    'width': a + "%"
  }, 700);
  $(".exp-bar").animate({
    'width': a + "%"
  }, 500);
  $(".exp-bar-blue").animate({
    'width': a + "%"
  }, 300);
  updateDB();
}

function updateDB(){
  var elements = document.getElementsByClassName("playerStats");
  var formData = new FormData(); 
  for(var i=0; i<elements.length; i++)
  {
      formData.append(elements[i].name, elements[i].value);
  }
  var xmlHttp = new XMLHttpRequest();
      xmlHttp.open("post", "update_stats.php"); 
      xmlHttp.send(formData); 
}