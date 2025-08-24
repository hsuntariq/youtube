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
    <div class="container-fluid">

        <div class="row">
            <ul class="col-xl-2 col-md-1 d-none d-md-block list-unstyled sidebar-parent  p-3"
                style="overflow-y: scroll;height:98vh">
                <?php include './sidebar.php' ?>
            </ul>
            <div class="col-xl-10 main-content col-md-11 col-sm-12 p-3" style="overflow-y: scroll;height:98vh">
                <?php include './main-content.php' ?>
                <!-- shorts -->
                <?php include './shorts.php' ?>
            </div>
        </div>
    </div>


    <script>
    let bottom = document.querySelector('.sidebar-bottom')
    let list = document.querySelector('.nav-list')
    let sidebar_li = document.querySelectorAll('.top-sidebar')
    let sidebar = document.querySelector('.sidebar-parent')
    let main = document.querySelector('.main-content')
    list.addEventListener('click', () => {
        sidebar_li.forEach((item, index) => {
            item.classList.toggle('flex-xl-row')
        })
        bottom.classList.toggle('d-xl-block')
        sidebar.classList.toggle('col-xl-2')
        main.classList.toggle('col-xl-11')
    })




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
    </script>


</body>

</html>