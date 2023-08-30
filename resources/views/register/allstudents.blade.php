


<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

    @if(Session::has('success'))
    {{Session::get('success')}}
@endif

    <h2>Display all registered Students</h2>
   
        

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
    <th>Delete Student</th>
   
  </tr>
  @foreach ($dd1 as $item)
  <tr>
    <td>{{$item->name}}</td>
    <td>{{$item->email}}</td>
    <td><a href="/my-app/{{$item->id}}/update"><button>Edit</button></a></td>
    <td> <a href="/my-app/{{$item->id}}/delete"><button>Delete</button></a></td>

    @endforeach
    
  </tr>
 
</table>


</body>
</html>