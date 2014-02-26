var teams = []; // stores all local team data
var matches = []; // stores all local match data

var editing = []; // The current team or match we are editing
var editingWhat; // What we are editing... "match", "team", "", or "nothing"

var teamUploadStack  = []; // This should contain the team numbers that need to be uploaded (just the numbers, the actual data will be @ teams[number][0]
var matchUploadStack = []; // ^

var views = ["#showDataPage", "#editTeam", "#editMatch"];

/* All locally created data will reside in the 0 index. */
/* All fetched data will reside in index equal to or greater than 1 */
/* When data is pushed, it will be removed from index 0 and then put in index (something greater) */
/* This is NOT a local copy, it is removed on push, and added on a pull */
/* This is to prevent duplicates */

$(document).ready(function(){
  // UNCOMMENT BEFORE RELEASE!
//    window.onbeforeunload = windowClose;
    
    bindEvents();
    
    hideAll();
    show(views[0]);
});

// This function binds Events to Button Clicks
function bindEvents(){
    // Navigation
    $('#showDataButton').click(function(){
        loadDataList();
    });
    $('#addTeamButton').click(function(){
        loadTeamPopup();
    });
    $('#addMatchButton').click(function(){
        loadMatchForm(0);
    });
    
    $('#teamDropdown').change(function(event){
        loadTeamForm(event.target.value);
    });
    $('#matchDropdown').change(function(event){
        loadMatchForm(event.target.value);
    });
    
    $('.viewTeamBox').click(function(){
        loadTeamForm($(this).attr('team'));
    });
    $('.viewMatchBox').click(function(){
        loadMatchForm($(this).attr('match'));
    });
    
    // Team Editing
    $("#editTeam").children().one('focus', function(event){
        prevteam = event.target.value;
    }).change(function(event){
        console.log("PREVTEAM " + prevteam);
        if(!editTeam(event.target.name, event.target.value)){
            console.log("prevteam reset " + prevteam);
            event.target.value = prevteam;
        }
        prevteam = event.target.value;
    });
    
    // Match Editing
    $("#editMatch").find('input, textarea').one('focus', function(event){
        prevmatch = event.target.value;
    }).change(function(event){
        console.log("PREVMATCH " + prevmatch);
        if(!editMatch(event.target.name, event.target.value)){
            console.log("prevmatch reset " + prevmatch);
            event.target.value = prevmatch;
        }
        prevmatch = event.target.value;
    });
    $('div#addTeam input[type=submit]').click(function(){
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
        var match_json = JSON.stringify($('form#addMatch').serializeObject());
        $('#resultMatch').text(match_json);
        return false;
    });
    
}


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

function windowClose(){
    return ""; // This prevents the user from leaving the page without a conformation dialogue
}

function clearSelectors(){
    // Clear the selectors
    $("#teamDropdown option[value=0]").prop("selected", true);
    $("#matchDropdown option[value=0]").prop("selected", true);
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
