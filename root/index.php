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
                <span class="title"><span class="titleWarp">Team 3499</span> <img height="100" src="img/scoutLogo.png"/></span>
                <br/>
            </div>
            <div class="navigation">
                <select id="teamDropdown" onchange="alert('hi');selectTeam();">
                    <option value="ID0">Select Team...</option>
                    <option value="T1">Team 3499</option>
                    <option value="T2">Team 999</option>
                    <option value="T0">T0</option>
                </select>
                <span onclick="addTeam();" class="button">Add Team</span>
                <span onclick="show('ID0');" class="button">Show Data</span>
                <span onclick="addMatch();" class="button">Add Match</span>
                <select onchange="selectMatch()" id="matchDropdown">
                    <option value="ID0">Select Match...</option>
                    <option value="M0">Match 0</option>
                    <option value="M1">Match 1</option>
                </select>
            </div><br/>
        
        </div>

        <div id="main"> <!-- Put everything here / wrapper -->
        
            <div id="container" class="info"> <!-- Shows team and match info and additions -->
                
                <?php include("../showdata.php") ?>
                <?php include("../addteam.php") ?>
                <?php include("../addmatch.php") ?>
                
            </div>
        </div>
    </div>

    <div id="footer"> <!-- Footer -->

        <div class="footerContainer">
            
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
