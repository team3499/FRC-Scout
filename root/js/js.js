var teams = [];
var matches = [];

var uploadStack = [];

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

function teamNumberChange(){
    showID;
}

function selectTeam(){
    // Add something to check to see if the form being dissapeared is empty (aka to delete it)
    show($("#teamDropdown").val());
}

function selectMatch(){
    // Add something to check to see if the form being dissapeared is empty (aka to delete it)
    show($("#matchDropdown").val());
}

function dissapear(){
  active.style.display = "none";
}

function away(){
    if(showID[0] == 'M'){
        ;// its a match
    } else if (showID[0] == 'T'){
        ;// its a team
    } else {
        ;// I dont think we have to do anything...
    }
    // save/delete/page
}

function addToUploadStack(id){
    uploadStack[uploadStack.length] = [id, "?"];
}