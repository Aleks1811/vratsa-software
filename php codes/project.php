<?php


function checking_the_questionmark($question){
    //$new_question = str_split($question);
  // echo "<pre>";
  // var_dump($new_question);
  // echo "</pre>";
    //$count_question = count($new_question);
//$new_question[$count_question-1]
    if ( (strlen($question)-1 ) == "?") {
	     echo $question ;	
    }
}

//IT WAS PART OF THE IF
//end($new_question)

function corect_capital_letters($question){
     ctype_upper($question);
     //return ($question);
  
}

function correctSpacing($question) {
     $stripped = preg_replace('/\s+/', ' ', $question);
     return trim($stripped);

}

function correcting_commas($question){
     $new_question = str_split($question);
     $comma = ",";
     $space = ' ';
  // echo "<pre>";
  // var_dump($new_question);
  // echo "</pre>";
    if(in_array(",", $new_question)){
       echo $comma . $space;
    }

}
$question = "jnj,fn fn?";
echo checking_the_questionmark($question);
// $question1 = "dbhddj";
// corect_capital_letters($question1);
 //echo $question;


//$question_mark = "!";
//$question = $question_mark;

//$final_result = $question . $question_mark;

//$new_question_mark = str_split($question_mark);

//var_dump($new_question_mark);

//$count_mark = count($new_question_mark);

// if ($count_mark == 1) {
// 	echo $final_result;
// }
