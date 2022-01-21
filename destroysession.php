<?php 
// اذا ممعملنة ديستروي راح تبقى محفوظة 
session_start(); 
session_destroy($_SESSION["username"]);
