<?php

namespace App\Http\Controllers\Voyager;

use App\People;
use App\User;
use App\Tracking;
use Mail;
use App\Mail\newTracking;
use Auth;
use App\Product;
use Session;
use App\CategoryProduct;
use App\Mail\Orderarrived;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataUpdated;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;
use therealsmat\Ebulksms\EbulkSMS;
use Validator;
class PeopleController extends VoyagerBaseController
{

    use BreadRelationshipParser;
    //***************************************
    //               ____
    //              |  _ \
    //              | |_) |
    //              |  _ <
    //              | |_) |
    //              |____/
    //
    //      Browse our Data Type (B)READ
    //
    //****************************************


    /**
     * POST BRE(A)D - Store data.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {


        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('add', app($dataType->model_name));

        // Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->addRows)->validate();
        $data = $this->insertUpdateData($request, $slug, $dataType->addRows, new $dataType->model_name());
         $phonenumber =  $data->phonenumber;

         $sendername =  $data->sender_name;
         $recievername =  $data->reciever_name;
         $trackingid =  $data->tracking_id;

        //  $dataemail = array(
        //     'email' => $data->email,
        //     'name' =>  $data->reciever_name,
        //     'tracking_id' =>  $data->tracking_id,
        //     'phonenumber' =>  $data->phonenumber,
        //     'weight' =>  $data->weight,
        //     'sender_name' =>  $data->sender_name,
        //     'arrivaldate' =>  $data->arrivaldate,
        //     'quantity' =>  $data->quantity,
        //     'modeofshipment' =>  $data->modeofshipment,
        // );

    //   return back()->with( 'success', $count . " messages sent!" );


    // Mail::send('email.trackinginfo', $dataemail, function($message) use ($dataemail){

    //     $message->to($dataemail['email']);
    //     $message->subject('Your Package');


    // });

    function uniqidReal($lenght = 10) {
        // uniqid gives 13 chars, but you could adjust it to your needs.
        if (function_exists("random_bytes")) {
            $bytes = random_bytes(ceil($lenght / 3));
        } elseif (function_exists("openssl_random_pseudo_bytes")) {
            $bytes = openssl_random_pseudo_bytes(ceil($lenght / 3));
        } else {
            throw new Exception("Unable to Generate Random ID for you Please Refresh and try again");
        }
        return substr(bin2hex($bytes), 0, $lenght);
    }
    $id = $data->id;

    $invoice = 'INV-'. uniqidReal() ;

        $trackingid = 'ADS-'.uniqidReal() ;

        $dataemail = array(
            'email' => $data->email,
            'name' =>  $data->reciever_name,
            'tracking_id' =>  $trackingid,
            'phonenumber' =>  $data->phonenumber,
            'weight' =>  $data->weight,
            'sender_name' =>  $data->sender_name,
            'arrivaldate' =>  $data->arrivaldate,
            'quantity' =>  $data->quantity,
            'modeofshipment' =>  $data->modeofshipment,
            'invoiceno' =>  $invoice,
        );

    //   return back()->with( 'success', $count . " messages sent!" );

//     $message = "Dear, {$data->reciever_name}. You have a new shippment from {$data->sender_name} . Your tracking ID is {$trackingid}.Please refer to your mail for more information or contact us on delivery@unitedspeedexpress.com.";
//     $recipients = "{$data->phonenumber}";
//    $sms->composeMessage($message)
//                 ->addRecipients($recipients)
//                 ->send();



                Mail::send(new newTracking($dataemail));


                $json_url = "http://api.ebulksms.com:8080/sendsms.json";



                $username = 'fangjennifer911@gmail.com';

                $apikey = 'e5bfae4e1a681efb8ac53ed72f6f2163035fd62b';

                $sendername = substr('GPC', 0, 11);

                $recipients = "{$data->phonenumber}";

                $message = "Hello {$recievername}! You have an item from GPC. Your tracking id is {$trackingid}. please visit www.rainbowpresscourier.com.";

                $flash = 0;
                if (get_magic_quotes_gpc()) {
                    $message = stripslashes($_POST['message']);
                }
                $message = substr($message, 0, 260);
            #Use the next line for HTTP POST with JSON
                $result = $this->useJSON($json_url, $username, $apikey, $flash, $sendername, $message, $recipients);




        event(new BreadDataAdded($dataType, $data));



        People::where('id','=', $id)->update(['invoice' => $invoice,'tracking_id' => $trackingid ]);
        Session::put('phonenumber' , $phonenumber);
        Session::put('name' , $recievername);
        Session::put('trackingid' , $trackingid);
        Session::put('slug' , $dataType->slug);
        Session::put('singular' , $dataType->display_name_singular);

         return redirect()
        ->route("voyager.{$dataType->slug}.index")
        ->with([
                'message'    => __('voyager::generic.successfully_added_new')." {$dataType->display_name_singular}",
                'alert-type' => 'success',
            ]);


    }


    function useHTTPGet($url, $username, $apikey, $flash, $sendername, $messagetext, $recipients) {
        $query_str = http_build_query(array('username' => $username, 'apikey' => $apikey, 'sender' => $sendername, 'messagetext' => $messagetext, 'flash' => $flash, 'recipients' => $recipients));
        return file_get_contents("{$url}?{$query_str}");
    }



    function useJSON($url, $username, $apikey, $flash, $sendername, $messagetext, $recipients) {
        $gsm = array();
        $country_code = '234';
        $arr_recipient = explode(',', $recipients);
        foreach ($arr_recipient as $recipient) {
            $mobilenumber = trim($recipient);
            if (substr($mobilenumber, 0, 1) == '0'){
                $mobilenumber = $country_code . substr($mobilenumber, 1);
            }
            elseif (substr($mobilenumber, 0, 1) == '+'){
                $mobilenumber = substr($mobilenumber, 1);
            }
            $generated_id = uniqid('int_', false);
            $generated_id = substr($generated_id, 0, 30);
            $gsm['gsm'][] = array('msidn' => $mobilenumber, 'msgid' => $generated_id);
        }
        $message = array(
            'sender' => $sendername,
            'messagetext' => $messagetext,
            'flash' => "{$flash}",
        );

        $request = array('SMS' => array(
                'auth' => array(
                    'username' => $username,
                    'apikey' => $apikey
                ),
                'message' => $message,
                'recipients' => $gsm
        ));
        $json_data = json_encode($request);

        if ($json_data) {
            $response = $this->doPostRequest($url, $json_data, array('Content-Type: application/json'));

            $result = json_decode($response);
            return $result->response->status;
        } else {
            return false;
        }
    }

    //Function to connect to SMS sending server using HTTP POST
function doPostRequest($url, $arr_params, $headers = array('Content-Type: application/x-www-form-urlencoded')) {
    $response = array();
    $final_url_data = $arr_params;

    if (is_array($arr_params)) {
        $final_url_data = http_build_query($arr_params, '', '&');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $final_url_data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $response['body'] = curl_exec($ch);
    $response['code'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return $response['body'];
}










      // POST BR(E)AD
      public function update(Request $request, $id)
      {
          $slug = $this->getSlug($request);

          $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

          // Compatibility with Model binding.
          $id = $id instanceof Model ? $id->{$id->getKeyName()} : $id;

          $model = app($dataType->model_name);
          if ($dataType->scope && $dataType->scope != '' && method_exists($model, 'scope'.ucfirst($dataType->scope))) {
              $model = $model->{$dataType->scope}();
          }
          if ($model && in_array(SoftDeletes::class, class_uses($model))) {
              $data = $model->withTrashed()->findOrFail($id);
          } else {
              $data = call_user_func([$dataType->model_name, 'findOrFail'], $id);
          }

          // Check permission
          $this->authorize('edit', $data);

          // Validate fields with ajax
          $val = $this->validateBread($request->all(), $dataType->editRows, $dataType->name, $id)->validate();
          $this->insertUpdateData($request, $slug, $dataType->editRows, $data);
          $id = $data->id;
          $currentlocation = $data->currentlocation;
          $comment = $data->comment;
          $update = $data->updated_at;

          $comment = $data->comment;
          Tracking::where('people_id','=', $id)->create(['location_service_area' => $currentlocation , 'checkpoint_details' => $comment , 'date' => $update, 'people_id' => $id  ]);

$dataemail = array(
    'email' => $data->email,
    'name' =>  $data->reciever_name,
    'tracking_id' =>  $data->tracking_id,
    'phonenumber' =>  $data->phonenumber,
    'weight' =>  $data->weight,
    'sender_name' =>  $data->sender_name,
    'arrivaldate' =>  $data->arrivaldate,
    'quantity' =>  $data->quantity,
    'modeofshipment' =>  $data->modeofshipment,
    'invoiceno' =>  $data->invoice,
);

    //   return back()->with( 'success', $count . " messages sent!" );
    // Mail::send(new changedTrack($dataemail));
if($request->status == 'Arrived' || $request->status == 'arrived' || $request->status == 'ARRIVED' ){
    // Mail::send(new Orderarrived($dataemail));
};



          event(new BreadDataUpdated($dataType, $data));

          return redirect()
          ->route("voyager.{$dataType->slug}.index")
          ->with([
              'message'    => __('voyager::generic.successfully_updated')." {$dataType->display_name_singular}",
              'alert-type' => 'success',
          ]);
      }


}
