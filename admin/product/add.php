<div class="row formtitle">
    <h1>THÊM MỚI GIÀY </h1>
</div>
<div class="row formcontent">
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <div class="row mb10">
            Loại Giày <br>
            <select name="category_id">
                <?php
                foreach ($listcategory as $category) {
                    extract($category);
                    echo '<option value="' . $category_id . '">' . $name . '</option>';
                }
                ?>
            </select>

        </div>
        <div class="row mb10">
            Tên giày <br>
            <input type="text" name="title">
        </div>
        <div class="row mb10">
            Giá <br>
            <input type="text" name="price">
        </div>
        <div class="row mb10">
            Hình ảnh <br>
            <input type="file" name="thumbnail">
        </div>
        <div class="row mb10">
            Mô tả <br>
            <textarea name="description" cols="30" rows="10"></textarea>
        </div>
        <div class="row mb10">
            <input type="submit" name="add" value="THÊM MỚI">
            <input type="reset" value="NHẬP LẠI">
            <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
            echo $thongbao;
        ?>
    </form>
</div>
</div>