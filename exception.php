<?PHP
echo "<h1> Exception like try and catch same result  </h1>";
echo "<h2> اتنوقع المشكلة اللي حتصل </h2>";
echo "<h5> Exception with 1- throw new Exception, <br> 2-try --> حاول تنفذ الخطوة <br> catch --> حاول تمسك الايرور اذا موجود ونفذ الاكسيبشن , <br> finally --> كدا كدا هينفذ الكود سواء طبقنا ال try or catch   </h3>";

//ex1
function dividenuberresult($a, $b)
{
    if ($b == 0) {
        throw new Exception("dividion by zero");
    }
    return $a / $b;
}
try {
    echo dividenuberresult(5, 0);
} catch (Exception $error) {
    $code = $error->getCode(); #الكود اللي حصلت بي المشكلة #return mixed|int _ the exception code as integer in Exception but possibly as other type in Exception descendants (for example as string in PDOException).
    $message = $error->getMessage(); #يرجع المشكلة اللي صارت وطلعت   #return string — the Exception message as a string.
    $file = $error->getFile(); #يرجع مسار الفايل اللي مشتغلين احنة  بي #return string — the filename in which the exception was created.
    $line = $error->getLine(); #يرجع سطر الكود اللي صار بي التوقع   #return int — the line number where the exception was created.
    echo "Exception thrown in $file on line $line :[Code $code] $message";
} finally { #always this value will run with true value  
    echo "<br>";
    echo " <h2 style='color:red'> process complete</h2>";
}


// try{code that can throw exeption
// }catch{
// codethat runs when an exeption is caught}

?>


<style>
    body {
        text-align: center;

    }

    h1 {
        color: blue;
    }
</style>