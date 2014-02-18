<div id="editMatch" class="addMatch"> <!-- Create a match -->
    <h2>Add Match</h2><br/>
    <form method="get" id="addMatch">
    
    <span>Match Number: </span>
        <input required id="match-number" class="tab1" type="text" name="match-number" placeholder="Ex: 5"/><br/>
        <br/>
        
        <div class="left">
        
            Red 1#: <input class="tab1" type="text" name="match-red-team-1" placeholder="Ex: 1123"/><br/>
            Red 2#: <input class="tab1" type="text" name="match-red-team-2" placeholder="Ex: 2312"/><br/>
            Red 3#: <input class="tab1" type="text" name="match-red-team-3" placeholder="Ex: 3567"/>
            
            <br/><br/>
            <h4>Autonomous:</h4>
                <span class="tab1">Red 1 (<span class="match-team-number-r1"></span>):</span><br/>
                    <span class="tab2">Score:</span> <!-- match-red-1-score -->
                    
                        <input id="match-red-1-score-1" class="tab1" type="radio" name="match-red-1-score" value="high-action"/>
                            <label for="match-red-1-score-1">High w/ Action</label><br/>
                            
                        &nbsp;&nbsp;<input id="match-red-1-score-2" class="tab5" type="radio" name="match-red-1-score" value="high"/>
                            <label for="match-red-1-score-2">High</label><br/>
                            
                        &nbsp;&nbsp;<input id="match-red-1-score-3" class="tab5" type="radio" name="match-red-1-score" value="low"/>
                            <label for="match-red-1-score-3">Low</label><br/>
                            
                        &nbsp;&nbsp;<input id="match-red-1-score-4" class="tab5" type="radio" name="match-red-1-score" value="none"/>
                            <label for="match-red-1-score-4">None</label>
                
                <br/><br/>
                <span class="tab2">Drive To Zone:</span> <!-- match-red-1-drive -->
                
                    <input id="match-red-1-drive-1" class="tab1" type="radio" name="match-red-1-drive" value="yes"/>
                        <label for="match-red-1-drive-1">Yes</label>
                        
                    <input id="match-red-1-drive-2" class="tab1" type="radio" name="match-red-1-drive" value="no"/>
                        <label for="match-red-1-drive-2">No</label>
                    
                <br/><br/>
                <span class="tab1">Red 2 (<span class="match-team-number-r2"></span>):</span><br/>
                    <span class="tab2">Score:</span> <!-- match-red-2-score -->
                    
                        <input id="match-red-2-score-1" lass="tab1" type="radio" name="match-red-2-score" value="high-action"/>
                            <label for="match-red-2-score-1">High w/ Action</label><br/>
                            
                        &nbsp;&nbsp;<input id="match-red-2-score-2" class="tab5" type="radio" name="match-red-2-score" value="high"/>
                            <label for="match-red-2-score-2">High</label><br/>
                            
                        &nbsp;&nbsp;<input id="match-red-2-score-3" class="tab5" type="radio" name="match-red-2-score" value="low"/>
                            <label for="match-red-2-score-3">Low</label><br/>
                            
                        &nbsp;&nbsp;<input id="match-red-2-score-4" class="tab5" type="radio" name="match-red-2-score" value="none"/>
                            <label for="match-red-2-score-4">None</label>
                
                <br/><br/>
                <span class="tab2">Drive To Zone:</span> <!-- match-red-2-drive -->
                    <input id="match-red-2-drive-1" class="tab1" type="radio" name="match-red-2-drive" value="yes"/>
                        <label for="match-red-2-drive-1">Yes</label>
                        
                    <input id="match-red-2-drive-2" class="tab1" type="radio" name="match-red-2-drive" value="no"/>
                        <label for="match-red-2-drive-2">No</label>
                    
                <br/><br/>
                <span class="tab1">Red 3 (<span class="match-team-number-r3"></span>):</span><br/>
                    <span class="tab2">Score:</span> <!-- match-red-3-score -->
                    
                        <input id="match-red-3-score-1" class="tab1" type="radio" name="match-red-3-score" value="high-action"/>
                            <label for="match-red-3-score-1">High w/ Action</label><br/>
                            
                        &nbsp;&nbsp;<input id="match-red-3-score-2" class="tab5" type="radio" name="match-red-3-score" value="high"/>
                            <label for="match-red-3-score-2">High</label><br/>
                            
                        &nbsp;&nbsp;<input id="match-red-3-score-3" class="tab5" type="radio" name="match-red-3-score" value="low"/>
                            <label for="match-red-3-score-3">Low</label><br/>
                            
                        &nbsp;&nbsp;<input id="match-red-3-score-4" class="tab5" type="radio" name="match-red-3-score" value="none"/>
                            <label for="match-red-3-score-4">None</label>
                
                <br/><br/>
                <span class="tab2">Drive To Zone:</span> <!-- match-red-3-drive -->
                
                    <input id="match-red-3-drive-1" class="tab1" type="radio" name="match-red-3-drive" value="yes"/>
                        <label for="match-red-3-drive-1">Yes</label>
                        
                    <input id="match-red-3-drive-2" class="tab1" type="radio" name="match-red-3-drive" value="no"/>
                        <label for="match-red-3-drive-2">No</label>
                    
                <br/><br/>
        </div>
        <div class="rightSide">
        
            Blue 1#: <input onchange="updatenumberb1();" class="tab1" type="text" name="match-number-blue-1" placeholder="Ex: 1124"/><br/>
            Blue 2#: <input onchange="updatenumberb2();" class="tab1" type="text" name="match-number-blue-2" placeholder="Ex: 2313"/><br/>
            Blue 3#: <input onchange="updatenumberb3();" class="tab1" type="text" name="match-number-blue-3" placeholder="Ex: 3568"/>
            
            <br/><br/>
            <h4>Autonomous:</h4>
                <span class="tab1">Blue 1 (<span class="match-team-number-b1"></span>):</span><br/>
                    <span class="tab2">Score:</span> <!-- match-blue-1-score -->
                    
                        <input id="match-blue-1-score-1" class="tab1" type="radio" name="match-blue-1-score" value="high-action"/>
                            <label for="match-blue-1-score-1">High w/ Action</label><br/>
                            
                        &nbsp;&nbsp;<input id="match-blue-1-score-2" class="tab5" type="radio" name="match-blue-1-score" value="high"/>
                            <label for="match-blue-1-score-2">High</label><br/>
                            
                        &nbsp;&nbsp;<input id="match-blue-1-score-3" class="tab5" type="radio" name="match-blue-1-score" value="low"/>
                            <label for="match-blue-1-score-3">Low</label><br/>
                            
                        &nbsp;&nbsp;<input id="match-blue-1-score-4" class="tab5" type="radio" name="match-blue-1-score" value="none"/>
                            <label for="match-blue-1-score-4">None</label>
                
                <br/><br/>
                <span class="tab2">Drive To Zone:</span> <!-- match-blue-1-drive -->
                
                    <input id="match-blue-1-drive-1" class="tab1" type="radio" name="match-blue-1-drive" value="yes"/>
                        <label for="match-blue-1-drive-1">Yes</label>
                        
                    <input id="match-blue-1-drive-2" class="tab1" type="radio" name="match-blue-1-drive" value="no"/>
                        <label for="match-blue-1-drive-2">No</label>
                    
                <br/><br/>
                <span class="tab1">Blue 2 (<span class="match-team-number-b2"></span>):</span><br/>
                    <span class="tab2">Score:</span> <!-- match-blue-2-score -->
                    
                        <input id="match-blue-2-score-1" lass="tab1" type="radio" name="match-blue-2-score" value="high-action"/>
                            <label for="match-blue-2-score-1">High w/ Action</label><br/>
                            
                        &nbsp;&nbsp;<input id="match-blue-2-score-2" class="tab5" type="radio" name="match-blue-2-score" value="high"/>
                            <label for="match-blue-2-score-2">High</label><br/>
                            
                        &nbsp;&nbsp;<input id="match-blue-2-score-3" class="tab5" type="radio" name="match-blue-2-score" value="low"/>
                            <label for="match-blue-2-score-3">Low</label><br/>
                            
                        &nbsp;&nbsp;<input id="match-blue-2-score-4" class="tab5" type="radio" name="match-blue-2-score" value="none"/>
                            <label for="match-blue-2-score-4">None</label>
                
                <br/><br/>
                <span class="tab2">Drive To Zone:</span> <!-- match-blue-2-drive -->
                    <input id="match-blue-2-drive-1" class="tab1" type="radio" name="match-blue-2-drive" value="yes"/>
                        <label for="match-blue-2-drive-1">Yes</label>
                        
                    <input id="match-blue-2-drive-2" class="tab1" type="radio" name="match-blue-2-drive" value="no"/>
                        <label for="match-blue-2-drive-2">No</label>
                    
                <br/><br/>
                <span class="tab1">Blue 3 (<span class="match-team-number-b3"></span>):</span><br/>
                    <span class="tab2">Score:</span> <!-- match-blue-3-score -->
                    
                        <input id="match-blue-3-score-1" class="tab1" type="radio" name="match-blue-3-score" value="high-action"/>
                            <label for="match-blue-3-score-1">High w/ Action</label><br/>
                            
                        &nbsp;&nbsp;<input id="match-blue-3-score-2" class="tab5" type="radio" name="match-blue-3-score" value="high"/>
                            <label for="match-blue-3-score-2">High</label><br/>
                            
                        &nbsp;&nbsp;<input id="match-blue-3-score-3" class="tab5" type="radio" name="match-blue-3-score" value="low"/>
                            <label for="match-blue-3-score-3">Low</label><br/>
                            
                        &nbsp;&nbsp;<input id="match-blue-3-score-4" class="tab5" type="radio" name="match-blue-3-score" value="none"/>
                            <label for="match-blue-3-score-4">None</label>
                
                <br/><br/>
                <span class="tab2">Drive To Zone:</span> <!-- match-blue-3-drive -->
                
                    <input id="match-blue-3-drive-1" class="tab1" type="radio" name="match-blue-3-drive" value="yes"/>
                        <label for="match-blue-3-drive-1">Yes</label>
                        
                    <input id="match-blue-3-drive-2" class="tab1" type="radio" name="match-blue-3-drive" value="no"/>
                        <label for="match-blue-3-drive-2">No</label>
                    
        </div>
        
        <br class="clear" />
        
<!--         <input class="right" type="submit" value="Submit Match Info" name="submit-match"/> -->
        
        <br style="clear:both" />
    </form>
</div>
