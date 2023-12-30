<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\signal;
use App\Models\User;
use Berkayk\OneSignal\OneSignalClient;
use OneSignal;
use NotificationChannels\OneSignal\OneSignalChannel;
use NotificationChannels\OneSignal\OneSignalMessage;
use NotificationChannels\OneSignal\OneSignalWebButton;

class onesignalController extends Controller
{
    //
    public function sendNotifications()

    {

       
     
    //     $notificationMsgi = 'Hello !! It is a notification test.!';
    //    $r= OneSignal::getNotifications();
    //    Notification::send($users, new ProductAdded($dataToNotify));


        $content = array(
             "en" => 'Test Message'
             );
     
         $fields = array(
             'app_id' => "672536d8-f2e9-4d34-b1b1-a74ae9695e2f",
             'filters' => array(array("field" => "location", "key" => "radius", "relation" => "=", "value" => "50"),array("operator" => "or"),array("field" => "location", "key" => "lat", "relation" => "=", "value" => "3.1946047"),array("operator" => "or"),array("field" => "location","key"=>"long", "relation" => "=", "value" => "30.2402744")),
             'data' => array("foo" => "bar"),
             'contents' => $content
         );
     
         $fields = json_encode($fields);
         print("\nJSON sent:\n");
         print($fields);
         
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
         curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
                                                    'Authorization: Basic MjA2Y2E3ZGYtNzU0Mi00MzZmLWI0M2UtMzU5MjgxM2E2Nzky'));
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
         curl_setopt($ch, CURLOPT_HEADER, FALSE);
         curl_setopt($ch, CURLOPT_POST, TRUE);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
 
         $response = curl_exec($ch);
         curl_close($ch);
         
         return $response;
     
     
     $response = sendMessage();
     $return["allresponses"] = $response;
     $return = json_encode( $return);
     
     print("\n\nJSON received:\n");
     print($return);
     print("\n");
     
        
    }
   
   
public function oneSignalTest(){


   
  
		$content = array(
			"en" => 'welcome '
			);
		
		$fields = array(
			'app_id' => "672536d8-f2e9-4d34-b1b1-a74ae9695e2f",
			'include_external_user_ids' => array("123456"),
      'channel_for_external_user_ids' => 'push',
			'data' => array("foo" => "bar"),
			'contents' => $content
		);
		
		$fields = json_encode($fields);
    	print("\nJSON sent:\n");
    	print($fields);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
												   'Authorization: Basic MjA2Y2E3ZGYtNzU0Mi00MzZmLWI0M2UtMzU5MjgxM2E2Nzky'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		curl_close($ch);
		
		return $response;
	
	
	$response = sendMessage();
	$return["allresponses"] = $response;
	$return = json_encode( $return);
	
	print("\n\nJSON received:\n");
	print($return);
	print("\n");

    
}
public function onesignal(){
    $content = array(
        "title"=>"hi",
        "en" => 'welcome to multi_vendor '
        );
    $fields = array(
        'app_id' => "672536d8-f2e9-4d34-b1b1-a74ae9695e2f",
        'include_external_user_ids' => array("123456"),
  'channel_for_external_user_ids' => 'push',
        'data' => array("foo" => "bar"),
        'contents' => $content
    );
    $fields = json_encode($fields);
    print("\nJSON sent:\n");
    print($fields);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
                                               'Authorization: Basic MjA2Y2E3ZGYtNzU0Mi00MzZmLWI0M2UtMzU5MjgxM2E2Nzky'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    curl_close($ch);
return redirect()->back();
}

public function laravel(){
    $fields=array(
    "field" => "tag", "key" => "email", "relation" => "=", "value" => "admin@gmail.com",
    'app_id' => "672536d8-f2e9-4d34-b1b1-a74ae9695e2f",);

    $fields = json_encode($fields);
    print("\nJSON sent:\n");
    print($fields);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
                                               'Authorization: Basic MjA2Y2E3ZGYtNzU0Mi00MzZmLWI0M2UtMzU5MjgxM2E2Nzky'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response;


$response = sendMessage();
$return["allresponses"] = $response;
$return = json_encode( $return);

print("\n\nJSON received:\n");
print($return);
print("\n");}

}
