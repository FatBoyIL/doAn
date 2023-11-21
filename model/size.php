<?php
function insert_size($size_name){
    $sql = "INSERT INTO size (size_name) VALUES (:size_name)";
    pdo_execute($sql, [':size_name' => $size_name]);
}


function delete_size($id){
    $sql = "DELETE FROM size WHERE id = :id";
    pdo_execute($sql, [':id' => $id]);
}

function loadall_size(){
    $sql="SELECT * FROM size ORDER BY id DESC";
    $listsize = pdo_query($sql);
    return $listsize;
}
function loadone_size($id){
    $sql = "SELECT * FROM size WHERE id=" .$id ;
    $size = pdo_query_one($sql);
    return $size;
}
function update_size($id,$size_name){
    $sql="UPDATE size SET size_name='".$size_name."' WHERE id=".$id;
    pdo_execute($sql);
}
?>