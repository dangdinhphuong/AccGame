
<?php echo e($phuong); ?>

<form action="save-edit-cate?id=<?php echo e($phuong->id); ?>" method="post">
    <div>
        <label for="">Tên danh mục</label>
        <input type="text" name="cate_name" value="<?php echo e($phuong->cate_name); ?>">
    </div>
    <div>
        <label for="">Mô tả</label>
        <textarea name="desc" cols="50" rows="5"><?php echo e($phuong->desc); ?></textarea>
    </div>
    <div>
        <label for="">Hiển thị ở menu?</label>
        <input type="checkbox"
            <?php if($phuong->show_menu == 1):?>
            checked
            <?php endif?>
            name="show_menu" value="1">
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form><?php /**PATH O:\xampp\htdocs\PHP2\Lesson4\MVC\app\views\cates/edit.blade.php ENDPATH**/ ?>