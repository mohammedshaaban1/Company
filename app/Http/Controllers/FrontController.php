<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\StoreSubscriberRequest;

class FrontController extends Controller
{
    function index()  {  
        return  view('front.index',get_defined_vars());
    }
    function about()  {  
        return  view('front.about',get_defined_vars());
    }
    function service()  {  
        return  view('front.service',get_defined_vars());
    }
    function contact()  {  
        return  view('front.contact',get_defined_vars());
    }
    function subscriberStore(StoreSubscriberRequest $request){
        $data= $request->validated();
        Subscriber::create($data);
        return back()->with('Subsciber-success','Subscibed Successfully');
    }
    function contactStore(StoreMessageRequest $request){
        $data= $request->validated();
        Message::create($data);
        return back()->with('success','Subscibed Successfully');
    }
} 
