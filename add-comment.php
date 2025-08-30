<?php 
    session_start();
    include './config.php';
    $comment = $_POST['comment'];
    $video_id = $_POST['video_id'];
    $user_id = $_SESSION['user_id'];
    $currentPage = $_SERVER['HTTP_REFERER'];

    $addComment = "INSERT INTO comments (comment,video_id,user_id) VALUES ('$comment',$video_id,$user_id)";

    $result = mysqli_query($connection,$addComment);
    if($result){
        $_SESSION['comment_added'] = 'Comment added successfully!';
    }

    header("Location: $currentPage");

?>