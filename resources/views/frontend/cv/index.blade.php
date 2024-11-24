<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  </head>
  <body>
    <div class="wrapper" style="">
        <div class="left_part" style="width: 25%;float: left;background:#E3E9F1;">
        <div class="logo" style="margin: 0 auto;text-align: center;margin-bottom: 30px;">
          <img src="{{ public_path('backend/users/'.$user->image) }}" alt="Logo" style="height: 150px;width: 150px;border-radius: 50%;margin: 0 auto;text-align: center;">
        </div>
        
        <h3 style="border-bottom: 1px solid #000;">CONTACT</h3>
        <ul style="padding-left: 0px;">
          <li style="list-style: none;"><img src="{{ public_path('frontend/img/phone.png') }}" alt="phone--v1"/> +{{ $user->phone }}</li>
          <li style="list-style: none;"> <img src="{{ public_path('frontend/img/gmail.png') }}" alt="phone--v1"/> {{ $user->email }}</li>
          <li style="list-style: none;"> <img src="{{ public_path('frontend/img/location.png') }}" alt="phone--v1"/>  {{ $user->address }}</li>
        </ul>
        
        <h3>Education</h3>
        <ul style="padding-left: 20px;">
          @foreach($education as $edu)    
            <li>{{ $edu->uni_name }}</li>
            <li>{{ $edu->background }}</li>
            <li>{{ $edu->year }}</li>
          @endforeach
        </ul>

        <h3>Skills</h3>
        <ul style="padding-left: 20px;">
            
          @foreach(json_decode($user->skill) as $skl)    
            <li>{{ $skl }}</li>
          @endforeach 
          
        </ul>

        <h3>Languages</h3>
        <ul style="padding-left: 20px;">
          <li>English</li>
          <li>Hindi</li>
          <li>Urdu</li>
          <li>Bengali (Native)</li>
        </ul>
        
        </div>
        <div class="right_part" style="width: 70%;float:right">
            <div class="top_header" style="margin: 0 auto;text-align: center;background: #323B4B;width: 90%;height: 120px;padding: 20px;">
                <h1 style="color: #fff;">{{ $user->name }}</h1>
                <h4 style="color:  #fff;">{{ $user->designation }}</h4>
            </div>
            <div class="about-section">
              <h3 style="border-bottom: 1px solid #000;">PROFESSIONAL SUMMARY</h3>
              <p>{{ $user->details }}</p>
            </div>
            <div class="work-experience">
          <h3 style="border-bottom: 1px solid #000;">Work Experience</h3>
          
          @foreach($experience as $exp)
            
              <h4>{{ $exp->company_name }}</h4>
              <h4>{{ $exp->designation }}</h4>
             
                  {!! $exp->responsibilities !!}
                
             
          @endforeach
          
          
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>