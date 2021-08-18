<?php

use App\Models\User;
use App\Models\Logo;
use App\Models\Banner;
use App\Models\Setting;
use Carbon\Carbon;

function get_main_logo(){
    if(!$logo = Logo::where('type', 'main')->first()){
        return asset('img/noimg.jpg');
    }
    return asset('img/logos') . '/' . $logo->image;
}

function get_footer_logo(){
    if(!$logo = Logo::where('type', 'footer')->first()){
        return asset('img/noimg.jpg');
    }
    return asset('img/logos') . '/' . $logo->image;
}

function get_favicon_logo(){
    if(!$logo = Logo::where('type', 'favicon')->first()){
        return asset('img/noimg.jpg');
    }
    return asset('img/logos') . '/' . $logo->image;
}

function get_banner_by_page($page){
    if(!$banner = Banner::where('page', $page)->first()){
        return asset('img/noimg.jpg');
    }
    return $banner;
}

function get_setting_by_key($key){
    if(!$setting = Setting::where('key', $key)->first()){
        return '';
    }
    return $setting->value;
}

function return_date($date)
{
    return Carbon::parse($date)->format('j F, Y. h:i a');
}

function return_date_wo_time($date){
    return Carbon::parse($date)->format('j F, Y.');
}

function return_date_pdf($date)
{
    return Carbon::parse($date)->format('j F, Y');
}

function return_todays_date()
{
    return Carbon::now();
}

function return_user_name($id)
{
    $user = User::find($id);
    return optional($user)->name;
}

function return_decimal_number($foo)
{
    return number_format((float)$foo, 2, '.', '');
}

function count_by_type($type){
    if($type == "All"){
        $count = count(User::all());
    }
    else{
        $count = count(User::where($type, 1)->get());
    }
    
    return $count;
}

function get_player_types($user_id){
    $user = User::find($user_id);

    $types = [];
    if($user->isKicker == 1){
        array_push($types, 'Kicker');
    }
    if($user->isPunter == 1){
        array_push($types, 'Punter');
    }
    if($user->isLongSnapper == 1){
        array_push($types, 'Long Snapper');
    }

    if(count($types) == 0){
        return 'N/A';
    }
    
    $string = "";
    foreach($types as $key => $type){
        $string .= $type . (($key != count($types) - 1) ? ', ' : '.');
    }

    return $string;
}

function curl($handle)
{
    // phpinfo();
    $curl = curl_init();

    $nonce = mt_rand();
    $timestamp = time();

    $header[] = 'Authorization: OAuth '.
            'Bearer="AAAAAAAAAAAAAAAAAAAAAAlLPAEAAAAAdQyFQK%2Fc26eiUKdzjKZvI%2F24rgA%3DIEgYW2V3ZkLDwCAAGRWmg8agofyFEDESDPyoqTDk1rwH68cu3d"'.
            ',oauth_consumer_key="IRkKFMhbSCJ4EdyrWBgIT3yur"'.
            ',oauth_consumer_secret="TwZX4f1MN2yl8V7BUr7jEEw883PvOEd8ey8RLNgNl0FrGry9RC"'.
            ',oauth_token_secret="QjdNkgj9wr4hjYdNOZuAS7ulcgOlNCvHdpVXrvSwkDwzH"'.
            ',oauth_signature_method="HMAC-SHA1"'.
            ',oauth_nonce="'.$nonce.'"'.
            ',oauth_timestamp="'.$timestamp.'"'.
            ',oauth_version="1.0"'.
            ',oauth_token="1512823328-VToWBx6qwvXaxiyOiIFq9DvyROxkNtX7zyqAzHH"'.
            ',Content-Type=application/json'
            ;

    curl_setopt($curl, CURLOPT_URL, 'https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name='.$handle.'&count=10');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
    $result = curl_exec($curl);

    if(!$result){
        die("Connection Failure");
    }

    curl_close($curl);
    return json_decode($result, true);
}

function get_paypal_access_token(){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://api-m.sandbox.paypal.com/v1/oauth2/token');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
    curl_setopt($ch, CURLOPT_USERPWD, 'ATwKHEeDCPRMD5OQPGSpuGBaD8dMHZ_E_lfJYwgb0yXiVQ11EzOJ5hNP0SmCVH1cleGY01fW24778oW8' . ':' . 'ELNz2ATiDRebf6ts8WtjOlzBCztUCnQ_t3ZNod4oDp1kuINRiO93z7S0hoyDJgb-muKmF0qJDwLpg8mw');

    $headers = array();
    $headers[] = 'Accept: application/json';
    $headers[] = 'Accept-Language: en_US';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

    curl_close($ch);
    return json_decode($result, true);
}

