<!--  save data in variables and use it where i want and in multipkle pages -->
<?php
// use session_start()
// ممكن اعملة /* auto by ini.php and change  auto=1  anything=0 not wotk auto we need to chane 0 to 1 so idont nrd wdite bellow code in anypages
if (isset($_POST['submit'])) {
    session_start([]);
    $_SESSION["username"] = htmlentities($_POST["username"]); #mean save value from input type text in $_SESSION name 
    $_SESSION["email"] = htmlentities($_POST["email"]); #mean save value from input type text in $_SESSION name 

    header("Location:getdatainputSession.php");
}
?>

<!-- SESSION WITH INPUT VALUE -->
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

        <!-- <?php
                // echo "<h1>session</h1>";
                // declare vatiables
                // $_SESSION["fname"] = "Abrar";
                // $_SESSION["lname"] = "muthhan ";

                // echo "<h6>declare variables and   session variables are set from Session.php </h6>";
                // 
                ?>

            2 session with  form -->
        <form method="post" class="form  m-auto p-4">
            <label for="text-input">your name </label>
            <br>
            <input type="text" name="username" placeholder="write your name">
            <br>

            <label for="text-input">your email </label>
            <br>
            <input type="text" name="email" placeholder="write your email">
            <br>
            <br>
            <input style="background-color: gray;border:none ;border-radius:20px;color:white;padding:5px" type="submit" name="submit" value="send session value">
        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>