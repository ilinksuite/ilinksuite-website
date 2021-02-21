<?php
/**
  ** users object
  * GetAddressesUsers --> get all addresses with Users info
  * getDefaultAddressByUserId --> get default address info of user
  */
class Ser_Users
{
    /*database connection variable*/
    private $conn;
    /*constructor*/
    public function __construct()
    {
        /*connecting to database*/
        require_once 'DB_Connect.php';
        /*creating connection instance*/
        $db = new DB_Connect();
        $this->conn = $db->connect();
    }
    /*destructor*/
    public function __destruct()
    {
    }
    /**
     * get all users info and address
     * parameters {}
     * returns json/Null
     */
    public function GetAddressesUsers()
    {
        $stmt = $this->conn->prepare("CALL sp_GetAddressesUsers()");
        if ($stmt->execute()) {
            $addresses = $stmt->get_result()->fetch_all(MYSQLI_ASSOC); /*fetch data in json object*/
            $stmt->close();
            if ($addresses) return $addresses;
            else return null;
        } else return null;
    }
    /**
     * get user default address details
     * parameters {userId}
     * returns json/Null
     */
    public function getDefaultAddressByUserId($userId)
    {
        $stmt = $this->conn->prepare("CALL sp_getDefaultAddressByUserId(?)");
        $stmt->bind_param("i", $userId);
        $result = $stmt->execute();
        $addresses = $stmt->get_result()->fetch_assoc();/*fetch data in json array*/
        $stmt->close();
        if ($addresses) return $addresses;
        else return null;
    }
    /**
     * get all addresses details of a user
     * parameters {userId}
     * returns json/Null
     */
    public function getAllAddressesByUserId($userId)
    {
        $stmt = $this->conn->prepare("CALL sp_getAllAddressesByUserId(?)");
        $stmt->bind_param("i", $userId);
        $result = $stmt->execute();
        $addresses = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);/*fetch data in json array*/
        $stmt->close();
        if ($addresses) return $addresses;
        else return null;
    }
    /**
     * get user address details by addressId
     * parameters {addressId,userId}
     * returns json/Null
     */
    public function getUserAddressById($addressId,$userId)
    {
        $stmt = $this->conn->prepare("CALL sp_getUserAddressById(?,?)");
        $stmt->bind_param("ii", $addressId, $userId);
        $result = $stmt->execute();
        $addresses = $stmt->get_result()->fetch_assoc();/*fetch data in json array*/
        $stmt->close();
        if ($addresses) return $addresses;
        else return null;
    }
    /**
     * get product location
     * parameters {productId}
     * returns json/Null
     */
    public function getAddressByProductId($productId)
    {
        $stmt = $this->conn->prepare("CALL sp_getAddressByProductId(?)");
        $stmt->bind_param("i", $productId);
        $result = $stmt->execute();
        $addresses = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);/*fetch data in json array*/
        $stmt->close();
        if ($addresses) return $addresses;
        else return null;
    }
    /**
     * edit user address details
     * parameters {addressId, userId, ipaddress, address1, address2, city, state, postalcode, country, latitude, longitude}
     * returns boolean
     */
    public function EditUserAddress($addressId,$userId,$ipaddress, $address1, $address2, $city, $state, $postalcode, $country, $latitude, $longitude, $default)
    {
      $stmt = $this->conn->prepare("CALL sp_EditUserAddress(?,?,?,?,?,?,?,?,?,?,?,?);");
      $stmt->bind_param("iisssssssddi",$addressId,$userId,$ipaddress, $address1, $address2, $city, $state, $postalcode, $country, $latitude, $longitude, $default);
      $result = $stmt->execute();
      $stmt->close();
      if ($result) return true;
      else return false;
    }
    /**
     * Add user address details
     * parameters {userId, ipaddress, address1, address2, city, state, postalcode, country, latitude, longitude, language, default}
     * returns json/Null
     */
    public function AddUserAddress($userId, $ipaddress, $address1, $address2, $city, $state, $postalcode, $country, $latitude, $longitude, $language, $default)
    {
      $stmt = $this->conn->prepare("CALL sp_AddUserAddress(?,?,?,?,?,?,?,?,?,?,?,?);");
      $stmt->bind_param("issssssssddi",$userId,$ipaddress, $address1, $address2, $city, $state, $postalcode, $country, $latitude, $longitude, $language, $default);
      $result = $stmt->execute();
      $addresses = $stmt->get_result()->fetch_assoc();/*fetch data in json array*/
      $stmt->close();
      if ($addresses) return $addresses;
      else return Null;
    }
    /**
     * get all states of a country
     * parameters {iso}
     * returns json/Null
     */
    public function getcountrystates($iso)
    {
        $stmt = $this->conn->prepare("CALL sp_getcountrystates(?)");
        $stmt->bind_param("s", $iso);
        $result = $stmt->execute();
        $addresses = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);/*fetch data in json object*/
        $stmt->close();
        if ($addresses) return $addresses;
        else return null;
    }
    /**
     * reset all addresses by setting default_address=2
     * parameters {userId}
     * returns boolean
     */
    public function ResetUserAddresses($userId)
    {
        $stmt = $this->conn->prepare("CALL sp_ResetUserAddresses(?)");
        $stmt->bind_param("i", $userId);
        $result = $stmt->execute();
        $stmt->close();
        if ($result) return true;
        else return false;
    }
    /**
     * get all countries
     * parameters {}
     * returns json/Null
     */
    public function getcountries()
    {
        $stmt = $this->conn->prepare("CALL sp_getcountries()");
        $result = $stmt->execute();
        $addresses = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);/*fetch data in json object*/
        $stmt->close();
        if ($addresses) return $addresses;
        else return null;
    }
    /**
     * get all cities of a state
     * parameters {stateId}
     * returns json/Null
     */
    public function getstatescities($stateId)
    {
        $stmt = $this->conn->prepare("CALL sp_getstatescities(?)");
        $stmt->bind_param("i", $stateId);
        $result = $stmt->execute();
        $addresses = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);/*fetch data in json object*/
        $stmt->close();
        if ($addresses) return $addresses;
        else return null;
    }
    /**
     * Delete address
     * parameters {addressId, userId}
     * returns boolean
     */
    public function DeleteUserAddressbyId($addresId,$userId)
    {
        $stmt = $this->conn->prepare("CALL sp_DeleteUserAddressbyId(?,?)");
        $stmt->bind_param("ii", $addresId,$userId);
        $result = $stmt->execute();
        $stmt->close();
        if ($result) return true;
        else return false;
    }
    /**
     * get address details
     * parameters {addressId}
     * returns json/Null
     */
    public function getAddressById($addressId)
    {
        $stmt = $this->conn->prepare("CALL sp_getAddressById(?)");
        $stmt->bind_param("i", $addressId);
        $result = $stmt->execute();
        $addresses = $stmt->get_result()->fetch_assoc();/*fetch data in json array*/
        $stmt->close();
        if ($addresses) return $addresses;
        else return null;
    }
    /*********************************Admin*************************************/
    /**
     * get all addresses of a user
     * parameters {userId}
     * returns json/Null
     */
    public function Admin_getUserAddresses($userId)
    {
        $stmt = $this->conn->prepare("CALL sp_Admin_getUserAddresses(?)");
        $stmt->bind_param("i", $userId);
        $result = $stmt->execute();
        $addresses = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);/*fetch data in json object*/
        $stmt->close();
        if ($addresses) return $addresses;
        else return null;
    }
    /**
     * get addresses details
     * parameters {addressId}
     * returns json/Null
     */
    public function Admin_getAddressById($addressId)
    {
        $stmt = $this->conn->prepare("CALL sp_Admin_getAddressById(?)");
        $stmt->bind_param("i", $addressId);
        $result = $stmt->execute();
        $addresses = $stmt->get_result()->fetch_assoc();/*fetch data in json array*/
        $stmt->close();
        if ($addresses) return $addresses;
        else return null;
    }
}
