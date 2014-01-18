// Show the edit team view for team #
function loadTeamForm(team){
    hideAll();
    if(team == 0){
        $('#editTeam').find('input, textarea').val("");
    } else if(teams[team] == undefined){
        // try to get from server
        alert("no such team");
    } else {
    
    }
    if(prevteam == undefined){
        prevteam = $('#team-number').val();
    }
    $(views[1]).show();
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
            clearSelectors();
            if(!$("#teamDropdown").find("option[value='" + team + "']").length){
                $("#teamDropdown").append("<option value=\"" + team + "\">Team " + team + "</option>");
            }
            $("#matchDropdown option[value=ID0]").prop("selected", true);
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