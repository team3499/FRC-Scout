<?php

/* !!! Make sure scout.db is owned by the apache user and possibly have 777 permissions. !!!
 * The document root itself has to be owned by the apache user before creating the database. 
 * 
 */

$table_team="teams";
$table_match="matches";

// Checks to see if the database exists
if (!file_exists('../scout.db')){
    
    fwrite('../scout.db','');
}

try {
    $pdo = new PDO("sqlite:../scout.db");
    
    // This is gathered from the addteam page.
    $pdo->exec("create table if not exists $table_team(
                 ID INTEGER PRIMARY KEY AUTOINCREMENT,
                 team_number VARCHAR(10) NOT NULL, 
                 team_name VARCHAR(10) NOT NULL,
                 team_drive VARCHAR(10) NOT NULL, 
                 team_catch VARCHAR(10) NOT NULL,
                 team_catch_percent VARCHAR(10) NOT NULL,
                 team_pickup VARCHAR(10) NOT NULL,
                 team_pickup_ease VARCHAR(10) NOT NULL,
                 team_throw VARCHAR(10) NOT NULL,
                 team_throw_percent VARCHAR(10) NOT NULL,
                 team_push VARCHAR(10) NOT NULL,
                 team_autonomous VARCHAR(10) NOT NULL,
                 team_autonomous_shoot VARCHAR(10) NOT NULL,
                 team_autonomous_shoot_percent VARCHAR(10) NOT NULL,
                 team_autonomous_zone VARCHAR(10) NOT NULL,
                 team_autonomous_start VARCHAR(10) NOT NULL,
                 team_notes VARCHAR(500) NOT NULL);");
                 
    // This is gathered from the addmatch page.
    $pdo->exec("create table if not exists $table_match(
                 ID INTEGER PRIMARY KEY AUTOINCREMENT,
                 match_red_team_1 VARCHAR(10) NOT NULL, 
                 match_red_team_2 VARCHAR(10) NOT NULL, 
                 match_red_team_3 VARCHAR(10) NOT NULL, 
                 match_blue_team_1 VARCHAR(10) NOT NULL, 
                 match_blue_team_2 VARCHAR(10) NOT NULL, 
                 match_blue_team_3 VARCHAR(10) NOT NULL, 
                 match_red_1_score VARCHAR(10) NOT NULL, 
                 match_red_1_drive VARCHAR(10) NOT NULL,
                 match_red_2_score VARCHAR(10) NOT NULL, 
                 match_red_2_drive VARCHAR(10) NOT NULL,
                 match_red_3_score VARCHAR(10) NOT NULL,
                 match_red_3_drive VARCHAR(10) NOT NULL,
                 match_blue_1_score VARCHAR(10) NOT NULL,
                 match_blue_1_drive VARCHAR(10) NOT NULL,
                 match_blue_2_score VARCHAR(10) NOT NULL,
                 match_blue_2_drive VARCHAR(10) NOT NULL,
                 match_blue_3_score VARCHAR(10) NOT NULL,
                 match_blue_3_drive VARCHAR(10) NOT NULL);");
    
    // This is gathered when users enters their name when they intially load the page
    $pdo->exec("create table if not exists $table_name(
                 ID INTEGER PRIMARY KEY AUTOINCREMENT,
                 your_name VARCHAR(55) NOT NULL;");

} catch (PDOException $e) {
    $databaseError = '<p class="red">Database error, check if using correct settings in "create.php" and using correct permissions! </p>';
    $databaseMessage = '<p class="red">'.$e->getMessage().'</p>';
}

?>
