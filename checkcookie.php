<?php
// trans from main page(inde5.php) to thhis page by click  btn and check if  user inset or not
if(isset($_COOKIE["username"])){
     #اذا موجود الاسم  انقلني على غير صعحة اطبع الاسم مع الامر  
     echo "USer"." " .$_COOKIE["username"]. " "."is set";
    }else{
        #اذا مموجود الاسم  انقلني على غير صعحة اطبع الامر اللي تحت   
        echo "USer is not valid";
}
