<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<link rel="apple-touch-icon" sizes="76x76" href="{{asset('controlpanelfolder/assets/img/apple-icon.png')}}" />
<link rel="icon" type="image/png" href="{{asset('controlpanelfolder/assets/img/favicon.png')}}" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Dashboard</title>
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />
<!-- Bootstrap core CSS     -->
<link href="{{asset('controlpanelfolder/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<!--  Material Dashboard CSS    -->
<link href="{{asset('controlpanelfolder/assets/css/material-dashboard.css?v=1.2.0')}}" rel="stylesheet" />
<!--  CSS for Demo Purpose, don't include it in your project     -->
<link href="{{asset('controlpanelfolder/assets/css/demo.css')}}" rel="stylesheet" />
<!--     Fonts and icons     -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div class="container" style="margin-top:100px;">
      <div class="table-responsive" >

        <table id="myTable" class="display table" width="100%">
          <thead>
            <tr>
              <th>Name</th>
              <th>Type</th>
              <th>Image review</th>
              <th>Edit/Remove</th>
            </tr>
          </thead>
          <tbody>
            @foreach($product as $mypro)
            <tr>
                <td>{{ $mypro->name}}</td>
                <td class="text-primary">{{ $mypro->type}}</td>
                <td><img src="{{$mypro->img_url }}" alt="review" class="product_image"/></td>
                <td>
                  <div class="td-actions">
                      <button type="button" rel="tooltip" title="Edit this Product" class="btn btn-primary btn-simple btn-xs">
                        <a href="products_edit/{{$mypro->id}}"> <i class="material-icons">edit</i></a>
                      </button>
                      <button type="submit" rel="tooltip" title="Remove this Product" class="btn btn-danger btn-simple btn-xs">
                        <a href="products_tools/{{$mypro->id}}" style="color:#ff0000"> <i class="material-icons">close</i></a>
                      </button>
                  </div>
                </td>
            </tr>
              @endforeach
          </tbody>
        </table>
        <div id="upload" class="table-responsive">
          <table width="100%" >

          <tr>
            <td colspan="4" align="center"><h4>Add Product</strong></h4>
          </tr>
          <tr>
            <form action="{{ URL('products') }}" method="post" enctype="multipart/form-data"  class="form-group container" name="f2">
            <td>
                <label for="name">Product Name</label><br>
                <input id="name" type="text" class="myinput"  name="name" value="{{ old('name') }}" required autofocus>
            </td>
            <td>
                <label for="type">Product Type</label><br>
                <select  name="type" class="myinput"  id="type">
                  <option value="Android">Android</option>
                  <option value="iPhone">iPhone</option>
                  <option value="huawei">huawei</option>
                  <option value="Asus">Asus</option>
                  <option value="Xperia">Xperia</option>
                  <option value="Infinix">Infinix</option>
                  <option value="Accent">Accent</option>
                  <option value="Nokia">Nokia</option>
                </select>

              </td>
              <td>
                <label for="file">Select Product image :</label>
                 <input type="file" name="file" id="file">

              </td>
              <td>
                <input type="submit" value="ADD" name="submit" id="sub1">
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
              </td>
          </form>
          </tr>
          </table>
        </div>
      </div>
    </div>

    <script>
  $(document).ready(function(){
      $('#myTable').dataTable();
  });

  </script>
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script> -->
  </body>
</html>
