<?php 
    include_once 'header.php';
    if (isset($_GET['img'])) {
        $img = $_GET['img'];
    }
    if (isset($_GET['serious'])) {
        $serious = $_GET['serious'];
    }
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php 
        include_once 'indexNav.php';
    ?>
    <h1 class="text-center">Article series</h1>
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-5 col-md-5">
                <img src="../images/<?php echo $img;?>.jpeg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <?php
                            for ($i=1; $i <= $serious; $i++) { 
                                echo '
                                <div class="col-lg-4 col-md-4">
                                    <div class="fs-2 mb-4">
                                        <a href="../bookpdf/articles/'.$img.'-s-'.$i.'.pdf" class="btn btn-primary">View Series '.$i.'</a>
                                    </div>
                                </div>
                                ';
                            }
                        ?>
                </div>
            </div>

        </div>

    </div>

    <?php include_once 'footer.php';?>
</body>