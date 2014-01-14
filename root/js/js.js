var teams = {};
var matches = {};

var uploadStack;

var showID = "ID0";

$(document).ready(function(){
    //showID = "ID0";
    //show(showID);

    //document.getElementsByClassName('addTeam')[0].style.display = "block";
    //document.getElementById("ID0").style.display = "block";

    //teams = {};
    //matches = {};

    $(document).resize(function(){
    
    });
});

function show(id){
  document.getElementById(showID).style.display = "none";
  document.getElementById(id).style.display = "block";
  showID = id;
}

function windowclose(){
  
}


function addMatch(){
  
    var len = matches.length;
    
    if(len == undefined){
      len = -1;
    }
    
    matches[len+1] = "M" + (len+1);
    
    var newMatch = document.createElement("div");
    
    newMatch.innerHTML = document.getElementById("emptyMatch").innerHTML;
    newMatch.id = "M"+(len+1);
    
    document.getElementById("container").appendChild(newMatch);
    
    show("M"+(len+1));
    
    
    
}

function addTeam(){
    
    var len = teams.length;
    
    if(len == undefined){
      len = -1;
    }
    
    teams[len+1] = "T" + (len+1);
    
    var newTeam = document.createElement("div");
    
    newTeam.innerHTML = document.getElementById("emptyTeam").innerHTML;
    newTeam.id = "T"+(len+1);
    
    document.getElementById("container").appendChild(newTeam);
    
    show("T"+(len+1));
}

function setMatch(){
  
}

function setTeam(){
  
}

function dissapear(){
  active.style.display = "none";
}

// addMatch;
// addTeam;
// optionsTitle;
