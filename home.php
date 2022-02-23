<?php 
include_once 'includes/header.php';
if (isset($_SESSION['login'])) {
	$name = $_SESSION['login'];
}else{
    $name = "error";
}
?>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <style>
    body {
        overflow-x: hidden;
    }
    </style>
</head>

<body>
    <?php include_once 'includes/mainNav.php';?>
    <div class="row">
        <div class="col-lg-12 col-md-12 mb-3">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/bg1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="fs-1" style="color:#f1f1f1;">E-Book Reviews</h5>
                            <p class="fs-2" style="color: rgba(218, 255, 14);">Welcome to Our E-book Page!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./images/bg1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="fs-1" style="color:#f1f1f1;">Rate E-book</h5>
                            <p class="fs-2" style="color: rgba(218, 255, 14);">Create an account to review your favorite
                                Books</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./images/bg1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="fs-1" style="color:#f1f1f1;">Read Reviews</h5>
                            <p class="fs-2" style="color: rgba(218, 255, 14);">Browse all of our reviews and find
                                out more about
                                what others thought of your
                                favorite Books!
                            </p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row py-3">
            <div class="col-lg-4 col-md-4 m-auto">
                <h2>LIST BOOKS</h2>
                <p>Browse our extensive list of Book titles along with ratings, years, a short synopsis, and even
                    reviews!</p>
                <a href="books.php">
                    <button class="btn btn-primary">View Books</button>
                </a>
            </div>
            <div class="col-lg-4 col-md-4">
                <h2>LIST REVIEWS</h2>
                <p>Browse all of our reviews and find out more about what others thought of your favorite books!</p>
                <a href="review.php">
                    <button class="btn btn-primary">View Books</button>
                </a>
            </div>
        </div>
    </div>
    <?php include_once 'includes/footer.php';?>

</body>