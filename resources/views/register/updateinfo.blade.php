<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if(Session::has('success'))
    {{Session::get('success')}}
@endif


@if($dd2)
    <form method="POST" action="{{ route('updatesubmit', ['id' => $dd2->id]) }}">
        @csrf
      <div class="container">
       
        

        {{-- <h1>Update data {{$item->name}}</h1> --}}
        <p>Please update the fields</p>
        <hr>


    <h1>{{$dd2->name}}</h1>
        <label for="email"><b>Name</b></label>
        <input type="text" value="{{$dd2->name}}" placeholder="Enter name" name="name" id="name" required>
    
        <label for="email"><b>Email</b></label>
        <input type="text" value="{{$dd2->email}}" placeholder="Enter Email" name="email" id="email" required>
    
 @endif
        <hr>
        {{-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> --}}
    
        <button class="registerbtn">Register</button>
      </div>

      
     
    </form>
</body>
</html>