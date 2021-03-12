<?php
    execQuery("DELETE FROM ".$link[3]." WHERE ".$link[3].".id = ".$link[4].";");
    echo '
       <script> window.location.href = "/admin/delete"; </script>
    ';
?>