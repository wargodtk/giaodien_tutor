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
        <div class="container">
            <div class="banner">
                <div class="row">
                    <div class="col-lg-1">
                        
                    </div>
                    <div class="col-lg-4 search1">
                        <form>
                            <p class="text-center">
                                Học tiếng anh trực tiếp với
                            </p>
                            <input type="text" name="" class="textsearch1" >
                            <button type="submit" class="btn btn-textsearch1"><span class="glyphicon glyphicon-search glyphicon1"></span> </button>
                        </form>
                    </div>
                    <div class="col-lg-4 sodienthoai">    
                        <p class="text-uppercase text-center">
                            Hỗ trợ trực tuyến
                        </p>
                        <span>
                            012.346.789
                        </span>
                    </div>
                    <div class="col-lg-3">
                    </div>
                </div>
            </div>
            <!--end banner-->
            <div id="menu">
                <ul class="nav navbar-nav">
                    <li ><a href="#"> <img class="menu1"  src="images/menu-trangchu.png" alt="dfs"> 
                            <p class="text-uppercase" > Trang Chủ</p>
                    </a></li>
                    <li ><a href="#"> <img class="menu1"  src="images/menu-vechungtoi.png" alt="dfs"> 
                            <p class="text-uppercase" > Về Chúng tôi</p>
                    </a></li>
                    <li ><a href="#"> <img class="menu1"  src="images/menu-lichhoc.png" alt="dfs"> 
                            <p class="text-uppercase" > Lịch Học</p>
                    </a></li>
                    <li ><a href="#"> <img class="menu1"  src="images/menu-monhoc.png" alt="dfs"> 
                            <p class="text-uppercase" > Môn Học</p>
                    </a></li>
                    <li ><a href="#"> <img class="menu1"  src="images/menu-afg.png" alt="dfs"> 
                            <p class="text-uppercase" > FAQ</p>
                    </a></li>
                    <li ><a href="#"> <img class="menu1"  src="images/menu-lienhe.png" alt="dfs"> 
                            <p class="text-uppercase" > Liên Hệ</p>
                    </a></li>
                    <li ><a href="#"> <img class="menu1"  src="images/menu-thuvien.png" alt="dfs"> 
                            <p class="text-uppercase" > Thư viện</p>
                    </a></li>
                    <li ><a href="#"> <img class="menu1"  src="images/menu-hocvai.vn.png" alt="dfs"> 
                            <p class="text-uppercase" > Hocmai.vn</p>
                    </a></li>
                </ul>
              </div><!-- /end menu -->
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
                      <button type="submit" class="btn btndangnhap">
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

            <div class="clearfix"></div>
            <div class="row main">
                    <div class="col-lg-3 content-left">
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
                    
                    <div  class="col-lg-9 content-lichhoc">
                        <div id="tieude">
                            <p class="text-primary text-center text-uppercase">
                                Lịch Học hàng tuần
                            </p>
                        </div>
                        <div id="chuviet">
                            <p>Vui lòng kích vào ngày mà bạn muốn kiểm tra lịch trình chương trình
                            có thể lưu trữ 1 tuần trước
                            </p>
                        </div>
                        
                        <div id="sidebar-lichhoc">
                            <button type="button" class="button1"></button>
                            <img src="images/anhlichhoc.gif" alt="fdsf" class="anhlichhoc">
                            <img src="images/anhlichhoc.gif" alt="fdsf" class="anhlichhoc">
                            <img src="images/anhlichhoc.gif" alt="fdsf" class="anhlichhoc">                            
                            <button type="button" class="button2"></button>                           
                        </div>
                            <!--end sidebar-lichhoc-->
                            
                        <div id="main-lichhoc">
                            <div class="row">
                                <div class="col-lg-3 ">
                                    <?php
                                    for($i=0;$i<=6;$i++){
                                ?>
                                    <div class="ngay">
                                        <p class="text-uppercase text-center text">
                                            mon
                                        </p>
                                        <p class="text-uppercase text-center">
                                            (29/3/2015)
                                        </p>
                                    </div>
                                <?php
                                    }
                                ?>
                                </div>
                                <div class="col-lg-9 lichhocright">
                                    <div class="row">
                                         <?php
                                    for($i=0;$i<=11;$i++){
                                ?>
                                        <div class="col-lg-4 chitiet">
                                            <p class="text-center lead text1">
                                               
                                            </p>
                                            <p class="text-center lead text2">
                                                
                                            </p>
                                            <p class="text-center lead text3">
                                                
                                            </p>                                            
                                        </div>
                                        <?php
                                    }
                                ?>
                                    </div>
                                </div>
                            </div>
                            <!--end lich hoc ringt-->
                        </div>
                            <!--end main-lichhoc-->     
                </div>
                <!--end content-->
            </div>
            <!--end main-->
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
