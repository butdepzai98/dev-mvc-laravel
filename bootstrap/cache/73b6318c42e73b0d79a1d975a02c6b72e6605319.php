<?php $__env->startSection('header-content'); ?>
    <div class="page-header">
        <h3 class="page-title">
        Post
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
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Post Table</h4>

        <div class="float-right">
            <button formaction="post/deleteall" type="submit" class="btn btn-gradient-danger"> Delete All Selected</button>&emsp;
            <a href="http://my-php-mvc.test/admin/category/create" class="btn btn-gradient-success"><span class="mdi mdi-library-plus text-white"></span> Thêm mới</a>
        </div>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input selectall">
                            <i class="input-helper"></i></label>
                    </div>
                </th>
                <th>STT</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Controll</th>
            </tr>
            </thead>
            <tbody>
            <?php if($categories): ?>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td scope="row">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" name="ids[]" value="<?php echo e($category->id); ?>" class="form-check-input selectbox">
                                <i class="input-helper"></i></label>
                        </div>
                    </td>
                    <td><?php echo e($key++); ?></td>
                    <td>
                        <?php echo e($category->name); ?>

                    </td>
                    <td>
                        <?php echo e($category->slug); ?>

                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            </tbody>
        </table>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layout/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\my-php-mvc\resources\views/admin/pages/category/index.blade.php ENDPATH**/ ?>