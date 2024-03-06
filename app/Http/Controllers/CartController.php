<?php

namespace App\Http\Controllers;


use App\User;
use App\Http\Controllers\Controller;
use Excel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Cart;
use Illuminate\Support\Facades\Input;
use Mail;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'cart'
        ]]);

    }
    public function cart() {
       // $this->middleware('auth');

        if (Request::isMethod('post')) {
            $data = Request::all();
            Cart::add(
                array(
                    'id' => $data['product_id'],
                    'name' =>$data['product_title'],
                    'qty' => 1,
                    'price' => str_replace(",","", $data['product_price_all']),
                    'options' => [
                        'product_title' => $data['product_title'],
                        'product_tripcode' => $data['product_tripcode'],
                        'product_id' => $data['product_id'],
                        'product_ship' => $data['product_ship'],
                        'product_shipcategory' => $data['product_shipcategory'],
                        'product_cabintype' => $data['product_cabintype'],
                        'product_startdate' => $data['product_startdate'],
                        'product_enddate' => $data['product_enddate'],
                        'product_numroom' => $data['product_numroom'],
                        'product_adult' => !empty($data['product_adult'])?$data['product_adult']:0,
                        'product_child' => !empty($data['product_child'])?$data['product_child']:0,
                        'product_adult_one' => !empty($data['product_adult_one'])?$data['product_adult_one']:0,
                        'product_child_one' => !empty($data['product_child_one'])?$data['product_child_one']:0,
                        'product_price_all' => str_replace(",","", $data['product_price_all']),
                        'product_excursion_all' => $data['product_excursion_all'],
                        'product_excursion_price' => !empty($data['product_excursion_price'])?$data['product_excursion_price']:0,
                        'adult' => !empty($data['product_adult'])?$data['product_adult']:0,
                        'child' => !empty($data['product_child'])?$data['product_child']:0,
                        'daystart' => $data['product_startdate'],
                        'endstart' => $data['product_enddate'],
                        'ship' => $data['product_ship'],
                        'shipcategory' => $data['product_shipcategory'],
                        'tripcode' => $data['product_tripcode'],
                        'type' => 'Cruise',
                        'excursion' => $data['product_excursion_all'],
                        'number' => $data['product_numroom'],
                        'number_room' => $data['product_numroom'],
                        'price_adult' => $data['product_adult_one'] * $data['product_adult'],
                        'price_child' => $data['product_child_one'] * $data['product_child'],
                        'am' => ''
                    ]
                )
            );

             return redirect()->route('cart');
        }
        //increment the quantity
        if (Request::get('product_id') && (Request::get('increment')) == 1) {
            $id =Request::get('product_id');
            $rowId = Cart::search(function ($cart, $key) use($id) {
    			return $cart->id == $id;
    		})->first();
            $item = Cart::get($rowId->rowId);
            Cart::update($rowId->rowId, $item->qty + 1);
            return redirect()->route('cart');
        }

        //decrease the quantity
        if (Request::get('product_id') && (Request::get('decrease')) == 1) {
            $id =Request::get('product_id');
            $rowId = Cart::search(function ($cart, $key) use($id) {
    			return $cart->id == $id;
    		})->first();
            $item = Cart::get($rowId->rowId);
            Cart::update($rowId->rowId, $item->qty - 1);
            return redirect()->route('cart');
        }

        if (Request::get('product_id') && (Request::get('remove')) == 1) {
            $id =Request::get('product_id');
            $rowId = Cart::search(function ($cart, $key) use($id) {
    			return $cart->id == $id;
    		})->first();
            Cart::remove($rowId->rowId);
            return redirect()->route('cart');
        }



        $cart = Cart::content();
     //  	if (Cart::count() == 0){
        //	 return redirect()->route('home');
       // }
        return view('cruise.module.cart', array('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }
    
    public function makebook()
    {
        $cart = Cart::content();
        return view('cruise.module.makebook',['cart'=>$cart]);
    }

    public function storeorder() {
        $data = Input::all();
        foreach ($data['selectbasic'] as $key => $value) {
            foreach ($value as $keyvalue => $valuevalue) {
                $songuoi[$key]['aud'][] = array('sur'=>$valuevalue,'name'=>$data['name'][$key][$keyvalue],'lastname'=>$data['lasname'][$key][$keyvalue],'birthday'=>isset($data['birthday'][$key][$keyvalue])?$data['birthday'][$key][$keyvalue]:'');
                if (!empty($data['namechild'][$key][$keyvalue])) {
                       $songuoi[$key]['child'][] = array('sur'=>"Child",'name'=>isset($data['namechild'][$key][$keyvalue])?$data['namechild'][$key][$keyvalue]:'','lastname'=>isset($data['lasnamechild'][$key][$keyvalue])?$data['lasnamechild'][$key][$keyvalue]:'','birthday'=>isset($data['birthdaychild'][$key][$keyvalue])?$data['birthdaychild'][$key][$keyvalue]:'');
                }
            }
        }
        $cart = Cart::content();
        $data_nguoi = json_encode($songuoi);
        $data_booking = '';
        $data_paying = '';
        $rand = substr(uniqid('', true), -5);
        $twt_code = 'WWC'.$rand;
        $category = '';
        foreach ($cart as $keycart => $valuecart) {
            $category .= $valuecart->options->product_tripcode;
        }
        $data_save['category']  =  $category;  
        $data_save['user_id_book'] =  "w-".\Auth::id();
         $data_save['site'] = '2';
        $data_save['userlists'] = $data_nguoi;
        $data_save['detail_book']  =   $data_booking;
        $data_save['price_order'] = Cart::total();
        $data_save['type']  = '';
        $data_save['loaihinh'] = '';   
        $data_save['notesagent'] = isset($data['notesagent'])?json_encode($data['notesagent']):'';   
        $data_save['status']  = 'created';
        $data_save['infopay'] = $data_paying;
        $data_save['apipay'] = '';
        $data_save['ordercode'] = $twt_code;   
        $data_save['payby'] = '';
        $price = Cart::total();
        $data_save['cartbooking'] = json_encode($cart);
        session(['order' => $data_save]);    
        //return $this->redirect('bookingpayment');
        return redirect()->route('bookingpayment');
    }

       public function bookingpayment()
    {
        $cart = Cart::content();
        $order_session = session('order');
        return view('cruise.module.bookingpayment',['cart'=>$cart,'order_session'=>$order_session]);
    }

    public function bookingpaymentPost() {
        $data = Input::all();

       
        
        $cart = Cart::content();
        $data_save = session('order');
        if($data['book_button'] == 'pay'){
            $data_save['status']  = '6';
        }
        if($data['book_button'] == 'request'){
            $data_save['status']  = '18';
        }
        $data_save['type'] = 'gross';
        $data_save['payby'] = '';
        // $deposit = explode(" ", $data['Deposit']); 
        //     $deposit = explode(" ", $data['Deposit']); 
        foreach ($cart as $keycart => $valuecart) {
                $keyitem = $keycart;
        }
        $deposit_item = array($keyitem=>str_replace(",","", $data['deposit']));
         $data_save['Deposit'] = json_encode($deposit_item);
        // $data_save['DepositPaid'] = json_encode($deposit_item);

        $requestContent = [
            'headers' => [
                'Accept' => 'application/x-www-form-urlencoded',
                'Content-Type' => 'application/x-www-form-urlencoded'
            ],
            'form_params' => $data_save
        ];
        $client = new \GuzzleHttp\Client();
        $paymentorder = $client->request('POST', 'https://b2b.tweetworldtravel.com.au/api/sendorder', $requestContent);
        $paymentorderresult = json_decode($paymentorder->getBody(),TRUE);

        Cart::destroy();
       // session(['order' => $data_save]);   
        session()->forget('order');    
        if($data['book_button'] == 'pay'){
            return redirect()->route('bookingresult',$paymentorderresult['ordercode']);
        }
        if($data['book_button'] == 'request'){
            return redirect()->route('bookingresultrequest',$paymentorderresult['ordercode']);
        }
     //   )
    }

    
    public function bookingresult($ordercode)
    {
        $data = array();
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apibooking = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/booking/'.$ordercode, $requestContent);
        $responseapibooking = json_decode($apibooking->getBody(),TRUE);
        $data['book'] = $responseapibooking;
        $data['user'] = \Auth::user();
        $data['code'] = $ordercode;

         // Mail::send('cruise.module.mailbook', array('data'=>$data), function($message) use ($data){
         //       $subject_title =   'Worldwide River Cruises Confirmation:  Booking Ref '.$data['code'] ;

         //        $message->from('noreply@tweetworldtravel.com.au', 'Worldwide River Cruises');
         //        $message->to('contact@worldwiderivercruises.com.au', 'Admin')->subject($subject_title);
         //    //   $message->to('haingoctoday@gmail.com', 'Admin')->subject('Booking Quote');
         //        //mailto:contact@worldwidecruises.com.au
         //    });
            // Mail::send('cruise.module.mailbook', array('data'=>$data), function($message) use ($data){

            //      $subject_title =   'Worldwide River Cruises Confirmation:  Booking Ref '.$data['code'] ;
            //     $message->from('noreply@tweetworldtravel.com.au', 'Worldwide River Cruises');
            //     $message->to($data['user']['email'], 'Users Booking')->subject($subject_title);
            // //     $message->to('haingoctoday@gmail.com', 'Admin')->subject('Booking Quote');
            //     //mailto:contact@worldwidecruises.com.au
            // });
    //     die();
        $data_ordercode = $ordercode;
        return view('cruise.module.bookingresult',['data_ordercode'=>$data_ordercode]);
    }


    public function bookingresultrequest($ordercode)
    {
        $data = array();
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();
        $apibooking = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/booking/'.$ordercode, $requestContent);
        $responseapibooking = json_decode($apibooking->getBody(),TRUE);
        $data['book'] = $responseapibooking;
        $data['user'] = \Auth::user();
        $data['code'] = $ordercode;

         // Mail::send('cruise.module.mailbookrequest', array('data'=>$data), function($message) use ($data){
         //       $subject_title =   'Worldwide River Cruises Confirmation:  Booking Ref '.$data['code'] ;

         //        $message->from('noreply@tweetworldtravel.com.au', 'Worldwide River Cruises');
         //        $message->to('contact@worldwiderivercruises.com.au', 'Admin')->subject($subject_title);
         //    //   $message->to('haingoctoday@gmail.com', 'Admin')->subject('Booking Quote');
         //        //mailto:contact@worldwidecruises.com.au
         //    });
            // Mail::send('cruise.module.mailbookrequest', array('data'=>$data), function($message) use ($data){

            //      $subject_title =   'Worldwide River Cruises Confirmation:  Booking Ref '.$data['code'] ;
            //     $message->from('noreply@tweetworldtravel.com.au', 'Worldwide River Cruises');
            //     $message->to($data['user']['email'], 'Users Booking')->subject($subject_title);
            // //     $message->to('haingoctoday@gmail.com', 'Admin')->subject('Booking Quote');
            //     //mailto:contact@worldwidecruises.com.au
            // });
    //     die();
        $data_ordercode = $ordercode;
        return view('cruise.module.bookingresultrequest',['data_ordercode'=>$data_ordercode]);
    }       



    public function booking($id)
    {
     
        if(empty($id)){
            return redirect()->route('home');
        }

         $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();

        $apibooking = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/booking/'.$id, $requestContent);
        $responseapibooking = json_decode($apibooking->getBody(),TRUE);
      //  $dataviewCategorycurrent = $responseapigetCategorycurrent;

//print_r($responseapibooking);
$data_show = $responseapibooking[0];
    
       // if

        return view('cruise.module.booking',['data'=>$data_show]);
    }


     public function mybooking()
    {
     
        // if(empty($id)){
        //     return redirect()->route('home');
        // }
        $id_user = "w-".\Auth::id();
         $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();

        $apibooking = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/bookingofuser/'.$id_user, $requestContent);
        $responseapibooking = json_decode($apibooking->getBody(),TRUE);
      //  $dataviewCategorycurrent = $responseapigetCategorycurrent;
    $data_show = $responseapibooking;
    
       // if

        return view('cruise.mybooking',['data'=>$data_show]);
    }


    public function countbooking(){

         $id_user = "w-".\Auth::id();
         $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];
        $client = new \GuzzleHttp\Client();

        $apibooking = $client->request('GET', 'https://b2b.tweetworldtravel.com.au/api/countbooking/'.$id_user, $requestContent);
        $responseapibooking = json_decode($apibooking->getBody(),TRUE);
      //  $dataviewCategorycurrent = $responseapigetCategorycurrent;
      $data_show = $responseapibooking;

        return $data_show;

    }

}
