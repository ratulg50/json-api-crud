<!doctype html>
<html>
   <head>
      <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   </head>
   <body>
       <ul class="horizontal">
         <li><a class="active" href="/">Home</a></li>
         <li><a href="item_show">Item Details</a></li>
         <li><a href="user_show">User Details</a></li>
         <li class="rightli" style="float:right"><a href="javascript:void(0)">About</a></li>
       </ul>
      <div class="container" style="margin: 20px;">
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

