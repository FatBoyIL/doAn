<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row formtitle">
            <h1>CẬP NHẬP LOẠI GIÀY</h1>
        </div>
        <div class="row formcontent">
            <form action="index.php?act=updatedm" method="post">
                <div class="row mb10">
                    Mã loại <br>
                    <input type="text" name="category_id" id="" disabled >
                </div> 
                <div class="row mb10">
                    Tên Loại <br>
                <input type="text" name="name" id="" value="<?php if(isset($name)&&($name!=""))echo $name;?>">
                </div>
                <div class="row mb10">
                    <input type="hidden" name="category_id" value="<?php if(isset($name)&&($name!=""))echo $category_id;?>">
                 <input type="submit" name = "update" value="CẬP NHẬP">
                 <input type="reset" name="" value="NHẬP LẠI">
                 <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
            </form>
        </div>
</div>
