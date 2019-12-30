<!doctype html>
<html lang="en">
  <head>
    <title>Quản trị </title>
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
        <h3 style="color:black ;text-align:center;">Tạo tài khoản đăng nhập</h3>
        </br>
        </br>

    <main >
    <div class="container-fluid" style="padding-left: 40%; >
	<div class="row">
		<div class="col-md-12">
			<form role="form">
				<div class="form-group">
					 
                <label for="email"><b>Email</b></label>
                 <input type="text" placeholder="nhập email" name="email" required>
				</div>
				<div class="form-group">
					 
                <label for="psw"><b>Mật khẩu</b></label>
                <input type="password" placeholder="nhập mật khẩu" name="psw" required>
				</div>
				<div class="form-group">
					 
                <label for="psw-repeat"><b>Nhập lại mật khẩu</b></label>
                <input type="password" placeholder="nhập lại mật khẩu" name="psw-repeat" required>
				</div>
				<div class="checkbox">
					 
					<label>
						<input type="checkbox"/> Check me out
					</label>
				</div> 
				<button type="submit" class="registerbtn">Tạo tài khoản</button>
			</form>
		</div>
	</div>
</div>
    </main>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    <footer>
        <?php include('footer-middle.php');?>
    </footer>