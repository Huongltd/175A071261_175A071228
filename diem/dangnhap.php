<!doctype html>
<html lang="en">
  <head>
    <title>Đăng nhập</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">   
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
  <?php include('header.php'); ?>
      <main>
            <!-- <div class="container-fluid bg">
                    <div class="row justify-content-center">
                        <div class="col-sm-3 col-md-6 col-xs-12 row-container">
                            <form action="/quanly.php">
                              
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Đăng nhập</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nhập tên đăng nhập">
                                  <p class="emailError"></p>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Mật khẩu</label>
                                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="nhập mật khẩu">
                                  <p class="passwordError"></p>
                                </div>
                                <div class="form-group form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">Nhớ mật khẩu</label>
                                </div>
                                <button type="submit" class="btn btn-primary"> <a href="quanly.php">Đăng nhập</a></button>
                              
                            </form>
                        </div>
                    </div>
                </div> -->
                
            <div class="container-fluid bg">
                    <div class="row justify-content-center">
                        <div class="col-sm-3 col-md-6 col-xs-12 row-container">
                            <form action="ktradangnhap.php" method="POST">
                              
                                <div class="form-group">
                                  <label for="dangnhap">Đăng nhập</label>
                                  <input type="text" class="form-control" id="tendangnhap" name="tendangnhap" placeholder="nhập tên đăng nhập">
                                  <!-- <p class="emailError"></p> -->
                                </div>
                                <div class="form-group">
                                  <label for="matkhau">Mật khẩu</label>
                                  <input type="password" class="form-control" id="matkhau" name="matkhau" placeholder="nhập mật khẩu">
                                  <p class="passwordError"></p>
                                </div>
                                <div class="form-group form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">Nhớ mật khẩu</label>
                                </div>
                                <!-- <input type="submit" value="send"> -->
                                <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Đăng nhập">
                              
                            </form>
                        </div>
                    </div>
                </div>
      </main>
      
      <?php include('footer-middle.php'); ?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./jquery/index.js"></script>
  </body>
</html>