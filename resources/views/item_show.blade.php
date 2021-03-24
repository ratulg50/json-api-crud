<!doctype html>
<html>
   <head>
      <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   </head>
   <body>
       <ul class="horizontal">
         <li><a href="/">Home</a></li>
         <li><a class="active" href="item_show">Item Details</a></li>
         <li><a href="user_show">User Details</a></li>
         <li class="rightli" style="float:right"><a href="javascript:void(0)">About</a></li>
       </ul>
      <div class="container" style="margin: 20px;">
         <br/>
         <div class="panel panel-primary">
            <table>
               <tr>
                  <td>ID</td>
                  <td>Name</td>
                  <td>Price</td>
                  <td>Images</td>
                  <td>Options</td>
               </tr>
               @foreach($itemArr as $item)
                  <tr>
                     <td>{{$item->id}}</td>
                     <td>{{$item->name}}</td>
                     <td>{{$item->price}}</td>
                     <td>
                        {{ $item->image['filename'] }}
                     </td>
                     <td>
                        <a href="item_delete/{{$item->id}}" class="w3-button w3-red">Delete</a>
                        <a href="item_edit/{{$item->id}}" class="w3-button w3-green">Edit</a>
                     </td>
                  </tr>
               @endforeach
            </table>
         </div>
         <a style="margin-top: 10px;" href="item_create" class="w3-button w3-black">Add Item</a>
      </div>
   </body>
   <style>
      ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #dddddd;
      }
  
      li {
      float: left;
      }
  
      li a {
      display: block;
      padding: 8px;
      }
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
      ul.horizontal {
         list-style-type: none;
         margin: 0;
         padding: 0;
         overflow: hidden;
         background-color: #333;
      }
      ul.horizontal li a.active {
         background-color: #4CAF50;
      }
      ul.horizontal li a {
         display: inline-block;
         color: white;
         text-align: center;
         padding: 14px 16px;
         text-decoration: none;
      }
  </style>
</html>

