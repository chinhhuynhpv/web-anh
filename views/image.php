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
    <div class="containered">
        <div class=" row">
                <div class="col-sm-8   main-photos">
                    <img src="../images/anh18.jpg" alt="">
                    <div class="img-infor">
                        <p> 
                            <span><i class="far fa-eye">100 views</i></span>
                            <span><i class="far fa-heart">10 favourite</i></span>
                            <span><i class="fas fa-arrow-circle-down">200 dowloads</i></span>
                        </p>
                    </div>
                    <div class="img-button-related">
                        <button id="btn-dowload"><span><i class="fas fa-download"></i>FREE DOWLOAD</span></button>
                        <button id="btn-favourite"><span><i class="fas fa-heart"></i>Add to favourites</span></button>
                    </div>
                    <div class="row photographer-infor">
                        <table>
                            <tr>
                                <td> <strong>  Photographer: </strong></td>
                                <td>HAN MINH DINH</td>
                            </tr>
                            <tr>
                                <td><strong> Dimensions: </strong></td>
                                <td>5000X3000</td>
                            </tr>
                            <tr>
                                <td><strong> SIZE: </strong></td>
                                <td>6.41 MB</td>
                            </tr>
                            <tr>
                                <td><strong>TAGS:</strong></td>
                                <td>abstract, swirl, background, creative, vibrant, electric, light, wallpaper, virtual, art, digital, motion, blur, waves, violet, purple, design</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-sm-4 sponsor-image">
                    <h1 >SPONSORED IMAGES</h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href=""><img src="../images/anh3.jpg" alt=""></a>
                        </div>
                        <div class="col-sm-6">
                            <a href=""><img src="../images/anh1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href=""><img src="../images/anh2.jpg" alt=""></a>
                        </div>
                        <div class="col-sm-6">
                            <a href=""><img src="../images/anh4.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href=""><img src="../images/anh6.jpg" alt=""></a>
                        </div>
                        <div class="col-sm-6">
                            <a href=""><img src="../images/anh9.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href=""><img src="../images/anh10.jpg" alt=""></a>
                        </div>
                        <div class="col-sm-6">
                            <a href=""><img src="../images/anh12.jpg" alt=""></a>
                        </div>
                    </div>
                    
                </div>

        </div>
        <div class="row " >
            <div class="col-sm-8 similar-image" >
                <h1 style="padding:0px;margin:0px;">SIMILAR IMAGES</h1>
                <div class="column-1">
                    <a href=""><img src="../images/anh3.jpg" alt=""> </a>
                    <a href=""><img src="../images/anh3.jpg" alt=""> </a>
                </div>
                <div class="column-1">  
                    <a href=""><img src="../images/anh3.jpg" alt=""> </a>
                    <a href=""><img src="../images/anh3.jpg" alt=""></a></div>
                <div class="column-1">  
                    <a href=""><img src="../images/anh3.jpg" " alt=""></a>
                    <a href=""><img src="../images/anh3.jpg"" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="contact"><p>@the copyright belongs to me.</p></div>
    </footer>
</body>
</html>