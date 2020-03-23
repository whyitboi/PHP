<?php

if(isset($_POST)){
    $filename = $_POST['lname']."_".$_POST['fname'];

    
    $fp = fopen( $filename, 'a');
    file_put_contents($filename, print_r($_POST, true));
    fclose($fp);

 
        print "<script type='text/javascript'>alert('Succesfully Submitted'); 
        window.location.href = 'index.html'
        </script>";
    
}
?>
