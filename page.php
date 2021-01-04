<?php
    while (isset($_SESSION['userId'])) {
        continue;
    }
?>

<?php
    include 'header.php';
?>
<style>
    <?php
        include "css/landing-page/main.css";
        include "css/landing-page/content/content.css"
    ?>
</style>

<main>
    <div class="content">
            <!-- ads -->
            <div class="content-ads">
                <div> </div>
            </div>
            <!-- phan my learning -->
            <div class="content-hover-div">
                <div class="content-hover-text">
                    <h1>
                        My Courses
                    </h1>
                </div>
                <div id="my-learning" class="carousel slide" data-interval="false" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner slide">
                        <div class="carousel-item active">
                            <div class="hoverList-1 hoverList-item">
                                <div class="learn-bg">
                                    <div>
                                        <!-- Button to Open the Modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#myModal">
                                            Click to continue
                                        </button>
                                        <!-- The Modal -->
                                        <div class="modal fade" id="myModal">
                                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Video</h4>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="modal-body">

                                                        <div class="video-container">
                                                            <iframe class="video"
                                                                src="https://www.youtube.com/embed/RcnksOUugcA"
                                                                allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="learn-caption ">
                                            <h3>Lv1: Bronze</h3>
                                            <p>Unit 1: Animal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="hoverList-2 hoverList-item"></div>
                            <div class="carousel-caption">
                                <h3>Lv1 Bronze</h3>
                                <p>Unit 2: car </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="hoverList-2 hoverList-item">Course 1</div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#my-learning" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#my-learning" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
            <!-- phan recomend-->
            <div class="content-recomendCourse">
                <div class="content-hover-text">
                    <h1>
                        Recommended Courses
                    </h1>
                </div>

                <div id="recomend-course" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="hoverList-2 hoverList-item">course 1</div>
                        </div>
                        <div class="carousel-item">
                            <div class="hoverList-2 hoverList-item">course 1</div>
                        </div>
                        <div class="carousel-item">
                            <div class="hoverList-2 hoverList-item">course 1</div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#recomend-course" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#recomend-course" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </div>
</main>

<?php
    include 'footer.php';
?>