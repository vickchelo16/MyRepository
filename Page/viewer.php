<?php

      /*  header("Content-Length: ". filesize('test.pdf'));
        header("Content-Type:application/pdf");
        header("Content-disposition: inline; filename" .basename('test.pdf'));
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        ob_clean();
        flush();
        readfile('test.pdf');
*/
        session_start();
        $id = $_SESSION["id"];
        echo "
        <script>alert($id)</script>";

?>