<?php

//$input = "hbhddb?";
function creating_question_correcting_bot($question){
    
    $new_question = str_split($question);
      $count_question = count($new_question);

      $stripped = preg_replace('/\s+/', ' ', $question);
      return trim($stripped);

      $new_question = str_split($question);
      $comma = ",";
      $space = ' ';

      $flag = true;


    if (ctype_upper($question)) {
      trim(ucfirst(strtolower($question)));
      $flag = true;
    }else{
      trim(ucfirst($question));
      $flag = false;
      //break;
    }

    if ( $new_question[$count_question-1] == "?") {
   //     //echo $questions;
   $flag = true;
    }

      // ctype_upper($questions);
      // return ($questions);

    // if(in_array(",", $new_question)){
    //     echo $comma . $space;
    // }

    if ($flag == true) {
      echo trim(ucfirst(strtolower($question))); 
      echo $question;
    }else{
      echo trim(ucfirst($question));
    }

}
$input = "dndbd?";
echo creating_question_correcting_bot($input);
