// Show the edit match view for match #
function loadMatchForm(match){
    hideAll();
    if(match == 0){
        $('#editMatch').find('input, textarea').val("");
    } else if(matches[match] == undefined){
        // try to get from server
        alert("no such match");
    } else {
    
    }
    if(prevmatch == undefined){
        prevmatch = $('#match-number').val();
    }
    $(views[2]).show();
}

// Change a named value in the edit match view
function editMatch(name, value){
    var match = $('#match-number').val();
    console.log(match + ' ' + name + ' ' + value);
    if(name == "match-number"){
        if(value == ""){
            alert("You cannot leave a match number empty.");
            return false;
        } else {
            clearSelectors();
            if(!$("#matchDropdown").find("option[value='" + match + "']").length){
                $("#matchDropdown").append("<option value=\"" + match + "\">Match " + match + "</option>");
            }
            $("#teamDropdown option[value=ID0]").prop("selected", true);
            $("#matchDropdown option[value=" + match + "]").prop("selected", true);
        }
    } else {
        if(match == ""){
            alert("Please enter a match number first, data cannot be saved until this is done!");
            return false;
        } else {
            matches[match][name] = value;
            return true;
        }
    }
}
