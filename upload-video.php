<?php 
    include './config.php';

    $title = $_POST['title'];
    $description = $_POST['description'];
    $visibility = $_POST['visibility'];
    $schedule = $_POST['schedule'];
    $videoName = $_FILES['video']['name'];
    $video_tmp_name = $_FILES['video']['tmp_name'];
    $thumbnail = $_FILES['thumbnail']['name'];
    $thumbnail_tmp = $_FILES['thumbnail']['tmp_name'];
    move_uploaded_file($video_tmp_name,'./videos/' . $videoName);
    move_uploaded_file($thumbnail_tmp,'./thumbnail/' . $thumbnail);

    $insert = "INSERT INTO videos (title,video,visibility,description,schedule,thumbnail) VALUES ('$title','$videoName','$visibility','$description','$schedule','$thumbnail')";

    mysqli_query($connection,$insert);

    header("Location: http://localhost:3000/create-video.php");
    

?>