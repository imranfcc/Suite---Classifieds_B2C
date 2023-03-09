<?php
namespace suite;

function sellerID_to_Name($sellerID){
    global $con;
    
    $sql = "SELECT * FROM `sh_sell_by` WHERE `Id`='$sellerID'  ";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        $row2 = $result->fetch_assoc();
    }
    $return=$row2["Name"];
    return $return;
}
function item_seller_count($itemID){
    global $con;
    $sql = "SELECT * FROM `sh_sell_by_item` WHERE `[sh_items_info]Id`='$itemID' AND  `Quantity`>'0' ORDER BY `Price` ASC ";
	$result = $con->query($sql);
    $seller_num=$result->num_rows;
    $return=$seller_num;
    return $return;
}
    
?>
