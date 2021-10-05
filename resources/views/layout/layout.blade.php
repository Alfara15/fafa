<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootsrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <title>PROJEK | FAFA</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    td,th{
        text-align: left;
        padding: 15px;
        color: #ddd;
        border-bottom: 1px solid #818181;
    }
    .circle-wrap{
        margin: 50px auto;
        width: 150px;
        height: 150px;
        background: #e6e2e7;
        border-radius: 50%;
    }
    .circle-wrap .circle .mask,
    .circle-wrap .circle .fill{
        width: 150px;
        height: 150px;
        position: absolute;
        border-radius: 50%;
    }
    .circle-wrap .circle .mask{
        clip: rect(0px, 150px ,150px, 75px);
    }
    
    .circle-wrap .circle .fill{
        clip: rect(0px, 75px ,150px, 0px);
        background-color: #f7403b;
    }
    .circle-wrap .circle .mask-fill,
    .circle-wrap .circle .fill{
        animation: fill ease-in-out 3s;
        transform: rotate(126deg);
    }
    @keyframes fill{
        0%{
            transform: rotate(0deg);
        }
        100%{
            transform: rotate(126deg);
        }
    }
    .icon-a:hover{
        background-color: gray;
        
    }


</style>
</head>
<body>
    <div id="mySidenav" class="sidenav" style="background-color:black;">
        <p class="logo" style="color: white;"><span style="color: red;">F</span>-AFA</p>
        <a href="dashboard" class="icon-a" style="color: white;"><i class="fa fa-dashboard icons"></i>&nbsp;&nbsp;
        Dashboard
        </a>
        <a href="galery" class="icon-a" style="color: white;"><i class="fa fa-picture-o icons"></i>&nbsp;&nbsp;
        Galery
        </a>
        <a href="table" class="icon-a" style="color: white;"><i class="fa fa-table icons"></i>&nbsp;&nbsp;
        Table
        </a>
        <a href="chart" class="icon-a" style="color: white;"><i class="fa fa-bar-chart icons"></i>&nbsp;&nbsp;
        Chart
        </a>
        <a href="calendar" class="icon-a" style="color: white;"><i class="fa fa-calendar icons"></i>&nbsp;&nbsp;
        Calendar
        </a>
        <a href="myprofile" class="icon-a" style="color: white;"><i class="fa fa-user icons"></i>&nbsp;&nbsp;
        MyProfile
        </a>
        <a href="home" class="icon-a" style="color: white;"><i class="fa fa-sign-out icons"></i>&nbsp;&nbsp;
        Logout
        </a>
       
    </div>

    <div id="main"> 
        <div class="head">
  
            <div class="col-div-6">
                <span style="font-size: 30px; cursor: pointer;color: black;"class="nav">
                &#9776; F A F A </span>
                <span style="font-size: 30px; cursor: pointer;color: black;"class="nav2">
                &#9776; F A F A </span>
            </div>
       
            <div class="col-div-6">
                <div class="profile">
                <img src="img/fara.jpg" class="pro-img" style="
                width: 50px;
                height: 50px;
                display: flex;
                justify-content: center;
                border-radius: 50%;
                overflow: hidden;">
                <p>Alfara kristiani<span>SMK Bagimu Negeriku</span></p>
              
                </div>
            </div>
         
            <div class="clearfix"></div>
            <hr />
            @yield("konten")
        </div>
 
       
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script >
    $(".nav").click(function(){
       $("#mySidenav").css('width','70px');
       $("#main").css('margin-left','70px');
       $(".logo").css('visibility','hidden');
       $(".logo span").css('visibility','visible');
       $(".logo span").css('margin-left','-10px');
       $(".icon-a").css('visibility','hidden');
       $(".icons").css('visibility','visible');
       $(".icons").css('margin-left','-8px');
       $(".nav").css('display','none');
       $(".nav2").css('display','block');
    });
    $(".nav2").click(function(){
       $("#mySidenav").css('width','300px');
       $("#main").css('margin-left','300px');
       $(".logo").css('visibility','visible');
       $(".logo span").css('visibility','visible');
       $(".logo span").css('margin-left','visible');
       $(".icon-a").css('visibility','visible');
       $(".icons").css('visibility','visible');
       $(".nav").css('display','block');
       $(".nav2").css('display','none');
    });
  

    </script>
</body>
</html>