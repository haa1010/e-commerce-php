<?php
function feedback_delete($id) {
    $id = intval($id);
    $sql = "DELETE FROM feedback WHERE id=$id";
    mysqli_query($connect,$sql) or die(mysqli_error($connect));
}