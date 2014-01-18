<!DOCTYPE html>
<head>
    <title>Team3499 Scout</title>
    <meta charset="UTF-8"/>
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut-icon" href="/img/shortcut-icon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="all"/>
    <script src="/js/jquery-2.0.3.min.js"></script>
    <script src="/js/team.js"></script>
    <script src="/js/match.js"></script>
    <script src="/js/event.js"></script>
    <script src="/js/js.js"></script>
</head>
<body>

    <div id="wrap">

        <div id="header"> <!-- Header -->
        
            <p class="year" title="Aerial Assist">2014</p> <!-- Change for every year -->
            <div class="headerLogo">
                <span class="title">
                    <span class="titleLeft">Team</span>
                    <img class="scoutLogo" height="100" src="/img/scoutLogo.png"/>
                    <span class="titleRight">3499</span>
                </span>
                <br class="clear"/>
            </div>
            <div class="navigation">
                <select id="teamDropdown">
                    <option value="ID0">Edit Team...</option>
                </select>
                <span id="addTeamButton" class="button">Add Team</span>
                <span id="showDataButton" class="button">Show Data</span>
                <span id="addMatchButton" class="button">Add Match</span>
                <select id="matchDropdown">
                    <option value="ID0">Edit Match...</option>
                </select>
            </div><br/>
        
        </div>

        <div id="main"> <!-- Put everything here / wrapper -->
        
            <div id="container" class="info"> <!-- Shows team and match info and additions -->
                
                <?php include("../showdata.php") ?>
                <?php include("../addteam.php") ?>
                <?php include("../addmatch.php") ?>
                <?php include("../pageteam.php") ?>
                <?php include("../pagematch.php") ?>
                
            </div>
                <!-- Test colors -->
                <p class="good">Good</p>
                <p class="okay">Okay</p>
                <p class="bad">Bad</p>
        </div>
    </div>

    <div id="footer"> <!-- Footer -->

        <div class="footerContainer">
            
            <a href="http://team3499.org" target="_blank">
                <img height="75" class="left" src="img/logo.png"/>
            </a>
            
            <p class="footerText">
                Created By <a href="http://team3499.org" target="_blank" title="team3499.org">Team 3499</a><br/>
                <small>Team Fortress 2 scout character and fonts are trademarked by <a style="font-size:10px;" target="_blank" href="http://www.valvesoftware.com/">Valve Software</a></small>
            </p>
        </div>
    
    </div>

</body>
</html>
