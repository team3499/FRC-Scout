var teams;
var matches;

var uploadStack;

var pageView;

$(document).ready(function(){
    pageView = 1;

    $(document).resize(function(){
        switch(pageView){
        default:
        case 1: // home
            $('#addTeam').css('visibility', 'hidden');
            $('#addMatch').css('visibility', 'hidden');
            break;
        case 2: // addTeam
            $('#addTeam').css('visibility', 'visible');
            $('#addMatch').css('visibility', 'hidden');
            break;
        case 3: // addMatch
            $('#addTeam').css('visibility', 'hidden');
            $('#addMatch').css('visibility', 'visible');
            break;
        }
    });

    $('#addTeamButton').click(function(){
        pageView = 2;
        $(document).resize();
    });
    $('#addMatchButton').click(function(){
        pageView = 3;
        $(document).resize();
    });
});

function onld(){
  
//  alert("Hi");
//  document.getElementsByClassName('addMatch')[0].style.display = "block";
}

function windowclose(){
  
}


function newMatch(){
  
}

function newTeam(){
  
}

function setMatch(){
  
}

function setTeam(){
  
}

function dissapear(){
  active.style.display = "none";
}

// addMatch;
// addTeam;
// optionsTitle;
