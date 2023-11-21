<?php
    if(is_array($size)){
        extract($size);
    }
?>
<div class="row formtitle">
            <h1>CẬP NHẬP LOẠI GIÀY</h1>
        </div>
        <div class="row formcontent">
            <form action="index.php?act=updatesize" method="post">
                <div class="row mb10">
                    Mã Size <br>
                    <input type="text" name="id" id="" disabled >
                </div> 
                <div class="row mb10">
                    Tên Size</S> <br>
                <input type="text" name="size_name" id="" value="<?=$size_name ?>">
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                 <input type="submit" name = "update" value="CẬP NHẬP">
                 <input type="reset" name="" value="NHẬP LẠI">
                 <a href="index.php?act=listsize"><input type="button" value="DANH SÁCH"></a>
                </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
            </form>
        </div>
</div>