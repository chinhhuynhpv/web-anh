<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../asset/css/image.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
    <script>
       $(document).ready(function(){
            $("#adding").click(function(){
                $("#main-choice").toggle();
                $("#out-in").toggle();
            });
          
        });
    </script>
</head>
<body>
    <!-- header -->
    <div class="header">
        <div class="searching">
            <span><i class="fas fa-camera-retro"></i>
            <div class="form-searching">
                <input class="search-txt" type="text" placeholder="Type to searching">
                <a href="" class="btn-searching">
                    <i class="fas fa-search"></i>
                </a>
            </div>
            </span>
        </div>
        <button class="adding" id="adding">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </button>
        <div class="main-choice" id="main-choice">
            <a href="#home" >Categories</a>
            <a href="#news">Trending</a>
            <a href="#contact">Choice</a>
            <button><i class="fas fa-ellipsis-h"></i></button>
           
        </div>
        <div class="out-in" id="out-in">
            <a href="#home" >login</a>
            <a href="#news">join us</a>|
            <a href="#contact"><i class="fas fa-upload"></i>submit Photos</a>
        </div>
    </div>
    <!-- main body -->
    <div class="container">
        <div class="row pt-5">
            <div class="col-sm-3">
                <!-- <ul class="list-group">
                    <li class="list-group-item active">Danh mục quản lí </li>
                    <li class="list-group-item">Thông tin cá nhân</li>
                    <li class="list-group-item">Quản lí sản phẩm</li>
                    <li class="list-group-item">Quản lí user</li>
                </ul> -->
                <ul style="list-style-type:none;border:1px solid red;padding:0;margin:0;text-align:center;font-size:15px;width:80%;">
                    <li style="padding:4px; border:1px solid red"><a style="text-decoration:none;" href="">Danh mục quản lí</a></li>
                    <li style="padding:4px; border:1px solid red"><a style="text-decoration:none;" href="">Thông tin user</a></li>
                    <li style="padding:4px; border:1px solid red"><a  style="text-decoration:none;" href="">Quản lí sản phẩm</a></li>
                    <li style="padding:4px; border:1px solid red"><a style="text-decoration:none;" href="">Quản lí người dùng</a></li>
                </ul>
            </div>
            <div class="col-sm-9">
                <!-- <h2 class="pt-0 mt-0 text-danger font-weight-bold text-center">THÔNG TIN NGƯỜI DÙNG</h2>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
                        <small id="emailHelp" class="form-text text-muted">Your name is </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="your phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form> -->
                <form action="">
                    <label for="">Họ và tên:</label>
                    <input type="text"><br>
                    <label for="">Password:</label>
                    <input type="text"><br>
                    <label for="">Phone:</label>
                    <input type="text"><br>
                    <label for="">Email:</label>
                    <input type="text"><br>
                    <button>Đăng kí</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>