/* These are mapped via the team numbers */
var teams = []; // stores all local team data
var matches = []; // stores all local match data
/* This is just a list of all the team and match numbers, so we dont have to go looking for them later. */
var teamNums = [];
var matchNums = [];

var editing = []; // The current team or match we are editing
var editingWhat; // What we are editing... "match", "team", "", or "nothing"

var teamUploadStack  = []; // This should contain the team numbers that need to be uploaded (just the numbers, the actual data will be @ teams[number][0]
var matchUploadStack = []; // ^

var views = ["#showDataPage", "#editTeam", "#editMatch"];

var lastPullTimestamp;

/* All locally created data will reside in the 0 index. */
/* All fetched data will reside in index equal to or greater than 1 */
/* When data is pushed, it will be removed from index 0 and then put in index (something greater) */
/* This is NOT a local copy, it is removed on push, and added on a pull */
/* This is to prevent duplicates */

////////////////////////////
/* Page Control Functions */
////////////////////////////
$(document).ready(function(){
  // UNCOMMENT BEFORE RELEASE!
//    window.onbeforeunload = windowClose;
    
    bindEvents();
    
    hideAll();
    show(views[0]);

    console.log("something1");
});

// This function binds Events to Button Clicks
function bindEvents(){
    // UNCOMMENT BEFORE RELEASE
    // namePopup();


    // Navigation
    $('#showDataButton').click(function(){
        showButtonClick();
    });
    $('#addTeamButton').click(function(){
        addTeamButtonClick();
    });
    $('#addMatchButton').click(function(){
        addMatchButtonClick();
    });
    
    $('#teamDropdown').change(function(event){
        teamDropdownChange(event.target.value);
    });
    $('#matchDropdown').change(function(event){
        matchDropdownChange(event.target.value);
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

        serializeTeamForm();

        return false;
    });
    $('form#addMatch').submit(function(){
        var match_json = JSON.stringify($('form#addMatch').serializeObject());
        $('#resultMatch').text(match_json);
        return false;
    });
   
    $("#force-push-and-fetch-attempt").click(function(){
        connectionTick();
    });

    window.scrollTo(0,0);
}

function hideAll(){
    $(views[0]).hide();
    $(views[1]).hide();
    $(views[2]).hide();
}

// This should be passed the actual ID not the index: ie. show(views[1])
function show(id){
    hideAll();
    $(id).show();
}

// Starts the popup when clicking "Add Team"
function addTeamButtonClick(){
    createTeamNumberInputPopup();
    $("input#teamNumber").change(function(){
        isValidTeamNumber();
    });
}

function createTeamNumberInputPopup(){
    // Adds mask to page
    $('body').append('<div class="mask"></div>');
    $('.mask').fadeIn(200);
    
    // Adds Popup to page
    $('body').append("\
        <div id=\"popup\"><h2>Add Team</h2>\
        Please input a team number.<br/>\
        <input required autofocus id=\"teamNumber\" type=\"number\" maxlength=\"4\" name=\"team-number\" placeholder=\"Ex: 3499\"/>\
        <br/><br/>\
        <span class=\"button\" id=\"submitTeamNumber\">Submit</span>\
        <span class=\"button\" id=\"submitTeamCancel\">Cancel</span>\
    </div>\
    ");
    
    
    // Centers the Popup
    $("#popup").css({ 
        'margin-top': -($("#popup").height()+130)/2,
        'margin-left': -($("#popup").width()+90)/2
    });
    
    $("#popup").fadeIn(200);
    
    $('#submitTeamNumber').click(function(){
        closeTeamPopupOK();
    });
    $('#submitTeamCancel, .mask').click(function(){
        closePopup();
    });
}

// This is called when the number input for creating a new team is changed (loses focus)
// It validates it then closes the popup.
function isValidTeamNumber(){
    if(($("input#teamNumber").val() != "") && isFinite($("input#teamNumber").val()) && (Math.floor($("input#teamNumber").val()) == $("input#teamNumber").val())){
        // we dont actually do anything here...
        return true;
    } else {
        alert("YOU NEED TO ENTER AN ****INTEGER****\nGood Job.");
        return false;
    }
}

// This closes the popup
function closeTeamPopup(){
    $("#popup").fadeOut(200, function(){
        $(this).remove(0);
    });
    $('.mask').fadeOut(200, function(){
        $(this).remove(0);
    });
}

// Starts when user submits a team number
function closeTeamPopupOK(){
    if(isValidTeamNumber()){

        /* Close the popup */
        closeTeamPopup();
 
        /* Call the function to load the form */
        teamPopupClosed();

    }
}

// Loads the requested thingy onto the page:
// It creates it if it doesnt exist already
function teamPopupClosed(){
    hideAll();
    // var views = ["#showDataPage", "#editTeam", "#editMatch"];

    var newTeamID = $("input#teamNumber").val();

    // $("#editTeam").html("");

    console.log("Created a new team with id " + newTeamID);
    // newTeamID should always be valid *unless* someone is doing something behind-the-scenes
    // Check to see if there are local edits for a team of this value
    if(teams[newTeamID] !== undefined && teams[newTeamID][0] !== undefined){
        ; // We use this one!
    } else {
        ; // Create a new team element
    }

    // *Add* this team to the upload queue
    // It is easiest to do this here as oppesed to making a new element and passing this one to the background.
    putTeamInUploadQueue(newTeamID);

    $("div#editTeam input[type=radio]").removeAttr("checked");
    $("div#editTeam input[type=checkbox]").removeAttr("checked");
    $("div#editTeam input[type=number]").val("");
    $("div#editTeam textarea").val("");
    $("div#editTeam input[type=text]").val("");

    // if the team exist
    if(teams[newTeamID] !== undefined && (teams[newTeamID][0] !== undefined || teams[newTeamID][0] != [])){
        teamNums.push(newTeamID);
        loadTeamOntoAddTeamPage(newTeamID);
    } else {
        teams[newTeamID] = [];
        teams[newTeamID][0] = $('div#addTeam').serializeObject();
        // console.log(JSON.stringify(teams[newTeamID]));
        // console.log(JSON.stringify($("div#addTeam").serializeObject()));
    }

    // serializeTeamForm();

    show(views[1]);
}

