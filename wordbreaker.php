<?php
/**
 * Created by Dotun Longe.
 * Date: 28/04/2017
 * Time: 5:41 PM
 */


function Checker($string){
    $spcChars[] = ['.',',','?',':',';','!','@','#','$','%','^','&','*','(',')','_','-','\'','/','+','=','{','}','[',']','|','<','>'];
    for($i= 0; $i< count($spcChars); $i++){
        $chars = str_replace($spcChars[$i],'',$string);
    }
    $words =  explode(" ",$chars);
    $highestWord = max(array_count_values($words));
    $chars = preg_replace('/\s+/', '', $chars);
    $vowels = preg_match_all('/[aeiou]/i',$string);
    $consonants = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i',$string);
    $specialCharacters = preg_match_all('/[.\^£$%&*()@#~?><>,|=_+¬-]/i',$string);
    $characters = count(str_split($chars));
    $numbers = $characters - ($vowels + $consonants);

   echo "Highest Recurring Word is '".array_search($highestWord,array_count_values($words) )."' occurring ".$highestWord." times "."\n";
    echo "There are ".str_word_count($string). " Words"."\n";
    echo "There are ".$vowels." Vowels"."\n";
    echo "There are ".$consonants." Consonants"."\n";
    echo "There are ". $characters. " Characters and probably ". $numbers. " Numbers"."\n"  ;
   echo "There are ". $specialCharacters. " Special Characters";
}



echo (Checker("busayo this project is easy,... sort of 0817  9900 www 32937649 &(&(&)(&(*^*^"));
