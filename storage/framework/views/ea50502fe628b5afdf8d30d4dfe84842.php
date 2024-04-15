<body>
    <?php $__currentLoopData = $uploads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <img src="<?php echo e(asset('storage/' . $image->path)); ?>" alt="image" />
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <form action="/upload" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="file" name="uploaded_file" />
        <button type="submit">Upload</button>
    </form>

</body><?php /**PATH /var/www/html/resources/views/uploads.blade.php ENDPATH**/ ?>