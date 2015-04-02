<!DOCTYPE html>
<html>
    <head>
        <title>Hoc Mai</title>
        <meta charset="utf-8" />
        <!-- css -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <!-- JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/java.js" type="text/javascript"></script>

    </head>
    <body>     
        <div class="container1">
            <div id="banner">
                <div class="search1">
                    <form>
                        <p class="text-center">
                            Học tiếng anh trực tiếp với
                        </p>
                        <input type="text" name="" class="textsearch1" >
                        <button type="submit" class="btn btn-default btn-textsearch1"><span class="glyphicon glyphicon-search glyphicon1"></span> </button>
                    </form>
                </div>
                <div id="sodienthoai" >
                    <p class="text-uppercase text-center">
                        Hỗ trợ trực tuyến
                    </p>
                    <span>
                        012.346.789
                    </span>
                </div>
            </div>
            <!--end banner-->
            
            <div id="menu2" class="container" >
                <ul class="nav navbar-nav">
                    <?php 
                    for($i=0;$i<=7;$i++){
                        echo '<li ><a href="#" class="menu1" ></a></li>';
                    }
                    ?>
                </ul>
              </div><!-- /end menu -->
              <div id="baoquanh">
              <nav class="navbar navbar-default dangnhap">
                <div class="container-fluid">
                    <form class="navbar-form navbar-left" role="search">
                      <div class="form-group">
                          <label id="dangnhaptaiday">
                              Đăng nhập tại đây
                            </label> <span id="icondangnhap" ></span>
                          <input type="text" id="textdangnhap" class="form-control" placeholder="Tên đăng Nhập">
                      </div>
                        <div class="form-group matkhau">
                          <span id="iconmatkhau"></span>
                          <input type="text" class="form-control" placeholder="Mật Khẩu">
                      </div>
                      <button type="submit" class="btn btn-default btndangnhap">
                          Đăng Nhập
                      </button>
                    </form>
                    
                    <ul class="nav navbar-nav menutroxuong">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="aaa" data-toggle="dropdown" role="button" aria-expanded="false">
                                Ngôn Ngữ 
                            <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">
                                    English
                            </a></li>
                            <li><a href="#">
                                    Tiếng Việt
                                </a></li>
                          </ul>
                        </li>
                      </ul>
                </div><!-- /.container-fluid -->
              </nav>
              
              <div id="header">
                <div id="sidebar-left" class="nav navbar-left">
                    
                </div>
                <!--end sidebar left-->
                
                <div id="sidebar-ringt" class="nav navbar-right">
                    <p class="text-center text-uppercase" id="danhngon">Danh Ngôn Học Tập</p>
                    <marquee id="hoho" direction="down" scrolldelay="5" scrollamount="2" onmouseover="this.stop()" onmouseout="this.start()">
                        <ul class="chaychu">  
                            <li><p class="chayli">
                                    “Learning to know, learning to do, learning to live together and learning to be.” <br>
                                UNESCO – Four pillars of learning
                                </p><span class="chim"></span>
                            </li>
                            
                            <li class="aaaaaaa"><p class="chayli1">
                                    “Anyone who stops learning is old, whether at twenty or eighty. Anyone who keeps learning stays young.” <br>
                                    Henry Ford
                                </p><span class="chim2"></span>
                            </li>
                            
                            <li><p class="chayli">
                                    “Education is the most powerful weapon you can use to change the world” <br>
                                    Nelson Mandela 
                                </p><span class="chim"></span>
                            </li>
                            
                            <li class="aaaaaaa"><p class="chayli1">
                                    “The roots of education is bitter but the fruit sweet” <br>
                                    Aristotle 
                                </p><span class="chim2"></span>
                            </li>
                            
                            <li><p class="chayli">
                                    “The limits of your language are the limits of your world” <br>
                                    Ludwig Wittgenstein 
                                </p><span class="chim"></span>
                            </li>
                            
                            <li class="aaaaaaa"><p class="chayli1">
                                “If you put in the work to sharpen the steel, it will eventually turn into needle” <br>
                                Vietnamese Proverb 
                                </p><span class="chim2"></span>
                            </li>
                        </ul>
                        </marquee>
                    <img src="images/banner-right-logo.gif" alt="dfsd">
                </div>
                <!--end sidebar left-->
              </div>
              <!--end header-->
              <div class="clearfix"></div>
            <div id="main">
                <div id="content">
                    <div id="content-left" class="nav navbar-left">
                        <div id="nganhang">
                            <p class="text-center text-uppercase">
                                Thanh Toán Trực Tuyến
                            </p>
                            <a href="#" class="nganluong"><img src="images/nganluong-hocmai.gif" alt="adsf"></a>
                            <a href="#" class="nganluong"><img src="images/nganluong-nganhang.gif" alt="adsf"></a>
                            <a href="#" class="nganluong"><img src="images/nganluongvn.gif" alt="adsf"></a>
                        </div>
                        <!--end ngan hang-->
                        
                        <div id="huongdanhoc">
                            <p class="text-center text-uppercase">
                                hướng dẫn học
                            </p>
                            <a href="#"></a>
                        </div>
                        <!--end huongdanhoc-->
                        
                        <div id="giaovien">
                            <p class="text-center text-uppercase">
                                Giáo Viên Mới
                            </p>                            
                        </div>
                        <!--end giaovien--> 
                    </div>
                    <!--end content-left-->
                    
                    <div  class="nav navbar-right content-right">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NmugSMBh_iI?showinfo=0"></iframe>
                    </div>
                    <!--end content-right-->
                    <div  class="nav navbar-right content-right1">
                        <img src="images/facebook.png" alt="dfs">
                    </div>
                    
                </div>
                <!--end content-->
            </div>
            <!--end main-->
            </div>
            <div class="clearfix"></div>
            <div id="footer" class="text-capitalize">
                <div class="footer1">
                    <ul>
                        <li><a href="">Tin Tức</a></li>
                        <li><a href="">Lịch Học</a></li>
                        <li><a href="">học phí</a></li>
                    </ul>
                </div>
                <div class="footer2">
                    <ul>
                        <li><a href="">bí quyết học tiếng anh</a></li>
                        <li><a href="">bí quyết học tiếng anh</a></li>
                        <li><a href="">bí quyết học tiếng anh</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <p class="text-center">Giấy Phép được cung cấp bởi mạng xã hội fdsffsdfsd fsdfs sdfsd fsdf sdfs</p>
            </div>
            <!--end footer-->
        </div>
        <!--end container-->
        
        <!-- JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
    </body>
</html>    
