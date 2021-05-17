<?php
function comment_delete($comid) {
    $id = intval($comid);
    //x�a ph?n gi?i thi?u
    $sql = "DELETE FROM comment WHERE id=$id";
    mysqli_query($connect,$sql) or die(mysqli_error($connect));
}