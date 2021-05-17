<?php
function advertise_delete($id) {
    $id = intval($id);
    $advertise = get_a_record('advertise', $id);
    $image = 'public/upload/images/'.$advertise['Image'];
    if (is_file($image)) {
        unlink($image);
    }
    $sql = "DELETE FROM advertise WHERE Id=$id";
    mysqli_query($connect,$sql) or die(mysqli_error($connect));
}