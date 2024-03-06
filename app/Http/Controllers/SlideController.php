<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Http\Controllers\Controller;
use Excel;
use Carbon\Carbon;

class SlideController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data = Slide::get()->toArray();
        return view('admin.slide.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        $slide = new Slide;
        //$imageNamemobile = '';
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        request()->image->move(public_path('img/slide'), $imageName);

        if(!empty($request->imagemobile)){
            $imageNamemobile = time().'.'.$request->imagemobile->getClientOriginalExtension();
            request()->imagemobile->move(public_path('img/slide'), $imageNamemobile);  
            $slide->imagemobile = $imageNamemobile;
        }
        
       
        $slide->name = $request->name;
        $slide->image = $imageName;
        
        $slide->status = $request->status;
        $slide->detail = $request->detail;
        $slide->url = $request->url;
        $slide->price = $request->price;
        $slide->showpack = $request->showpack;
        $slide->contentpack = $request->contentpack;
        $slide->save();
        return redirect()->action('SlideController@index')->with('message', 'Slide Add Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data = Slide::find($id);
         return view('admin.slide.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Slide::find($id);
        //print_r($data);
        return view('admin.slide.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        // $pricetable = Slide::find($id);
        // $pricetable->tripcode = $request->tripcode;
        // $pricetable->ship = $request->ship;
        // $pricetable->shipcategory = $request->shipcategory;
        // $pricetable->cabintype = $request->cabintype;
        // $pricetable->startdate = $request->startdate;
        // $pricetable->enddate = $request->enddate;
        // $pricetable->pricepptwin = $request->pricepptwin;
        // $pricetable->pricesinge = $request->pricesinge;
        // $pricetable->availablecabins = $request->availablecabins;
        // $pricetable->special = $request->special;
        // $pricetable->status = $request->status;
        // $pricetable->save();

        $slide = Slide::find($id);
        if(!empty($request->image)){
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            request()->image->move(public_path('img/slide'), $imageName);
            $slide->image = $imageName;
        }
        if(!empty($request->imagemobile)){
            $imageNamemobile = time().'.'.$request->imagemobile->getClientOriginalExtension();
            request()->imagemobile->move(public_path('img/slide'), $imageNamemobile);
            $slide->imagemobile = $imageNamemobile;
        }
       
        $slide->name = $request->name;
      
        $slide->status = $request->status;
        $slide->detail = $request->detail;
        $slide->url = $request->url;
        $slide->price = $request->price;
        $slide->showpack = $request->showpack;
        $slide->contentpack = $request->contentpack;
        $slide->save();

        return redirect()->action('SlideController@index')->with('message', 'Slide Update Success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pricetable = Slide::find($id);
        $pricetable->delete();
         return redirect()->action('SlideController@index')->with('message', 'Delete record Success');
    }

    public function imports()
    {
        return view('admin.slide.import');
    }


    public function importExcel(Request $request)
    {


        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();


            $data = Excel::load($path, function($reader) {})->get();

          //  print_r($data);
           // die();
            if(!empty($data) && $data->count()){


                foreach ($data->toArray() as $key => $v) {
                    if(!empty($v)){
                            $insert[] = [
                                'tripcode' => $v['tripcode'],
                                'ship' => $v['ship'],
                                'shipcategory' => $v['shipcategory'],
                                'cabintype' => $v['cabintype'],
                                'startdate' => $v['startdate']->toDateString(),
                                'enddate' => $v['enddate']->toDateString(),
                                'pricepptwin' => $v['pricepptwin'],
                                'pricesinge' => $v['pricesinge'],
                                'availablecabins' => $v['availablecabins'],
                                'special' => $v['special'],
                                'status' => $v['status']
                            ];
                    }
                }
                
                if(!empty($insert)){
                   Slide::insert($insert);
                   return back()->with('success','Insert Record successfully.');
                }


            }


        }


        return back()->with('error','Please Check your file, Something is wrong there.');
    }

}
