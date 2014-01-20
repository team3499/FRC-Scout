function bindEvents(){
    // Navigation
    $('#showDataButton').click(function(){
        loadDataList();
    });
    $('#addTeamButton').click(function(){
        loadTeamForm(0);
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
        //console.log($(this).attr('team'));
        loadTeamForm($(this).attr('team'));
    });
    $('.viewMatchBox').click(function(){
        //console.log($(this).attr('match'));
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
}