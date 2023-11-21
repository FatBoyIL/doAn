<?php
include "header.php";
include "../model/pdo.php";
include "../model/category.php";
include "../model/product.php";
include "../model/size.php";

// controler
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            /**----------------------------------------Category----------------------------------- */
        case 'adddm':
            if (isset($_POST['add']) && ($_POST['add'])) {
                $name = $_POST['name'];
                insert_category($name);
                $thongbao = "THEM THANH CONG";
            }
            include "category/add.php";
            break;

        case 'listdm':
            $listcategory = loalall();
            include "category/list.php";
            break;

        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_category($_GET['id']);
            }
            $listcategory = loalall();
            include "category/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loalone($_GET['id']);
            }
            include "category/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $name = $_POST['name'];
                $category_id = $_POST['category_id'];
                update_category($category_id, $name);
                $thongbao = "UPDATE THANH CONG";
            }
            $listcategory = loalall();
            include "category/list.php";
            break;

            /**----------------------------------------Product----------------------------------- */

        case 'addsp':
            if (isset($_POST['add']) && ($_POST['add'])) {
                $category_id = $_POST['category_id'];
                $title = $_POST['title'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $thumbnail = $_FILES['thumbnail']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);

                // Kiểm tra xem file có phải là hình ảnh không
                $image_info = getimagesize($_FILES["thumbnail"]["tmp_name"]);
                if ($image_info === FALSE) {
                    $thongbao = "File không phải là hình ảnh. Vui lòng chọn một file hình ảnh.";
                } else {
                    // Tiếp tục quá trình upload và thêm vào cơ sở dữ liệu
                    if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
                        insert_product($title, $price, $thumbnail, $description, $category_id);
                        $thongbao = "Thêm thành công.";
                    } else {
                        $thongbao = "Xin lỗi, có lỗi khi tải file của bạn lên.";
                    }
                }
            }
            $listcategory = loalall();
            include "product/add.php";
            break;
        case 'listsp':

            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $category_id = $_POST['category_id'];
            } else {
                $kyw = '';
                $category_id = 0;
            }
            $listcategory = loalall();
            $listproduct = loalallsp($kyw, $category_id);
            include "product/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_product($_GET['id']);
            }
            $listproduct = loalallsp("", 0);
            include "product/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $product = loalonesp($_GET['id']);
            }
            $listcategory = loalall();
            include "product/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $product_id = $_POST['product_id'];
                $category_id = $_POST['category_id'];
                $title = $_POST['title'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $thumbnail = $_FILES['thumbnail']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
                if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
                    // $thongbao = "Thêm thành công.";
                } else {
                    // $thongbao = "Xin lỗi, có lỗi khi tải file của bạn lên.";
                }
                update_product($title, $price, $thumbnail, $description, $category_id, $product_id);
                $thongbao = "UPDATE THANH CONG";
            }
            $listcategory = loalall();
            $listproduct = loalallsp("", 0);
            include "product/list.php";
            break;
            /**----------------------------------------------------Color (Huy)----------------------------------------------- */
        case 'addcolor':
        case 'listcolor':
        case 'xoacolor':
        case 'suacolor':
        case 'update':
            /**----------------------------------------------------Size (Hảo)----------------------------------------------- */
        case 'addsize':
            if (isset($_POST['add']) && ($_POST['add'])) {
                $size_name = $_POST['size_name'];

                insert_size($size_name);
                $thongbao = "Thêm thành công";
            }
            include "size/add.php";
            break;

        case 'listsize':
            $listsize = loadall_size();
            include "size/list.php";
            break;
        case 'xoasize':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_size($_GET['id']);
            }
            $listsize = loadall_size();
            include "size/list.php";
            break;
        case 'suasize':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $size = loadone_size($_GET['id']);
            }
            include "size/update.php";
            break;
        case 'update':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $size_name = $_POST['size_name'];
                $id = $_POST['id'];
                update_size($id, $size_name);
                $thongbao = "UPDATE THANH CONG";
            }
            $listsize = loadall_size();
            include "size/list.php";
            break;
        case'dskh':
            include "user/listUser.php";
            break;
        case 'addus':
            include "../model/user.php";
            break;
        case 'delus':
                include "../model/user.php";
                break;
        case 'updateuser':
                    include "../model/user.php";
                    break;
            /**----------------------------------------------------END------------------------------------------------------- */
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
