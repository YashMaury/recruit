<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
//database connection will be here

// include database and object files
include_once '../../config/database.php';
include_once '../../objects/registration.php';
  
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$read_farmers = new registration($db);
  
$data = json_decode(file_get_contents("php://input"));
// read products will be here
// $read_farmers->status=$data->status;

// query products
$stmt = $read_farmers->readFarmers();
$num = $stmt->rowCount();
  
// check if more than 0 record found
if($num>0){
  
    // products array
    $read_farmerss_arr=array();
    $read_farmerss_arr["records"]=array();


    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
     
        extract($row);
  
        $read_farmers_item=array(

    "id" => $id,
    "farmerName"=>$farmerName,
    "farmerMobile"=>$farmerMobile,
    "farmerDistrict"=>$farmerDistrict,
    "farmerMsg"=>$farmerMsg,
    "createdOn"=>$createdOn,
    "createdBy"=>$createdBy
     );
  
        array_push($read_farmerss_arr["records"], $read_farmers_item);
    }
  
    // show products data in json format
    echo json_encode($read_farmerss_arr);

     // set response code - 200 OK
     http_response_code(200);
}
  
// no products found will be here
else{
  
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user no products found
    echo json_encode(
        array("message" => "No farmers found.")
    );
}
?>