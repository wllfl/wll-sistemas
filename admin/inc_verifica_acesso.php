<?php
if (empty($_SESSION['LIBERADO']) || $_SESSION['LIBERADO'] == FALSE):
    echo "<script>window.location='index.php'</script>";
endif;