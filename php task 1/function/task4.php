<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Check</title>
</head>

<body>
    <?php
function isPalindrome($str) {
    
    $cleanedStr = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $str));

    $reversedStr = strrev($cleanedStr);

    
    if ($cleanedStr === $reversedStr) {
        return "Yes, it is a palindrome";
    } else {
        return "No, it is not a palindrome";
    }
}

$input = "Eva, can I see bees in a cave?";

// Output
echo isPalindrome($input);
?>

</body>

</html>