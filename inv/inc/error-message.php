<?php
    // require "libs/process.php";
    
    if (isset($errors)) {
        foreach ($errors as $error) {
            echo "<li class='alert alert-danger'>".$error."</li>";
        }
    }

?>

<script>
    setInterval(() => {
        $('.alert-danger').hide();
    }, 3000);
</script>