<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Request;
use App\Contact;
use Mail;
use App\Slide;
use Illuminate\Support\Facades\Validator;
class CruiseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = Slide::where('status',1)->get()->toArray();
        return view('cruise.home',['slide'=>$slide]);
    }
    public function pagemenu($id,$name)
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        try {
            //$client = new GuzzleHttpClient();
            $client = new \GuzzleHttp\Client();
            $apigetCategorycurrent = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getcategorycruisecurrent/'.$id, $requestContent);
            $responseapigetCategorycurrent = json_decode($apigetCategorycurrent->getBody());
            $dataviewCategorycurrent = $responseapigetCategorycurrent;
           // print_r($dataviewCategorycurrent);
            $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getcategorycruise/'.$id, $requestContent);
            $response = json_decode($apiRequest->getBody());
            $dataview = $response;
         //   print_r($dataview);
            if(empty($dataview)){
              return redirect()->route('pagelistofmenu', [$id,$name]);
            }
        } catch (RequestException $re) {
              // For handling exception.
        }
        return view('cruise.pagemenu',['datas'=>$dataview,'dataviewCategorycurrent'=>$dataviewCategorycurrent]);
    }
    public function pagelistofmenu($id,$name)
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apigetCategorycurrent = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getcategorycruisecurrent/'.$id, $requestContent);
        $responseapigetCategorycurrent = json_decode($apigetCategorycurrent->getBody());
        $dataviewCategorycurrent = $responseapigetCategorycurrent;
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getpostCruiseincategory/'.$id, $requestContent);
        $response = json_decode($apiRequest->getBody());
        $dataview = $response;
       // print_r($dataview);
        return view('cruise.pagelistofmenu',['dataviewdetails'=>$dataview,'dataviewCategorycurrent'=>$dataviewCategorycurrent]);
    }
    //post/9/hungary-river-cruise-the-beautiful-blue-danube
    
    
    public function getCruise()
    {
        $input = Request::all();
        $query=array(
            'status'=>'1',
            'type'=>'post',
            'phanloai'=>'cruise',
            'search'=>isset($input['search'])?$input['search']:'',// $input['inputsearch'],
            'shipname'=>isset($input['shipname'])?$input['shipname']:'',
            'destination'=>isset($input['destination'])?$input['destination']:'',
            'duration'=>isset($input['duration'])?$input['duration']:'',
            'shipdesk'=>isset($input['shipdesk'])?$input['shipdesk']:'',
            'shipcategory'=>isset($input['shipcategory'])?$input['shipcategory']:'',
            'departure'=>isset($input['departure'])?$input['departure']:'',
            'pricerange'=>isset($input['pricerange'])?$input['pricerange']:'',
            'month_list' => '-1',
        );
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apigetCategorycurrent = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getCruiseSearch?'.http_build_query($query), $requestContent);
        $responseapigetCategorycurrent = json_decode($apigetCategorycurrent->getBody());
        $dataviewCategorycurrent = $responseapigetCategorycurrent;
        return view('cruise.pagelistofmenu',['dataviewdetails'=>$dataviewCategorycurrent,'dataviewCategorycurrent'=>[]]);
    }
    public function getBriefspost($id)
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getBriefs/'.$id, $requestContent);
        $response = json_decode($apiRequest->getBody());
        $dataview = $response;
        return json_encode($dataview);
    }
    public function pageofpost($id,$name)
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/tourdetail/'.$id."/".$name."?key=9A8YD9TRAVELAIS9", $requestContent);
        $response = json_decode($apiRequest->getBody(),TRUE);
        return view('cruise.pageofpost',['dataviewdetails'=>$response]);
    }
    public function pageofpostslug($id,$name)
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/tourdetail/'.$id."/".$name."?key=9A8YD9TRAVELAIS9", $requestContent);
        $response = json_decode($apiRequest->getBody(),TRUE);
        $menu_view = 'projects';
        return view('cruise.pageofpost',['dataviewdetails'=>$response,'menu_view'=>$menu_view]);
    }
    
    public function pageofposttrip($id,$name)
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/tourdetail/'.$id."/".$name."?key=9A8YD9TRAVELAIS9", $requestContent);
        $response = json_decode($apiRequest->getBody(),TRUE);
        // print_r($response);
        // die();
        return view('cruise.pageofposttrip',['dataviewdetails'=>$response]);
    }
    
    public function getMapsInCriosiFile($id)
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getMapsInCriosiFile/'.$id, $requestContent);
        $response = json_decode($apiRequest->getBody());
        $dataview = $response;
        return json_encode($dataview);
    }
    public function getPricetableCruise($tripcode)
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getPricetableCruise/'.$tripcode, $requestContent);
        $response = json_decode($apiRequest->getBody());
        $dataview = $response;
        return json_encode($dataview);
    }
    public function getBmenu($idpost)
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getBMenu/'.$idpost, $requestContent);
        $response = json_decode($apiRequest->getBody());
        $dataview = $response;
        return json_encode($dataview);
    }
    public function getExcursionbyTripcode($tripcode)
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getExcursionbyTripcode/'.$tripcode, $requestContent);
        $response = json_decode($apiRequest->getBody());
        $dataview = $response;
        return json_encode($dataview);
    }
    public function getShipdeckbyTripcode($tripcode)
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getshipdeck/'.$tripcode, $requestContent);
        $response = json_decode($apiRequest->getBody());
        $dataview = $response;
        return json_encode($dataview);
    }
    public function europecruises()
    {
        $id = '199';
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        try {
            //$client = new GuzzleHttpClient();
            $client = new \GuzzleHttp\Client();
            $apigetCategorycurrent = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getcategorycruisecurrent/'.$id, $requestContent);
            $responseapigetCategorycurrent = json_decode($apigetCategorycurrent->getBody());
            $dataviewCategorycurrent = $responseapigetCategorycurrent;
           // print_r($dataviewCategorycurrent);
            $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getcategorycruise/'.$id, $requestContent);
            $response = json_decode($apiRequest->getBody());
            $dataview = $response;
            $name = 'schools';
         //   print_r($dataview);
            if(empty($dataview)){
              return redirect()->route('pagelistofmenu', [$id,$name]);
            }
        } catch (RequestException $re) {
              // For handling exception.
        }
        return view('cruise.europecruises',['datas'=>$dataview,'dataviewCategorycurrent'=>$dataviewCategorycurrent,'title'=>'Europe River Cruises']);
       // return view('cruise.europecruises');
    }
    public function worldwidecruises()
    {
        $id = '13';
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        try {
            //$client = new GuzzleHttpClient();
            $client = new \GuzzleHttp\Client();
            $apigetCategorycurrent = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getcategorycruisecurrent/'.$id, $requestContent);
            $responseapigetCategorycurrent = json_decode($apigetCategorycurrent->getBody());
            $dataviewCategorycurrent = $responseapigetCategorycurrent;
           // print_r($dataviewCategorycurrent);
            $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getcategorycruise/'.$id, $requestContent);
            $response = json_decode($apiRequest->getBody());
            $dataview = $response;
         //   print_r($dataview);
            if(empty($dataview)){
              return redirect()->route('pagelistofmenu', [$id,$name]);
            }
        } catch (RequestException $re) {
              // For handling exception.
        }
        return view('cruise.europecruises',['datas'=>$dataview,'dataviewCategorycurrent'=>$dataviewCategorycurrent,'title'=>'Worldwide River Cruises']);
      //  return view('cruise.worldwidecruises');
    }
    public function themedcruise()
    {
        $id = '200';
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        try {
            //$client = new GuzzleHttpClient();
            $client = new \GuzzleHttp\Client();
            $apigetCategorycurrent = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getcategorycruisecurrent/'.$id, $requestContent);
            $responseapigetCategorycurrent = json_decode($apigetCategorycurrent->getBody());
            $dataviewCategorycurrent = $responseapigetCategorycurrent;
           // print_r($dataviewCategorycurrent);
            $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getcategorycruise/'.$id, $requestContent);
            $response = json_decode($apiRequest->getBody());
            $dataview = $response;
         //   print_r($dataview);
            // if(empty($dataview)){
            //   return redirect()->route('pagelistofmenu', [$id,$name]);
            // }
        } catch (RequestException $re) {
              // For handling exception.
        }
        return view('cruise.themedcruises',['datas'=>$dataview,'dataviewCategorycurrent'=>$dataviewCategorycurrent]);
       // return view('cruise.themedcruise');
    }
    public function sitemap()
    {
        return response()->file('../sitemap.xml');
    }
    public function contactform()
    {
        return view('cruise.contactform');
    }
    
    public function contactstore(Request $request)
    {

        $input = Request::all();
        //dd($input);
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $data = [
                'secret' => config('services.recaptcha.secret'),
                'response' => $input['recaptcha'],
                'remoteip' => $remoteip
              ];
        $options = [
                'http' => [
                  'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                  'method' => 'POST',
                  'content' => http_build_query($data)
                ]
            ];
        $context = stream_context_create($options);
                $result = file_get_contents($url, false, $context);
                $resultJson = json_decode($result);
               
        if ($resultJson->success != true) {
                return back()->withErrors(['captcha' => 'ReCaptcha Error']);
                }
        if ($resultJson->score >= 0.3) {
            
            $contact = new Contact;
            $contact->name = $input['firstname']." ".$input['surname'];
            $contact->title = $input['title'];
            $contact->email = $input['email'];
            $contact->subject = $input['subject'];
            $contact->message = $input['message'];
            $contact->phanloai = 'contactform';
            $contact->save();
            Mail::send('email/mailagentcontact', array('data'=>$input), function($message) use ($input){
                    $message->from('noreply@tweetworldtravel.com.au', 'Asia School Tour');
                    $message->to('nathan@tweetworldtravel.com', 'Agents')->subject('New Contact Form');
                });
                return redirect()->action('CruiseController@contactform')->with('message', 'Your request has been sent successfully. Thank you!');
               // return back()->with('message', 'Thanks for your message!');
        } else {
                return back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }
    }
    
     public function newteacherregistration()
    {
        return view('cruise.newteacherregistration');
    }
    
    public function newteacherregistrationstore(Request $request)
    {
        $v = Validator::make(Request::all(), [
           'g-recaptcha-response' => 'required',
        ]);
        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }
        $input = Request::all();
        unset($input['_token']); 
        unset($input['g-recaptcha-response']); 
        $contact = new Contact;
        $contact->subject = json_encode($input);
         $contact->phanloai = 'teachers';
        $contact->save();
        Mail::send('mailionrequestschool', array('data'=>$input), function($message) use ($input){
                $message->from('noreply@tweetworldtravel.com.au', 'Asia School Tours');
            //$message->to('contact@worldwiderivercruises.com.au', 'Agents')->subject('New Contact Form');
               $message->to('nathan@tweetworldtravel.com', 'Agents')->subject('New Teacher Register');
            });
        return redirect()->action('CruiseController@newteacherregistration')->with('message', 'Your request has been sent successfully. Thank you!');
    }

    public function enquireForm(Request $request)
    {
        $input = Request::all();
        $contact = new Contact;
         unset($input['_token']); 
        unset($input['g-recaptcha-response']); 
        $contact = new Contact;
        $contact->subject = json_encode($input);
         $contact->phanloai = 'projectsonrequest';
        $contact->save();
        Mail::send('mailionrequest', array('data'=>$input), function($message) use ($input){
                $message->from('noreply@tweetworldtravel.com', 'Asia School Tours');
            //$message->to('contact@worldwiderivercruises.com.au', 'Agents')->subject('New Contact Form');
               $message->to('nathan@tweetworldtravel.com', 'Agents')->subject('Project Enquiry');
            });
        return redirect()->action('CruiseController@contactformresult')->with('message', 'Your request has been sent successfully. Thank you!');
    }


    public function contactonrequest(Request $request)
    {
		// $v = Validator::make(Request::all(), [
	 //       'g-recaptcha-response' => 'required',
	 //    ]);
	 //    if ($v->fails())
	 //    {
	 //        return redirect()->back()->withErrors($v->errors());
	 //    }
        $input = Request::all();
        $contact = new Contact;
         unset($input['_token']); 
        unset($input['g-recaptcha-response']); 
        $contact = new Contact;
        $contact->subject = json_encode($input);
         $contact->phanloai = 'projectsonrequest';
        $contact->save();
        Mail::send('mailionrequest', array('data'=>$input), function($message) use ($input){
                $message->from('noreply@tweetworldtravel.com.au', 'Asia School Tours');
            //$message->to('contact@worldwiderivercruises.com.au', 'Agents')->subject('New Contact Form');
               $message->to('nathan@tweetworldtravel.com', 'Agents')->subject('Project Enquiry');
            });
        return redirect()->action('CruiseController@contactformresult')->with('message', 'Your request has been sent successfully. Thank you!');
    }
    public function contactformresult()
    {
        return view('contactformresult');
    }
    public function askaquestion(Request $request)
    {
        $input = Request::all();
        $contact = new Contact;
    
        $contact->email = $input['email'];
        $contact->subject = 'Ask a Question';
        $contact->message = $input['message'];
        $contact->phanloai = 'contactform';
        $contact->save();
        Mail::send('mailagentaskaquestion', array('data'=>$input), function($message) use ($input){
                $message->from('noreply@tweetworldtravel.com.au', 'Worldwide River Cruises');
            $message->to('contact@worldwiderivercruises.com.au', 'Agents')->subject('Ask a Question');
         //       $message->to('nathan@tweetworldtravel.com', 'Agents')->subject('Ask a Question');
            });
        return redirect()->action('CruiseController@contactform')->with('message', 'Your request has been sent successfully. Thank you!');
    }
    public function newsletter()
    {
        return view('cruise.newsletter');
    }
    public function newsletterstore(Request $request)
    {
        $input = Request::all();
        $contact = new Contact;
        $contact->name = $input['firstname']." ".$input['surname'];
        $contact->title = $input['title'];
        $contact->email = $input['email'];
        $contact->phanloai = 'newsletter';
        $contact->save();
        Mail::send('mailagent', array('data'=>$input), function($message) use ($input){
                $message->from('noreply@tweetworldtravel.com.au', 'Worldwide River Cruises');
                $message->to('nathan@tweetworldtravel.com', 'Agents')->subject('New Letter Form');
                //$message->to('contact@worldwiderivercruises.com.au', 'Agents')->subject('New Newsletter');
            });
        return redirect()->action('CruiseController@newsletter')->with('message', 'New Letter Send Success');
    }
    public function askforbrochure()
    {
        return view('cruise.askforbrochure');
    }
    public function askforbrochurestore(Request $request)
    {
		$v = Validator::make(Request::all(), [
	       'g-recaptcha-response' => 'required',
	    ]);
	    if ($v->fails())
	    {
	        return redirect()->back()->withErrors($v->errors());
	    }
        $input = Request::all();
        $contact = new Contact;
        $contact->name = $input['firstname']." ".$input['surname'];
        $contact->title = $input['title'];
        $contact->email = $input['email'];
        $contact->street = $input['street'];
        $contact->postcode = $input['postcode'];
        $contact->city = $input['city'];
        $contact->country = $input['country'];
        $contact->state = $input['state'];
        $contact->phone = $input['phone'];
        $contact->phanloai = 'askforbrochure';
        $contact->save();
        Mail::send('mailagentaskforbrochure', array('data'=>$input), function($message) use ($input){
                $message->from('noreply@tweetworldtravel.com.au', 'Worldwide River Cruises');
// $message->to('nathan@tweetworldtravel.com', 'Agents')->subject('New Ask For Brochure');
                $message->to('contact@worldwiderivercruises.com.au', 'Admin')->subject('New Ask For Brochure');
               // $message->to('giang@tweetworldtravel.com.au', 'Agents')->subject('New Ask For Brochure');
            });
        return redirect()->action('CruiseController@askforbrochure')->with('message', 'Ask For Brochure Send Success');
    }
    public function europecruiseterm()
    {
        return view('cruise.term');
    }
        public function europepolicy()
    {
        return view('cruise.policy');
    }
    public function search()
    {
        $data = Request::all();
        // print_r($data);
        // die();
        // $data_save['payby'] = '';
      
        $requestContent = [
            'headers' => [
                'Accept' => 'application/x-www-form-urlencoded',
                'Content-Type' => 'application/x-www-form-urlencoded'
            ],
            'form_params' => $data
        ];
        $client = new \GuzzleHttp\Client();
        $paymentorder = $client->request('POST', 'https://b2b.tweetworldtravel.com.au/api/apiCruiseSearch', $requestContent);
        $dataviewdetails = json_decode($paymentorder->getBody(),TRUE);
      //  print_r($dataviewdetails);
        return view('cruise.search',['dataviewdetails'=>$dataviewdetails]);
    }
    //mock
    public function myprofile()
    {
        return view('cruise.myprofile');
    }
        public function demotest()
    {
        return view('cruise.demotest');
    }
    public function myprofilepost()
    {
         $data = Request::all();
      //   print_r($data);
        $id_user = \Auth::id();
        $article = \App\User::find($id_user);
        $data_save['firstname']  = $data['firstname'];
        $data_save['lastname']  = $data['lastname'];
        $data_save['phone']  = $data['phone'];
        $data_save['birthday']  =  $data['birthday'];
        $data_save['gender']  = $data['gender'];
         if(!empty($data['interests'])){
               $data_save['interests']  = json_encode($data['interests']);
        }else{
            $data_save['interests']  = '';
        }
        $data_save['name']  = $data['firstname']." ".$data['lastname'];
        if(!empty($data['current-password']) && !empty($data['new-password']) && !empty($data['new-password-confirm'])){
            if (!(\Hash::check($data['current-password'], \Auth::user()->password))) {
                return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
            }
            if(strcmp($data['new-password'], $data['new-password-confirm']) != 0){
                return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
            }
            $data_save['password'] = $data['new-password'];
        }
        $article->update($data_save);
        return redirect('my-profile')->with("success","Users saved correctly!!!");
    }
    //     public function mybooking()
    
    // {
    //     return view('cruise.mybooking');
    // }
    public function findagent()
    {
        $input = Request::all();
        $query=array(
            'status'=>'1',
            'search'=>isset($input['postcode'])?$input['postcode']:'',
        );
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $valuesearch = isset($input['postcode'])?$input['postcode']:'';
        $client = new \GuzzleHttp\Client();
        if(!empty($valuesearch)){
            $apigetCategorycurrent = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/findagent?'.http_build_query($query), $requestContent);
            $responseapigetCategorycurrent = json_decode($apigetCategorycurrent->getBody());
            $dataviewCategorycurrent = $responseapigetCategorycurrent;
        }else{
             $dataviewCategorycurrent = array();
        }
       
        return view('cruise.findagent',['dataviewdetails'=>$dataviewCategorycurrent,'dataviewCategorycurrent'=>[],'valuesearch'=>$valuesearch]);
    }
     public function getterm()
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/term/', $requestContent);
        $response = json_decode($apiRequest->getBody());
        $dataview = $response;
        return json_encode($dataview);
    }
    //new 
    public function projects()
    {
         $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/schoolstriptype/209', $requestContent);
        $response = json_decode($apiRequest->getBody());
        $dataview = $response;
       $apiRequest2 = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getcategorycruisecurrent/209', $requestContent);
        $response2 = json_decode($apiRequest2->getBody());
        $dataviewcategory = $response2[0];
        $menu_view = 'projects';
        return view('cruise.projects',compact('menu_view','dataview','dataviewcategory'));
    }
    public function projectsslug($slug)
    { 
            $array_id = [
               'Community-Project'=>'210',
               'Volunteering-Activities'=>'211', 
               'Field-Study-Project'=>'212','Volunteering'=>'211'
            ];
            $id =$array_id[$slug];
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getpostschoolincategory/'.$id, $requestContent);
        $response = json_decode($apiRequest->getBody());
        $dataview = $response;
        $apiRequest2 = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getcategorycruisecurrent/'.$id, $requestContent);
        $response2 = json_decode($apiRequest2->getBody());
        $dataviewcategory = $response2[0];
        $menu_view = 'projects';
        return view('cruise.projectsdetail',compact('menu_view','dataview','dataviewcategory'));
    }
        public function mock1()
    {
        return view('cruise.mock1');
    }
        public function mock2()
    {
        return view('cruise.mock2');
    }
        public function mock3()
    {
        return view('cruise.mock3');
    }
      public function mock21($slug)
    {
        return view('cruise.mock21');
    }
          public function aboutus()
    {
        $menu_view = 'aboutus';
        return view('cruise.about',compact('menu_view'));
    }
    public function safety()
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getpostSafetysincategorynew/213', $requestContent);
        $response = json_decode($apiRequest->getBody());
        $dataview = $response;
        $apiRequest1 = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getcategorycruisecurrent/213', $requestContent);
        $response1 = json_decode($apiRequest1->getBody());
        $dataview1 = $response1;
