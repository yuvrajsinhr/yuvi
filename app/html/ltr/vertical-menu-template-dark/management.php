<?php include 'index_php.php'; ?>
<?php
//new academique year add
if (isset($_POST['add_year'])) {
    if ($role == 'admin') {
        $year = get_safe_input($_POST['year']);
        $result = $user->add_year($matricule_etablissement, $year, $nom_etablissement, $logo, $date_creation, $date_academique, $statut,$slogan,$location,$email_s,$tel,$director, $web);
        # code...
    } else {
        # code...
    }
    # code...
}
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <title>Management | <?php echo "$nom_etablissement"; ?></title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/sweetalert2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-email.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->
<?php
switch ($result) {
    case 1: ?>
        <div class="swal2-container swal2-center swal2-fade swal2-shown" style="overflow-y: auto;">
            <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
                <div class="swal2-content">
                    <div id="swal2-content" style="display: block;"><?php echo "Done!"; ?></div>
                    <input class="swal2-input" style="display: none;">
                    <input type="file" class="swal2-file" style="display: none;">
                    <div class="swal2-range" style="display: none;">
                        <input type="range"><output></output>
                    </div>
                    <select class="swal2-select" style="display: none;"></select>
                    <div class="swal2-radio" style="display: none;"></div>
                    <label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox">
                        <span class="swal2-label"></span>
                    </label>
                    <textarea class="swal2-textarea" style="display: none;"></textarea>
                    <div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
                </div>
                <div class="swal2-actions" style="display: flex;">
                    <a href=""><button type="button" class="swal2-confirm btn btn-success" aria-label="">ok</button></a>
                </div>
            </div>
        </div>

    <?php
        # code...
        break;

    case -1: ?>
        <div class="swal2-container swal2-center swal2-fade swal2-shown" style="overflow-y: auto;">
            <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
                <div class="swal2-content">
                    <div id="swal2-content" style="display: block;"><?php echo "This academique year already exist!"; ?></div>
                    <input class="swal2-input" style="display: none;">
                    <input type="file" class="swal2-file" style="display: none;">
                    <div class="swal2-range" style="display: none;">
                        <input type="range"><output></output>
                    </div>
                    <select class="swal2-select" style="display: none;"></select>
                    <div class="swal2-radio" style="display: none;"></div>
                    <label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox">
                        <span class="swal2-label"></span>
                    </label>
                    <textarea class="swal2-textarea" style="display: none;"></textarea>
                    <div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div>
                </div>
                <div class="swal2-actions" style="display: flex;">
                    <a href=""><button type="button" class="swal2-confirm btn btn-success" aria-label="">ok</button></a>
                </div>
            </div>
        </div>

<?php
        # code...
        break;

    default:
        # code...
        break;
}

