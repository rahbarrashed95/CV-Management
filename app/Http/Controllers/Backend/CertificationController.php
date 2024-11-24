<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Certification;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Certification::get();
        return view('backend.certification.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type=request('type');
        return view('backend.certification.create', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'title'=> '',
            'certificate_date'=> ''
        ]);   
        
        if($request->hasFile('image')) {

            $originName = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName =$fileName.time().'.'.$extension;        
            
            $request->file('image')->move(public_path('backend/certification'), $fileName);
            $data['image']=$fileName;
        } 

        Certification::create($data);
        
        $url = route('admin.certification.index');

        return response()->json(['status'=>true ,'msg'=>'Certification Created !!','url'=>$url]);
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
        $item=Certification::find($id);        
        return view('backend.certification.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item=Certification::find($id);

        $data=$request->validate([
            'title'=> '',
            'certificate_date'=> ''
        ]);    
        
        if($request->hasFile('image')) {

            $old_header_image = $item->image;           

            $originName = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName =$fileName.time().'.'.$extension;        
            
            $request->file('image')->move(public_path('backend/certification'), $fileName);
            $data['image']=$fileName;

            if($old_header_image){                
                if(File::exists(public_path().'/backend/certification/'.$old_header_image))unlink(public_path().'/backend/certification/'.$old_header_image);                
            }  

        } 

        $item->update($data);

        return response()->json(['status'=>true ,'msg'=>'Experience Updated !!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item=Certification::find($id);       

        $item->delete();

        return response()->json(['status'=>true ,'msg'=>'Certification Deleted !!']);
    }
}
