<?php
include_once 'layout/header.php';

?>

<!-- Home page start -->
<div class="home-page">
    <!-- Hinh co gai va bieu do -->
    <div class="row">
        <!-- Hinh nen co gai -->
        <div class="col-xxl-6 col-xl-12">
            <div class="home-content" style="background-color: #41A788; border-radius: 20px;">
                <div class="home-title text-white">
                    <h3 style="font-weight: 700; font-size: 28px; margin-top: 18px;">Join Now and Get Discount Voucher Up To 20%</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                </div>
                <div class="home-img">
                    <img class="img-fluid" style="width: 200px; height: 200px;" src="../assets/img/cogaiHome.png" alt="">
                </div>
                <div class="home-icon">
                    <i class="fa-solid fa-calendar icon-img-1"></i>
                    <i class="fa-solid fa-book-open icon-img-2"></i>
                </div>
            </div>
        </div>
        <!-- Chart bieu do -->
        <div class="col-xxl-6 col-xl-12">
            <div class="chart-activity p-4" style="background-color: #F8F9FA; border-radius: 20px;">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="p-2" style="font-size: 18px;">Learning Activity</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Day</th>
                                    <th scope="col">Month</th>
                                    <th scope="col">Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>15</td>
                                    <td>05</td>
                                    <td>2023</td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>01</td>
                                    <td>2023</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>10</td>
                                    <td>2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Courses Khoa hoc -->
    <div class="row mt-4">
        <!-- Course -->
        <div class="col-xl-4">
            <div class="item-course d-flex align-items-center p-3 bg-success" style="border-radius: 12px; height: 100px">
                <div class="icon-course p-1 bg-white d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; border-radius: 10px;">
                    <i class="fa-solid fa-square-check text-success fs-2"></i>
                </div>
                <div class="title-course p-2" style="margin-left: 10px;">
                    <h3 class="text-white fw-bolder p-0 m-0 fs-2">1.500</h3>
                    <h6 class="text-white">At Courses</h6>
                </div>
                <div class="icon-left-course" style="margin-left: auto;">
                    <i class="fa-solid fa-clipboard-check" style="color: #77C8B0; font-size: 70px"></i>
                </div>
            </div>
        </div>
        <!-- Upcoming -->
        <div class="col-xl-4">
            <div class="item-course d-flex align-items-center p-3 bg-dark" style="border-radius: 12px; height: 100px">
                <div class="icon-course p-1 bg-white d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; border-radius: 10px;">
                    <i class="fa-solid fa-bookmark fs-2"></i>
                </div>
                <div class="title-course p-2" style="margin-left: 10px;">
                    <h3 class="text-white fw-bolder p-0 m-0 fs-2">1.112</h3>
                    <h6 class="text-white">Upcoming</h6>
                </div>
                <div class="icon-left-course" style="margin-left: auto;">
                    <i class="fa-solid fa-bookmark" style="color: #77C8B0; font-size: 70px"></i>
                </div>
            </div>
        </div>
        <!-- Progress Courses -->
        <div class="col-xl-4">
            <div class="item-course d-flex align-items-center p-3" style="background-color:#FF6A59; border-radius: 12px; height: 100px">
                <div class="icon-course p-1 bg-white d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; border-radius: 10px;">
                    <i class="fa-solid fa-lightbulb fs-2" style="color: #FF6A59;"></i>
                </div>
                <div class="title-course p-2" style="margin-left: 10px;">
                    <h3 class="text-white fw-bolder p-0 m-0 fs-2">906</h3>
                    <h6 class="text-white">Progress Courses</h6>
                </div>
                <div class="icon-left-course" style="margin-left: auto;">
                    <i class="fa-solid fa-lightbulb" style="color: #77C8B0; font-size: 70px"></i>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Chart bieu do duoi Scrore Activity -->
    <div class="row">
        <div class="chart-activity-2 p-3 mt-3" style="background-color: #FFF0EE; border-radius: 20px;">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="p-2" style="font-size: 18px;">Score Activity</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Job</th>
                                <th scope="col">Goal</th>
                                <th scope="col">Action</th>
                                <th scope="col">Percent (%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Hoang Giang</td>
                                <td>20</td>
                                <td>Programer</td>
                                <td>Finished</td>
                                <td><i class="fa-solid fa-circle-check text-success"></i></td>
                                <td>100%</td>
                            </tr>
                            <tr>
                                <td>Phuong Ha</td>
                                <td>20</td>
                                <td>Tester</td>
                                <td>Unfinished</td>
                                <td><i class="fa-solid fa-circle-check"></i></td>
                                <td>60%</td>
                            </tr>
                            <tr>
                                <td>Quang Dao</td>
                                <td>20</td>
                                <td>Programmer Android</td>
                                <td>Unfinished</td>
                                <td><i class="fa-solid fa-circle-check"></i></td>
                                <td>60%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Calendar -->
    <div class="row">
        <div class="calendar mt-3" style="background-color: #FF6A59; border-radius: 10px;">
            <span></span>
            <nav aria-label="Page navigation example">
                <ul class="pagination d-flex justify-content-center">
                    <li class="page-item">
                        <a class="page-link" style="background-color: #FF6A59; border-color: #FF6A59;" href="#" aria-label="Previous">
                            <span class="text-white fs-4" aria-hidden="true"><</span>
                        </a>
                    </li>
                    <h2 class="text-white mt-1">September, 2023</h2>
                    <li class="page-item">
                        <a class="page-link" style="background-color: #FF6A59; border-color: #FF6A59;" href="#" aria-label="Next">
                            <span class="text-white fs-4" aria-hidden="true">></span>
                        </a>
                    </li>
                </ul>
            </nav>
            <table class="table table-bordered text-white" >
                <thead>
                    <tr>
                        <th>Thứ 2</th>
                        <th>Thứ 3</th>
                        <th>Thứ 4</th>
                        <th>Thứ 5</th>
                        <th>Thứ 6</th>
                        <th>Thứ 7</th>
                        <th>Chủ Nhật</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                        <td>19</td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>21</td>
                        <td>22</td>
                        <td>23</td>
                        <td>24</td>
                        <td>25</td>
                        <td>26</td>
                    </tr>
                    <tr>
                        <td>27</td>
                        <td>28</td>
                        <td>29</td>
                        <td>30</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Home page end -->

<?php
include_once 'layout/footer.php';
?>