// print_r($dataview1);
// die();
        $menu_view = 'safety';
        return view('cruise.safety',compact('menu_view','dataview1','dataview'));
    }
        public function safetyslug($slug)
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getpostSafetydetail/'.$slug, $requestContent);
        $response = json_decode($apiRequest->getBody());
        $dataview = $response;
         $apiRequest1 = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getpostSafetysincategorynew/213', $requestContent);
        $response1 = json_decode($apiRequest1->getBody());
        $dataview1 = $response1;
        $menu_view = 'safety';
        return view('cruise.safety1',compact('menu_view','dataview','dataview1'));
    }
    public function teachers()
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getpostSafetysincategorynew/214', $requestContent);
        $response = json_decode($apiRequest->getBody());
        $dataview = $response;
        $apiRequest1 = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getcategorycruisecurrent/214', $requestContent);
        $response1 = json_decode($apiRequest1->getBody());
        $dataview1 = $response1;
// print_r($dataview1);
// die();
        $menu_view = 'teacher';
        return view('cruise.teachers',compact('menu_view','dataview1','dataview'));
    }
        public function teachersslug($slug)
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getpostSafetydetail/'.$slug, $requestContent);
        $response = json_decode($apiRequest->getBody());
        $dataview = $response;
         $apiRequest1 = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getpostSafetysincategorynew/214', $requestContent);
        $response1 = json_decode($apiRequest1->getBody());
        $dataview1 = $response1;
        $menu_view = 'teacher';
        return view('cruise.teachersslug',compact('menu_view','dataview','dataview1'));
    }
    public function triptype()
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/schoolstriptype/199', $requestContent);
        $response = json_decode($apiRequest->getBody());
        $dataview = $response;
        
        $menu_view = 'triptype';
        return view('cruise.triptype',compact('menu_view','dataview'));
    }
    public function triptypeslug($slug)
    { 
            $array_id = [
               'Explorer Trips'=>'206',
               'Adventure Trips'=>'207', 
               'Field-trek Trips'=>'208',
                'Explorer-Trips'=>'206',
               'Adventure-Trips'=>'207', 
               'Field-trek-Trips'=>'208',
            ];
            $id =$array_id[$slug];
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getpostschoolincategory/'.$id, $requestContent);
        $response = json_decode($apiRequest->getBody());
        $dataview = $response;
        $apiRequest2 = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getcategorycruisecurrent/'.$id, $requestContent);
        $response2 = json_decode($apiRequest2->getBody());
        $dataviewcategory = $response2[0];
        $menu_view = 'triptype';
        return view('cruise.triptypedetail',compact('menu_view','dataview','dataviewcategory'));
    }
    public function triptypedetail()
    {
        $menu_view = 'triptype';
        return view('cruise.triptypedetail',compact('menu_view'));
    }
    public function destination()
    {
      //  print_r('expression');
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $id = '74';
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/schoolstriptype/'.$id, $requestContent);
        $response = json_decode($apiRequest->getBody());
        $dataview = $response;
        $id = '74';
       
        $apiRequest1 = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getcategorycruisecurrent/'.$id, $requestContent);
        $response1 = json_decode($apiRequest1->getBody());
        $dataview1 = $response1;
        $menu_view = 'destination';
        return view('cruise.destination',compact('menu_view','dataview','dataview1'));
    }
    public function destinationdetail($name)
    {
            $namegoc = $name;
        $name = str_replace(" ","-", $name);
        $menu_list = array('Cambodia'=>'78',
                    'China'=>'81',
                    'India'=>'87',
                    'Japan'=>'80',
                    'South-Korea'=>'79',
                    'Laos'=>'77',
                    'Malaysia'=>'89',
                    'Myanmar'=>'84',
                    'Nepal'=>'86',
                    'Sri-Lanka'=>'93',
                    'Thailand'=>'83',
                    'Vietnam'=>'76',
                    'Mongolia'=>'202',
                    'Adventure'=>'67',
                    'Family'=>'68',
                    'Discovery'=>'69',
                    'Luxury'=>'70',
                    'Classic'=>'71',
                    'Speciality'=>'72',
                    'Escorted-Tours'=>'75',
                    'Small-Group-Tours'=>'94',
                    'Private-Tours'=>'95',
                    'Independent-Tours'=>'96',
                    'Multi-Country-Tours'=>'97',
                    'School-Tours'=>'199');
       $id = $menu_list[$name];
        $menu_view = 'destination';
          $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getpostSchoolsincategorynew/'.$namegoc, $requestContent);
        $response = json_decode($apiRequest->getBody());
        $dataview = $response;
//print_r($dataview);
        $apiRequest1 = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getcategorycruisecurrent/'.$id, $requestContent);
        $response1 = json_decode($apiRequest1->getBody());
        $dataview1 = $response1;
          $menu_view1 = 'destination';
        return view('cruise.destinationdetail',compact('menu_view','dataview','name','dataview1','menu_view1'));
    }
    public function destinationproject($name)
    {
        $namegoc = $name;
        $name = str_replace(" ","-", $name);
        $menu_list = array('Cambodia'=>'78',
                    'China'=>'81',
                    'India'=>'87',
                    'Japan'=>'80',
                    'South-Korea'=>'79',
                    'Laos'=>'77',
                    'Malaysia'=>'89',
                    'Myanmar'=>'84',
                    'Nepal'=>'86',
                    'Sri-Lanka'=>'93',
                    'Thailand'=>'83',
                    'Vietnam'=>'76',
                    'Mongolia'=>'202',
                    'Adventure'=>'67',
                    'Family'=>'68',
                    'Discovery'=>'69',
                    'Luxury'=>'70',
                    'Classic'=>'71',
                    'Speciality'=>'72',
                    'Escorted-Tours'=>'75',
                    'Small-Group-Tours'=>'94',
                    'Private-Tours'=>'95',
                    'Independent-Tours'=>'96',
                    'Multi-Country-Tours'=>'97',
                    'School-Tours'=>'199');
       $id = $menu_list[$name];
        $menu_view = 'destination';
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getpostSchoolsproject/'.$namegoc, $requestContent);
        $response = json_decode($apiRequest->getBody());
        $dataview = $response;
        $apiRequest2 = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/getcategorycruisecurrent/'.$id, $requestContent);
        $response2 = json_decode($apiRequest2->getBody());
        $dataviewcategory = $response2[0];
        $menu_view = 'destination';
        $menu_view1 = 'destination1';
       //dd($dataviewcategory);
       return view('cruise.destinationproject',compact('menu_view','dataview','dataviewcategory','menu_view1'));
    }
          public function tracker()
    {
            $ip = \Request::ip();
            $data = Request::all();
            $access_key = '1da3b0e2781b8135c7509db55121be89';
            $ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $json = curl_exec($ch);
            curl_close($ch);
            $api_result = json_decode($json, true);
            $data_login['continent_code'] = isset($api_result['continent_code'])?$api_result['continent_code']:'';
            $data_login['continent_name'] = isset($api_result['continent_name'])?$api_result['continent_name']:'';
            $data_login['country_code'] = isset($api_result['country_code'])?$api_result['country_code']:'';
            $data_login['country_name'] = isset($api_result['country_name'])?$api_result['country_name']:'';
            $data_login['region_code'] = isset($api_result['region_code'])?$api_result['region_code']:'';
            $data_login['region_name'] = isset($api_result['region_name'])?$api_result['region_name']:'';
            $data_login['city'] = isset($api_result['city'])?$api_result['city']:'';
            $data_login['zip'] = isset($api_result['zip'])?$api_result['zip']:'';
            $data_login['latitude'] = isset($api_result['latitude'])?$api_result['latitude']:'';
            $data_login['longitude'] = isset($api_result['longitude'])?$api_result['longitude']:'';
            $data_login['url'] = isset($data['urlpage'])?$data['urlpage']:'';
            $data_login['site'] = 'schoolstours';
            $data_login['ipuser'] = isset($ip)?$ip:'';
          
        $requestContent = [
            'headers' => [
                'Accept' => 'application/x-www-form-urlencoded',
                'Content-Type' => 'application/x-www-form-urlencoded'
            ],
            'form_params' => $data_login
        ];
        $client = new \GuzzleHttp\Client();
        $sendtracking = $client->request('POST', 'https://b2b.tweetworldtravel.com.au/api/sendtracking', $requestContent);
    }
    public function pageofpostslugview($slug)
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/tourdetailslug/'.$slug."?key=9A8YD9TRAVELAIS9", $requestContent);
        $response = json_decode($apiRequest->getBody(),TRUE);
//        dd($response);
        $trip_code = $response["tripcode"];
        $client->request('GET', "https://agentportal.tweetworldtravel.com/increase-views-other-site/$trip_code/6");
        return view('cruise.pageofpost',['dataviewdetails'=>$response]);
    }
    // public function getterm()
    // {
    //     $requestContent = [
    //         'headers' => [
    //             'Accept' => 'application/json',
    //             'Content-Type' => 'application/json'
    //         ]
    //     ];
    //     $client = new \GuzzleHttp\Client();
    //     $apiRequest = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/term/', $requestContent);
    //     $response = json_decode($apiRequest->getBody());
    //     $dataview = $response;
    //     return json_encode($dataview);
    // }
}
