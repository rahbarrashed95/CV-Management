<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Experience::get();
        return view('backend.experience.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type=request('type');
        return view('backend.experience.create', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'company_name'=> '',
            'designation'=> '',         
            'start_date'=> '',    
            'end_date'=> '',            
            'responsibilities'=> ''
        ]);            

        Experience::create($data);
        $url = route('admin.experience.index');
        return response()->json(['status'=>true ,'msg'=>'Experience Created !!','url'=>$url]);
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
        $item=Experience::find($id);        
        return view('backend.experience.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item=Experience::find($id);

        $data=$request->validate([
            'company_name'=> '',
            'designation'=> '',         
            'start_date'=> '',    
            'end_date'=> '',            
            'responsibilities'=> ''
        ]);    

        $item->update($data);

        return response()->json(['status'=>true ,'msg'=>'Experience Updated !!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item=Experience::find($id);       

        $item->delete();

        return response()->json(['status'=>true ,'msg'=>'Experience Deleted !!']);
    }
}
