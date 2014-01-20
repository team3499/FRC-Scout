var teams = []; // stores all local team data
var matches = []; // stores all local match data

var prevteam = 0;
var prevmatch = 0;

var currteam = 0;
var currmatch = 0;

var uploadStack = [];

var views = ["#showDataPage", "#editTeam", "#editMatch"];

var hook = true;

$(document).ready(function(){
    window.onbeforeunload = windowClose;
    
    $(document).resize(function(){
    
    });
    $(document).resize();
    bindEvents();
    
    loadDataList();
});

function hideAll(){
    for(var i = 0; i < views.length; ++i){
        $(views[i]).hide();
    }
}
function show(id){
    if(id == views[0]){
        hideAll();
        $(id).show();
    } else if(id == views[1]){
        loadTeamForm(0);
    } else if(id == views[2]){
        loadMatchForm(0);
    } else {

    }
}

function loadDataList(){
    hideAll();
    $('#viewTeam').html("");
    if(teams.length == 0)
        $('#viewTeam').append('<span class="viewTeamBox" team="0">Add Team</span>');
    for(var i = 0; i < teams.length; ++i){
        $('#viewTeam').append('<span class="viewTeamBox" team="'+teams[i].number+'">Team '+teams[i].number+'</span>');
    }
    $('#viewMatch').html("");
    if(matches.length == 0)
        $('#viewMatch').append('<span class="viewMatchBox" match="0">Add Match</span>');
    for(var i = 0; i < matches.length; ++i){
        $('#viewMatch').append('<span class="viewMatchBox" match="'+matches[i].number+'">Match '+matches[i].number+'</span>');
    }
    populateTeamDropdown();
    populateMatchDropdown();
    bindEvents(); // rebind events
    show(views[0]);
}

function windowClose(){
    if(hook){
        console.log("window closing");
        // Push data to server
        // OR
        // Uncomment to notify user
        //alert("You have data that has not been sent to the server. Are you sure you want to leave?");
        //return "You have data that has not been sent to the server. Are you sure you want to leave?"
    }
}
function unHookWindowClose(){ // call this when you want a link leaving the page to NOT warn the user
    hook = false;
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
    $("#teamDropdown option[value=0]").prop("selected", true);
    $("#matchDropdown option[value=0]").prop("selected", true);
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
