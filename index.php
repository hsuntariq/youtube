<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include './boostrap.php' ?>
</head>

<body>
    <div class="container-fluid">

        <div class="row">
            <ul class="col-xl-2 col-md-1 d-none d-md-block list-unstyled  p-3" style="overflow-y: scroll;height:98vh">
                <?php include './sidebar.php' ?>
            </ul>
            <div class="col-xl-10 col-md-11 col-sm-12 p-3 px-5" style="overflow-y: scroll;height:98vh">
                <?php include './main-content.php' ?>
                <!-- shorts -->
                <?php include './shorts.php' ?>
            </div>
        </div>
    </div>
</body>

</html>