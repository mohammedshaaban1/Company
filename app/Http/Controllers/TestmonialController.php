<?php

namespace App\Http\Controllers;

use App\Models\Testmonial;
use App\Http\Requests\StoreTestmonialRequest;
use App\Http\Requests\UpdateTestmonialRequest;
use Illuminate\Support\Facades\Storage;


class TestmonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testmonials= Testmonial::paginate(5);
        return view('admin.testmonials.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testmonials.create',get_defined_vars());
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestmonialRequest $request)
    {   
        $data= $request->validated();
        // image upload
        $image=$request->image;
        $newImageName= time().'-'. $image->getClientOriginalName();
        $image->storeAs('testmonials',$newImageName,'public');
        $data['image']=$newImageName;
        
        Testmonial::create($data);
        return to_route('admin.testmonials.index')->with('success',__('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Testmonial $testmonial)
    {
        return view('admin.testmonials.show',get_defined_vars());

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testmonial $testmonial)
    {
        return view('admin.testmonials.edit',get_defined_vars());

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestmonialRequest $request, Testmonial $testmonial)
    {
        $data= $request->validated();
        if($request->hasFile('image')){

            Storage::delete("public/testmonials/$testmonial->image");
            $image=$request->image;
            $newImageName= time().'-'. $image->getClientOriginalName();
            $image->storeAs('testmonials',$newImageName,'public');
            $data['image']=$newImageName;

           
        }
        $testmonial->update($data);
        
        return to_route('admin.testmonials.index')->with('success',__('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testmonial $testmonial)
    {
        Storage::delete("public/testmonials/$testmonial->image");

       $testmonial->delete();  

        return to_route('admin.testmonials.index')->with('success',__('keywords.deleted_successfully'));
    }
}
