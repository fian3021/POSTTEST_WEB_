<?php
    require 'config.php';
        
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    $result = mysqli_query($db, 
    "DELETE FROM member_istorii WHERE id='$id'");

    if($result){
        echo "
                <script>
                    alert('Data Berhasil Di Hapus');
                </script>           
        ";
        header("location:joinmember.php");
    }

?>