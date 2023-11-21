<?php
function insert_category($name){
    $sql = "INSERT INTO category (name) VALUES (:name)";
    pdo_execute($sql, [':name' => $name]);
}


function delete_category($category_id){
    $sql = "DELETE FROM category WHERE category_id = :category_id";
    pdo_execute($sql, [':category_id' => $category_id]);
}

function loalall(){
    $sql="SELECT * FROM category ORDER BY category_id DESC";
    $listcategory = pdo_query($sql);
    return $listcategory;
}
function loalone($category_id){
    $sql = "SELECT * FROM category WHERE category_id=" .$category_id ;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_category($category_id,$name){
    $sql="UPDATE category SET NAME='".$name."' WHERE category_id=".$category_id;
    pdo_execute($sql);
}


?>