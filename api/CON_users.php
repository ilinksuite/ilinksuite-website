<?php
require_once '../model/Base.php';/*fetch Directory variables*/
/*require users class*/
require_once '../'.DIR_MOD.'Ser_Users.php';
/*create users instance*/
$db = new Ser_Users();
/*response Array*/
$response=array();
/*error flag*/
$response['err']=-1;
$response['users']=array();
/*url parameters*/
$action=$_GET['action'];
if ($action=='get') {
    $users = $db->getUserAddressById($addressId,$userId);
    foreach ($users as $user) {
      array_push($response['users'],$user);
    }
    $response['err']=0;
}
if ($action=="delete") {
  $addresses = $db->DeleteUserAddressbyId($addressId,$userId);
  header("location:".DIR_VIEW.DIR_USR."form_useraddress.php");
}
if ($action=="delete-admin") {
  $addresses = $db->DeleteUserAddressbyId($addressId,$userId);
  $response['err']=0;
}
if ($action=="delete-checkout") {
  $addresses = $db->DeleteUserAddressbyId($addressId,$userId);
  header("location:".DIR_VIEW.DIR_CAR."checkout.php");
}
echo json_encode($response);
?>
