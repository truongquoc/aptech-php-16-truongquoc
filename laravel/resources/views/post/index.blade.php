<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
    th{
      text-align:left;
    }
    table{
      margin-top:55px;
      margin-left: auto;
      margin-right:auto;
    }
    body{
      background:rgba(40,10,20,0.2);
    }
    .fas{
      color:#1a4b9b;
      font-size:1em;
    }
    </style>
        <script>
        function confirmfunction{
        confirm('are you sure want to delete');
            
        }
        </script>
</head>
<body>
<h1 style="text-align:center;font-weight:400">Customers List</h1>
    <table class="table table-striped table-dark"style="width:990px">
  <thead>
    <tr>
      <th scope="col" style="width:300px">Email</th>
      <!-- <th scope="col">Password</th> -->
      <th scope="col">Age</th>
      <th scope="col">ID</th>
      <th scope="col" style="padding-left:70px" > Action</th>
       <th scope="col" style="width:174px;padding-left: 110px"><a href="{{ route('user.register')}}">NewUser</a><i class="fas fa-plus"></i></th>
      <!-- <th style="width:174px;padding-left:110px;"><a href="{{ route('user.register')}}"><i class="fas fa-plus"></i>NewUser</a></th> -->
    </tr>
  </thead>
  <tbody>
  
      @foreach($users as $key )
     
          <!-- $value=$key->ID;
         
        echo "<tr>";
        echo "<td>$key->email</td>";
         echo "<td>$key->password</td>";
       echo "<td>$key->age</td>";
          echo "<td>$key->ID</td>";
          echo '<td><button type="button" class="btn btn-success"onclick=edit("<?php $value?>")
          >Edit</button></td>';
        echo "</tr>"; -->
        <tr>
        <td>{{$key->email}}</td>
        <!-- <td style="width:150px;">{{$key->password}}</td> -->
        <td>{{$key->age}}</td>
        <td>{{$key->ID}}</td>
        <td style="width:100px" ><a href="{{ route('user.edit',[$key->ID])}}"class="btn btn-small btn-info"style="margin-left:30px">Edit</a></td>
        <td style="width:100px;padding-left:50px"><a href="{{ route('user.show',[$key->ID])}}"class="btn btn-small btn-info"style="magrin-left:80px;background-color:#5bb27e">Show</a></td>
        <!-- <td style="width:100px"><a href="{{route('user.destroy',[$key->ID])}}"class="btn btn-small btn-danger"style="background-color:#c1352a">Delete</a></td> -->
        <td style="wdith:100px"><form action="{{route('user.destroy',[$key->ID])}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name = "_method" value = "DELETE">
            <button type="submit" class="btn btn-danger">Delete</button>
        
        </form></td>
        </tr>
       @endforeach
       
    
    
  </tbody>
</table>

    <ul class="pagination justify-content-end">
         {{$users->links()}}
     </ul>
  </div>
  </div>
</body>
</html>