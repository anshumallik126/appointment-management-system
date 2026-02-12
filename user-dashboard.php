<?php
$pageTitle = 'User Dashboard';
$pageName  = 'user-dashboard';
?>
<?php include 'includes/header.php' ?>
<?php include 'includes/style.php' ?>

<section class="user-dashboard pb-5 pb-md-0">
    <div class="container-fluid px-0 h-100">
        <div class="wrapper h-100">
            <nav class="left-sidebar h-100">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-dashboard-tab" data-toggle="tab" href="#nav-dashboard" role="tab"
                        aria-controls="nav-dashboard" aria-selected="false"><i class="fa fa-tachometer-alt mr-md-2"></i>
                        <span class="nav-text"> Dashboard </span></a>
                    <a class="nav-link" id="nav-myorder-tab" data-toggle="tab" href="#nav-myorder" role="tab"
                        aria-controls="nav-myorder" aria-selected="true"><i class="fa fa-list mr-md-2"></i> <span
                            class="nav-text"> My Bookings </span></a>

                    <a class="nav-link" id="nav-mycard-tab" data-toggle="tab" href="#nav-mycard" role="tab"
                        aria-controls="nav-mycard" aria-selected="true"><i class="fa fa-gift mr-md-2"></i> <span
                            class="nav-text"> My Cards </span></a>
                    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                        aria-controls="nav-profile" aria-selected="true"><i class="fa fa-user-circle mr-md-2"></i> <span
                            class="nav-text">Profile </span></a>
                    <a class="nav-link" id="nav-password-tab" data-toggle="tab" href="#nav-password" role="tab"
                        aria-controls="nav-password" aria-selected="true"><i class="fa fa-lock mr-md-2"></i> <span
                            class="nav-text">Change Password </span></a>
                </div>
            </nav>
            <div class="right-content h-100">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-dashboard" role="tabpanel"
                        aria-labelledby="nav-dashboard-tab">
                        <div class="dashboard-inner px-4 my-4">
                            <div class="profile-summary-card mb-4">
                                <div>
                                    <h4 class="mb-1 text-white">Welcome back, Dr. Smith 👋</h4>
                                    <p class="mb-0 text-white">Here’s your appointment overview for today</p>
                                </div>
                                <div class="text-right text-left-sm">
                                    <h5>12</h5>
                                    <span>Appointments Today</span>
                                </div>
                            </div>

                            <div class="row dashboard-stats">
                                <div class="col-md-3 mb-4">
                                    <div class="stat-card">
                                        <h6>Total Patients</h6>
                                        <h3>1,240</h3>
                                        <span class="text-success">+24 new this month</span>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <div class="stat-card">
                                        <h6>Today's Appointments</h6>
                                        <h3>12</h3>
                                        <span class="text-primary">3 pending</span>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <div class="stat-card">
                                        <h6>Completed Appointments</h6>
                                        <h3>856</h3>
                                        <span class="text-success">92% success rate</span>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <div class="stat-card">
                                        <h6>Total Revenue</h6>
                                        <h3>$14,580</h3>
                                        <span class="text-warning">This month</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="card dashboard-card h-100">
                                        <div class="card-head">
                                            Monthly Appointments
                                        </div>
                                        <div class="card-body">
                                            <div style="height: 300px">
                                                <canvas id="appointmentChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="dashboard-card h-100">
                                        <div class="card-head">
                                            Appointment Status
                                        </div>
                                        <div class="card-body">
                                            <div style="height: 300px">
                                                <canvas id="statusChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dashboard-card">
                                <div class="card-head">
                                    Today's Schedule
                                </div>
                                <div class="card-body p-2">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="sn" scope="col">SN</th>
                                                    <th class="patient-id" scope="col">Patient ID</th>
                                                    <th scope="col">Appointment Date </th>
                                                    <th scope="col">Patient Name </th>
                                                    <th scope="col">Mobile No</th>
                                                    <th scope="col">Age/Sex</th>
                                                    <th scope="col">Department / Doctor </th>
                                                    <th style="width: 150px;" class="order-status text-center">
                                                        Status
                                                    </th>
                                                    <th class="action" scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td><span class="order-id">42</span></td>
                                                    <td>2021-3-3</td>
                                                    <td>John Doe</td>
                                                    <td>9804335248</td>
                                                    <td>56/Male</td>
                                                    <td>General/Dr. Smith</td>

                                                    <td>
                                                        <span class="status status-pending">Pending</span>
                                                    </td>
                                                    <td>
                                                        <div class="action-btn">
                                                            <button data-toggle="modal"
                                                                data-target="#booking-detail-modal"
                                                                class="badge btn-like-a px-3 py-2 badge-secondary text-white">View</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td><span class="order-id">42</span></td>
                                                    <td>2021-3-3</td>
                                                    <td>John Doe</td>
                                                    <td>9804335248</td>
                                                    <td>56/Male</td>
                                                    <td>General/Dr. Smith</td>

                                                    <td>
                                                        <span class="status status-pending">Pending</span>
                                                    </td>
                                                    <td>
                                                        <div class="action-btn">
                                                            <button data-toggle="modal"
                                                                data-target="#booking-detail-modal"
                                                                class="badge btn-like-a px-3 py-2 badge-secondary text-white">View</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td><span class="order-id">42</span></td>
                                                    <td>2021-3-3</td>
                                                    <td>John Doe</td>
                                                    <td>9804335248</td>
                                                    <td>56/Male</td>
                                                    <td>General/Dr. Smith</td>

                                                    <td>
                                                        <span class="status status-pending">Pending</span>
                                                    </td>
                                                    <td>
                                                        <div class="action-btn">
                                                            <button data-toggle="modal"
                                                                data-target="#booking-detail-modal"
                                                                class="badge btn-like-a px-3 py-2 badge-secondary text-white">View</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td><span class="order-id">42</span></td>
                                                    <td>2021-3-3</td>
                                                    <td>John Doe</td>
                                                    <td>9804335248</td>
                                                    <td>56/Male</td>
                                                    <td>General/Dr. Smith</td>
                                                    <td>
                                                        <span class="status status-cancelled disabled">Cancelled</span>
                                                    </td>
                                                    <td>
                                                        <div class="action-btn">
                                                            <button data-toggle="modal"
                                                                data-target="#booking-detail-modal"
                                                                class="badge btn-like-a px-3 py-2 badge-secondary text-white">View</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td><span class="order-id">42</span></td>
                                                    <td>2021-3-3</td>
                                                    <td>John Doe</td>
                                                    <td>9804335248</td>
                                                    <td>56/Male</td>
                                                    <td>General/Dr. Smith</td>
                                                    <td>
                                                        <span class="status status-confirmed">Confirmed</span>
                                                    </td>
                                                    <td>
                                                        <div class="action-btn">
                                                            <button data-toggle="modal"
                                                                data-target="#booking-detail-modal"
                                                                class="badge btn-like-a px-3 py-2 badge-secondary text-white">View</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-footer d-flex align-items-center justify-content-between">
                                        <div class="showing my-2">
                                            Showing 1 - 10 of 100 items
                                        </div>
                                        <div class="pagination my-2">
                                            <a href="#" class="page-link"><i class="fa fa-chevron-left"></i></a>
                                            <a href="#" class="page-link current">1</a>
                                            <a href="#" class="page-link">2</a>
                                            <a href="#" class="page-link">3</a>
                                            <a href="#" class="page-link"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-myorder" role="tabpanel" aria-labelledby="nav-myorder-tab">

                        <div class="bread px-4">
                            <a class="text-primary" href="#">Home <i class="fa fa-chevron-right mx-2"></i></a>
                            <span>My
                                Bookings</span>
                        </div>
                        <div class="myorder-inner px-4 my-4">
                            <form class="filter d-flex justify-content-end mb-4">
                                <select class="select w-100">
                                    <option selected>Booking Status</option>
                                    <option>Success</option>
                                    <option>Pending</option>
                                    <option>Cancelled</option>
                                </select>
                                <input style="height: 42px;" type="text" class="form-control mx-3 border-style-custom"
                                    placeholder="Booking Date" id="bookingDate">
                                <button class="theme-btn text-capitalize">Search</button>
                                <button class="theme-btn ml-2 reset-input-btn"><i class="fa fa-redo-alt"></i></button>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="sn" scope="col">SN</th>
                                            <th class="order-id" scope="col">Booking ID</th>
                                            <th scope="col">Check In</th>
                                            <th scope="col">Check Out</th>
                                            <th scope="col">No. of Rooms</th>
                                            <th scope="col">No. of Guests</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Created At</th>
                                            <th style="width: 150px;" class="order-status text-center">Status</th>
                                            <th class="action" scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><span class="order-id">42</span></td>
                                            <td>2021-3-3</td>
                                            <td>2021-3-8</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td><span class="price float-right">$100.26</span></td>
                                            <td><span class="date mr-3"> 2021-3-3 </span> <span class="time"> 01:56
                                                    PM
                                                </span></td>
                                            <td>
                                                <span class="status status-pending">Pending</span>
                                            </td>
                                            <td>
                                                <div class="action-btn">
                                                    <button data-toggle="modal" data-target="#booking-detail-modal"
                                                        class="badge btn-like-a px-3 py-2 badge-secondary text-white">View</button>
                                                    <button
                                                        class="badge btn-like-a px-3 py-2 badge-warning text-white btn-disabled">Cancel</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td><span class="order-id">42</span></td>
                                            <td>2021-3-3</td>
                                            <td>2021-3-8</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td><span class="price float-right">$100.26</span></td>
                                            <td><span class="date mr-3"> 2021-3-3 </span> <span class="time"> 01:56
                                                    PM
                                                </span></td>
                                            <td>
                                                <span class="status status-confirmed">Confirmed</span>
                                            </td>
                                            <td>
                                                <div class="action-btn">
                                                    <button data-toggle="modal" data-target="#order-detail-modal"
                                                        class="badge btn-like-a px-3 py-2 badge-secondary text-white">View</button>
                                                    <button
                                                        class="badge btn-like-a px-3 py-2 badge-warning text-white">Cancel</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td><span class="order-id">42</span></td>
                                            <td>2021-3-3</td>
                                            <td>2021-3-8</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td><span class="price float-right">$100.26</span></td>
                                            <td><span class="date mr-3"> 2021-3-3 </span> <span class="time"> 01:56
                                                    PM
                                                </span></td>
                                            <td>
                                                <span class="status status-cancelled disabled">Cancelled</span>
                                            </td>
                                            <td>
                                                <div class="action-btn">
                                                    <button data-toggle="modal" data-target="#order-detail-modal"
                                                        class="badge btn-like-a px-3 py-2 badge-secondary text-white">View</button>
                                                    <button
                                                        class="badge btn-like-a px-3 py-2 badge-warning text-white">Cancel</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td><span class="order-id">42</span></td>
                                            <td>2021-3-3</td>
                                            <td>2021-3-8</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td><span class="price float-right">$100.26</span></td>
                                            <td><span class="date mr-3"> 2021-3-3 </span> <span class="time"> 01:56
                                                    PM
                                                </span></td>
                                            <td>
                                                <span class="status status-cancelled">Cancelled</span>
                                            </td>
                                            <td>
                                                <div class="action-btn">
                                                    <button data-toggle="modal" data-target="#order-detail-modal"
                                                        class="badge btn-like-a px-3 py-2 badge-secondary text-white">View</button>
                                                    <button
                                                        class="badge btn-like-a px-3 py-2 badge-warning text-white">Cancel</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td><span class="order-id">42</span></td>
                                            <td>2021-3-3</td>
                                            <td>2021-3-8</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td><span class="price float-right">$100.26</span></td>
                                            <td><span class="date mr-3"> 2021-3-3 </span> <span class="time"> 01:56
                                                    PM
                                                </span></td>
                                            <td>
                                                <span class="status status-cancelled_by_customer">Cancelled</span>
                                            </td>
                                            <td>
                                                <div class="action-btn">
                                                    <button data-toggle="modal" data-target="#order-detail-modal"
                                                        class="badge btn-like-a px-3 py-2 badge-secondary text-white">View</button>
                                                    <button
                                                        class="badge btn-like-a px-3 py-2 badge-warning text-white">Cancel</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-footer d-flex align-items-center justify-content-between">
                                <div class="showing my-2">
                                    Showing 1 - 10 of 100 items
                                </div>
                                <div class="pagination my-2">
                                    <a href="#" class="page-link"><i class="fa fa-chevron-left"></i></a>
                                    <a href="#" class="page-link current">1</a>
                                    <a href="#" class="page-link">2</a>
                                    <a href="#" class="page-link">3</a>
                                    <a href="#" class="page-link"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-mycard" role="tabpanel" aria-labelledby="nav-mycard-tab">
                        <div class="bread px-4">
                            <a class="text-primary" href="#">Home <i class="fa fa-chevron-right mx-2"></i></a>
                            <span>Gift
                                Cards</span>
                        </div>
                        <div class="mycard-inner px-4 my-4">
                            <div class="d-flex justify-content-end mb-4">
                                <button class="theme-btn ml-2 add-new-card-info-btn" data-toggle="modal"
                                    data-target="#add-new-card-info-modal"><i class="fa fa-plus mr-2"></i>Add
                                    New</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">SN</th>
                                            <th scope="col">Card Type</th>
                                            <th scope="col">Expiry Date</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">1</td>
                                            <td>VISA</td>
                                            <td>2021-09-12 12:35 PM</td>
                                            <td>$ 50.00</td>
                                            <td>
                                                <div class="action-btn">
                                                    <button
                                                        class="badge px-3 py-2 badge-secondary mr-2 btn-like-a">Edit</button>
                                                    <button
                                                        class="badge btn-like-a px-3 py-2 badge-danger text-white">Delete</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td scope="row">2</td>
                                            <td>MasterCard</td>
                                            <td>2021-09-12 12:35 PM</td>
                                            <td>$ 100.00</td>
                                            <td>
                                                <div class="action-btn">
                                                    <button
                                                        class="badge px-3 py-2 badge-secondary mr-2 btn-like-a">Edit</button>
                                                    <button
                                                        class="badge btn-like-a px-3 py-2 badge-danger text-white">Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">3</td>
                                            <td>AMEX</td>
                                            <td>2021-09-12 12:35 PM</td>
                                            <td>$ 15.00</td>
                                            <td>
                                                <div class="action-btn">
                                                    <button
                                                        class="badge px-3 py-2 badge-secondary mr-2 btn-like-a">Edit</button>
                                                    <button
                                                        class="badge btn-like-a px-3 py-2 badge-danger text-white">Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-footer d-flex align-items-center justify-content-between">
                                <div class="showing my-2">
                                    Showing 1 - 10 of 100 items
                                </div>
                                <div class="pagination my-2">
                                    <a href="#" class="page-link"><i class="fa fa-chevron-left"></i></a>
                                    <a href="#" class="page-link current">1</a>
                                    <a href="#" class="page-link">2</a>
                                    <a href="#" class="page-link">3</a>
                                    <a href="#" class="page-link"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="bread px-4">
                            <a class="text-primary" href="#">Home <i class="fa fa-chevron-right mx-2"></i></a>
                            <span>My
                                Profile</span>
                        </div>
                        <div class="container-fluid">
                            <div class="row align-items-stretch">
                                <div class="col-md-6 d-flex">
                                    <div class="profile-inner my-4">
                                        <div class="card profile-card h-100 w-100">
                                            <div class="profile-header">
                                                <img src="img/user-profile.jpg" class="profile-img mb-3">
                                                <h3 class="text-white">John Doe</h3>
                                                <p class="mb-2">Patient | Appointment Management System</p>
                                                <span class="badge badge-light text-success px-3 py-2">
                                                    <i class="fa fa-check-circle mr-1"></i> Active Account
                                                </span>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <p><span class="info-label">Email:</span> johndoe@email.com</p>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <p><span class="info-label">Phone:</span> +977 9800000000</p>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <p><span class="info-label">Date of Birth:</span> 15 Jan 1995
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <p><span class="info-label">Gender:</span> Male</p>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <p><span class="info-label">Blood Group:</span> O+</p>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <p><span class="info-label">Address:</span> Kathmandu, Nepal</p>
                                                    </div>
                                                </div>

                                                <div class="text-center mt-3">
                                                    <button type="button" id="editProfileBtn" class="theme-btn">
                                                        <i class="fa fa-edit mr-2"></i> Edit Profile
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex">
                                    <div class="profile-inner my-4">
                                        <div class="card profile-form-wrapper h-100 w-100">
                                            <div class="card-body">
                                                <form class="ui form cs-validation" action="#">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group field mb-3">
                                                                <label>Full Name</label>
                                                                <input name="name" type="text" class="form-control"
                                                                    placeholder="Example: John Doe">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group field mb-3">
                                                                <label>Email</label>
                                                                <input disabled="disabled" value="howdy@gmail.com"
                                                                    name="email" type="text" class="form-control"
                                                                    placeholder="Example: yourmail@example.com">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group field mb-3">
                                                                <label>Phone</label>
                                                                <input name="phone" type="text" class="form-control"
                                                                    placeholder="Example: 07911 - 123456">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group field mb-3">
                                                                <label>Street</label>
                                                                <input name="street" type="text" class="form-control"
                                                                    placeholder="Example: 13 Small Street">
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="form-group field mb-3">
                                                                <label>City</label>
                                                                <input name="city" type="password" class="form-control"
                                                                    placeholder="Example: Bristol">
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="form-group field mb-3">
                                                                <label>State</label>
                                                                <select id="country" name="country"
                                                                    class="form-control select w-100">
                                                                    <option value="" disabled selected>Select a country
                                                                    </option>
                                                                    <option value="AF">Afghanistan</option>
                                                                    <option value="AL">Albania</option>
                                                                    <option value="DZ">Algeria</option>
                                                                    <option value="AD">Andorra</option>
                                                                    <option value="AO">Angola</option>
                                                                    <option value="AG">Antigua and Barbuda</option>
                                                                    <option value="AR">Argentina</option>
                                                                    <option value="AM">Armenia</option>
                                                                    <option value="AU">Australia</option>
                                                                    <option value="AT">Austria</option>
                                                                    <option value="AZ">Azerbaijan</option>
                                                                    <option value="BS">Bahamas</option>
                                                                    <option value="BH">Bahrain</option>
                                                                    <option value="BD">Bangladesh</option>
                                                                    <option value="BB">Barbados</option>
                                                                    <option value="BY">Belarus</option>
                                                                    <option value="BE">Belgium</option>
                                                                    <option value="BZ">Belize</option>
                                                                    <option value="BJ">Benin</option>
                                                                    <option value="BT">Bhutan</option>
                                                                    <option value="BO">Bolivia</option>
                                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                                    <option value="BW">Botswana</option>
                                                                    <option value="BR">Brazil</option>
                                                                    <option value="BN">Brunei</option>
                                                                    <option value="BG">Bulgaria</option>
                                                                    <option value="BF">Burkina Faso</option>
                                                                    <option value="BI">Burundi</option>
                                                                    <option value="KH">Cambodia</option>
                                                                    <option value="CM">Cameroon</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="CV">Cape Verde</option>
                                                                    <option value="CF">Central African Republic</option>
                                                                    <option value="TD">Chad</option>
                                                                    <option value="CL">Chile</option>
                                                                    <option value="CN">China</option>
                                                                    <option value="CO">Colombia</option>
                                                                    <option value="KM">Comoros</option>
                                                                    <option value="CG">Congo</option>
                                                                    <option value="CR">Costa Rica</option>
                                                                    <option value="HR">Croatia</option>
                                                                    <option value="CU">Cuba</option>
                                                                    <option value="CY">Cyprus</option>
                                                                    <option value="CZ">Czech Republic</option>
                                                                    <option value="DK">Denmark</option>
                                                                    <option value="DJ">Djibouti</option>
                                                                    <option value="DM">Dominica</option>
                                                                    <option value="DO">Dominican Republic</option>
                                                                    <option value="EC">Ecuador</option>
                                                                    <option value="EG">Egypt</option>
                                                                    <option value="SV">El Salvador</option>
                                                                    <option value="GQ">Equatorial Guinea</option>
                                                                    <option value="ER">Eritrea</option>
                                                                    <option value="EE">Estonia</option>
                                                                    <option value="ET">Ethiopia</option>
                                                                    <option value="FJ">Fiji</option>
                                                                    <option value="FI">Finland</option>
                                                                    <option value="FR">France</option>
                                                                    <option value="GA">Gabon</option>
                                                                    <option value="GM">Gambia</option>
                                                                    <option value="GE">Georgia</option>
                                                                    <option value="DE">Germany</option>
                                                                    <option value="GH">Ghana</option>
                                                                    <option value="GR">Greece</option>
                                                                    <option value="GT">Guatemala</option>
                                                                    <option value="GN">Guinea</option>
                                                                    <option value="HT">Haiti</option>
                                                                    <option value="HN">Honduras</option>
                                                                    <option value="HU">Hungary</option>
                                                                    <option value="IS">Iceland</option>
                                                                    <option value="IN">India</option>
                                                                    <option value="ID">Indonesia</option>
                                                                    <option value="IR">Iran</option>
                                                                    <option value="IQ">Iraq</option>
                                                                    <option value="IE">Ireland</option>
                                                                    <option value="IL">Israel</option>
                                                                    <option value="IT">Italy</option>
                                                                    <option value="JM">Jamaica</option>
                                                                    <option value="JP">Japan</option>
                                                                    <option value="JO">Jordan</option>
                                                                    <option value="KZ">Kazakhstan</option>
                                                                    <option value="KE">Kenya</option>
                                                                    <option value="KW">Kuwait</option>
                                                                    <option value="KG">Kyrgyzstan</option>
                                                                    <option value="LA">Laos</option>
                                                                    <option value="LV">Latvia</option>
                                                                    <option value="LB">Lebanon</option>
                                                                    <option value="LY">Libya</option>
                                                                    <option value="LT">Lithuania</option>
                                                                    <option value="LU">Luxembourg</option>
                                                                    <option value="MG">Madagascar</option>
                                                                    <option value="MY">Malaysia</option>
                                                                    <option value="MV">Maldives</option>
                                                                    <option value="ML">Mali</option>
                                                                    <option value="MT">Malta</option>
                                                                    <option value="MX">Mexico</option>
                                                                    <option value="MD">Moldova</option>
                                                                    <option value="MN">Mongolia</option>
                                                                    <option value="ME">Montenegro</option>
                                                                    <option value="MA">Morocco</option>
                                                                    <option value="MZ">Mozambique</option>
                                                                    <option value="MM">Myanmar</option>
                                                                    <option value="NA">Namibia</option>
                                                                    <option value="NP">Nepal</option>
                                                                    <option value="NL">Netherlands</option>
                                                                    <option value="NZ">New Zealand</option>
                                                                    <option value="NI">Nicaragua</option>
                                                                    <option value="NG">Nigeria</option>
                                                                    <option value="NO">Norway</option>
                                                                    <option value="OM">Oman</option>
                                                                    <option value="PK">Pakistan</option>
                                                                    <option value="PA">Panama</option>
                                                                    <option value="PG">Papua New Guinea</option>
                                                                    <option value="PY">Paraguay</option>
                                                                    <option value="PE">Peru</option>
                                                                    <option value="PH">Philippines</option>
                                                                    <option value="PL">Poland</option>
                                                                    <option value="PT">Portugal</option>
                                                                    <option value="QA">Qatar</option>
                                                                    <option value="RO">Romania</option>
                                                                    <option value="RU">Russia</option>
                                                                    <option value="SA">Saudi Arabia</option>
                                                                    <option value="SN">Senegal</option>
                                                                    <option value="RS">Serbia</option>
                                                                    <option value="SG">Singapore</option>
                                                                    <option value="SK">Slovakia</option>
                                                                    <option value="SI">Slovenia</option>
                                                                    <option value="ZA">South Africa</option>
                                                                    <option value="KR">South Korea</option>
                                                                    <option value="ES">Spain</option>
                                                                    <option value="LK">Sri Lanka</option>
                                                                    <option value="SE">Sweden</option>
                                                                    <option value="CH">Switzerland</option>
                                                                    <option value="TW">Taiwan</option>
                                                                    <option value="TZ">Tanzania</option>
                                                                    <option value="TH">Thailand</option>
                                                                    <option value="TN">Tunisia</option>
                                                                    <option value="TR">Turkey</option>
                                                                    <option value="UG">Uganda</option>
                                                                    <option value="UA">Ukraine</option>
                                                                    <option value="AE">United Arab Emirates</option>
                                                                    <option value="GB">United Kingdom</option>
                                                                    <option value="US" selected>United States</option>
                                                                    <option value="UY">Uruguay</option>
                                                                    <option value="UZ">Uzbekistan</option>
                                                                    <option value="VE">Venezuela</option>
                                                                    <option value="VN">Vietnam</option>
                                                                    <option value="YE">Yemen</option>
                                                                    <option value="ZM">Zambia</option>
                                                                    <option value="ZW">Zimbabwe</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group field mb-3">
                                                                <label>Zip Code</label>
                                                                <input name="zip" type="text" class="form-control"
                                                                    placeholder="Example: 12345">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 py-2">
                                                            <button class="submit theme-btn px-5 py-2">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab">
                        <div class="bread px-4">
                            <a class="text-primary" href="#">Home <i class="fa fa-chevron-right mx-2"></i></a>
                            <span>Change Password</span>
                        </div>
                        <div class="address-inner px-4 my-4">
                            <form class="ui form user-password-form cs-validation prevent-enter" action="#">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group field mb-3">
                                            <label>Old Password</label>
                                            <div class="input-group">
                                                <input autocomplete="current-password" name="old_password"
                                                    type="password" class="form-control" placeholder="">
                                                <button type="button" class="btn-like-a psw-show-btn hide-psw">
                                                    <i class="fa fa-eye-slash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group field mb-3">
                                            <label>New Password</label>
                                            <div class="input-group">
                                                <input autocomplete="new-password" name="password" type="password"
                                                    class="form-control" placeholder="">
                                                <button type="button" class="btn-like-a psw-show-btn hide-psw">
                                                    <i class="fa fa-eye-slash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group field mb-3">
                                            <label>Confirm New Password</label>
                                            <div class="input-group">
                                                <input autocomplete="new-password" name="password_confirmation"
                                                    type="password" class="form-control" placeholder="">
                                                <button type="button" class="btn-like-a psw-show-btn hide-psw">
                                                    <i class="fa fa-eye-slash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="response-text text-center mb-3 mx-3 py-2 px-3 d-none"></div>

                                    <div class="col-12 py-2">
                                        <button class="theme-btn px-5 py-2 password-update-btn">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'includes/scripts.php' ?>