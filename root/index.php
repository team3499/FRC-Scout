<!DOCTYPE html>
<head>
    <title>Team3499 Scout</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut-icon" href="img/shortcut-icon.png" type="image/x-icon"/>
    <script src="js/jquery-2.0.3.min.js"></script>
    <script src="js/js.js"></script>
</head>
<body>

    <div id="wrap">

        <div id="header"> <!-- Header -->
        
            <div class="headerLogo">
                <span class="title">Team 3499 Scout</span>
                <br/>
            </div>
            <div class="navigation">
                <select onchange="selectTeam()" id="teamDropdown">
                    <option>Select Team...</option>
                    <option value="T1">Team 3499</option>
                    <option value="T2">Team 999</option>
                    <option value="T0">T0</option>
                </select>
                <span onclick="addTeam();" class="button">Add Team</span>
                <span onclick="show('ID0');" class="button">Show Data</span>
                <span onclick="addMatch();" class="button">Add Match</span>
                <select>
                    <option>Select Match...</option>
                    <option onclick="location.href='#match10'">Match 10</option>
                    <option onclick="location.href='#match18'">Match 18</option>
                </select>
            </div><br/>
        
        </div>

        <div id="main"> <!-- Put everything here -->
        
            <div id="container" class="info"> <!-- Shows team and match info and additions -->
                
                <?php include("../showdata.php") ?>
                <?php include("../addteam.php") ?>
                <?php include("../addmatch.php") ?>
                
            </div>
        </div>
    </div>

    <div id="footer"> <!-- Footer -->

        <div class="footerContainer"> <!-- Please don't be a douche and change the footer text ;) -->
            
            <a href="http://team3499.org" target="_blank">
                <img height="80" class="left" src="img/logo.png"/>
            </a>
            
            <p class="footerText">
                Created By <a href="http://team3499.org" target="_blank" title="team3499.org">Team 3499</a>
            </p>
        </div>
    
    </div>

</body>
</html>
