<?php 

    use Illuminate\Http\Request;    
        
    if(!function_exists('apiGet')){
        function apiGet($url){
            $ch = curl_init(); 
            curl_setopt($ch, CURLOPT_URL, env('API_URL', 'forge').$url);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            curl_setopt($ch,CURLOPT_ENCODING,"");
            curl_setopt($ch,CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Authorization: ' . env('API_KEY', 'forge')
                ));
            // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            //     "accept: */*",
            //     "accept-language: en-US,en;q=0.8",
            //     "content-type: application/json",env('API_KEY', 'forge')
            // )); 
            $output = curl_exec($ch); 
            $err = curl_error($ch);
            curl_close($ch);      
            if ($err) {
                return  "cURL Error #:" . $err;
            } else {
                return json_decode($output,true);
                // return json_encode($output);
                // return $output;
            }
            // return $output;
        }
    }
