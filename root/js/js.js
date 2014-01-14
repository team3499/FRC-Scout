var teams = [];
var matches = [];

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
    document.getElementById(showID).style.display = "none";
  
    var len = matches.length;
    
    matches[len] = "M" + len;
    
    var newMatch = document.createElement("div");
    
    newMatch.innerHTML = document.getElementById("emptyMatch").innerHTML;
    newMatch.id = "M"+len;
    
    document.getElementById("container").appendChild(newMatch);
    
    showID = "M"+ len;
}

function addTeam(){
    document.getElementById(showID).style.display = "none";
    
    var len = teams.length;

    teams[len] = "T" + len;
    
    var newTeam = document.createElement("div");
    
    newTeam.innerHTML = document.getElementById("emptyTeam").innerHTML;
    newTeam.id = "T"+len;
    
    document.getElementById("container").appendChild(newTeam);
    
    showID = "T"+len;
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
