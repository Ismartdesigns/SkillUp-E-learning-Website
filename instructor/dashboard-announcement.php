<?php
require "../includes/functions.php";
if(!isset($_SESSION['instructor'])) {
    header("location: ../auth/instructor-login.php");
    exit();
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<?php include("../includes/dashboard/dash-head.php") ?>

<body class="dashboard-page">

    <!-- Dashboard Nav Start -->
    <div class="dashboard-nav offcanvas offcanvas-start" id="offcanvasDashboard">

        <!-- Dashboard Nav Wrapper Start -->
        <?php include('../includes/dashboard/instructor-dash-nav.php') ?>
        <!-- Dashboard Nav Wrapper End -->

    </div>
    <!-- Dashboard Nav End -->

   


    <!-- Dashboard Main Wrapper Start -->
    <main class="dashboard-main-wrapper">

        <!-- Dashboard Header Start -->
        <?php include("../includes/dashboard/instructor-dash-header.php") ?>
        <!-- Dashboard Header End -->





        <!-- Dashboard Content Start -->
        <div class="dashboard-content">

            <div class="container">
                <h4 class="dashboard-title">Announcement</h4>

                <!-- Dashboard Announcement Start -->
                <div class="dashboard-announcement">

                    <!-- Dashboard Announcement Box Start -->
                    <div class="dashboard-content-box">

                        <!-- Dashboard Announcement Add Start -->
                        <div class="dashboard-announcement-add">

                            <div class="dashboard-announcement-add__content-wrap">
                                <div class="dashboard-announcement-add__icon">
                                    <i class="fas fa-bell"></i>
                                </div>
                                <div class="dashboard-announcement-add__content">
                                    <small>Create Announcement</small>
                                    <p><strong>Notify all students of your course</strong></p>
                                </div>
                            </div>

                            <div class="dashboard-announcement-add__btn">
                                <button class="btn btn-primary btn-hover-secondary">Add New Announcement</button>
                            </div>

                        </div>
                        <!-- Dashboard Announcement Add End -->

                    </div>
                    <!-- Dashboard Announcement Box End -->

                    <!-- Dashboard Announcement Box Start -->
                    <div class="dashboard-content-box">
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <div class="dashboard-content__input">
                                    <label class="form-label-02">Courses</label>
                                    <select class="form-select">
                                        <option value="">All</option>
                                        <option value="">Consulting Approach to Problem Solving</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-lg-3 col-sm-6">
                                <div class="dashboard-content__input">
                                    <label class="form-label-02">Sort By</label>
                                    <select class="form-select">
                                        <option>ASC</option>
                                        <option>DESC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-3 col-sm-6">
                                <div class="dashboard-content__input">
                                    <label class="form-label-02">Date</label>
                                    <input type="text" class="form-control filter_start_date" autocomplete="off" readonly="">
                                    <span class="form-icon">
                                        <i class="fas fa-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Announcement Box End -->

                    <!-- Dashboard Table Box Start -->
                    <div class="dashboard-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="date">Date</th>
                                    <th class="announcements">Announcements</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">November 25, 2021, 12:53 pm</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__announcements-wrap">

                                            <div class="dashboard-table__text">
                                                <span>Hi.</span>
                                                <p>Consulting Approach to Problem Solving</p>
                                            </div>

                                            <ul class="dashboard-table__list">
                                                <li>
                                                    <a class="btn" href="#">Details</a>
                                                </li>
                                                <li class="dropdown">
                                                    <button class="dropdown-btn" data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="#"><i class="fas  fa-pencil-alt"></i> Edit</a></li>
                                                        <li><a href="#"><i class="fas  fa-trash-alt"></i> Delete</a></li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">November 16, 2021, 12:53 pm</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__announcements-wrap">

                                            <div class="dashboard-table__text">
                                                <span>Hello.</span>
                                                <p>Consulting Approach to Problem Solving</p>
                                            </div>

                                            <ul class="dashboard-table__list">
                                                <li>
                                                    <a class="btn" href="#">Details</a>
                                                </li>
                                                <li class="dropdown">
                                                    <button class="dropdown-btn" data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="#"><i class="fas  fa-pencil-alt"></i> Edit</a></li>
                                                        <li><a href="#"><i class="fas  fa-trash-alt"></i> Delete</a></li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">November 7, 2021, 12:42 pm</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__announcements-wrap">

                                            <div class="dashboard-table__text">
                                                <span>Hi.</span>
                                                <p>Consulting Approach to Problem Solving</p>
                                            </div>

                                            <ul class="dashboard-table__list">
                                                <li>
                                                    <a class="btn" href="#">Details</a>
                                                </li>
                                                <li class="dropdown">
                                                    <button class="dropdown-btn" data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="#"><i class="fas  fa-pencil-alt"></i> Edit</a></li>
                                                        <li><a href="#"><i class="fas  fa-trash-alt"></i> Delete</a></li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">October 28, 2021, 1:03 am</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__announcements-wrap">

                                            <div class="dashboard-table__text">
                                                <span>Hi.</span>
                                                <p>Consulting Approach to Problem Solving</p>
                                            </div>

                                            <ul class="dashboard-table__list">
                                                <li>
                                                    <a class="btn" href="#">Details</a>
                                                </li>
                                                <li class="dropdown">
                                                    <button class="dropdown-btn" data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="#"><i class="fas  fa-pencil-alt"></i> Edit</a></li>
                                                        <li><a href="#"><i class="fas  fa-trash-alt"></i> Delete</a></li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">August 23, 2021, 2:59 pm</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__announcements-wrap">

                                            <div class="dashboard-table__text">
                                                <span>Hello.</span>
                                                <p>Time Management Mastery: Do More, Stress Less</p>
                                            </div>

                                            <ul class="dashboard-table__list">
                                                <li>
                                                    <a class="btn" href="#">Details</a>
                                                </li>
                                                <li class="dropdown">
                                                    <button class="dropdown-btn" data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="#"><i class="fas  fa-pencil-alt"></i> Edit</a></li>
                                                        <li><a href="#"><i class="fas  fa-trash-alt"></i> Delete</a></li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">August 4, 2021, 2:01 pm</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__announcements-wrap">

                                            <div class="dashboard-table__text">
                                                <span>Hi.</span>
                                                <p>Consulting Approach to Problem Solving</p>
                                            </div>

                                            <ul class="dashboard-table__list">
                                                <li>
                                                    <a class="btn" href="#">Details</a>
                                                </li>
                                                <li class="dropdown">
                                                    <button class="dropdown-btn" data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="#"><i class="fas  fa-pencil-alt"></i> Edit</a></li>
                                                        <li><a href="#"><i class="fas  fa-trash-alt"></i> Delete</a></li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Dashboard Table End -->

                </div>
                <!-- Dashboard Announcement End -->
            </div>


        </div>
        <!-- Dashboard Content End -->


    </main>
    <!-- Dashboard Main Wrapper End -->





    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="./assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="./assets/js/plugins/aos.js"></script>
    <script src="./assets/js/plugins/parallax.js"></script>
    <script src="./assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/jquery.powertip.min.js"></script>
    <script src="./assets/js/plugins/nice-select.min.js"></script>
    <script src="./assets/js/plugins/glightbox.min.js"></script>
    <script src="./assets/js/plugins/jquery.sticky-kit.min.js"></script>
    <script src="./assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="./assets/js/plugins/masonry.pkgd.min.js"></script>
    <script src="./assets/js/plugins/flatpickr.js"></script>
    <script src="./assets/js/plugins/range-slider.js"></script>
    <script src="./assets/js/plugins/select2.min.js"></script>


    <!-- Activation JS -->
    <script src="./assets/js/main.js"></script>


</body>

</html>