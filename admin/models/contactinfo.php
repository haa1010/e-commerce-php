<?php
function contactinfo_delete($id) {
    $id = intval($id);
    $sql = "DELETE FROM contactinfo WHERE id=$id";
    mysqli_query($connect,$sql) or die(mysqli_error($connect));
}