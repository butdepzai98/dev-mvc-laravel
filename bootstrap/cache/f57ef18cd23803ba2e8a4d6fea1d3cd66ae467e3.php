<?php $__env->startSection('header-content'); ?>
    <div class="page-header">
        <h3 class="page-title">
            Add Post
            <span class="ml-2 h6 font-weight-normal">Do big things with Gleam.</span>
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Default form</h4>

                <form class="forms-sample" action="" method="POST">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Category Name</label>
                        <input type="text" class="form-control" name="txtName" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Slug</label>
                        <textarea class="form-control" name="txtDetail" id="" rows="3" placeholder="Detail"></textarea>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            Tiếp tục thêm
                            <i class="input-helper"></i></label>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <a class="btn btn-light" href="">Cancel</a>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\my-php-mvc\resources\views/admin/pages/category/createOrEdit.blade.php ENDPATH**/ ?>