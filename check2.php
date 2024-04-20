<html>
<!-- Document created by Faizan Anwar 19/04/24 -->
<head>
<style>
h1 {color:black;}
p {color:black;}
h1 {text-align: center;}
h1 {font-size: 30px}
p {text-align: center;}
p {font-size: 30px}
</style>
</head>
<body>
    
<h1>Jadu Engineer Code Exercise <br>
    By Faizan Anwar </h1>
    

<style>
h2 {color:black;}
h2 {text-align: center;}
h2 {font-size: 20px}
</style>
    
<!--/////////////////////////////////////////////////////////////////////////////////-->
    
<h2> A palindrome is a word, phrase, number, or other sequence of characters which reads the same backward or forward </h2>
    
    <?php
    //PHP code to check for Palindrome using strtolower and strrev
function isPalindrome($word){ 
    //converting all string to lowercase for case sensitivity
    $word = strtolower($word); 
    if (strrev($word) == $word){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
// Test case 1
$word1 = "Anna"; 
if(isPalindrome($word1)){ 
    echo "<p style='color:blue;'> The word is a Palindrome! </p>"; 
} 
else { 
    echo "<p style='color:red;'> The word is a NOT a Palindrome! </p>"; 
}
// Test case 2
    $word2 = "Bark"; 
if(isPalindrome($word2)){ 
    echo "<p style='color:blue;'> The word is a Palindrome! </p>"; 
} 
else { 
    echo "<p style='color:red;'> The word is a NOT a Palindrome! </p>"; 
}
?> 

</body>

<!--/////////////////////////////////////////////////////////////////////////////////-->
    
<h2> An anagram is the result of rearranging the letters of a word or phrase to produce a new word or phrase, using all the original letters exactly once </h2>

    <?php
    //PHP code to check for anagrams wusing count_chars
function is_anagram($word, $comparison)        
	{
		if (count_chars($word, 1) == count_chars($comparison, 1))
			echo "<p style='color:blue;'> The word is an Anagram! </p>"; 
		else
			echo "<p style='color:red;'> The word is NOT an Anagram! </p>"; 
}
//Test cases 1-4
	print_r(is_anagram('coalface', 'cacaoelf')."");
    print_r(is_anagram('coalface', 'darkelf')."");
    print_r(is_anagram('xboxone', 'xboxenj')."");
    print_r(is_anagram('tail', 'lait')."");
?>

<!--/////////////////////////////////////////////////////////////////////////////////-->
    
<h2> A Pangram for a given alphabet is a sentence using every letter of the alphabet at least once </h2>
    
    <?php
    //PHP code to check whether a sentence is a pangram using strtolower and ctype_alpha

function isPangram($phrase) { 
	
	//converting all string to lowercase for case sensitivity
	$str = strtolower($phrase);
    //create and fill array with each of 26 letters
	$letters = array_fill(0, 26, false); 
	//Iterate through each of the letters
	for ($i = 0; $i < strlen($phrase); $i++) { 
		$char = $phrase[$i]; 

		//Confirm if each given character is a letter
		if (ctype_alpha($char)) { 
        //mark each letter
        $letters[ord($char) - ord('a')] = true; 
		} 
	} 
	//check if each letter is present in the array size 26
	return !in_array(false, $letters); 
} 

//Test case 1
$phrase = "The quick brown fox jumps over the lazy dog"; 
if (isPangram($phrase)) { 
	echo "<p style='color:blue;'> The sentence is a Pangram! </p>"; 
} else { 
	echo "<p style='color:red;'> The sentence is NOT a Pangram! </p>"; 
} 
//Test case 2
$phrase2 = "The British Broadcasting Corporation (BBC) is a British public service broadcaster"; 
if (isPangram($phrase2)) { 
	echo "<p style='color:blue;'> The sentence is a Pangram! </p>"; 
} else { 
	echo "<p style='color:red;'> The sentence is NOT a Pangram! </p>"; 
} 
?>
    
<!--/////////////////////////////////////////////////////////////////////////////////-->
    
</html>