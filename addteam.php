<div id="editTeam" class="addTeam"> <!-- Create a team -->
    
    <h2>Add Team</h2><br/>
    
    <div id="addTeam">
    
        <!--<h4 class="inline">Team Number:</h4> <input required autofocus id="team-number" class="tab1" type="text" name="team-number" placeholder="Ex: 3499"/><br/><br/>-->
        <h4 class="inline">Team Name:</h4> <input class="tab1" type="text" name="team-name" placeholder="Ex: River's Edge"/><br/><br/>
        
        <h4>Drive System:</h4> <!-- team-drive -->
        
            <input id="team-drive-1" class="tab1" type="radio" name="team-drive" value="mecanum"/>
                <label for="team-drive-1">Mecanum</label><br/>
                
            <input id="team-drive-2" class="tab1" type="radio" name="team-drive" value="omni"/>
                <label for="team-drive-2">Omni</label><br/>
                
            <input id="team-drive-3" class="tab1" type="radio" name="team-drive" value="skid"/>
                <label for="team-drive-3">Skid / Fixed</label><br/>
                
            <input id="team-drive-4" class="tab1" type="radio" name="team-drive" value="caster"/>
                <label for="team-drive-4">Caster</label><br/>
                
            <input id="team-drive-5" class="tab1" type="radio" name="team-drive" value="tracks"/>
                <label for="team-drive-5">Tracks</label><br/>
                
            <input id="team-drive-6" class="tab1" type="radio" name="team-drive" value="rackpinion"/>
                <label for="team-drive-6">Rack &amp; Pinion</label><br/>
                
            <input id="team-drive-7" class="tab1" type="radio" name="team-drive" value="other"/>
                <label for="team-drive-7">Other:</label><br/>
            
                <textarea class="tab2" name="team-drive" value="" rows="5" style="width:60%;"/></textarea>
        
        <br/><br/>
        <h4>Catch: </h4> <!-- team-catch -->
        
            <input id="team-catch-1" class="tab1" type="radio" name="team-catch" value="yes"/>
                <label for="team-catch-1">Yes</label>
                
            <input id="team-catch-2" class="tab1" type="radio" name="team-catch" value="no"/>
                <label for="team-catch-2">No</label><br/>
                
            <span class="tab1">Reliably:</span>
                <input class="tab1" style="width:50px;" type="number" name="team-catch-percent" maxlength="3" placeholder="Ex: 50"/>%
        
        <br/><br/>
        <h4>Pick Up:</h4> <!-- team-pickup -->
        
            <input id="team-pickup-1" class="tab1" type="radio" name="team-pickup" value="yes"/>
                <label for="team-pickup-1">Yes&nbsp;&nbsp;</label>
                
            <input id="team-pickup-2" class="tab1" type="radio" name="team-pickup" value="no"/>
                <label for="team-pickup-2">No</label><br/>
                
            <span class="tab1">Speed:</span>
                <input id="team-pickup-speed-1" class="tab1" type="radio" name="team-pickup-speed" value="fast"/>
                    <label for="team-pickup-speed-1">Fast</label>
                    
                <input id="team-pickup-speed-2" class="tab1" type="radio" name="team-pickup-speed" value="average"/>
                    <label for="team-pickup-speed-2">Average</label>
                    
                <input id="team-pickup-speed-3" class="tab1" type="radio" name="team-pickup-speed" value="slow"/>
                    <label for="team-pickup-speed-3">Slow</label><br/>
                
            <span class="tab1">Ease:</span>&nbsp;&nbsp; <!-- team-pickup-ease -->
            
                <input id="team-pickup-ease-1" class="tab1" type="radio" name="team-pickup-ease" value="on-the-run"/>
                    <label for="team-pickup-ease-1">On-The-Run</label>
                    
                <input id="team-pickup-ease-2" class="tab1" type="radio" name="team-pickup-ease" value="in-between"/>
                    <label for="team-pickup-ease-2">In-Between</label>
                    
                <input id="team-pickup-ease-3" class="tab1" type="radio" name="team-pickup-ease" value="stop"/>
                    <label for="team-pickup-ease-3">Stop &amp; Carefully</label>
                
        <br/><br/>
        <h4>Throw:</h4> <!-- team-throw -->
        
            <input id="team-throw-1" class="tab1" type="radio" name="team-throw" value="yes"/>
                <label for="team-throw-1">Yes&nbsp;</label>
                
            <input id="team-throw-2" class="tab1" type="radio" name="team-throw" value="no"/>
                <label for="team-throw-2">No</label><br/>
            
            <span class="tab1">Shot Accuracy:</span>
                <input class="tab1" style="width:50px;" type="number" name="team-throw-percent" maxlength="3" placeholder="Ex: 50"/>%
            
        <br/><br/>
        <h4>Push The Ball:</h4> <!-- team-push -->
        
            <textarea class="tab2" name="team-push" value="" rows="5" style="width:60%;" placeholder="Ex: The robot herds by..."/></textarea>
            
        <br/><br/>
        <h4>Autonomous:</h4> <!-- team-autonomous -->
        
            <input id="team-autonomous-1" class="tab1" type="radio" name="team-autonomous" value="yes"/>
                <label for="team-autonomous-1">Yes&nbsp;</label>
                
            <input id="team-autonomous-2" class="tab1" type="radio" name="team-autonomous" value="no"/>
                <label for="team-autonomous-2">No</label>
            
            <br/><br/>
            <span class="tab1">Shoot:</span> <!-- team-autonomous-shoot -->
            
                <input id="team-autonomous-shoot-1" class="tab1" type="checkbox" name="team-autonomous-shoot" value="Low:"/>
                    <label for="team-autonomous-shoot-1">Low</label><br/>
                    
                    &nbsp;&nbsp;&nbsp;<span class="tab5">Shot Accuracy:</span>
                        <input class="tab1" style="width:50px;" type="number" name="team-autonomous-shoot-percent" maxlength="3" placeholder="Ex: 50"/>%<br/>
                        
                &nbsp;&nbsp;<input id="team-autonomous-shoot-2" class="tab4" type="checkbox" name="team-autonomous-shoot" value="average"/>
                    <label for="team-autonomous-shoot-2">High</label><br/>
                    
                    &nbsp;&nbsp;&nbsp;<span class="tab5">Shot Accuracy:</span>
                        <input class="tab1" style="width:50px;" type="number" name="team-autonomous-shoot-percent" maxlength="3" placeholder="Ex: 50"/>%<br/>
                
                &nbsp;&nbsp;&nbsp;<span class="tab5">Wait For Action Time:</span>
                    <input id="team-autonomous-AT-1" class="tab1" type="radio" name="team-autonomous-AT" value="yesAT"/>  
                        <label for="team-autonomous-AT-1">Yes</label>
                        
                    <input id="team-autonomous-AT-2" class="tab1" type="radio" name="team-autonomous-AT" value="noAT"/>
                        <label for="team-autonomous-AT-1">No</label><br/>
            
                &nbsp;&nbsp;<input id="team-autonomous-shoot-3" class="tab4" type="checkbox" name="team-autonomous-shoot" value="none"/>
                    <label for="team-autonomous-shoot-3">None</label>
            
            <br/><br/>
            <span class="tab1">Go To Zone:</span> <!-- team-autonomous-zone -->
            
                <input id="team-autonomous-zone-1" class="tab1" type="radio" name="team-autonomous-zone" value="yes"/>
                    <label for="team-autonomous-zone-1">Yes</label>
                    
                <input id="team-autonomous-zone-2" class="tab1" type="radio" name="team-autonomous-zone" value="no"/>
                    <label for="team-autonomous-zone-2">No</label>
            
            <br/><br/>
            <span class="tab1">Start Position:</span><br/> <!-- team-autonomous-start -->
            
                <textarea class="tab2" name="team-autonomous-start" value="" rows="5" style="width:60%;" placeholder="Ex: Left side facing red"/></textarea>
        
        <br/><br/>
        <h4>Notes:</h4> <!-- team-notes -->
        
            <textarea class="tab2" name="team-notes" value="" rows="5" style="width:60%;" placeholder="Ex: They have a unique shooter"/></textarea>
        
        <br/><br/>
        <input class="right" type="submit" value="Submit Team Info" name="submit-team"/>
        
        <br class="clear" />
    </div>
</div>
