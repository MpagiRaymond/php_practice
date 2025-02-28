<?php
require "comm.php";

$names = $_POST['names'];
$comment = $_POST['comment'];

$sql = "INSERT INTO Personal_Views (name, comment) VALUES ('$names', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New record created successfully')
    window.location.href = 'http://localhost/familly/?p=login';
    </script>";
} else {
    echo "<script>alert('Error: ' . $sql . '<br>' . $conn->error</script>";
}

$conn->close();
?>
