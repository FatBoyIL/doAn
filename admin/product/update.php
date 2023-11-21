<?php
    if(is_array($product)){
        extract($product);
    }
    $hinhpath = "../upload/" . $product['thumbnail'];
    $thumbnail = ''; // Initialize the variable

    if (is_file($hinhpath)) {
        $thumbnail = "<img src='" . $hinhpath . "' height='150' >";
    } else {
        $thumbnail = "no photo";
    }
?>
<div class="row formtitle">
            <h1>CẬP NHẬP GIÀY</h1>
        </div>
        <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    Loai Giay <br>
                    <select name="category_id">
                <?php
                foreach ($listcategory as $category) {
                    extract($category);
                    if($category_id==$product['category_id']){
                        echo '<option value="' . $category_id . '" selected>' . $name . '</option>';
                    }else
                    echo '<option value="' . $category_id . '">""</option>';
                }
                ?>
            </select>
                </div> 
                <div class="row mb10">
                    Tên giày <br>
                <input type="text" name="title" value="<?=$title?>" >
                </div>
                <div class="row mb10">
                    Giá <br>
                <input type="text" name="price" value="<?=$price?>">
                </div>
                <div class="row mb10">
                    Hình ảnh <br>
                <input type="file" name="thumbnail" >
                <?=$thumbnail?>
                </div>
                <div class="row mb10">
                    Mô tả <br>
                <textarea name="description" cols="30" rows="10" > <?=$description?></textarea>
                </div>
                <div class="row mb10">
                <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                 <input type="submit" name = "update" value="CẬP NHẬP">
                 <input type="reset" value="NHẬP LẠI">
                 <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
            </form>
        </div>
</div>