<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
        background-image: url("photo/bgform1.jpg");
        background-size: cover;
        background-attachment: fixed;
    }
    .form{
      background-color:#fff;
      width:500px;
      /* position: absolute ;
      left: 30%;
      top: 30%;
      transform: transalite(-50%,-50%); */
      margin: 0 auto;
      height: 400px;
      border-radius: 10px ;
      box-shadow: 0 0 30px blue;
      

    }
    .btn{
      margin-left: 130px;
      border-radius:3px;
      width:120px;
      height:50px;
      font-weight:bold;
      font-family: sans-serif;
      font-size: 20px;
    }
    .container {
        padding-top:50px;
    }
    .alert{
      color:red;
    }
  </style>
</head>
<body>
<div class="form">
<div class="container" style=" width:400px; margin-top:60px;">
  <h2 style = "text-align:center; font-weight:bold;">Client Login</h2>

  @if(session('info'))
    <div class="alert alert-dark">
        {{ session('info')}}
    </div>
    @endif
  <form class="needs-validation" novalidate action="{{('/home')}}">
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div >
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>
