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
    
    if(id[0] == 'M'){
        ;// its a match
        $("#matchDropdown option[value=" + id + "]").prop("selected", true);
        $("#teamDropdown option[value=ID0]").prop("selected", true);
    } else if (id[0] == 'T'){
        ;// its a team
        $("#matchDropdown option[value=" + id + "]").prop("selected", true);
        $("#matchDropdown option[value=ID0]").prop("selected", true);
    } else {
        ;// I dont think we have to do anything...
        $("#matchDropdown option[value=ID0]").prop("selected", true);
        $("#teamDropdown option[value=ID0]").prop("selected", true);
    }
    
    showID = id;
}

function windowclose(){
  
}


function addMatch(){
    // Clear the selectors
    $("#teamDropdown option[value=ID0]").prop("selected", true);
    $("#matchDropdown option[value=ID0]").prop("selected", true);
    
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
    // Clear the selectors
    $("#teamDropdown option[value=ID0]").prop("selected", true);
    $("#matchDropdown option[value=ID0]").prop("selected", true);
    
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
    // Check to see if this has already been created (we need to update it).
    if ($("#teamDropdown").find("option[value='" + showID + "']").length) {
        // It exists
        $("#teamDropdown").find("option[value='" + showID + "']").attr("value", showID);
    } else { // It doesnt
        $("#teamDropdown").append("<option value=\"" + showID + "\">Team " + $("#" + showID + " input[name='team-number']").val() + "</option>");
    }
    // select it
    $("#teamDropdown option[value=" + showID + "]").prop("selected", true);
    $("#matchDropdown option[value=ID0]").prop("selected", true);
}

function matchNumberChange(){
    // Check to see if this has already been created (we need to update it).
    if ($("#matchDropdown").find("option[value='" + showID + "']").length) {
        // It exists
        $("#matchDropdown").find("option[value='" + showID + "']").attr("value", showID);
    } else { // It doesnt
        $("#matchDropdown").append("<option value=\"" + showID + "\">Match " + $("#" + showID + " input[name='match-number']").val() + "</option>");
    }
    // select it
    $("#teamDropdown option[value=ID0]").prop("selected", true);
    $("#matchDropdown option[value=" + showID + "]").prop("selected", true);
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
  
    $("#teamDropdown option[value=ID0]").prop("selected", true);
    $("#matchDropdown option[value=" + showID + "]").prop("selected", true);
    
    if(showID[0] == 'M'){
        ;// its a match
        $("#teamDropdown option[value=ID0]").prop("selected", true);
    } else if (showID[0] == 'T'){
        ;// its a team
        $("#teamDropdown option[value=ID0]").prop("selected", true);
    } else {
        ;// I dont think we have to do anything...
        $("#matchDropdown option[value=ID0]").prop("selected", true);
        $("#teamDropdown option[value=ID0]").prop("selected", true);
    }
    // save/delete/page
    $('#' + showID + ' form').serialize();
}

function addToUploadStack(id){
    for(var i = 0; i <= uploadStack; i++){
        ;
        if(uploadStack[i][0] = id){
	    uploadStack[i] = [id, ""]
	    return;
	}
    }
    uploadStack[uploadStack.length] = [id, "?"];
}

function clearSelectors(){
    // Clear the selectors
    $("#teamDropdown option[value=ID0]").prop("selected", true);
    $("#matchDropdown option[value=ID0]").prop("selected", true);
}