?>
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout content-left-sidebar email-application navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar" data-layout="dark-layout">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <!-- INCLUDING THE HEADER NAVBAR -->
    <?php include 'header_nav.php'; ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php include 'main_nav.php'; ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-area-wrapper">
            <div class="sidebar-left">
                <div class="sidebar">
                    <div class="sidebar-content email-app-sidebar d-flex">
                        <!-- sidebar close icon -->
                        <span class="sidebar-close-icon">
                            <i class="bx bx-x"></i>
                        </span>
                        <!-- sidebar close icon -->
                        <div class="email-app-menu">
                            <div class="form-group form-group-compose">
                                <!-- compose button  -->
                                <button type="button" class="btn btn-primary btn-block my-2 compose-btn">
                                    <i class="bx bx-plus"></i>
                                    Add New academic session
                                </button>
                            </div>
                            <div class="sidebar-menu-list">
                                <!-- sidebar label start -->
                                <label class="sidebar-label">Labels</label>
                                <div class="list-group list-group-labels ">
                                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                        Ready to be used
                                        <span class="bullet bullet-success bullet-sm"></span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                        Work
                                        <span class="bullet bullet-primary bullet-sm"></span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                        Not ready
                                        <span class="bullet bullet-warning bullet-sm"></span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                        Must be deleted
                                        <span class="bullet bullet-danger bullet-sm"></span>
                                    </a>
                                    <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                        Safe
                                        <span class="bullet bullet-info bullet-sm"></span>
                                    </a>
                                </div>
                                <!-- sidebar label end -->
                            </div>
                        </div>
                    </div>
                    <!-- User new mail right area -->
                    <div class="compose-new-mail-sidebar">
                        <div class="card shadow-none quill-wrapper p-0">
                            <div class="card-header">
                                <h3 class="card-title" id="emailCompose">New academic year</h3>
                                <button type="button" class="close close-icon">
                                    <i class="bx bx-x"></i>
                                </button>
                            </div>
                            <!-- form start -->
                            <form action="#" id="compose-form" method="post" enctype="multipart/form-data">
                                <div class="card-content">
                                    <div class="card-body pt-0">
                                        <div class="form-label-group">
                                            <input type="text" name="year" required class="form-control" placeholder="ex 2022-2023">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end pt-0">
                                    <button type="submit" name="add_year" onclick="prevent()" class="btn-send btn btn-primary"> <span class="d-sm-inline d-none">Add the year</span>
                                    </button>
                                </div>
                            </form>
                            <script>
                                function prevent() {
                                    alert("Please wait a few seconds until the process ends..");
                                }
                            </script>
                            <!-- form start end-->
                        </div>
                    </div>
                    <!--/ User Chat profile right area -->
                </div>
            </div>
            <div class="content-right">
                <div class="content-overlay"></div>
                <div class="content-wrapper">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                        <!-- email app overlay -->
                        <div class="app-content-overlay"></div>
                        <div class="email-app-area">
                            <!-- Email list Area -->
                            <div class="email-app-list-wrapper">
                                <div class="email-app-list">
                                    <form action="" method="post">
                                        <div class="email-action">
                                            <!-- action left start here -->
                                            <div class="action-left d-flex align-items-center">
                                                <!-- select All checkbox -->
                                                <div class="checkbox checkbox-shadow checkbox-sm selectAll mr-50">
                                                    <input type="checkbox" name="all_check" id="checkboxsmall">
                                                    <label for="checkboxsmall"></label>
                                                </div>
                                                <!-- delete unread dropdown -->
                                                <ul class="list-inline m-0 d-flex">
                                                    <!-- <li class="list-inline-item mail-delete">
	                                                    <button type="submit" name="delete_level" class="btn btn-icon action-icon">
	                                                        <span class="fonticon-wrap">
	                                                            <i class="livicon-evo" data-options="name: trash.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
	                                                            </i>
	                                                        </span>
	                                                    </button>
	                                                </li> -->
                                                    <!--
	                                                <li class="list-inline-item mail-unread">
	                                                    <button type="button" class="btn btn-icon action-icon">
	                                                        <span class="fonticon-wrap d-inline mr-25">
	                                                            <i class="livicon-evo" data-options="name: envelope-put.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
	                                                            </i>
	                                                        </span>
	                                                    </button>
	                                                </li>
	                                                <li class="list-inline-item">
	                                                    <div class="dropdown">
	                                                        <button type="button" class="dropdown-toggle btn btn-icon action-icon" id="folder" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                                            <span class="fonticon-wrap">
	                                                                <i class="livicon-evo" data-options="name: morph-folder.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
	                                                                </i>
	                                                            </span>
	                                                        </button>
	                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="folder">
	                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit"></i> Draft</a>
	                                                            <a class="dropdown-item" href="#"><i class="bx bx-info-circle"></i>Spam</a>
	                                                            <a class="dropdown-item" href="#"><i class="bx bx-trash"></i>Trash</a>
	                                                        </div>
	                                                    </div>
	                                                </li>
	                                                <li class="list-inline-item">
	                                                    <div class="dropdown">
	                                                        <button type="button" class="btn btn-icon dropdown-toggle action-icon" id="tag" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                                            <span class="fonticon-wrap">
	                                                                <i class="livicon-evo" data-options="name: tag.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
	                                                                </i>
	                                                            </span>
	                                                        </button>
	                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="tag">
	                                                            <a href="#" class="dropdown-item align-items-center">
	                                                                <span class="bullet bullet-success bullet-sm"></span>
	                                                                <span>Product</span>
	                                                            </a>
	                                                            <a href="#" class="dropdown-item align-items-center">
	                                                                <span class="bullet bullet-primary bullet-sm"></span>
	                                                                <span>Work</span>
	                                                            </a>
	                                                            <a href="#" class="dropdown-item align-items-center">
	                                                                <span class="bullet bullet-warning bullet-sm"></span>
	                                                                <span>Misc</span>
	                                                            </a>
	                                                            <a href="#" class="dropdown-item align-items-center">
	                                                                <span class="bullet bullet-danger bullet-sm"></span>
	                                                                <span>Family</span>
	                                                            </a>
	                                                            <a href="#" class="dropdown-item align-items-center">
	                                                                <span class="bullet bullet-info bullet-sm"></span>
	                                                                <span> Design</span>
	                                                            </a>
	                                                        </div>
	                                                    </div>
	                                                </li> -->
                                                </ul>
                                            </div>
                                            <!-- action left end here -->

                                            <!-- action right start here -->
                                            <div class="action-right d-flex flex-grow-1 align-items-center justify-content-around">
                                                <!-- search bar  -->
                                                <div class="email-fixed-search flex-grow-1">
                                                    <div class="sidebar-toggle d-block d-lg-none">
                                                        <i class="bx bx-menu"></i>
                                                    </div>
                                                    <fieldset class="form-group position-relative has-icon-left m-0">
                                                        <input type="text" class="form-control" id="email-search" placeholder="Search ">
                                                        <div class="form-control-position">
                                                            <i class="bx bx-search"></i>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <!-- pagination and page count -->
                                                <span class="d-none d-sm-block">1-10 of 653</span>
                                                <button class="btn btn-icon email-pagination-prev d-none d-sm-block">
                                                    <i class="bx bx-chevron-left"></i>
                                                </button>
                                                <button class="btn btn-icon email-pagination-next d-none d-sm-block">
                                                    <i class="bx bx-chevron-right"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <!-- / action right -->

                                        <!-- email user list start -->
                                        <div class="email-user-list list-group">
                                            <ul class="users-list-wrapper media-list">
                                                <!-- SORTING THE LEVELS -->
                                                <?php
                                                $query = mysqli_query($database, "SELECT * FROM etablissement WHERE matricule_etablissement = '$matricule_etablissement' ");
                                                while ($result = mysqli_fetch_assoc($query)) {
                                                    if ($result['date_academique'] == $date_academique) {
                                                        continue;
                                                        # code...
                                                    }
                                                ?>
                                                    <li class="media mail-read">
                                                        <div class="user-action">
                                                            <div class="checkbox-con mr-25">
                                                                <div class="checkbox checkbox-shadow checkbox-sm">
                                                                    <input type="checkbox" name="<?php echo 'checkboxsmall' . $result['date_academique']; ?>" id="checkboxsmall<?php echo $result['date_academique']; ?>">
                                                                    <label for="checkboxsmall<?php echo $result['date_academique']; ?>"></label>
                                                                </div>
                                                            </div>
                                                            <a href="school_profile.php?ktsp=<?php echo base64_encode($result['date_academique'])  ?>">
                                                                <button type="button" class="btn btn-icon action-icon">
                                                                    <span class="fonticon-wrap">
                                                                        <i class="bx bxs-left-top-arrow-circle"></i>
                                                                        </i>
                                                                    </span>
                                                                </button>
                                                            </a>
                                                            <span class="favorite warning">
                                                                <i class="bx bxs-star"></i>
                                                            </span>
                                                        </div>
                                                        <div class="pr-50">
                                                            <div class="avatar">
                                                                <img src="logo_data/<?php echo "$logo"; ?>" alt="avtar img holder">
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="user-details">
                                                                <div class="mail-items">
                                                                    <span class="list-group-item-text text-truncate"><?php echo $result['date_academique']; ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="mail-message">
                                                                <p class="list-group-item-text truncate mb-0"><?php echo "$nom_etablissement"; ?>
                                                                </p>
                                                                <div class="mail-meta-item">
                                                                    <span class="float-right">
                                                                        <span class="bullet bullet-success bullet-sm"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>



                                                <?php
                                                    # code...
                                                }
                                                ?>
                                            </ul>
                                            <!-- email user list end -->

                                            <!-- no result when nothing to show on list -->
                                            <div class="no-results">
                                                <i class="bx bx-error-circle font-large-2"></i>
                                                <h5>No Items Found</h5>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--/ Email list Area -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include 'footer.php'; ?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/scripts/configs/vertical-menu-dark.js"></script>
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <script src="../../../app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/app-email.js"></script>
    <script src="../../../app-assets/js/scripts/extensions/sweet-alerts.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>