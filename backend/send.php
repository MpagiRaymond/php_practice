<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

require "conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sname = $_POST["name"];
    $semail = $_POST["email"];
    $sinformation = $_POST["information"];
    $spwd = $_POST["password"];

    
    if (empty($sname) || empty($semail) || empty($sinformation) || empty($spwd)) {
        echo "Please fill all fields";
        return;
    }
    if (isset($sname) && isset($semail) && isset($sinformation)|| isset($spwd)) {

    // $sql = "INSERT INTO details (NAME, EMAIL, INFORMATION) VALUES ('$sname', '$semail', '$sinformation')";
    if ($conn->query("INSERT INTO details (NAME, EMAIL, INFORMATION, PWD) VALUES ('$sname', '$semail', '$sinformation', '$spwd')")) {
        
        // setting sessions variables
        $_SESSION["name"] = "$sname";

        echo "<script>
        alert('" .$_SESSION['name'] . "' + 'Successfully registered');
        window.location.href = 'http://localhost/familly/?p=home';
      </script>";
exit();
    } else {
        echo ("Sending data failed: ".$conn->error);
    
    } 
}
}
?>