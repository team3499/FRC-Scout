<div id="showDataPage" class="viewPage">

 

    <div id="viewTeamWrap">
        <h2>Teams</h2>
        
        <table id="tableTeams">
            <tr>
                <th class="tableTeamsTeam">Team</th>
                <th class="tableTeamsCatch">Catch?</th>
                <th class="tableTeamsPickup">Pickup?</th>
                <th class="tableTeamsThrow">Throw?</th>
                <th class="tableTeamsAuto">Auto?</th>
                <th class="tableTeamsNotes">Notes</th>
                <th class="tableTeamsTotalPoints">Total Points</th>
            </tr>
            <tr>
                <td class="tableTeamsTeam yellowBG" title="Team Number"><a href="team.php?team=3499">0001</a></td>
                <td class="tableTeamsCatch greenBG" title="Catch?">Yes</td>
                <td class="tableTeamsPickup yellowBG" title="Pickup?">Maybe <span title="The team said that they could pickup during the interview, but in game, they do not!">(?)</span></td>
                <td class="tableTeamsThrow greenBG" title="Throw?">Yes</td>
                <td class="tableTeamsAuto redBG" title="Auto?">no</td>
                <td class="tableTeamsNotes yellowBG" title="Team Notes"><div id="longText1"><span title="blah blah blah blah blah blah blah blah There is a lot of notes to test this field">blah blah blah blah blah blah blah blah There is a lot of notes to test this fielddddddddddddd dddddddddd dddddddddddddddddddddddddd ddddddddddddddddddddddd ddddddddddddddddddddddd ddddddddddddd dddddddddddddddddddd dddddddd</span></div></td>
                <td class="tableTeamsTotalPoints yellowBG" title="Total Points">99999</td>
            </tr>           
        </table>
    </div>

 <script>
    $("#longText1").css({height:'20px', overflow:'hidden'}); //put to stylesheet later
    $("#longText1").click(function(){
        if ($("#longText1").data('open')){
            $("#longText1").css({height:'20px', overflow:'hidden'});
            $("#longText1").data('open',0);

        } else {
            $("#longText1").css({height:'100%', overflow:'auto'});
            $("#longText1").data('open',1);
        }
    });
