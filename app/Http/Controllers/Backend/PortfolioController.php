<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use File;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Portfolio::get();
        return view('backend.portfolio.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type=request('type');
        return view('backend.portfolio.create', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'title'=> '',
            'description'=> ''           
        ]); 

        if($request->hasFile('thumbnail')) {                

            $originName = $request->file('thumbnail')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('thumbnail')->getClientOriginalExtension();
            $fileName =$fileName.time().'.'.$extension;        
            
            $request->file('thumbnail')->move(public_path('backend/portfolio'), $fileName);
            $data['thumbnail']=$fileName;      
        }        

        if($request->hasFile('big_thumbnail')) {                

            $originName = $request->file('big_thumbnail')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('big_thumbnail')->getClientOriginalExtension();
            $fileName =$fileName.time().'.'.$extension;        
            
            $request->file('big_thumbnail')->move(public_path('backend/portfolio'), $fileName);
            $data['big_thumbnail']=$fileName;      
        }  

        Portfolio::create($data);
        $url = route('admin.portfolio.index');
        return response()->json(['status'=>true ,'msg'=>'Portfolio Created !!','url'=>$url]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item=Portfolio::find($id);        
        return view('backend.portfolio.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item=Portfolio::find($id);

        $data=$request->validate([
            'title'=> '',           
            'description'=> ''            
        ]); 

        if($request->hasFile('thumbnail')) {       
            
            $old_image = $item->thumbnail;   

            $originName = $request->file('thumbnail')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('thumbnail')->getClientOriginalExtension();
            $fileName =$fileName.time().'.'.$extension;        
            
            $request->file('thumbnail')->move(public_path('backend/portfolio'), $fileName);
            $data['thumbnail']=$fileName; 
            
            if($old_image){                
                if(File::exists(public_path().'/backend/portfolio/'.$old_image))unlink(public_path().'/backend/portfolio/'.$old_image);                
            } 
            
        }    

        if($request->hasFile('big_thumbnail')) {       
            
            $old_big_thumbnail = $item->big_thumbnail;   

            $originName = $request->file('big_thumbnail')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('big_thumbnail')->getClientOriginalExtension();
            $fileName =$fileName.time().'.'.$extension;        
            
            $request->file('big_thumbnail')->move(public_path('backend/portfolio'), $fileName);
            $data['big_thumbnail']=$fileName; 
            
            if($old_big_thumbnail){                
                if(File::exists(public_path().'/backend/portfolio/'.$old_big_thumbnail))unlink(public_path().'/backend/portfolio/'.$old_big_thumbnail);                
            } 
            
        } 

        $item->update($data);

        return response()->json(['status'=>true ,'msg'=>'Portfolio Updated !!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item=Portfolio::find($id); 
        $item->delete();
        
        return response()->json(['status'=>true ,'msg'=>'Portfolio Deleted !!']);
    }
}
