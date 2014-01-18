var teams = []; // stores all local team data
var matches = []; // stores all local match data

var prevteam = "";
var prevmatch = "";

var uploadStack = [];

var views = ["#showDataPage", "#editTeam", "#editMatch"];

$(document).ready(function(){
    $(document).resize(function(){
    
    });
    $(document).resize();
    bindEvents();
    
    show(views[0]);
});

function listData(){
    for(var i = 0; i < teams.length; ++i){
        var entry = document.createElement("span");
        entry.team = teams[i].number;
    }
}

function hideAll(){
    for(var i = 0; i < views.length; ++i){
        $(views[i]).hide();
    }
}
function show(id){
    if(id == views[1]){
        loadTeamForm(0);
    } else if(id == views[2]){
        loadMatchForm(0);
    } else {
        hideAll();
        $(id).show();
    }
}

function windowclose(){
  
}

function disappear(){
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


function updatenumberr1(){
    $("#" + showID + " span.match-team-number-r1").html($("#" + showID + " form input[name='match-number-red-1']").val());
}

function updatenumberr2(){
    $("#" + showID + " span.match-team-number-r2").html($("#" + showID + " form input[name='match-number-red-2']").val());
}

function updatenumberr3(){
    $("#" + showID + " span.match-team-number-r3").html($("#" + showID + " form input[name='match-number-red-3']").val());
}

function updatenumberb1(){
    $("#" + showID + " span.match-team-number-b1").html($("#" + showID + " form input[name='match-number-blue-1']").val());
}

function updatenumberb2(){
    $("#" + showID + " span.match-team-number-b2").html($("#" + showID + " form input[name='match-number-blue-2']").val());
}

function updatenumberb3(){
    $("#" + showID + " span.match-team-number-b3").html($("#" + showID + " form input[name='match-number-blue-3']").val());
}

/* Functions for using cookies to save the data */
function createCookie(name, value, days) {
    if(days){
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    } else {
        var expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name,"",-1);
}

