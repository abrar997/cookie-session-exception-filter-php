<?php
echo " <h1> Filters</h1>";
echo " <p> Filters use for 
1- Validating data = Determine if the data is in proper form.<br>
2- Sanitizing data = Remove any illegal character from the data.
<br>
التحقق من صحة البيانات = تحديد ما إذا كانت البيانات في الشكل المناسب.
<br>
تعقيم البيانات = إزالة أي حرف غير قانوني من البيانات.
</p>";
echo "<h1>examles of filter </h1>";
// ex1 sanitize a string --> remove all  html  tags from  a string 
echo "<h2>1- sanitize a string  </h2>";
$strings = "<h3>hello world</h3>"; #like text content  or innerHTML in js document
$newstringwithsanitize = filter_var($strings, FILTER_SANITIZE_STRING);
echo "<h3></h3> $newstringwithsanitize";

echo "<br>";
echo "<br>";
// ex2 validate a integer INT

echo "<h2>2-a validate a integer INT</h2>";
$int = 1002;
if (!filter_var($int, FILTER_VALIDATE_INT) === false) { # it  mean the value  is true 
    echo "<h3 style='color:purple'>integer is valid </h3>";
} else {
    echo "<h3 style='color:red'>integer isnot valid </h3>";
}

// ex3 zero problem 

echo "<h2> 2-b zero problem </h2>";
$intzero = 0;
if (!filter_var($intzero, FILTER_VALIDATE_INT) === 0 || !filter_var($intzero, FILTER_VALIDATE_INT)) { # it  mean the value  is true 
    echo "<h3 style='color:purple'>integer is valid </h3>";
} else {
    echo "<h3 style='color:red'>integer is not valid </h3>";
}

// ex4 validate ip
echo "<h2> 3- validate ip</h2>";
$ip = "127.0.0.1";
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) { # it  mean the value  is true 
    echo "<h3 style='color:purple'> ip address is valid </h3>";
} else {
    echo "<h3 style='color:red'>ip address  is not valid </h3>";
}
// ex5 validate email
echo "<h2> 4- validate email</h2>";
$email = "abraralrawi997@gmail.com";
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) { # it  mean the value  is true 
    echo "<h3 style='color:purple'>email is valid </h3>";
} else {
    echo "<h3 style='color:red'>email is not valid </h3>";
}


// ex5 validate email
echo "<h2> 5- sanitize and  validate email</h2>"; #must contsin  @ and .com to  varify email 
$email = "abraralrawi997@gmail.com";

$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) { # it  mean the value  is true 
    echo "<h3 style='color:purple'>email is valid </h3>";
} else {
    echo "<h3 style='color:red'>email is not valid </h3>";
}


// ex6 validate url
echo "<h2> 6-sanitize and validate url</h2>"; #must contsin  @ and .com to  varify email 
$weburl = "https://www.abraralrawi.com";

$weburl = filter_var($weburl, FILTER_SANITIZE_URL);
if (!filter_var($weburl, FILTER_VALIDATE_URL) === false) {  # it  mean the value  is true 
    echo "<h3 style='color:purple'>url is valid </h3>";
} else {
    echo "<h3 style='color:red'>url is not valid </h3>";
}
// ex7 validate int with range
echo "<h2>7- validate int with range</h2>"; #must contsin  @ and .com to  varify email 
$intrange = 29;
$min = 1;
$max = 130;
if (filter_var($intrange, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {  # it  mean the value  is true 
    echo "<h3 style='color:purple'>$intrange is not  valid and between range ($min-$max )</h3>";
} else {
    echo "<h3 style='color:red'>$intrange is  valid and  between range ($min-$max ) </h3>";
}

// ex7 validate int with range
echo "<h2>8- validate ip address version 6 </h2>"; #must contsin  @ and .com to  varify email 
$ipaddv6 = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
if (filter_var($ipaddv6, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {  # it  mean the value  is true 
    echo "<h3 style='color:purple'>$ipaddv6 is a valid IPV6 address </h3>";
} else {
    echo "<h3 style='color:red'>$ipaddv6 is not  a valid IPV6 address </h3>";
} ?>



<!-- style don't touch ------ -->
<style>
    body {
        text-align: center
    }

    h1 {
        color: blue;
        text-transform: capitalize;
    }

    h2 {
        color: brown;
    }

    p {
        color: green;
    }
</style>



<!-- princles u must understand it -->
<!-- echo faster and translate variables  / print  -->
<!-- include    / require -->
<!-- exeption -->
<!-- cookie / session -->
<!-- super global $_.... -->
<!-- assosative array ke=>valu -->
<!-- while  /do while -->
<!-- regular expression /^ $/  -->