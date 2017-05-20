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
                <h1>Add Blog</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Blog Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Blog</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Featured Image</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Top level Image</p>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

<!-- Footer and scripts - partials/footer.php -->
<?php include('partials/footer.php');?>
