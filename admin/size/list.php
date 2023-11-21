<div class="row formtitle">
                <h1>DANH SÁCH LOẠI SIZE</h1>
        </div>
        <div class="row formcontent">
            <div class="row mb10 formdssp">
                <table>
                    <tr>
                        <th></th>
                        <th>STT</th>
                        <th>TÊN SIZE</th>
                        <th></th>
                    </tr>
                    <?php
                    $i=0;
                        foreach ($listsize as $size){
                            extract($size);
                            $suasize="index.php?act=suasize&id=".$id;
                            $xoasize="index.php?act=xoasize&id=".$id;
                            echo' <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.($i=$i+1).'</td>
                            <td>'.$size_name.'</td>
                            <td>
                                <a  href="'.$suasize.'"   ><input type="button" value="Sửa"></a>
                                <a  href="'.$xoasize.'" ><input type="button" value="Xóa"></a> 
                            </td>
                        </tr>';
                        } 
                    ?>
                </table>
            </div>

            <div class="row mb10">
                <input type="button" value="CHỌN TẤT CẢ">
                <input type="button" value="BỎ CHỌN TẤT CẢ">
                <input type="button" value="XÓA MỤC ĐÃ CHỌN">
                <a href="index.php?act=addsize"><input type="button" value="NHẬP THÊM"></a>
            </div>

    </div>
</div>
