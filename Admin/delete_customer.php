<?php
Include "connection.php";

$first_name=$_GET["firstname"];

mysqli_query($link,"DELETE FROM customer WHERE firstname=$firstname") or die(mysqli_error($link));

?>
<script type="text/javascript">
window.location="addnewcustomer.php";
</script>