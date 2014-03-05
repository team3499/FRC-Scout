<?php

try {
    $pdo = new PDO("sqlite:../scout.db");
    //$data = json_decode($HTTP_RAW_POST_DATA, true);
    $data = json_decode(file_get_contents("php://input"), true);
    print_r($data);
    
    //echo $HTTP_RAW_POST_DATA;
    
    $team_number = ($data['team-number'] ? $data['team-number'] : "");
    $team_name = ($data['team-name'] ? $data['team-name'] : "");
    $team_drive = ($data['team-drive'] ? $data['team-drive'] : "");
    $team_catch = ($data['team-catch'] ? $data['team-catch'] : "");
    $team_catch_percent = ($data['team-catch-percent'] ? $data['team-catch-percent'] : "");
    $team_pickup = ($data['team-pickup'] ? $data['team-pickup'] : "");
    $team_pickup_ease = ($data['team-pickup-ease'] ? $data['team-pickup-ease'] : "");
    $team_throw = ($data['team-throw'] ? $data['team-throw'] : "");
    $team_throw_percent = ($data['team-throw-percent'] ? $data['team-throw-percent'] : "");
    $team_push = ($data['team-push'] ? $data['team-push'] : "");
    $team_autonomous = ($data['team-autonomous'] ? $data['team-autonomous'] : "");
    $team_autonomous_shoot = ($data['team-autonomous-shoot'] ? $data['team-autonomous-shoot'] : "");
    $team_autonomous_shoot_percent = ($data['team-autonomous-shoot'] ? $data['team-autonomous-shoot'] : "");
    $team_autonomous_zone = ($data['team-autonomous-zone'] ? $data['team-autonomous-zone'] : "");
    $team_autonomous_start = ($data['team-autonomous-start'] ? $data['team-autonomous-start'] : "");
    $team_notes = ($data['team-notes'] ? $data['team-notes'] : "");

    echo "Save pass 1?\n";

    $query = $pdo->prepare('INSERT INTO teams (
                            team_number, 
                            team_name, 
                            team_drive, 
                            team_catch,
                            team_catch_percent,
                            team_pickup,
                            team_pickup_ease,
                            team_throw,
                            team_throw_percent,
                            team_push,
                            team_autonomous,
                            team_autonomous_shoot,
                            team_autonomous_shoot_percent,
                            team_autonomous_zone,
                            team_autonomous_start,
                            team_notes
                            ) VALUES (
                            :team_number, 
                            :team_name, 
                            :team_drive, 
                            :team_catch,
                            :team_catch_percent,
                            :team_pickup,
                            :team_pickup_ease,
                            :team_throw,
                            :team_throw_percent,
                            :team_push,
                            :team_autonomous,
                            :team_autonomous_shoot,
                            :team_autonomous_shoot_percent,
                            :team_autonomous_zone,
                            :team_autonomous_start,
                            :team_notes)');
//                            , [PDO::ATTR_CURSOR => PDO::CURSOR_FWD_ONLY]);
                            
                            echo "Save pass 2?\n";
                            
    $query->execute([
         ":team_number" => $team_number,
         ":team_name" => $team_name,
         ":team_drive" => $team_drive,
         ":team_catch" => $team_catch,
         ":team_catch_percent" => $team_catch_percent,
         ":team_pickup" => $team_pickup,
         ":team_pickup_ease" => $team_pickup_ease,
         ":team_throw" => $team_throw,
         ":team_throw_percent" => $team_throw_percent,
         ":team_push" => $team_push,
         ":team_autonomous" => $team_autonomous,
         ":team_autonomous_shoot" => $team_autonomous_shoot,
         ":team_autonomous_shoot_percent" => $team_autonomous_shoot_percent,
         ":team_autonomous_zone" => $team_autonomous_zone,
         "team_autonomous_start" => $team_autonomous_start,
         ":team_notes" => $team_notes
    ]);
     echo "Save pass 3?\n";
     
     print_r($query->errorInfo());
     
    //[PDO::ATTR_CURSOR => PDO::CURSOR_FWD_ONLY]
    
    /*$query->bindValue(1, $team_number);
    $query->bindValue(2, $team_name);
    $query->bindValue(3, $team_drive);
     $team_notes]);
    
    /*$query->bindValue(1, $team_number);
    $query->bindValue(2, $team_name);
    $query->bindValue(3, $team_drive);
    $query->bindValue(4, $team_catch);
    $query->bindValue(5, $team_catch_percent);
    $query->bindValue(6, $team_pickup);
    $query->bindValue(7, $team_pickup_ease);
    $query->bindValue(8, $team_throw);
    $query->bindValue(9, $team_throw_percent);
    $query->bindValue(10, $team_push);
    $query->bindValue(11, $team_autonomous);
    $query->bindValue(12, $team_autonomous_shoot);
    $query->bindValue(13, $team_autonomous_shoot_percent);
    $query->bindValue(14, $team_autonomous_zone);
    $query->bindValue(15, $team_autonomous_start);
    $query->bindValue(16, $team_notes);*/
    
    //$query->execute();

} catch (PDOException $e) {
    echo '<p style="color:red;">Database error, check if using correct settings in "connect.php" and using correct permissions! </p><br/>';
    echo $e->getMessage();
}

echo "ok saved?";

?>
