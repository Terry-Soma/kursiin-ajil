<?php
session_start();
// $_SESSION['unique_id']=="";


session_unset();
session_destroy();
$_SESSION['action1']="You have logged out successfully..!";
?>
<script language="javascript">
document.location="index.php";
</script>
