
<div class="row formtitle">
            <h1>THÊM MỚI LOẠI SIZE </h1>
        </div>
        <div class="row formcontent">
            <form action="index.php?act=addsize" method="post">
                <div class="row mb10">
                    Mã Size <br>
                    <input type="text" name="id" id="" disabled>
                </div> 
                <div class="row mb10">
                    Tên Size <br>
                <input type="text" name="size_name" id="">
                </div>
                <div class="row mb10">
                 <input type="submit" name = "add" value="THÊM MỚI">
                 <input type="reset" value="NHẬP LẠI">
                 <a href="index.php?act=listsize"><input type="button" value="DANH SÁCH"></a>
                </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
            </form>
        </div>
</div>