// Show the edit team view for team #
function loadTeamForm(team){
    hideAll();
    if(team == 0){
        $('#editTeam').find('input, textarea').val("");
    } else if(teams[team] == undefined){
        // try to get from server
        alert("no such team");
    }
    $("#teamDropdown option[value=" + team + "]").prop("selected", true);
    $("#matchDropdown option[value=0]").prop("selected", true);
    if(prevteam == undefined){
        prevteam = $('#team-number').val();
    }
    selectTeamDropdown(team);
    $(views[1]).show();
}

function populateTeamDropdown(){
    $('#teamDropdown').html("");
    $('#teamDropdown').append('<option value="0">Edit Team...</option>');
    for(var i = 0; i < teams.length; ++i){
        $('#teamDropdown').append('<option value="' + teams[i].number + '">Team ' + teams[i].number + '</option>');
    }
}
function selectTeamDropdown(team){
    for(var i = 0; i < teams.length; ++i){
        $('#teamDropdown option').prop("selected", false);
    }
    $("#teamDropdown option[value=" + team + "]").prop("selected", true);
}

// Change a named value in the edit team view
function editTeam(name, value){
    var team = $('#team-number').val();
    console.log(team + ' ' + name + ' ' + value);
    if(name == "team-number"){
        if(value == ""){
            alert("You cannot leave a team number empty.");
            return false;
        } else {
            
            populateTeamDropdown();
            selectTeamDropdown(team);
            if(!$("#teamDropdown").find("option[value='" + team + "']").length){
                $("#teamDropdown").append("<option value=\"" + team + "\">Team " + team + "</option>");
            }
            $("#matchDropdown option[value=0]").prop("selected", true);
            $("#teamDropdown option[value=" + team + "]").prop("selected", true);
            return true;
        }
    } else {
        if(team == ""){
            alert("Please enter a team number first, data cannot be saved until this is done!");
            return false;
        } else {
            teams[team][name] = value;
            return true;
        }
    }
}