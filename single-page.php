<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boostrap.php' ?>
</head>

<body>
    <?php include './navbar.php' ?>
    <?php 
        if(isset($_SESSION['comment_added'])){
    ?>
    <div class="toast-comment position-fixed mt-3  top-0 bg-success p-2 rounded-3  z-3 text-white"
        style="left:50%;transform:translateX(-50%);transition:all 0.8s">
        Comment Added Successfully !
    </div>
    <?php }
        unset($_SESSION['comment_added']);
    ?>
    <div class="col-11 mx-auto">
        <div class="row ">
            <div class="col-xl-9 col-lg-7 pb-5">
                <video class='rounded-4 mt-2 my-single-video object-fit-cover'
                    src="./videos/<?php echo $_GET['video'] ?>" controls width="100%" height="600px"></video>
                <h4 class="my-2">
                    <?php echo $_GET['title'] ?>
                </h4>
                <div class="row  align-items-center">
                    <div class="col-lg-6 my-2">
                        <div class="d-flex my-2 gap-4 align-items-center">
                            <div class="d-flex align-items-center gap-3">
                                <img src="https://yt3.ggpht.com/Dhq_n4j62Nwk0LOPxJWssW7a-1brhPoWMknxJgRlEzEacXF1i95-_yanzb-rgRxXM89LBZ71xw=s176-c-k-c0x00ffffff-no-rj"
                                    class="rounded-circle" width="50px" height="50px" alt="">
                                <div class="">
                                    <h6 class='m-0'>Channel name</h6>
                                    <p class="text-secondary m-0 text-sm">3.33M subscribers</p>
                                </div>
                            </div>

                            <button class="btn btn-dark rounded-pill py-2">
                                Subscribe
                            </button>

                        </div>
                    </div>
                    <div class="col-lg-6 my-2 flex-wrap align-items-center d-flex gap-3">
                        <div class="rounded-pill gap-2 p-2 px-3 d-flex bg-body-secondary">
                            <i class="bi bi-hand-thumbs-up"></i>
                            <h6 class="m-0">182K</h6>
                            <p class="m-0 text-secondary">|</p>
                            <i class="bi bi-hand-thumbs-down"></i>

                        </div>
                        <div class="rounded-pill gap-2 p-2 px-3 d-flex bg-body-secondary">
                            <i class="bi bi-share"></i>
                            <h6 class="m-0">Share</h6>
                        </div>
                        <div class="rounded-pill gap-2 p-2 px-3 d-flex bg-body-secondary">
                            <i class="bi bi-download"></i>
                            <h6 class="m-0">Download</h6>
                        </div>
                        <div class="rounded-pill gap-2 p-2 px-3 d-flex bg-body-secondary">
                            <i class="bi bi-scissors"></i>
                            <h6 class="m-0">Clip</h6>
                        </div>
                        <i class="bi d-flex align-items-center justify-content-center bi-three-dots bg-body-secondary rounded-circle"
                            style="width:40px;height:40px"></i>
                    </div>
                </div>






                <!-- comment sectino -->

                <!-- total comments -->

                <?php 
                    include './config.php';
                    $video_id = $_GET['id'];
                    $count = "SELECT COUNT(id) AS total_comments FROM comments WHERE video_id = $video_id";
                    $countComments = mysqli_query($connection,$count);
                    foreach($countComments as $item){
                ?>

                <h5>
                    <?php echo $item['total_comments'] ?> Comments
                </h5>

                <?php }?>

                <?php 
                    if(isset($_SESSION['ticket'])){
                ?>

                <form action="./add-comment.php" method="POST" class="d-flex gap-2 w-100">


                    <img src="https://www.transparentpng.com/download/user/gray-user-profile-icon-png-fP8Q1P.png"
                        width="40px" class="border p-1 rounded-circle" height="40px" alt="">
                    <input type="hidden" name="video_id" readonly value="<?php echo $_GET['id'] ?>">
                    <input name="comment" type="text" class="w-100"
                        style="border: none;border-bottom:1px solid lightgray;outline-width:0"
                        placeholder="Add a comment...">
                </form>

                <?php 
                    }
                        ?>



                <!-- all comments -->

                <?php 
                        include './config.php';
                        $video_id = $_GET['id'];
                        $getComments = "SELECT comments.id AS comment_id,comments.comment,users.id AS user_id,users.name FROM comments JOIN users ON comments.user_id = users.id WHERE comments.video_id = $video_id";
                        $commentResults = mysqli_query($connection,$getComments);
                        foreach($commentResults as $item){
                    ?>
                <div class="d-flex mt-3 gap-2 w-100">
                    <img src="https://www.transparentpng.com/download/user/gray-user-profile-icon-png-fP8Q1P.png"
                        width="40px" class="border p-1 rounded-circle" height="40px" alt="">
                    <div class="">
                        <div class="d-flex gap-2 align-items-center">
                            <h6 class="m-0 fw-bold text-capitalize">
                                <?php echo $item['name'] ?>
                            </h6>
                            <p class="m-0 text-secondary text-sm">
                                time hours ago
                            </p>
                        </div>
                        <p class="text-secondary text-sm">
                            <?php echo $item['comment']?>
                        </p>
                    </div>
                </div>
                <?php 
                        }
                ?>


            </div>
            <div class="col-xl-3 col-lg-5">
                <?php 
                    include './config.php';
                    $select = "SELECT videos.id AS video_id,videos.video,videos.thumbnail,videos.title,users.id AS user_id,users.name FROM videos JOIN users ON videos.user_id = users.id";
                    $result = mysqli_query($connection,$select);
                    foreach($result as $item){
                ?>
                <a href="./single-page.php?id=<?php echo $item['video_id'] ?>&title=<?php echo $item['title'] ?>&video=<?php echo $item['video']?>&thumbnail=<?php echo $item['thumbnail'] ?>"
                    class="row  mt-2 align-items-start text-decoration-none text-dark text-capitalize fw-semibold my-single-image">
                    <div class="col-sm-5">
                        <img src="./thumbnail/<?php echo $item['thumbnail'] ?>"
                            class="rounded-3 thumbnail-image object-fit-cover" height="100px" width="100%" alt="">
                        <video autoplay muted height="100px" width="100%"
                            class="object-fit-cover thumbnail-video rounded-4 d-none"
                            src="./videos/<?php echo $item['video'] ?>"></video>
                    </div>
                    <div class="col-sm-7 p-0">
                        <p class="m-0">
                            <?php echo $item['title'] ?>
                        </p>
                        <p class="text-secondary text-capitalize m-0 text-sm">
                            <?php echo $item['name']?>
                        </p>
                        <p class="text-secondary m-0 text-sm">
                            110M views . 5 years ago
                        </p>
                    </div>
                </a>

                <?php 
                    }
                        ?>
            </div>
        </div>
    </div>
    <script>
    let thumbnail_image = document.querySelectorAll('.thumbnail-image')
    let thumbnail_video = document.querySelectorAll('.thumbnail-video')




    thumbnail_image.forEach((item, index) => {
        item.addEventListener('mouseover', () => {
            item.classList.add('d-none')
            thumbnail_video[index].classList.remove('d-none')
        })

    })

    thumbnail_video.forEach((item, index) => {
        item.addEventListener('mouseout', () => {
            item.classList.add('d-none')
            thumbnail_image[index].classList.remove('d-none')
        })

    })



    let toastComment = document.querySelector('.toast-comment')
    if (toastComment) {
        setTimeout(() => {
            toastComment.style.transform = 'translate(-50%,-200px)'
        }, 3000);
    }
    </script>
</body>

</html>