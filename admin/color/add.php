
<div class="row formtitle">
            <h1>THÊM MỚI LOẠI GIÀY </h1>
        </div>
        <div class="row formcontent">
            <form action="index.php?act=addcolor" method="post">
                <div class="row mb10">
                    Mã loại <br>
                    <input type="text" name="catagory_id" id="" disabled>
                </div> 
                <div class="row mb10">
                    Tên Loại <br>
                <input type="text" name="name" id="">
                </div>
                <div class="row mb10">
                 <input type="submit" name = "add" value="THÊM MỚI">
                 <input type="reset" value="NHẬP LẠI">
                 <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
            </form>
        </div>
</div>