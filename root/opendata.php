<?php

try {
    $pdo = new PDO("sqlite:../scout.db");

    print_r($data);
    
    //echo $HTTP_RAW_POST_DATA;
    echo "Open pass 1?\n";

    $query = $pdo->prepare('select * from teams order by id');
                            
    echo "Save pass 2?\n";
                            
    $query->execute();
    echo "Save pass 3?\n";
    
    $converted = json_encode($query->fetchAll(PDO::FETCH_ASSOC));
	 
    print_r($query->errorInfo());
    

} catch (PDOException $e) {
    echo '<p style="color:red;">Database error, check if using correct settings in "connect.php" and using correct permissions! </p><br/>';
    echo $e->getMessage();
}

echo "ok saved?";

?>
