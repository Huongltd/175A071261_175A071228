<!doctype html>
<html lang="en">
  <head>
    <title>Quản lý điểm</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
  <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
            <div class="container-fluid">
                <div class="logo">
                    <img src="./images/logo.png" class="img-fluid" alt="">
                </div>     
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto" style="font-size: 24px;">
                  <li class="nav-item">
                    <a class="nav-link active" href="trangchu.php" target="">Trang chủ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Hệ thống</a>
                  <li class="nav-item">
                    <a class="nav-link" href="quanly.php">Quản lý</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Hỏi đáp</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Hỗ trợ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" target="">Đăng xuất</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main>
    <div class="container-fluid">
            <div class="row">
                <h3 style="text-align:center;">Nhập điểm cho sinh viên</h3>
             </div>
        
            <div class="row">
                <div class="col-md-3">
                <div class="label">Tên lớp học</div> 
                <div class="value"><input type="text" name="name" width="100"></div>
                </div>
                <div class="col-md-3">
                <div class="label">Học phần</div> 
                <div class="value"><input type="text" name="name" width="400"></div>
                </div>
                <div class="col-md-3">
                <div class="label">Mã sinh viên</div> 
                <div class="value"><input type="text" name="name" width="200"></div>
                </div>
                <div class="col-md-3">
                <div class="label">Tên sinh viên</div> 
                <div class="value"><input type="text" name="name"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                <div class="label">Điểm quá trình</div> 
                <div class="value"><input type="text" name="name" width="100"></div>
                </div>
                <div class="col-md-3">
                <div class="label">Điểm thi kết thúc</div> 
                <div class="value"><input type="text" name="name" width="100"></div>
                </div>
                <div class="col-md-3">
                <div class="label">Điểm tổng kết</div> 
                <div class="value"><input type="text" name="name" width="100"></div>
                </div>
                <div class="col-md-3">
                    <form action="" method="post" enctype="multipart/dform-data">
                    <input type="file" name="file">
                    <button type="submit" name="btnAdd">Thêm</button>
                </form>    
                </div>
                <div class="list-course">
					<table class="list-course" bgcolor="#FFFFFF">
						<tr class="row-first">
							<td width="30"><input type="checkbox"></td>
							<td width="50">Sửa</td>
							<td width="50">Xóa</td>
							<td width="150">Mã sinh viên</td>
							<td width="250">Tên sinh viên</td>
							<td width="100">Mã lớp </td>
                            <td width="300">Học phần</td>
							<td width="100">Quá trình</td>
                            <td width="100">Điểm thi</td>
                            <td width="200">Điểm tổng kết</td>
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="#"><img src="./images/edit.gif" border="0"></a></td>
                            <td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
                            <td width="150">175A071292</td>
							<td width="400">Bùi Minh Anh</td>
							<td width="100">59TH2 </td>
                            <td width="100">Cơ sở dữ liệu</td>
							<td width="100">8.2</td>
                            <td width="100">8</td>
                            <td width="200">8.1</td>
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="#"><img src="./images/edit.gif" border="0"></a></td>
                            <td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
                            <td width="150">175A071505</td>
							<td width="400">Vũ Ngọc	Hải</td>
							<td width="100">59TH2 </td>
                            <td width="100">Cơ sở dữ liệu</td>
							<td width="100">5.0</td>
                            <td width="100">6.5</td>
                            <td width="200">5.9</td>
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="#"><img src="./images/edit.gif" border="0"></a></td>
                            <td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
                            <td width="150">175A071523</td>
							<td width="400">Vũ Hữu	Huynh</td>
							<td width="100">59TH2 </td>
                            <td width="100">Cơ sở dữ liệu</td>
							<td width="100">8.5</td>
                            <td width="100">8</td>
                            <td width="200">8.2</td>
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="#"><img src="./images/edit.gif" border="0"></a></td>
                            <td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
                            <td width="150">175A071487</td>
							<td width="400">Phạm Minh Tiến</td>
							<td width="100">59TH2 </td>
                            <td width="100">Cơ sở dữ liệu</td>
							<td width="100">4.9</td>
                            <td width="100">3</td>
                            <td width="200">3.8</td>
                        </tr>
                            </table>
                            <div class="task">
                            <a href="#"><input type="button" value="Thêm mới" name="Thêm mới"></a>
                            <input type="button" name="Xóa" value="Xóa"> 
                            <a href="#"><input type="button" name="Cập nhật" value="Cập nhật"></a>
					      </div>   
                        </div>
            </div>
    </div>  
    </main>
