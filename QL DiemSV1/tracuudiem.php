<!doctype html>
<html lang="en">
  <head>
    <title>Tra cứu điểm</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
  include('header.php');
?>
      <main>
        <h1 align="center" class="display-3">TRA CỨU ĐIỂM</h1>
        <div class="container">
                <form action="">
                        <table style="width:100%"  class="">
                        <tr>
                            <th><div class="form-group">
                                    <label for="CMT">Nhập chứng minh thư:</label>
                                    <input type="text"  id="cmt" class="form-control" placeholder="nhập số chứng minh thư" name="">
                                  </div>
                                </th>
                            <th><div class="form-group">
                                    <label for="maSinhvien">Mã sinh viên:</label>
                                    <input type="text" class="form-control" id="maSV" placeholder="nhập mã sinh viên" name="">
                                  </div></th>
                        </tr>
                        <tr>
                            <th>
                                    Năm học: </br>
                                <select name="namhoc">
                                        <option value="2017-2018">2017-2018</option>
                                        <option value="2018-2019">2018-2019</option>
                                        <option value="2019-2020">2019-2020</option>
                                        <option value="2020-2021">2020-2021</option>
                                </select>    
                            </th>
                            <th>
                                    Giai đoạn - Học kỳ: </br>
                                    <select name="hocky">
                                                <option value="1-1">Giai đoạn 1 - Học kỳ 1</option>
                                                <option value="2-1">Giai đoạn 2 - Học kỳ 1</option>
                                                <option value="1-2">Giai đoạn 1 - Học kỳ 2</option>
                                                <option value="2-2">Giai đoạn 2 - Học kỳ 2</option>
                                        </select>     

                            </th>
                        </tr>
                        </table>
                        <tr class="">
                                <button  class="btn btn-primary" type="submit" onclick="alert('Không tìm thấy! Vui lòng kiểm tra lại!')">Tìm kiếm</button>
                        </tr>
                </form>
        </div>
        <h1 align="center" class="display-4">Bảng điểm của sinh viên</h1>
        <div class="container">
            <table style="width:100%" class="table table-bordered table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th>Mã sinh viên</th>
                        <th>Tên sinh viên</th>
                        <th>Tên môn học</th>
                        <th>Mã môn học</th>
                        <th>Năm học</th>
                        <th>Giai đoạn</th>
                        <th>Học kỳ</th>
                        <th>Điểm</th>

                    </tr>
                </thead>
                </table>
        </div>
        </main>
        <!-- <footer>
                <?php
                        include('footer.php')
                ?>
        </footer> -->
                


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>