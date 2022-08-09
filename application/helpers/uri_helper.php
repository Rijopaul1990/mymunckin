<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('encrypt_url'))
{
	function encrypt_url($string = '', $url_safe = TRUE)
	{
		$CI =& get_instance();
		$CI->load->library('encryption');

		$ret = $CI->encryption->encrypt($string);

		if ($url_safe) $ret = strtr($ret, array('+' => '.', '=' => '-', '/' => '~'));

		return $ret;
	}
}

if ( ! function_exists('decrypt_url'))
{
	function decrypt_url($string = '')
	{
		$CI =& get_instance();
		$CI->load->library('encryption');

		$string = strtr($string, array('.' => '+', '-' => '=', '~' => '/'));

		return $CI->encryption->decrypt($string);
	}
}

function sfu($a){
    
    $a = trim($a);
    
    $a = html_entity_decode($a);
     
    $a = strip_tags($a);
    
    $a = strtolower($a);
    
    $a = preg_replace('~[^ a-z0-9_.]~', ' ', $a);
    
    $a = preg_replace('~ ~', '-', $a);
     
    $a = preg_replace('~-+~', '-', $a);
        
    return $a;
}

function AddDateInCurrentDate($days,$duration)
{
    $date = date('Y-m-d', strtotime("+$days $duration", strtotime(date('d-m-Y'))));
    return $date;
}
function OrderNo($count)
        {   $format = "MYM".date('Ymd')."000";
            $in = $count+1;
            if($count >= 1)
            {
               
                if($count >= 10 && $count <= 99)
                {
                    $a = "MYM".date('Ymd')."00";
                    return $a.$in;
                }
                elseif ($count >= 100 && $count < 999)
                {
                    $b = "MYM".date('Ymd')."0";
                    return $b.$in;
                }
                 elseif ($count >= 1000)
                {
                    $c = "MYM".date('Ymd');
                    return $c.$in;
                }
                else
                {
                   return $format.$in;     
                }
                
            }
            else
            {
                return $format."1";     
            }
        }

function CreateRazorPayOrderId($amount)
{
     $payloadName = json_encode(array("amount"=>$amount,'currency'=>"INR","receipt"=> "receipt#1"));

       //  $ch = curl_init("https://api.razorpay.com/v1/orders");
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', $additionalHeaders));
    //     curl_setopt($ch, CURLOPT_HEADER, 1);
    //     curl_setopt($ch, CURLOPT_USERPWD, "rzp_test_ZlRSeVKqmKQZSz: wGsg2hyDuxTYA56o57MS4HTd");
    //     curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    //     curl_setopt($ch, CURLOPT_POST, 1);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $payloadName);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    //     $return = curl_exec($ch);
    //     curl_close($ch);

    // return $result;
    
    
    $host = 'https://api.razorpay.com/v1/orders';
$user_name = 'rzp_live_iijjN20XThTy5Q';
$password = 'HU9k77x0LFsuM7ClXNqwy9rH';
$ch = curl_init($host);
$headers = array(
'Content-Type: application/json',
'Authorization: Basic '. base64_encode("$user_name:$password")
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $payloadName);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
if(curl_errno($ch)){
// throw the an Exception.
throw new Exception(curl_error($ch));
}
curl_close($ch);
return $response;
    
}