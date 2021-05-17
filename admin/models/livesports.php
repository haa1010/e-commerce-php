<?php
function livesport_delete($id) {
    $id = intval($id);
    $sql = "DELETE FROM livesport WHERE id=$id";
    mysqli_query($connect,$sql) or die(mysqli_error($connect));
}