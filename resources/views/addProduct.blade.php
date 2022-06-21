<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .main {
      width: 90%;
      margin: auto;
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background-image: linear-gradient(to right bottom, #0dcaf0, #00adff, #008bff, #0061ff, #1a12eb)
    }

    label {
      display: inline-block;
      width: 150px;
      font-size: 20px;
      font-weight: bold;
    }

    .inpDiv {
      margin: 15px;
    }

    input {
      font-size: 18px;
      padding: 5px;
    }

    .tableDiv {
      background-color: aqua;
      width: 600px;
    }
    h1{
      text-align: center;
      padding: 10px 0px;
    }
    .btnDiv{
      text-align: center;
    }
    .btnDiv input{
      background-color: blue;
      color: white;
      padding:10px 8px;
      border: none;
      font-size: 18px;
      font-weight: bolder;
    }
  </style>
</head>

<body>
  <div class="main">
    <div class="tableDiv">
      <h1>Add Product</h1>
      <form action="{{url('/addProduct')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="inpDiv">
          <label>Product Name</label>
          <input type="text" name="pName" placeholder="Enter Product Name" />
        </div>
        <div class="inpDiv">
          <label>Description</label>
          <input type="text" name="pDes" placeholder="Enter Description" />
        </div>
        <div class="inpDiv">
          <label>Product Image</label>
          <input type="file" name="pImg" />
        </div>
        <div class="inpDiv btnDiv">
          <input type="submit" value="Add Product" />
        </div>

      </form>
    </div>
  </div>
</body>

</html>