<?php
include('dbcon.php');

include('navbar.php');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
              <div class="card">
                <div class="card-header">
                    <h4>Register</h4>
                </div>
                <div class="card-body">
                <div class="form-group mb-3">
                        <label>First Name</label>
                        <input type="text" placeholder="Enter First Name" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label>Last Name</label>
                        <input type="text" placeholder="Enter Last Name" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label>Email ID</label>
                        <input type="text" placeholder="Enter Email Address" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label>Password</label>
                        <input type="text" placeholder="Enter password" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Login Now</button>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>