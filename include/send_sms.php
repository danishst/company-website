<?php
echo "working";
if(isset($_GET['number'])) {
$number = $_GET['number'];
$text   = $_GET['text'];
if(preg_match('/\s/',$text)) {
    $text = str_replace(' ', '%20', $text);
}
    $data = file_get_contents('http://bulk.sagartech.co.in/http-tokenkeyapi.php?authentic-key=383062756c6b73616761723334371578141741&senderid=SGRTCH&route=2&number='.$number.'&message='.$text.'%20-SagartechSMSservice');
    //http://198.24.149.4/API/pushsms.aspx?loginID=patel14&password=Patel@cc1234&mobile='.$phone.'text='.$otp.'&senderid=CHPSMS&route_id=2&Unicode=0
    //$drows = json_decode($data, true);
    //echo $decodedData['MsgStatus'];
    //echo "IHS-".$otp;
    //print_r($drows);
    echo $data;
    //print_r($drows);
    }
    else {
        echo "invalidlogin";
     }
?>