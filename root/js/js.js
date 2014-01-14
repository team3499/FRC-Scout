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
            $('#viewPage').css('visibility', 'visible');
            $('#addTeam').css('visibility', 'collapse');
            $('#addMatch').css('visibility', 'collapse');
            break;
        case 2: // addTeam
            $('#viewPage').css('visibility', 'collapse');
            $('#addTeam').css('visibility', 'visible');
            $('#addMatch').css('visibility', 'collapse');
            break;
        case 3: // addMatch
            $('#viewPage').css('visibility', 'collapse');
            $('#addTeam').css('visibility', 'collapse');
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

var showID;

function onld(){
  
//  alert("Hi");
//  document.getElementsByClassName('addMatch')[0].style.display = "block";
  
  showID = 0;
  show();
  
  document.getElementsByClassName('addTeam')[0].style.display = "block";
  document.getElementById("0").style.display = "block";
}

function show(){
  document.getElementById(showID).style.display = "block";
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
