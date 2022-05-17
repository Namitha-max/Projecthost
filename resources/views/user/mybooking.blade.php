<h1>Thank You...</h1>
<?php
session_start();
echo '<script>alert("Payment Status completed")</script>';
echo ('
    <script>
    window.location.href="/";
    </script>');
?>

