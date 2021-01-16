<?php

$question = "hbhddb?";
function creating_question_correcting_bot($questiobot){
    if (ctype_upper($question)) {
      echo trim(ucfirst(strtolower($question)));
    }else{
      echo trim(ucfirst($question));
    }

    $new_question = str_split($question);
      $count_question = count($new_question);

     if ( $new_question[$count_question-1] == "?") {
   //     //echo $questions;  
     }

      // ctype_upper($questions);
      // return ($questions);
  
      $stripped = preg_replace('/\s+/', ' ', $question);
      return trim($stripped);

      $new_question = str_split($question);
      $comma = ",";
      $space = ' ';

     if(in_array(",", $new_question)){
        echo $comma . $space;
     }

}
creating_question_correcting_bot($question);
