<?php

////////////////// PARSE THE PARAGRAPHS FOR LINE BREAKS AND DESTROY THEM


function check($string, $values = []){
  if(isset($_POST[$string]) && (is_empty($array) || in_array($_POST[$string], $values))){
    return ;
  } else if (isset($_POST[$string])){
    echo "ERROR\n";
    echo "Invalid value of \"" . $_POST[$string] . "\" in \$_POST[\"" . $string . "\"]";
  } else {
    echo "ERROR\n";
    echo "Field \$_POST[\"" . $string . "\"]";
    exit;
  }
}

check("request", ["create", "update", "fetch"])
if($_POST["request"] == "create"){
  check("type", ["team", "match"]);
  if($_POST["type"] == "team"){
    check("team-number");
    $file = fopen("team " . $_POST["team-number"] . ".txt","w");
    
    if(!$file){
      echo "ERROR\n";
      echo "Error writing to file :(";
      exit;
    }
    
    $writeFields =  ["team-number", "team-name", "drive-system", "drive-system-other"];
    $writeFields += ["catch", "catch-reliability", "catch-method", "catch-notes"];
    $writeFields += ["pickup", "pickup-speed", "pickup-ease", "pickup-method", "pickup-notes"];
    $writeFields += ["throw", "throw-accuracy", "throw-method", "throw-notes"];
    $writeFields += ["push", "push-notes", "score-1", "score-1-reliability", "score-1-opening", "score-1-notes"];
    
    foreach($writeFields as $data){
      if(isset($_POST[$data]){
        ;
        fwrite($file, $data . ":" . $_POST[$data] . "\n");
      }
    }
    
    fwrite($file, "\n");
    
    $writeFields =  ["autonomous", "autonomous-5", "autonomous-start-position"];
    $writeFields += ["autonomous-10", "autonomous-10-action", "autonomous-10-reliability", "autonomous-10-notes"];
    $writeFields += ["autonomous-1", "autonomous-1-reliability", "autonomous-1-notes"];
    
    foreach($writeFields as $data){
      if(isset($_POST[$data])
        fwrite($file, $data . ":" . str_replace("\n", " ", $_POST[$data]) . "\n");
    }
    
  } else if ($_POST["type"] == "match"){
    ;
  }
} else if ($_POST["request"] == "update"){
  ;
} else if ($_POST["request"] == "fetch"){
  ;
}





?>