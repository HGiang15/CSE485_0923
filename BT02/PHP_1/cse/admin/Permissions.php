<?php
include_once 'layout/header.php';
?>
<h4 style="text-align: center; color: red;">PERMISSIONS</h4>

<div class="permission mb-3 p-4">
    <div class="row">
        <div class="col-12">
            <span class="text-warning h5 txt-link">Permissions</span>
        </div>
    </div>
</div>

<!-- Table permissions start -->
<div class="table-permissions">
    <div class="row">
        <div class="col-12">
            <table class="table table-dark border-0 rounded">
                <thead>
                    <tr>
                        <th class="text-warning" scope="col">Name</th>
                        <th class="text-warning" scope="col">Code Name</th>
                        <th class="text-warning" scope="col">Content Type</th>
                        <th class="text-warning" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i <= 6; $i++) {
                    ?>
                        <tr>
                            <th scope="row">Can add log entry</th>
                            <td>
                                <span>add_logentry</span>
                            </td>
                            <td>
                                <span>admin | logentry</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary"><i class="fa-solid fa-pen"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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
<!-- Table permissions end -->

<!-- pagination start -->
<div class="paginationn">
    <div class="row">
        <div class="col-2">
            <span>Page 1 of 12</span>
        </div>
        <div class="col-7"></div>
        <div class="col-3">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a style="background-color: #FF6A59; border-color: #FF6A59;" class="page-link" href="#" aria-label="Previous">
                            <span class="text-white" aria-hidden="true"><</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link text-dark mx-2" href="#">1</a></li>
                    <li class="page-item"><a class="page-link text-dark mx-2" href="#">2</a></li>
                    <li class="page-item"><a class="page-link text-dark mx-2" href="#">3</a></li>
                    <li class="page-item">
                        <a style="background-color: #FF6A59; border-color: #FF6A59;" class="page-link" href="#" aria-label="Next">
                            <span class="text-white" aria-hidden="true">></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- pagination end -->

<?php
include_once 'layout/footer.php';
?>