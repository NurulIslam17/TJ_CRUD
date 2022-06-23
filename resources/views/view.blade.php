<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Page</title>
  <style>
    .viewDiv {
      width: 90%;
      margin: auto;
      padding: 10px 0px;
      text-align: center;
      background-image: linear-gradient(to right bottom, #2a0df0, #007dff, #00acff, #00cfbd, #12eb70);
    }

    h1 {
      color: #FFF;
    }

    th {
      padding: 10px;
      background-color: #000;
      color: #FFF;
      font-size: 20px;
    }
    .tableDiv{
      width: 80%;
      margin-top: 20px;
    }

    table {
      background-color: #00acff;
      border-collapse: collapse;
      width: 100%;
    }

    table,
    th,
    td {
      border: 1px solid blue;
    }

    td {
      padding: 10px;
      font-size: 18px;
    }

    tr:nth-child(odd) {
      background-color: #acaf;
    }

    tr:nth-child(even) {
      background-color: #acff;
    }
    .btn-group{
      box-sizing: border-box;
      margin: 4px;
      text-align: center;
    }
    .btn{
      padding: 7px;
      color: #FFF;
    }
    a{
      font-size: 18px;
      text-decoration: none;
    }
    .upd{
      background-color: green;
    }
    .del{
      background-color: red;
    }
    .add{
      background-color: green;
      padding: 10px;
      margin-bottom: 10px;
      text-align: left;
    }
    img{
      height: 120px;
      width: 120px;
    }
    .imgTd{
      padding: 0px;
      width: 100px;
    }
  </style>
</head>

<body>
  <div class="viewDiv">
    <h1>All the Product Informations</h1>
    <a class="btn add" href="{{url('/')}}">Add Product</a>
    <center>
      <div class="tableDiv">
        <table>
          <tr>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Image</th>
            <th>Action</th>
          </tr>
          @foreach($data as $x)
          <tr>
            <td>{{$x->name}}</td>
            <td>{{$x->desc}}</td>
            <td class="imgTd">
              <img src="/ProductFolder/{{$x->img}}" alt="Not Found">
            </td>
            <td class="btn-group">
              <a href="{{url('/edit',$x->id)}}" class="btn upd">Update</a>
              <a href="{{url('/del',$x->id)}}" class="btn del">Delete</a>
            </td>
          </tr>
          @endforeach
        </table>
      </div>

    </center>
  </div>
</body>

</html>