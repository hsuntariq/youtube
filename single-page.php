<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boostrap.php' ?>
</head>

<body>
    <?php include './navbar.php' ?>
    <div class="col-11 mx-auto">
        <div class="row">
            <div class="col-xl-9 col-lg-7">
                <video class='rounded-4 my-single-video object-fit-cover' src="./videos/<?php echo $_GET['video'] ?>"
                    controls width="100%" height="600px"></video>
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
            </div>
            <div class="col-xl-3 col-lg-5">
                <div class="row mb-3 align-items-center my-single-image">
                    <div class="col-sm-5">
                        <img src="./thumbnail/1.jpg" class="rounded-3 object-fit-cover" height="100px" width="100%"
                            alt="">
                    </div>
                    <div class="col-sm-7">
                        <p class="m-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        <p class="text-secondary m-0 text-sm">Channel name</p>
                        <p class="text-secondary m-0 text-sm">
                            110M views . 5 years ago
                        </p>
                    </div>
                </div>
                <div class="row mb-3 align-items-center my-single-image">
                    <div class="col-sm-5">
                        <img src="./thumbnail/1.jpg" class="rounded-3 object-fit-cover" height="100px" width="100%"
                            alt="">
                    </div>
                    <div class="col-sm-7">
                        <p class="m-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        <p class="text-secondary m-0 text-sm">Channel name</p>
                        <p class="text-secondary m-0 text-sm">
                            110M views . 5 years ago
                        </p>
                    </div>
                </div>
                <div class="row mb-3 align-items-center my-single-image">
                    <div class="col-sm-5">
                        <img src="./thumbnail/1.jpg" class="rounded-3 object-fit-cover" height="100px" width="100%"
                            alt="">
                    </div>
                    <div class="col-sm-7">
                        <p class="m-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        <p class="text-secondary m-0 text-sm">Channel name</p>
                        <p class="text-secondary m-0 text-sm">
                            110M views . 5 years ago
                        </p>
                    </div>
                </div>
                <div class="row mb-3 align-items-center my-single-image">
                    <div class="col-sm-5">
                        <img src="./thumbnail/1.jpg" class="rounded-3 object-fit-cover" height="100px" width="100%"
                            alt="">
                    </div>
                    <div class="col-sm-7">
                        <p class="m-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        <p class="text-secondary m-0 text-sm">Channel name</p>
                        <p class="text-secondary m-0 text-sm">
                            110M views . 5 years ago
                        </p>
                    </div>
                </div>
                <div class="row mb-3 align-items-center my-single-image">
                    <div class="col-sm-5">
                        <img src="./thumbnail/1.jpg" class="rounded-3 object-fit-cover" height="100px" width="100%"
                            alt="">
                    </div>
                    <div class="col-sm-7">
                        <p class="m-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        <p class="text-secondary m-0 text-sm">Channel name</p>
                        <p class="text-secondary m-0 text-sm">
                            110M views . 5 years ago
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>