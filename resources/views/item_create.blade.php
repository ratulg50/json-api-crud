<!doctype html>
<html>
   <head>
      <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   </head>
   <body>
       <ul class="horizontal">
         <li><a class="active" class="w3-button w3-black" href="{{route('item.show')}}">Back</a></li>
       </ul>
      <div class="container" style="margin: 20px;">
        <h1>Add Item</h1>
        <div>
            <form method="post" action="item_create">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="iname" class="col-md-4">Item Name</label>
                    <input type="text" id="iname" placeholder="Item name.." name="name"/>
                </div>
                <div class="form-group">
                    <label for="iprice" class="col-md-4">Item Price</label>
                    <input type="text" id="iprice" placeholder="Item Price.." name="price"/>
                </div>
                <div class="form-group">
                    <label for="iphoto" class="col-md-4">Item Photo</label>
                    <input type="file" id="iphoto" placeholder="Item Photo.." name="photo"/>
                </div>
                <div class="form-group">
                <button type="submit" class="w3-button w3-black">Submit</button>
                </div>
            </form>
        </div>
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
      input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }
        input[type=file], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        input[type=submit]:hover {
        background-color: #45a049;
        }
  </style>
</html>


