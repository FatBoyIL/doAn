<?php
function insert_product($title, $price, $thumbnail, $description, $category_id) {
    $sql = "INSERT INTO product (title, price, thumbnail, description, category_id) VALUES ('$title', '$price', '$thumbnail', '$description', '$category_id')";
    pdo_execute($sql);
}
function delete_product($product_id){
    $sql = "DELETE FROM product WHERE product_id = :product_id";
    pdo_execute($sql, [':product_id' => $product_id]);
}

function loalallsp($kyw, $category_id) {
    $sql = "SELECT * FROM product WHERE 1";
    if ($kyw != "") {
        $sql .= " AND title LIKE '%" . $kyw . "%'";
    }
    if ($category_id > 0) {
        $sql .= " AND category_id= '" . $category_id . "'";
    }
    $sql .= " ORDER BY product_id DESC";
    $listproduct = pdo_query($sql);
    return $listproduct;
}


function loalonesp($product_id){
    $sql = "SELECT * FROM product WHERE product_id=" .$product_id ;
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_product($title, $price, $thumbnail, $description, $category_id, $product_id){
    if($thumbnail!="")
    $sql="UPDATE product SET title='".$title."',price='".$price."',thumbnail='".$thumbnail."',description='".$description."',category_id='".$category_id."' WHERE product_id=".$product_id;
    else
    $sql="UPDATE product SET title='".$title."',price='".$price."',description='".$description."',category_id='".$category_id."' WHERE product_id=".$product_id;
    pdo_execute($sql);
}
?>