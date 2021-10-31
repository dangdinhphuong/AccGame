<form action="save-cate" method="post">
    <div>
        <label for="">Tên danh mục</label>
        <input type="text" name="cate_name">
    </div>
    <div>
        <label for="">Mô tả</label>
        <textarea name="desc" cols="50" rows="5"></textarea>
    </div>
    <div>
        <label for="">Hiển thị ở menu?</label>
        <input type="checkbox" name="show_menu" value="1">
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>