function loadTeamOntoAddTeamPage(teamID){
    // alert(JSON.stringify($('div#addTeam').serializeObject()));
    // console.log(JSON.stringify($('div#addTeam').serializeObject()));
}


function serializeTeamForm(){
    
    console.log("serializing...");

    if(teams[$("#teamNumber").val()]    == undefined) teams[$("#teamNumber").val()]    = [];
    if(teams[$("#teamNumber").val()][0] == undefined) teams[$("#teamNumber").val()][0] = [];

    $("div#addTeam > *").each(function(i, element){
        if(element) {

            if(element.nodeName == "INPUT"){
                if(element.type && element.type == "radio"){
                    if(teams[$("#teamNumber").val()][0][element.name] == undefined) teams[$("#teamNumber").val()][0][element.name] = "";
                    teams[$("#teamNumber").val()][0][element.name] = $(element).prop("checked");

                } else if(element.type && element.type == "checkbox"){
                    if(teams[$("#teamNumber").val()][0][element.name] == undefined)
                        teams[$("#teamNumber").val()][0][element.name] = [];
                    teams[$("#teamNumber").val()][0][element.name].push([element.value, $(element).prop("checked")]);

                } else if(element.type && element.type == "text"){
                    teams[$("#teamNumber").val()][0][element.name] = $(element).val();
                } else /* its a submit button */ {}

            } else if(element.nodeName == "TEXTAREA"){
                teams[$("#teamNumber").val()][0][element.name] = $(element).val();
            } else if(element.nodeName == "H4" || element.nodeName == "BR" || element.nodeName == "SPAN" || element.nodeName == "LABEL"){
            } else /* Add this tag to the debug page */{
                console.log("UNKNOWN element node name: ");
                console.log(element.nodeName);
            }
        }
}


// Starts when the user wants to close the popup
function closePopup(){
    $("#popup").fadeOut(200, function(){
        $(this).remove(0);
    });
}



////////////////////////
/* Misc Lib Functions */
////////////////////////
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


////////////////////////////
/* Upload queue functions */
////////////////////////////


// This is called periodically.
// It assesses the connection to the server, then trys to send and get data.
function connectionTick(){
    $.ajax ({
        type: "POST",
        url:"ping.php",
        success: function() {
            console.log("Ping to server is OK");
            uploadTeamData();
            uploadMatchData();
        },
        error: function() {
            console.log("Failed to Connect to server :(");
        }
    });
}

function packToJSON(teamID){
    ;
    ;
}

function putTeamInUploadQueue(teamID){
    if(teamUploadStack.indexOf(teamID) == -1)
        teamUploadStack.push(teamID);
}

function uploadTeamData(){

}

function uploadMatchData(){

}

function pullData(){
    $.ajax({
        type: "POST",
        url:  "givedata.php",
        //data: toJSON(lastPullTimestamp),
        success: function(){
            parseReturnData(data);
        }
    });
}

function parseReturnData(data){
/*    var retdata = JSONtoobj(data);
    if(retdata[timelastmod] <= lastpulltimestamp){ // if the modifcation timestamp is not older than the last time we pulled, dont change.
        ;
    } else {
        rmAndReplaceNonLocalData(retdata);
    }

    lastpulltimestamp = redtata[timelastmod]; */
}

function rmAndReplaceNonLocalData(newdata){
}

// Starts on startup to ask for the users name, this can be disabled in event.js
function namePopup(){
// Adds mask to page
    $('body').append('<div class="mask"></div>');
    $('.mask').fadeIn(200);
    
    // Adds Popup to page
    $('body').append("\
        <div class=\"nametag\" id=\"popup\"><span style=\"font-size:40px;font-weight:bold;\">H E L L O</span><br/>\
        <strong>my name is</strong><br/>\
        <textarea required autofocus cols=\"16\" rows=\"2\" id=\"yourName\" name=\"your-name\" style=\"border:none;font-size:40px;\" placeholder=\"Forrest Gump\"/>\
        <br/><br/>\
        <span class=\"button\" id=\"submitName\">Submit</span>\
    </div>\
    ");
    
    // Centers the Popup
    $("#popup").css({ 
        'margin-top': -($("#popup").height()+130)/2,
        'margin-left': -($("#popup").width()+20)/2
    });
    
    $("#popup").fadeIn(200);
    
    $('#submitName').click(function(){
        closeNamePopupOK();
    });

}

// When the user agrees to putting in their name
function closeNamePopupOK(){
    //magic
}

function onKonamiCode(fn) { // Taken from http://james.padolsey.com/javascript/konami-craziness/
    var codes = (function(){
        var c = [38,38,40,40,37,39,37,39,66,65];
        onKonamiCode.requireEnterKey && c.push(13);
        return c;
    })(),
        expecting = function(){
            expecting.codes = expecting.codes || Array.apply({}, codes);
            expecting.reset = function() { expecting.codes = null; };
            return expecting.codes;
        },
        handler = function(e) {
            if (expecting()[0] == (e||window.event).keyCode) {
                expecting().shift();
                if (!expecting().length) {
                    expecting.reset();
                    fn();
                }
            } else { expecting.reset(); }
        };
    window.addEventListener ?
        window.addEventListener('keydown', handler, false)
        : document.attachEvent('onkeydown', handler);
}