function create_paypal_billing_plan($access_token){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://api-m.sandbox.paypal.com/v1/payments/billing-plans/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n  \"name\": \"nsd\",\n  \"description\": \"monthly plan\",\n  \"type\": \"INFINITE\",\n  \"state\": \"ACTIVE\",\n  \"payment_definitions\": [\n    {\n      \"name\": \"Regular payment definition\",\n      \"type\": \"REGULAR\",\n      \"frequency\": \"MONTH\",\n      \"frequency_interval\": \"1\",\n      \"amount\": {\n        \"value\": \"4\",\n        \"currency\": \"USD\"\n      },\n      \"cycles\": \"0\"\n    }\n  ],\n  \"merchant_preferences\": {\n    \"return_url\": \"https://example.com\",\n    \"cancel_url\": \"https://example.com/cancel\",\n    \"auto_bill_amount\": \"YES\",\n    \"initial_fail_amount_action\": \"CONTINUE\",\n    \"max_fail_attempts\": \"0\"\n  }\n}");

    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: Bearer ' . $access_token;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    dd(json_decode($result, true));
}

function list_paypal_billing_plans($access_token){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://api-m.sandbox.paypal.com/v1/payments/billing-plans?page_size=3&status=ALL&page_size=10&page=1&total_required=yes');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: Bearer ' . $access_token;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    dd(json_decode($result, true));
}

function activate_paypal_billing_plan($access_token, $plan_id = "P-2MR19173KE225661FSU73IXY"){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://api-m.sandbox.paypal.com/v1/payments/billing-plans/'.$plan_id.'/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');

    curl_setopt($ch, CURLOPT_POSTFIELDS, "[\n  {\n    \"op\": \"replace\",\n    \"path\": \"/\",\n    \"value\": {\n      \"state\": \"ACTIVE\"\n    }\n  }\n]");

    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: Bearer ' . $access_token;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    dd(json_decode($result, true));
}

function create_paypal_billing_agreement($access_token, $plan_id = "P-2MR19173KE225661FSU73IXY"){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://api-m.sandbox.paypal.com/v1/payments/billing-agreements/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n  \"name\": \"nsd agreement\",\n  \"description\": \"nsd agreement\",\n  \"start_date\": \"2021-05-24T09:13:49Z\",\n  \"payer\": {\n    \"payment_method\": \"paypal\",\n    \"payer_info\": {\n      \"email\": \"payer@example.com\"\n    }\n  },\n  \"plan\": {\n    \"id\": \"".$plan_id."\"\n  },\n  \"shipping_address\": {\n    \"line1\": \"Hotel Staybridge\",\n    \"line2\": \"Crooke Street\",\n    \"city\": \"San Jose\",\n    \"state\": \"CA\",\n    \"postal_code\": \"95112\",\n    \"country_code\": \"US\"\n  }\n}");

    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: Bearer ' . $access_token;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    dd(json_decode($result, true));

    $data = json_decode($result, true);
    $approval_url = $data['links'][0]['href'];
    $execute_url = $data['links'][1]['href'];
    dump($approval_url);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $approval_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    
    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: Bearer ' . $access_token;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    dd(json_decode($result, true));
}

function show_paypal_agreement_details($access_token, $agreement_id = "EC-1PF2621771966190G"){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://api-m.sandbox.paypal.com/v1/payments/billing-agreements/' . $agreement_id);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: Bearer ' . $access_token;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    dd(json_decode($result, true));
}

function execute_paypal_agreement($access_token, $agreement_id = "EC-1PF2621771966190G"){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://api-m.sandbox.paypal.com/v1/payments/billing-agreements/'.$agreement_id.'/agreement-execute');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);

    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: Bearer ' . $access_token;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    dd(json_decode($result, true));
}

function set_average_rating($query){
    $count = 0;
    $user = User::find($query['user_id']);

    foreach($user->star_ratings as $star_rating){
        $count += $star_rating->rating;
    }

    if(count($user->star_ratings) == 0){
        $user->rating = 0.0;
        $user->save();
        return;
    }
    $raw_rating = $count/count($user->star_ratings);
    $remainder = fmod($raw_rating, 1);
    $raw_rating -= $remainder;

    if($remainder == 0.0){
        $new_rating = $raw_rating + 0.0;
    }
    if($remainder > 0.0 && $remainder <= 0.5){
        $new_rating = $raw_rating + 0.5;
    }
    if($remainder > 0.5){
        $new_rating = $raw_rating + 1.0;
    }

    $user->rating = $new_rating;
    $user->save();
}