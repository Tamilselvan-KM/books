<?php 
include_once 'includes/header.php';
?>

<head>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
        include_once 'includes/indexNav.php'; 
        include 'register.php';
        function essayPage($src, $bklink){
            echo '
            <div class="col-lg-4 col-md-4 ">
                <div>
                    <img src="'.$src.'" class="img-fluid" />
                </div>
                <div class="content text-center">
                    <div class="fs-2 mb-4">
                        <a href="'.$bklink.'" class="btn btn-primary">Read Essay</a>
                    </div>
                </div>
            </div>
            ';
        }
    ?>
    <div class="container">
        <div class="row my-3">
            <h2 class="text-center">Our Essay</h2>
            <?php 
                essayPage("./images/essay1.jpeg", "./bookpdf/essays/essay1.pdf");
                essayPage("./images/essay2.jpeg", "./bookpdf/essays/essay2.pdf");
                essayPage("./images/essay3.jpeg", "./bookpdf/essays/essay3.pdf");
                essayPage("./images/essay4.jpeg", "./bookpdf/essays/essay4.pdf");
                essayPage("./images/essay5.jpeg", "./bookpdf/essays/essay5.pdf");
                essayPage("./images/essay6.jpeg", "./bookpdf/essays/essay6.pdf");
                essayPage("./images/essay7.jpeg", "./bookpdf/essays/essay7.pdf");
                essayPage("./images/essay8.jpeg", "./bookpdf/essays/essay8.pdf");
                essayPage("./images/essay9.jpeg", "./bookpdf/essays/essay9.pdf");
                essayPage("./images/essay10.jpeg", "./bookpdf/essays/essay10.pdf");
                essayPage("./images/essay11.jpeg", "./bookpdf/essays/essay11.pdf");
                essayPage("./images/essay12.jpeg", "./bookpdf/essays/essay12.pdf");
            ?>
        </div>
    </div>
    <?php
     include_once 'includes/footer.php';
    ?>
</body>