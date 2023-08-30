<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to my Laravel PHP</h1>
   <a href="{{url('loginpage')}}"> <button> Login</button> </a>
    <a href="{{url('updateuser')}}"><button>Register</button>  </a>
    {{-- <a href="{{ url('updateuser') }}"> Please click   to Register on my website</a> --}}
    <a href="{{url('data1')}}"><button>Show All Registered Users</button>  </a>

    
</body>
</html>