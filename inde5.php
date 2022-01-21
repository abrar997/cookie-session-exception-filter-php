<!-- cookie and session and filter   -->
<!-- cookie and session   start code always write before html code   -->


<!--1- COOKIES -->
<!-- a-create b-delete c-check -->
<!-- use for user  name identify  ..modal appear when u enter any web contain your name or any data u want to save it   -->
<!-- consist of name,value,expire,path,domain,secure,httponly -->
<!-- start with setcookie ( name,value,expire,path,domain,secure,httponly ) -->
<!-- expire wite  --- time( currentdate*seconds of day *day of month)*8600*30  -->

<?php
#1 a
// $cookie_name = "user"; #use later in input
// $cookie_vlaue = "Abrar muthanna";
#2 always write bfore html code 
//  start with setcookie ( name,value,expire,path,domain,secure,httponly )
// setcookie($cookie_name, $cookie_vlaue, time() + (8600 * 3)); #after 3 days browser will not idebtify user 
// <!-- to delete cokkies give pat time for expire -->
//b- setcookie($cookie_name, $cookie_vlaue, time()-3600); #after 3 days browser will not idebtify user 

#3isset use to check data found or not
// ! fale state means we have not cookies 
// if (!isset($_COOKIE[$cookie_name])) {
//     echo " cookie " . $cookie_name . " not set";
// } else {
//     echo "cookie " . $cookie_name . " " . "is set";
//     echo "<br>";
//     echo "value is " . " " . $_COOKIE[$cookie_name]; #$_COOKIE[] not working with()
//     //or u can wtite this code
//     //  echo "value is " . " " . $cookie_vlaue;

// }
// c-check cookie enabled  ot disabled depenfing in browser setting if cookies block or not
// if (count($_COOKIE) > 0) {
//     echo "<h2 style='color:red'> cookies are  enableld</h2>";
// } else {
//     echo "<h2 style='color:red'> cookies are  disabled</h2>";
// } 
?>

<?php
// if(isset($_SERVER["REQUEST METHOD"]=="POST"))
if (isset($_POST["submit"])) { #u acn use any value of anme to check and start youe cookie
    // if (isset($_POST["username"])) {

    // htmlentities( ) ,htmlspecialchars() u can use anyone of them to save data
    // convert special charcts to html code
    $username = htmlspecialchars($_POST["username"]); #so save user name to get its value
    setcookie("username", $username, time() + 3600); #1 hour
    // like use navigatory ot use history in react and geat   location word and got to another page
    header("Location: checkcookie.php");
}
?>
<!-- --------------------------------------------------------------- -->

<!-- serialize(with assosative array (key=>value)) -->
<!-- <?php
        // if u write array u will use this synatax $daat=array("name"=>"abrar","age"=>"24")
        // or in sytax bellow
        // $userdata = ["name" => "abrar", "age" =>24, "country" => "iraq"];
        // // convers data from  to symbols  and save it memory or in fiel ir send data during  الشبكات
        // $userdata = serialize($userdata);
        // setcookie("userr", $userdata, time() + 3600);
        // $userdata = unserialize($_COOKIE["userr"]);
        // echo  $userdata['country'];
        // 
        ?>
 ------------------------------------------------------------------- -->
<!-- COOKIES WITH INPUT VALUE -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">

        <?php
        echo "<h1>Cookie and session and more </h1>"

        ?>
        <form method="post" class="form  m-auto p-4">
            <label for="text-input">your name </label>
            <input type="text" name="username" placeholder="write your first name">
            <br>
            <br>
            <input style="background-color: blue;border:none ;border-radius:20px;color:white;padding:10px" type="submit" name="submit" value="send php value">
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>


<!-- 
// secure and httponly
// httponly مسمح لاي بروتوكول يغحص الكوكي مالتي الا اذا هو
// http
// ميشتعل الا اذا الموضوع
// secure
// secure use for REDUCE chance for HUCkERS -->