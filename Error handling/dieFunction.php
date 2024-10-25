<?php
    if(file_exists("mytestfile.txt")){
        $file = fopen("mytestfile.txt","r");
        echo "File exist";
    }
    else{
        die("Error: The file does not exist");
    }
?>