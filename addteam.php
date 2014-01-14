<div id="emptyTeam" class="addTeam"> <!-- Create a team -->
    <h2>Add Team</h2><br/>
    
    <form method="get"> <!-- I recommend changing to method="post" when finished-->
    
        <h4>Team Number:</h4> <input type="text" name="team-number" placeholder="Ex: 3499" onchange="teamNumberChange()"/><br/><br/>
        <h4>Team Name:</h4> <input type="text" name="team-name" placeholder="Ex: River's Edge"/><br/><br/>
        
        <h4>Drive System:</h4> <!-- team-drive -->
            <input class="tab1" type="radio" name="team-drive" value="mecanum"/> Mecanum<br/>
            <input class="tab1" type="radio" name="team-drive" value="omni"/> Omni<br/>
            <input class="tab1" type="radio" name="team-drive" value="skid"/> Skid / Fixed<br/>
            <input class="tab1" type="radio" name="team-drive" value="caster"/> Caster<br/>
            <input class="tab1" type="radio" name="team-drive" value="tracks"/> Tracks<br/>
            <input class="tab1" type="radio" name="team-drive" value="rackpinion"/> Rack &amp; Pinion<br/>
            <input class="tab1" type="radio" name="team-drive" value="other"/> Other:<br/>
            
                <textarea class="tab2" name="team-drive" value="" rows="5" style="width:60%;"/></textarea>
        
        <br/><br/>
        <h4>Catch: </h4> <!-- team-catch -->
            <input class="tab1" type="radio" name="team-catch" value="yes"/> Yes
            <input class="tab1" type="radio" name="team-catch" value="no"/> No<br/>
            <span class="tab1">Reliably:</span>
                <input class="tab1" style="width:50px;" type="text" name="percentR" maxlength="3" placeholder="Ex: 50"/>%
        
        <br/><br/>
        <h4>Pick Up:</h4> <!-- team-pickup -->
            <input class="tab1" type="radio" name="team-pickup" value="yes"/> Yes&nbsp;&nbsp;
            <input class="tab1" type="radio" name="team-pickup" value="no"/> No<br/>
            <span class="tab1">Speed:</span>
                <input class="tab1" type="radio" name="team-pickup-speed" value="fast"/> Fast
                <input class="tab1" type="radio" name="team-pickup-speed" value="average"/> Average
                <input class="tab1" type="radio" name="team-pickup-speed" value="slow"/> Slow<br/>
                
            <span class="tab1">Ease:</span>&nbsp;&nbsp; <!-- team-pickup-ease -->
                <input class="tab1" type="radio" name="team-pickup-ease" value="on-the-run"/> On-The-Run
                <input class="tab1" type="radio" name="team-pickup-ease" value="in-between"/> In-Between
                <input class="tab1" type="radio" name="team-pickup-ease" value="stop"/> Stop &amp; Carefully
                
        <br/><br/>
        <h4>Throw:</h4> <!-- team-throw -->
            <input class="tab1" type="radio" name="team-throw" value="yes"/> Yes&nbsp;
            <input class="tab1" type="radio" name="team-throw" value="no"/> No<br/>
            
            <span class="tab1">Shot Accuracy:</span>
                <input class="tab1" style="width:50px;" type="text" name="percentT" maxlength="3" placeholder="Ex: 50"/>%
            
        <br/><br/>
        <h4>Push The Ball:</h4> <!-- team-push -->
            <textarea class="tab2" name="team-push" value="" rows="5" style="width:60%;"/></textarea>
            
        <br/><br/>
        <h4>Autonomous:</h4> <!-- team-autonomous -->
            <input class="tab1" type="radio" name="team-autonomous" value="yes"/> Yes&nbsp;
            <input class="tab1" type="radio" name="team-autonomous" value="no"/> No
            
            <br/><br/>
            <span class="tab1">Shoot:</span> <!-- team-autonomous-shoot -->
            
                <input class="tab1" type="checkbox" name="team-autonomous-shoot" value="Low:"/> Low<br/>
                    &nbsp;&nbsp;&nbsp;<span class="tab5">Shot Accuracy:</span>
                        <input class="tab1" style="width:50px;" type="text" name="percent-SA" maxlength="3" placeholder="Ex: 50"/>%<br/>
                        
                &nbsp;&nbsp;<input class="tab4" type="checkbox" name="team-autonomous" value="average"/> High<br/>
                    &nbsp;&nbsp;&nbsp;<span class="tab5">Shot Accuracy:</span>
                        <input class="tab1" style="width:50px;" type="text" name="percent-SA" maxlength="3" placeholder="Ex: 50"/>%<br/>
                
                &nbsp;&nbsp;&nbsp;<span class="tab5">Wait For Action Time:</span>
                    <input class="tab1" type="radio" name="team-autonomous-AT" value="yesAT"/> Yes
                    <input class="tab1" type="radio" name="team-autonomous-AT" value="noAT"/> No<br/>
            
                &nbsp;&nbsp;<input class="tab4" type="checkbox" name="team-autonomous" value="slow"/> None
            
            <br/><br/>
            <span class="tab1">Go To Zone:</span> <!-- team-autonomous-zone -->
                <input class="tab1" type="radio" name="team-autonomous-zone" value="yes"/> Yes
                <input class="tab1" type="radio" name="team-autonomous-zone" value="no"/> No
            
            <br/><br/>
            <span class="tab1">Start Position:</span><br/> <!-- team-autonomous-start -->
                <textarea class="tab2" name="team-autonomous-start" value="" rows="5" style="width:60%;" placeholder="Ex: Left side facing red"/></textarea>
        
        <br/><br/>
        <h4>Notes:</h4> <!-- team-notes -->
            <textarea class="tab2" name="team-notes" value="" rows="5" style="width:60%;" placeholder="Ex: They have a unique shooter"/></textarea>
        
        
        <br/><br/>
        <input class="right" type="submit" value="Submit Team Info" name="submit-team"/>
        
        <br style="clear:both" />
    </form>
</div>