<?php
include_once 'dbconfig.php';
$sql = "DELETE FROM seller WHERE sellerid='" . $_GET["sellerid"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Seller deleted succesfully')</script>";
    echo "<script> window.location = 'adminhome.php'</script>";
}

 else {
    echo "<font color='red'>Error deleting record: " . mysqli_error($conn);
    
}
mysqli_close($conn);
?>