 <?= $this->extend('header'); 
 $this->section('content');?>
                    <!--/.Content Header (Page header)--> 
                    <div class="body-content">
                
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-3 mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-17 font-weight-600 mb-0">Percentage Control</h6>
                                            </div>
                                            <div class="text-right">
                                                <div class="actions">
                                                    <a href="#" class="action-item"><i class="ti-reload"></i></a>
                                                    <div class="dropdown action-item" data-toggle="dropdown">
                                                        <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item">Refresh</a>
                                                            <a href="#" class="dropdown-item">Manage Widgets</a>
                                                            <a href="#" class="dropdown-item">Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart mb-3">
                                            <canvas id="doughutChart" height="310"></canvas>
                                        </div>
                                        <div class="chart-legend">
                                            <div class="chart-legend-item">
                                                <div class="chart-legend-color kelly-green"></div>
                                                <p>From Multan</p>
                                                <p class="percentage text-muted">63.259 %</p>
                                            </div>
                                            <div class="chart-legend-item">
                                                <div class="chart-legend-color kelly-green2"></div>
                                                <p>Your Lahore</p>
                                                <p class="percentage text-muted">25.321 %</p>
                                            </div>
                                            <div class="chart-legend-item">
                                                <div class="chart-legend-color whisper"></div>
                                                <p>Others</p>
                                                <p class="percentage text-muted">11.42 %</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-xl-9">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h2 class="fs-18 font-weight-bold mb-0">Bar chart</h2>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="barChart" height="128"></canvas>
                                    </div>
                                </div>
                            </div>
                                    <div class="card-body">
                                        <div class=table-responsive>
                                            <!--<table class="table table-sm table-nowrap card-table">-->
                                            <table class="table display table-bordered table-striped table-hover bg-white m-0 card-table">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Phone</th>
                                                        <th>Street Address</th>
                                                        <th>% Share</th>
                                                        <th>City</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-group">
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Melissa Ayre">
                                                                    <img src="assets/img/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Karen Robinson">
                                                                    <img src="assets/img/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Miyah Myles">
                                                                    <img src="assets/img/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Daniela Dewitt">
                                                                    <img src="assets/img/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>Naeem Khan</td>
                                                        <td>123 456 7890</td>
                                                        <td>294-318 Duis Ave</td>
                                                        <td>
                                                            <div class="sparkline1"></div>
                                                        </td>
                                                        <td>Noakhali</td>
                                                        <td>
                                                            <a href="#" class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i></a>
                                                            <a href="#" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-group">
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Miyah Myles">
                                                                    <img src="assets/img/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Daniela Dewitt">
                                                                    <img src="assets/img/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>Tuhin Sarkar</td>
                                                        <td>123 456 7890</td>
                                                        <td>680-1097 Mi Rd.</td>
                                                        <td>
                                                            <div class="sparkline2"></div>
                                                        </td>
                                                        <td>Lavoir</td>
                                                        <td>
                                                            <a href="#" class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i></a>
                                                            <a href="#" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-group">
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Karen Robinson">
                                                                    <img src="assets/img/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Miyah Myles">
                                                                    <img src="assets/img/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Daniela Dewitt">
                                                                    <img src="assets/img/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>Tanjil Ahmed</td>
                                                        <td>456 789 1230</td>
                                                        <td>Ap #289-8161 In Avenue</td>
                                                        <td>
                                                            <div class="sparkline3"></div>
                                                        </td>
                                                        <td>Dhaka</td>
                                                        <td>
                                                            <a href="#" class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i></a>
                                                            <a href="#" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-group">
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Melissa Ayre">
                                                                    <img src="assets/img/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Karen Robinson">
                                                                    <img src="assets/img/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Daniela Dewitt">
                                                                    <img src="assets/img/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>Sourav</td>
                                                        <td>789 123 4560</td>
                                                        <td>226-4861 Augue. St.</td>
                                                        <td>
                                                            <div class="sparkline4"></div>
                                                        </td>
                                                        <td>Rongpur</td>
                                                        <td>
                                                            <a href="#" class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i></a>
                                                            <a href="#" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-group">
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Melissa Ayre">
                                                                    <img src="assets/img/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Karen Robinson">
                                                                    <img src="assets/img/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Miyah Myles">
                                                                    <img src="assets/img/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Daniela Dewitt">
                                                                    <img src="assets/img/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>Jahangir Alam</td>
                                                        <td>(01662) 59083</td>
                                                        <td>3219 Elit Avenue</td>
                                                        <td>
                                                            <div class="sparkline5"></div>
                                                        </td>
                                                        <td>Chittagong</td>
                                                        <td>
                                                            <a href="#" class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i></a>
                                                            <a href="#" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-group">
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Melissa Ayre">
                                                                    <img src="assets/img/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Karen Robinson">
                                                                    <img src="assets/img/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Daniela Dewitt">
                                                                    <img src="assets/img/avatar-5.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>Brielle Williamson</td>
                                                        <td>123 456 7890</td>
                                                        <td>Dhaka-1229, Bangladesh</td>
                                                        <td>
                                                            <div class="sparkline6"></div>
                                                        </td>
                                                        <td>Barisal</td>
                                                        <td>
                                                            <a href="#" class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i></a>
                                                            <a href="#" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.body content-->
                </div><!--/.main content-->
               
               <?= $this->endsection();?>