var teams = []; // stores all local team data
var matches = []; // stores all local match data

var prevteam = 0;
var prevmatch = 0;

var currteam = 0;
var currmatch = 0;

var uploadStack = [];

var views = ["#showDataPage", "#editTeam", "#editMatch"];

var hook = true;


/* A bug is in this where *every* element from the functions is created TWICE, only way around is to refresh the page (which our goal ISNT to do), please fix. 
 * 
 * */


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

$.fn.serializeObject = function() {
    
    var o = {};
    var serial = this.serializeArray();
    
    $.each(serial, function() {
        
        if (o[this.name] !== undefined) {
            
            if (!o[this.name].push){
                o[this.name] = [o[this.name]];
            }
            o[this.name] = (this.value || '');
            
        } else {
            
            o[this.name] = this.value || '';
        }
    });
    
    return o;
};

$(function() {
    
    $('div#addTeam input[type=submit]').click(function(){
        //$('#resultTeam').text(JSON.stringify($('form#addTeam').serializeObject()));
        //var team_json = JSON.stringify($('div#addTeam').serializeObject());
        var team_json = JSON.stringify(teams);
        $('#resultTeam').text(team_json);
        
        $.ajax ({
            type: "POST",
            url:"savedata.php",
            data: team_json,
            success: function() {
                console.log("OK sent team_json somewhere");
            }
        });
        
        return false;
    });
    $('form#addMatch').submit(function(){
        //$('#resultMatch').text(JSON.stringify($('form#addMatch').serializeObject()));
        var match_json = JSON.stringify($('form#addMatch').serializeObject());
        $('#resultMatch').text(match_json);
        return false;
    });
});

// Starts the popup when clicking "Add Team"
function loadTeamPopup(){
    // Adds mask to page
    $('body').append('<div class="mask"></div>');
    $('.mask').fadeIn(200);
    
    // Adds Popup to page
    $('body').append("\
        <div id=\"teamPopup\"><h2>Add Team</h2>\
        Please input a team number.<br/>\
        <input required autofocus id=\"teamNumber\" type=\"number\" name=\"team-number\" placeholder=\"Ex: 3499\"/>\
        <br/><br/>\
        <span class=\"button\" id=\"submitTeamNumber\">Submit Team Number</span>\
        <span class=\"button\" id=\"submitTeamCancel\">Cancel</span>\
    </div>\
    ");
    
    // Centers the Popup
    $("#teamPopup").css({ 
        'margin-top': -($("#teamPopup").height()+130)/2,
        'margin-left': -($("#teamPopup").width()+90)/2
    });
    
    $("#teamPopup").fadeIn(200);
    
    $('#submitTeamNumber').click(function(){
        closeTeamPopupOK();
    });
    $('#submitTeamCancel, .mask').click(function(){
        closeTeamPopup();
    });
    
    $("#teamNumber").one('focus', function(event){
        console.log("changing value..?");
        prevteam = event.target.value;
    }).change(function(event){
        console.log("PREVTEAM " + prevteam);
        if(!editTeam(event.target.name, event.target.value)){
            console.log("prevteam reset " + prevteam);
            event.target.value = prevteam;
        }
        prevteam = event.target.value;
    });
}

// Starts when user submits a team number
function closeTeamPopupOK(){
    if($('#teamNumber').val() == ""){
        alert("Please enter a team number first!");
        return false;
    }
    
    $("#teamPopup").fadeOut(200, function(){
        $(this).remove(0);
    });
    $('.mask').fadeOut(200, function(){
        $(this).remove(0);
    });
    loadTeamForm(0);
}

// Starts when the user wants to close the popup
function closeTeamPopup(){
    $("#teamPopup").fadeOut(200, function(){
        $(this).remove(0);
    });
    $('.mask').fadeOut(200, function(){
        $(this).remove(0);
    });
}

