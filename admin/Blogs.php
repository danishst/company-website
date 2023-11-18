<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: login.php"); // Redirect to login if not authenticated
    exit();
}
?>

<?php include('includes/head.php') ?>
<style>
    faseta {
        font-weight: bolder;
        font-size: 20px;
        margin: 4px 120px;
    }
</style>

<body>
    <?php
    // Fetch the company data to populate the table
    $query = "SELECT * FROM blogs";
    // --   LEFT JOIN company_users AS c ON c.company_id = companys.id
    // --   GROUP BY c.company_id, companys.id";

    $stmt = $con->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $companyData = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    ?>


    <!--start wrapper-->
    <div class="wrapper">
        <!--start top header-->
        <?php include('includes/header.php') ?>
        <!--end top header-->

        <!--start sidebar -->
        <?php include('includes/sidebar.php') ?>
        <!--end sidebar -->

        <!--start content-->
        <main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Dashboard</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="index"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="col">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleExtraLargeModal">Add Blog</button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleExtraLargeModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content ">
                                    <form action="add_blog_process.php" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name='type' value="add">
                                        <div class="modal-header border-dark">
                                            <h5 class="modal-title text-dark">Add Blog Logo</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-dark">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Blog Name</label>
                                                <input class="form-control form-controlmb-3" name="blogname" type="text" placeholder="Name" aria-label=".form-control-lg example" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Blog Heading</label>
                                                <input class="form-control form-controlmb-3" name="bloghead" type="text" placeholder="Name" aria-label=".form-control-lg example" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Blog Slug</label>
                                                <input class="form-control form-controlmb-3" name="blogslug" type="text" placeholder="Name" aria-label=".form-control-lg example" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Meta Title</label>
                                                <input class="form-control form-controlmb-3" name="metatitle" type="text" placeholder="Name" aria-label=".form-control-lg example" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Meta Description</label>
                                                <input class="form-control form-controlmb-3" name="metadec" type="text" placeholder="Name" aria-label=".form-control-lg example" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Meta Keywords</label>
                                                <input class="form-control form-controlmb-3" name="metakeyword" type="text" placeholder="Name" aria-label=".form-control-lg example" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Blog Image</label>
                                                <input type="file" class="form-control" name="blogimage" placeholder="example@gmail.com" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Blog Details</label>
                                                <textarea type="text" id="your_summernote" name="blogdetail" class="form-control" placeholder="Details" rows="4" required></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer border-dark">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0">Blogs Details
                        </h5>

                        <?php
                        if (isset($_SESSION["msg"])) {
                            echo "<faseta>" . $_SESSION["msg"] . "</faseta>";
                            unset($_SESSION["msg"]);
                        }
                        ?>
                        <form class="ms-auto position-relative">
                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                            <input class="form-control ps-5" type="text" placeholder="search">
                        </form>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table align-middle">
                            <thead class="table-secondary">
                                <tr>
                                    <th>Blog ID</th>
                                    <th>Blog Name</th>
                                    <th>Blog Description</th>
                                    <th>Blog Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($companyData as $key => $data) {
                                ?>
                                    <tr>
                                        <td><b><?= $key + 1 ?></b></td>
                                        <td><b><?= substr($data['blog_heading'], 0, 15); ?>...</b></td>
                                        <td><b><?= substr($data['blog_details'], 0, 70); ?>...</b></td>
                                        <td><b><img width="70" src="upload/blogs/<?= $data['blog_image'] ?>" alt=""></b></td>
                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">

                                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">

                                                    <div class="col">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleWarningModal<?= $data['blog_id'] ?>"><i class="bi bi-pencil-fill m-0"></i></button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleWarningModal<?= $data['blog_id'] ?>" tabindex="-1" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                <div class="modal-content ">
                                                                    <form action="add_blog_process.php" method="post" enctype="multipart/form-data">
                                                                        <input type="hidden" name='type' value="update">
                                                                        <input type="hidden" name="blogs_id" value="<?= $data['blog_id'] ?>">
                                                                        <div class="modal-header border-dark">
                                                                            <h5 class="modal-title text-dark">Edit Blog</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body text-dark">
                                                                            <div class="mb-3">
                                                                                <label class="form-label fw-bold">Blog Name</label>
                                                                                <input class="form-control form-controlmb-3" name="blogname" value="<?= $data['blog_name'] ?>" type="text" placeholder="Name" aria-label=".form-control-lg example" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label fw-bold">Blog Heading</label>
                                                                                <input class="form-control form-controlmb-3" name="bloghead" value="<?= $data['blog_heading'] ?>" type="text" placeholder="Name" aria-label=".form-control-lg example" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label fw-bold">Blog Slug</label>
                                                                                <input class="form-control form-controlmb-3" name="blogslug" value="<?= $data['blog_slug'] ?>" type="text" placeholder="Name" aria-label=".form-control-lg example" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label fw-bold">Meta Title</label>
                                                                                <input class="form-control form-controlmb-3" name="metatitle" value="<?= $data['meta_title'] ?>" type="text" placeholder="Name" aria-label=".form-control-lg example" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label fw-bold">Meta Description</label>
                                                                                <input class="form-control form-controlmb-3" name="metadec" value="<?= $data['meta_description'] ?>" type="text" placeholder="Name" aria-label=".form-control-lg example" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label fw-bold">Meta Keywords</label>
                                                                                <input class="form-control form-controlmb-3" name="metakeyword" value="<?= $data['meta_keyword'] ?>" type="text" placeholder="Name" aria-label=".form-control-lg example" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label fw-bold">Blog Image</label>
                                                                                <input type="file" class="form-control mb-2" name="blogimage" value="<?= $data['blog_image'] ?>" placeholder="">
                                                                                <img width="100" src="upload/blogs/<?= $data['blog_image'] ?>" alt="">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label fw-bold">Blog Details</label>
                                                                                <textarea type="text" id="your_summernote" name="blogdetail" class="form-control" placeholder="Details" rows="4" required><?= $data['blog_details'] ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer border-dark">
                                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-warning">Update</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="delete">

                                                    <div class="col">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleDangerModal<?= $data['blog_id'] ?>"><i class="bi bi-trash-fill m-0"></i></button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleDangerModal<?= $data['blog_id'] ?>" tabindex="-1" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                <div class="modal-content ">
                                                                    <form action="add_blog_process.php" method="post" enctype="multipart/form-data">
                                                                        <input type="hidden" name='type' value="delete">
                                                                        <input type="hidden" name="blogs_id" value="<?= $data['blog_id'] ?>">
                                                                        <div class="modal-header border-dark">
                                                                            <h5 class="modal-title text-dark">Delete Blog</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body text-dark">
                                                                            <h6>Are you sure you want to delete this Blog?</h6>
                                                                        </div>
                                                                        <div class="modal-footer border-dark">
                                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                }

                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>




        </main>
        <!--end page main-->


        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

        <!--start switcher-->
        <div class="switcher-body">
            <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
            <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Mode</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <!-- <h6 class="mb-0">Theme Variation</h6> -->
                    <!-- <hr> -->
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
                        <label class="form-check-label" for="LightTheme">Light</label>
                    </div><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
                        <label class="form-check-label" for="DarkTheme">Dark</label>
                    </div><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3" checked>
                        <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
                    </div>

                </div>
            </div>
        </div>
        <!--end switcher-->

    </div>
    <!--end wrapper-->


    <!-- Bootstrap bundle JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/js/pace.min.js"></script>
    <!--app-->
    <script src="assets/js/app.js"></script>


</body>

</html>