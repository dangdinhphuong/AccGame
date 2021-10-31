
<?php $__env->startSection('title', 'Danh sách sản phẩm'); ?> 
<?php $__env->startSection('main-content'); ?>
    <table class="table table-hovered">
        <thead>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Tên danh mục</th>
        </thead>
        <tbody>
        
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->category->cate_name); ?></td>
                   <?php echo e(var_dump($products[0]->category->cate_name)); ?> 
                </tr>                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\xampp\htdocs\PHP2\MVC\app\views/product/index.blade.php ENDPATH**/ ?>