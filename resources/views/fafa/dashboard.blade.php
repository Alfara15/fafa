@extends("layout.layout")
@section("konten")
<div class="clearfix"></div>
        </div>
        <div class="col-div-3" >
            <div class="box"style=" width: 96.5%;background-color:
             black; height: 110px; margin-top:-1px;">
                <p>67<br><span>Customers</span></p>
                <i class="fa fa-users box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box"style=" width: 96.5%;background-color:
             black; height: 110px; margin-top:-1px;">>
                <p>88<br><span>Projects</span></p>
                <i class="fa fa-list box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box"style=" width: 96.5%;background-color:
             black; height: 110px; margin-top:-1px;">>
                <p>99<br><span>Orders</span></p>
                <i class="fa fa-shopping-bag box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box"style=" width: 96.5%;background-color:
             black; height: 110px; margin-top:-1px;">>
                <p>78<br><span>Taskes</span></p>
                <i class="fa fa-tasks box-icon"></i>
            </div>
        </div>
       
        <div class="clearfix"></div>
        <br><br>
        <div class="col-div-8"style="  width: 70%; float: left;">
            <div class="box-8"style=" width: 96.5%;background-color:
             black; height: 320px; margin-left: 10px;width: 95%;margin-top:-30px;">
                <div class="content-box" style="color: black;  padding: 20px;">
                    <p style="margin: 0px;font-size: 20px; color: #f7403b;">Top Selling Project<span style="float: right;background-color: #ddd;
                        padding: 3px 10px;font-size: 15px;"> View All</span></p>
                    <br>
                    <table style="border-collapse: collapse;width: 80%;">
                        <tr>
                            <th>Company</th>
                            <th>Contact</th>
                            <th>Country</th>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>Alfreds </td>
                            <td>Futterkiste</td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>Alfreds </td>
                            <td>Futterkiste</td>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>Alfreds </td>
                            <td>Futterkiste</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-div-4"style="width: 30%;float: left;">
            <div class="box-4"style=" width: 96.5%;background-color: black;height: 320px;">
                <div class="content-box"style="color: #f7403b;  padding: 20px;margin-top:-30px;">
                    <p style="font-size: 20px;margin: 0px; color: #f7403b;">Total Sale<span style="float: right;background-color: #ddd;
                        padding: 3px 10px;font-size: 15px;"> View All</span></p>
                    <div class="circle-wrap">
                        <div class="circle">
                        <div class="mask full">
                            <div class="fill"></div>
                        </div>
                        <div class="mask half">
                            <div class="fill"></div>
                        </div>
                   
                        <div class="inside-circle"
                        style="
                        color:black;
                        width: 130px;
                        height: 130px;
                        border-radius: 50%;        
                        background: #fff;
                        line-height: 130px;
                        text-align: center;
                        margin-top: 10px;
                        margin-left: 10px; 
                        position: absolute;
                        z-index: 100;
                        font-weight: 700;
                        font-size: 2em; ">35%</div>
                        </div>
                  
                </div>
            </div>
            </div>
        </div>
        <div class="clearfix"></div>
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
@endsection