</script>   

    <div id="viewMatchWrap">
        <h2>Matches</h2>
        
        <table id="tableMatches">
            <tr>
               <th class="tableMatchesMatch">Match #</th>
               <th class="tableMatchesBlueTeam">B Team #1</th>
               <th class="tableMatchesBlueTeam">B Team #2</th>
               <th class="tableMatchesBlueTeam">B Team #3</th>
               <th class="tableMatchesRedTeam">R Team #1</th>
               <th class="tableMatchesRedTeam">R Team #2</th>
               <th class="tableMatchesRedTeam">R Team #3</th>
               <th class="tableMatchesBlueScore">Blue Team Score</th>
               <th class="tableMatchesRedScore">Red Team Score</th>
               <th class="tableMatchesNotes">Match Notes</th>
               <th class="tableMatchesWin">Team Winner</th>
            </tr>
            <tr>
               <td class="tableMatchesMatch yellowBG" title="Match Number"><a href="#001">001</a></td>
               <td class="tableMatchesBlueTeam blueBG" title="Blue Team #1"><a href="#0001">0001</a></td>
               <td class="tableMatchesBlueTeam blueBG" title="Blue Team #2"><a href="#0002">0002</a></td>
               <td class="tableMatchesBlueTeam blueBG" title="Blue Team #3"><a href="#0003">0003</a></td>
               <td class="tableMatchesRedTeam redBG" title="Red Team #1"><a href="#0004">0004</a></td>
               <td class="tableMatchesRedTeam redBG" title="Red Team #2"><a href="#0005">0005</a></td>
               <td class="tableMatchesRedTeam redBG" title="Red Team #3"><a href="#0006">0006</a></td>
               <td class="tableMatchesBlueScore blueBG" title="Blue Team Score">3213</td>
               <td class="tableMatchesRedScore redBG" title="Red Team Score">3646</td>
               <td class="tableMatchesNotes yellowBG" title="Match Ntoes"><span title="There is a lot of notes to test this field">There is a lot of notes to test this field</span></td>
               <td class="tableMatchesWin blueBG" title="Team Winner">Blue</td>
            </tr>
            <tr>
               <td class="tableMatchesMatch yellowBG" title="Match Number"><a href="#001">001</a></td>
               <td class="tableMatchesBlueTeam blueBG" title="Blue Team #1"><a href="#0001">0001</a></td>
               <td class="tableMatchesBlueTeam blueBG" title="Blue Team #2"><a href="#0002">0002</a></td>
               <td class="tableMatchesBlueTeam blueBG" title="Blue Team #3"><a href="#0003">0003</a></td>
               <td class="tableMatchesRedTeam redBG" title="Red Team #1"><a href="#0004">0004</a></td>
               <td class="tableMatchesRedTeam redBG" title="Red Team #2"><a href="#0005">0005</a></td>
               <td class="tableMatchesRedTeam redBG" title="Red Team #3"><a href="#0006">0006</a></td>
               <td class="tableMatchesBlueScore blueBG" title="Blue Team Score">3213</td>
               <td class="tableMatchesRedScore redBG" title="Red Team Score">3646</td>
               <td class="tableMatchesNotes yellowBG" title="Match Ntoes"><span title="There is a lot of notes to test this field">There is a lot of notes to test this field</span></td>
               <td class="tableMatchesWin blueBG" title="Team Winner">Blue</td>
            </tr>
            <tr>
               <td class="tableMatchesMatch yellowBG" title="Match Number"><a href="#001">001</a></td>
               <td class="tableMatchesBlueTeam blueBG" title="Blue Team #1"><a href="#0001">0001</a></td>
               <td class="tableMatchesBlueTeam blueBG" title="Blue Team #2"><a href="#0002">0002</a></td>
               <td class="tableMatchesBlueTeam blueBG" title="Blue Team #3"><a href="#0003">0003</a></td>
               <td class="tableMatchesRedTeam redBG" title="Red Team #1"><a href="#0004">0004</a></td>
               <td class="tableMatchesRedTeam redBG" title="Red Team #2"><a href="#0005">0005</a></td>
               <td class="tableMatchesRedTeam redBG" title="Red Team #3"><a href="#0006">0006</a></td>
               <td class="tableMatchesBlueScore blueBG" title="Blue Team Score">3213</td>
               <td class="tableMatchesRedScore redBG" title="Red Team Score">3646</td>
               <td class="tableMatchesNotes yellowBG" title="Match Ntoes"><span title="There is a lot of notes to test this field">There is a lot of notes to test this field</span></td>
               <td class="tableMatchesWin blueBG" title="Team Winner">Blue</td>
            </tr>
            <tr>
               <td class="tableMatchesMatch yellowBG" title="Match Number"><a href="#001">001</a></td>
               <td class="tableMatchesBlueTeam blueBG" title="Blue Team #1"><a href="#0001">0001</a></td>
               <td class="tableMatchesBlueTeam blueBG" title="Blue Team #2"><a href="#0002">0002</a></td>
               <td class="tableMatchesBlueTeam blueBG" title="Blue Team #3"><a href="#0003">0003</a></td>
               <td class="tableMatchesRedTeam redBG" title="Red Team #1"><a href="#0004">0004</a></td>
               <td class="tableMatchesRedTeam redBG" title="Red Team #2"><a href="#0005">0005</a></td>
               <td class="tableMatchesRedTeam redBG" title="Red Team #3"><a href="#0006">0006</a></td>
               <td class="tableMatchesBlueScore blueBG" title="Blue Team Score">3213</td>
               <td class="tableMatchesRedScore redBG" title="Red Team Score">3646</td>
               <td class="tableMatchesNotes yellowBG" title="Match Ntoes"><span title="There is a lot of notes to test this field">There is a lot of notes to test this field</span></td>
               <td class="tableMatchesWin blueBG" title="Team Winner">Blue</td>
            </tr>
        
        </table>
        
    </div>
    
    <br style="clear:both" />
</div>
