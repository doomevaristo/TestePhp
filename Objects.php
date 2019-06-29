<?php
class webhosting {
    function webhosting() {
        $this -> servicename = "asdasd";
        $this -> number = 123;
    }
}

// create an object
$cloud = new webhosting();

// show object properties
echo "$cloud->servicename"."<br/>";
echo $cloud -> number;
?>