<div class="row formtitle">
    <h1>DANH SACH GIAY</h1>
</div>
<div class="row formcontent">
    <form action="index.php?act=listsp" method="post">
        <input class="search-input" type="text" name="kyw" placeholder="Nhập thông tin tìm kiếm" >
        <select class="search-select" name="category_id" id="">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listcategory as $category) {
                extract($category);
                echo '<option value="' . $category_id . '" name="">' . $name . '</option>';
            }
            ?>
        </select>
        <input type="submit" value="SEARCH" name="listok">
    </form><br>
    <div class="row mb10 formdssp">
        <table>
            <tr>
                <th></th>
                <th>MÃ GIÀY</th>
                <th>TÊN GIÀY</th>
                <th>GIÁ</th>
                <th>HÌNH ẢNH</th>
                <th>MÔ TẢ</th>
                <th></th>
            </tr>
            <?php
            foreach ($listproduct as $product) {
                if (isset($product['product_id'], $product['title'], $product['price'], $product['thumbnail'], $product['description'])) {
                    $suasp = "index.php?act=suasp&id=" . $product['product_id'];
                    $xoasp = "index.php?act=xoasp&id=" . $product['product_id'];
                    $chitiet = "index.php?act=chitiet&id=" . $product['product_id'];
                    $hinhpath = "../upload/" . $product['thumbnail'];
                    $thumbnail = ''; // Initialize the variable

                    if (is_file($hinhpath)) {
                        $thumbnail = "<img src='" . $hinhpath . "' height='100'>";
                    } else {
                        $thumbnail = "no photo";
                    }

                    echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $product['product_id'] . '</td>
                        <td>' . $product['title'] . '</td>
                        <td>' . $product['price'] . '</td>
                        <td>' . $thumbnail . '</td>
                        <td>' . $product['description'] . '</td>
                        <td>
                            <a href="' . $suasp . '"><input type="button" value="Sửa"></a>
                            <a href="' . $xoasp . '"><input type="button" value="Xóa"></a> <br>
                            <a href="' . $chitiet . '"><input class="chitiet" type="button" value="Chi Tiet" ></a> 
                        </td>
                    </tr>';
                }
            }
            ?>
        </table>
    </div>

    <div class="row mb10">
        <input type="button" value="CHỌN TẤT CẢ">
        <input type="button" value="BỎ CHỌN TẤT CẢ">
        <input type="button" value="XÓA MỤC ĐÃ CHỌN">
        <a href="index.php?act=addsp"><input type="button" value="NHẬP THÊM"></a>
    </div>
</div>
</div>