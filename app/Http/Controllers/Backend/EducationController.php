<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Education::get();
        return view('backend.education.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type=request('type');
        return view('backend.education.create', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'uni_name'=> '',
            'background'=> '',         
            'gpa'=> '',    
            'year'=> '',            
            'background'=> '',            
            'details'=> ''            
        ]);                

        Education::create($data);
        
        $url = route('admin.education.index');

        return response()->json(['status'=>true ,'msg'=>'Education Created !!','url'=>$url]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item=Education::find($id);        
        return view('backend.education.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item=Education::find($id);

        $data=$request->validate([
            'uni_name'=> '',
            'background'=> '',         
            'gpa'=> '',    
            'year'=> '',            
            'background'=> '',            
            'details'=> ''            
        ]);    

        $item->update($data);

        return response()->json(['status'=>true ,'msg'=>'Education Updated !!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item=Education::find($id);       

        $item->delete();

        return response()->json(['status'=>true ,'msg'=>'Education Deleted !!']);
    }
}
