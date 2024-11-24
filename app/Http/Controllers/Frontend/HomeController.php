<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Use App\Models\Slider;
Use App\Models\Social;
Use App\Models\Feature;
Use App\Models\Service;
Use App\Models\Education;
Use App\Models\Experience;
Use App\Models\Certification;
Use App\Models\Portfolio;
Use App\Models\CountryVisa;
Use App\Models\AboutUs;
Use App\Models\ChooseUs;
Use App\Models\Faq;
Use App\Models\Testimonial;
Use App\Models\Brand;
Use App\Models\Blog;
Use App\Models\Appointment;
Use App\Models\Page;
Use App\Models\User;
Use App\Models\Contact;

use Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {    
        $social_items = Social::where('status', 1)->latest()->get();
        $blog_items = Blog::where('status' , 1)->get();
        $service_items = Service::where('status' ,1)->get();
        $education_items = Education::get();
        $experience_items = Experience::get();
        $certification_items = Certification::get();
        $portfolio_items = Portfolio::get();
        $user_data = User::first();
        return view('frontend.home.home_page', compact('service_items','education_items','experience_items','certification_items','blog_items','portfolio_items','user_data','social_items'));
    }

    public function service_details($service_id){
        $item = Service::find($service_id);
        $social_items = Social::where('status', 1)->latest()->get();
        return view('frontend.service.index', compact('item','social_items'));
    }

    public function about_page() {
        $item = AboutUs::first();
        $social_items = Social::where('status', 1)->latest()->get();
        return view('frontend.about.index', compact('item','social_items'));
    }

    public function make_appointment(Request $request){           
        Appointment::create([
            'name'  => $request->name,
            'phone'  => $request->phone,
            'country'  => $request->country,
            'service'  => $request->service,
            'date'  => $request->appoint_date,
            'time'  => $request->time
        ]);
        return redirect()->back();
    }

    public function blog_comment(Request $request){           
        Appointment::create([
            'name'  => $request->name,
            'phone'  => $request->phone,
            'country'  => $request->country,
            'service'  => $request->service,
            'date'  => $request->appoint_date,
            'time'  => $request->time
        ]);
        return redirect()->back();
    }



    public function contact_us(){
        $social_items = Social::where('status', 1)->latest()->get();
        return view('frontend.contact.index', compact('social_items'));
    }

    public function blog_details(string $blog_id){
        $item = Blog::find($blog_id);
        $recent_items = Blog::limit('3')->get();
        return view('frontend.blog.blog_details', compact('item','recent_items'));
    }

    public function page_details(string $page_id){
        $item = Page::find($page_id);
        return view('frontend.page.page_details', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
    public function user_login(Request $request){
     
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
       
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('front.home')->with('success', 'You are logged in!');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->withInput($request->only('email'));
        } 
    }
    
    public function send_message(Request $request){
        
        $data = $request->validate([
            'name' => '',    
            'phone' => '',    
            'message' => ''  
        ]);
        
        Contact::create($data);
        return redirect()->back();
    }
    
    public function generate_pdf(Request $request){
        
        $social_items = Social::where('status', 1)->latest()->get();
        $blog_items = Blog::where('status' , 1)->get();
        $service_items = Service::where('status' ,1)->get();
        $education_items = Education::get();
        $experience_items = Experience::get();
        $certification_items = Certification::get();
        $portfolio_items = Portfolio::get();
        $user_data = User::first();
        
        $data = [
            'user' => $user_data,
            'experience' => $experience_items,
            'education' => $education_items,
        ];
        
        $pdf = Pdf::loadView('frontend.cv.index', $data);
        return $pdf->stream('cv.pdf');
        
        // $pdf = Pdf::loadView('frontend.cv.index', $data);
        // return $pdf->download('invoice.pdf');
    }
    
}
