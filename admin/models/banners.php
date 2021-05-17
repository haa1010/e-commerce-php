<?php
function banner_delete($id) {
    $id = intval($id);
    $banner = get_a_record('banner', $id);
    $image = 'public/upload/images/'.$banner['Image'];
    if (is_file($image)) {
        unlink($image);
    }
    $sql = "DELETE FROM banner WHERE Id=$id";
    mysqli_query($connect,$sql) or die(mysqli_error($connect));
}