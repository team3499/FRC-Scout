<?php

/* !!! Make sure scout.db is owned by the apache user and possibly have 777 permissions. !!!
 * 
 * Right now you have to make a scout.db file in the root of the repository before beggining!
 * 
 * TODO: Add 'if database not found, create a database' -> set apache user?
 * 
 * 
 * 
 */

$db="scout"; 
$table_team="teams";
$table_match="matches";

try {
    $pdo = new PDO("sqlite:../scout.db");
    
    // This is gathered from the addteam page.
    $pdo->exec("create table if not exists $table_team(
                 ID INTEGER PRIMARY KEY AUTOINCREMENT,
                 team_number VARCHAR(10) NOT NULL, 
                 team_name VARCHAR(10) NOT NULL,
                 team_drive VARCHAR(10) NOT NULL, 
                 team_catch VARCHAR(10) NOT NULL,
                 team_pickup VARCHAR(10) NOT NULL,
                 team_pickup_ease VARCHAR(10) NOT NULL,
                 team_throw VARCHAR(50) NOT NULL,
                 team_push VARCHAR(50) NOT NULL,
                 team_autonomous VARCHAR(50) NOT NULL,
                 team_autonomous_shoot VARCHAR(50) NOT NULL,
                 team_autonomous_zone VARCHAR(50) NOT NULL,
                 team_autonomous_start VARCHAR(50) NOT NULL,
                 team_notes VARCHAR(250) NOT NULL);");
                 
    // This is gathered form the addmatch page.
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
    

} catch (PDOException $e) {
    echo '<p style="color:red;">Database error, check if correct settings in "connect.php". | Testing: YOU MUST MANUALLY CREATE A scout.db FILE! </p><br/>';
    echo $e->getMessage();
}

?>
