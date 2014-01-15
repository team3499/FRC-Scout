<div id="emptyMatch" class="addMatch"> <!-- Create a match -->
    <h2>Add Match</h2><br/>
    <form method="get">
    
    <span>Match Number: </span>
        <input onchange="matchNumberChange()" class="tab1" type="text" name="match-number" placeholder="Ex: 5"/><br/>
        <br/>
        
        <div class="left">
        
            Red 1#: <input class="tab1" type="text" name="match-red-1" placeholder="Ex: 1123"/><br/>
            Red 2#: <input class="tab1" type="text" name="match-red-2" placeholder="Ex: 2312"/><br/>
            Red 3#: <input class="tab1" type="text" name="match-red-3" placeholder="Ex: 3567"/>
            
            <br/><br/>
            <h4>Autonomous:</h4>
                <span class="tab1">Red 1 (<span>js to show team</span>):</span><br/>
                    <span class="tab2">Score:</span> <!-- match-red-1-score -->
                        <input class="tab1" type="radio" name="match-red-1-score" value="high-action"/> High w/ Action<br/>
                        &nbsp;&nbsp;<input class="tab5" type="radio" name="match-red-1-score" value="high"/> High<br/>
                        &nbsp;&nbsp;<input class="tab5" type="radio" name="match-red-1-score" value="low"/> Low<br/>
                        &nbsp;&nbsp;<input class="tab5" type="radio" name="match-red-1-score" value="none"/> None
                
                <br/><br/>
                <span class="tab2">Drive To Zone:</span> <!-- match-red-1-drive -->
                    <input class="tab1" type="radio" name="match-red-1-drive" value="yes"/> Yes
                    <input class="tab1" type="radio" name="match-red-1-drive" value="no"/> No
                    
                <br/><br/>
                <span class="tab1">Red 2 (<span>js to show team</span>):</span><br/>
                    <span class="tab2">Score:</span> <!-- match-red-2-score -->
                        <input class="tab1" type="radio" name="match-red-2-score" value="high-action"/> High w/ Action<br/>
                        &nbsp;&nbsp;<input class="tab5" type="radio" name="match-red-2-score" value="high"/> High<br/>
                        &nbsp;&nbsp;<input class="tab5" type="radio" name="match-red-2-score" value="low"/> Low<br/>
                        &nbsp;&nbsp;<input class="tab5" type="radio" name="match-red-2-score" value="none"/> None
                
                <br/><br/>
                <span class="tab2">Drive To Zone:</span> <!-- match-red-2-drive -->
                    <input class="tab1" type="radio" name="match-red-2-drive" value="yes"/> Yes
                    <input class="tab1" type="radio" name="match-red-2-drive" value="no"/> No
                    
                <br/><br/>
                <span class="tab1">Red 3 (<span>js to show team</span>):</span><br/>
                    <span class="tab2">Score:</span> <!-- match-red-3-score -->
                        <input class="tab1" type="radio" name="match-red-3-score" value="high-action"/> High w/ Action<br/>
                        &nbsp;&nbsp;<input class="tab5" type="radio" name="match-red-3-score" value="high"/> High<br/>
                        &nbsp;&nbsp;<input class="tab5" type="radio" name="match-red-3-score" value="low"/> Low<br/>
                        &nbsp;&nbsp;<input class="tab5" type="radio" name="match-red-3-score" value="none"/> None
                
                <br/><br/>
                <span class="tab2">Drive To Zone:</span> <!-- match-red-3-drive -->
                    <input class="tab1" type="radio" name="match-red-3-drive" value="yes"/> Yes
                    <input class="tab1" type="radio" name="match-red-3-drive" value="no"/> No
                    
                <br/><br/>
        </div>
        <div class="rightSide">
        
            Blue 1#: <input class="tab1" type="text" name="match-blue-1" placeholder="Ex: 1124"/><br/>
            Blue 2#: <input class="tab1" type="text" name="match-blue-2" placeholder="Ex: 2313"/><br/>
            Blue 3#: <input class="tab1" type="text" name="match-blue-3" placeholder="Ex: 3568"/>
            
            <br/><br/>
            <h4>Autonomous:</h4>
                <span class="tab1">Blue 1 (<span>js to show team</span>):</span><br/>
                    <span class="tab2">Score:</span> <!-- match-blue-1-score -->
                        <input class="tab1" type="radio" name="match-blue-1-score" value="high-action"/> High w/ Action<br/>
                        &nbsp;&nbsp;<input class="tab5" type="radio" name="match-blue-1-score" value="high"/> High<br/>
                        &nbsp;&nbsp;<input class="tab5" type="radio" name="match-blue-1-score" value="low"/> Low<br/>
                        &nbsp;&nbsp;<input class="tab5" type="radio" name="match-blue-1-score" value="none"/> None
                
                <br/><br/>
                <span class="tab2">Drive To Zone:</span> <!-- match-blue-1-drive -->
                    <input class="tab1" type="radio" name="match-blue-1-drive" value="yes"/> Yes
                    <input class="tab1" type="radio" name="match-blue-1-drive" value="no"/> No
                    
                <br/><br/>
                <span class="tab1">Blue 2 (<span>js to show team</span>):</span><br/>
                    <span class="tab2">Score:</span> <!-- match-blue-2-score -->
                        <input class="tab1" type="radio" name="match-blue-2-score" value="high-action"/> High w/ Action<br/>
                        &nbsp;&nbsp;<input class="tab5" type="radio" name="match-blue-2-score" value="high"/> High<br/>
                        &nbsp;&nbsp;<input class="tab5" type="radio" name="match-blue-2-score" value="low"/> Low<br/>
                        &nbsp;&nbsp;<input class="tab5" type="radio" name="match-blue-2-score" value="none"/> None
                
                <br/><br/>
                <span class="tab2">Drive To Zone:</span> <!-- match-blue-2-drive -->
                    <input class="tab1" type="radio" name="match-blue-2-drive" value="yes"/> Yes
                    <input class="tab1" type="radio" name="match-blue-2-drive" value="no"/> No
                    
                <br/><br/>
                <span class="tab1">Blue 3 (<span>js to show team</span>):</span><br/>
                    <span class="tab2">Score:</span> <!-- match-blue-3-score -->
                        <input class="tab1" type="radio" name="match-blue-3-score" value="high-action"/> High w/ Action<br/>
                        &nbsp;&nbsp;<input class="tab5" type="radio" name="match-blue-3-score" value="high"/> High<br/>
                        &nbsp;&nbsp;<input class="tab5" type="radio" name="match-blue-3-score" value="low"/> Low<br/>
                        &nbsp;&nbsp;<input class="tab5" type="radio" name="match-blue-3-score" value="none"/> None
                
                <br/><br/>
                <span class="tab2">Drive To Zone:</span> <!-- match-blue-3-drive -->
                    <input class="tab1" type="radio" name="match-blue-3-drive" value="yes"/> Yes
                    <input class="tab1" type="radio" name="match-blue-3-drive" value="no"/> No
        
        </div>
        
        <br class="clear" />
        
<!--         <input class="right" type="submit" value="Submit Match Info" name="submit-match"/> -->
        
        <br style="clear:both" />
    </form>
</div>