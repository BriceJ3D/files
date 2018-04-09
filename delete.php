<?php
/**
 * Created by PhpStorm.
 * User: wilder13
 * Date: 09/04/18
 * Time: 16:37
 */
$id = $_POST['id'];
if (file_exists ( $id)){
    unlink ($id);
}
header("Location:index.php");
