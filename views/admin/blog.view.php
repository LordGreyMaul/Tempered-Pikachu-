<!-- Header and all elements - partials/head.php -->
<?php include('partials/head.php'); ?>
<!-- Nav bar for admin panel - partials/nav.php -->
<?php include('partials/nav.php'); ?>

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="#menu-toggle" class="btn btn-success" id="menu-toggle"><span class="glyphicon glyphicon-arrow-left"></span></a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1>Blog list</h1>
            </div>
        </div>
        <div class="row">
            <table class="table table-responsive table-bordered">
                <thead>
                <tr>
                    <td>Date</td>
                    <td>Title</td>
                    <td>Image</td>
                    <td>Description</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>21/5/2017</td>
                    <td>Pokemon loves manlove</td>
                    <td>image1.jpg</td>
                    <td>So long description here</td>
                    <td><a href="#"><span class="glyphicon glyphicon-blackboard"></span></a></td>
                    <td><a href="#"><span class="glyphicon glyphicon-remove"></span></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

<!-- Footer and scripts - partials/footer.php -->
<?php include('partials/footer.php');?>
