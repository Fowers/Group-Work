<?php
include_once 'dbconfig.php';
$sql = "DELETE FROM user WHERE userid='" . $_GET["userid"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('User deleted succesfully')</script>";
    echo "<script> window.location = 'adminhome.php'</script>";
}

 else {
    echo "<font color='red'>Error deleting record: " . mysqli_error($conn);
    
}
mysqli_close($conn);
?>
