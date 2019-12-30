
  <?php include('menuchinh.php');?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <?php include('dmchinh.php'); ?>
                <div class="col-md-8">
                <div class="title-module" style="text-align:center;">DANH SÁCH NGÀNH HỌC</div>
				<div class="row">
					<div class="label">Mã ngành</div> &nbsp; 
					<div class="value"><input type="text" name="code"></div>   &ensp;   		
					<div class="label">Tên ngành</div>&nbsp; 
					<div class="value"><input type="text" name="name"></div>    &ensp;				
					<div class="search"><input type="button" value="Tìm" name="search"></div>
                </div>
                </br>
                </br>
			  <div class="list-course">
					<table class="list-course">
						<tr class="row-first">
							<td width="30"><input type="checkbox"></td>
							<td width="50">Sửa</td>
							<td width="50">Xóa</td>
							<td width="200">Mã ngành</td>
							<td width="450">Tên ngành học</td>
						</tr>
						<tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suanganh.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
							<td ><a href="#">TLA101</a></td>
							<td>Kỹ thuật xây dựng công trình thủy</td>
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suanganh.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
							<td ><a href="#">TLA114</a></td>
							<td>Quản lý xây dựng</td>
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suanganh.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
							<td ><a href="#">TLA111</a></td>
							<td>Công nghệ kỹ thuật xây dựng</td>
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suanganh.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
							<td ><a href="#">TLA119</a></td>
							<td>Công nghệ sinh học</td>
                        </tr>
                    </table>
                    </br>
                    </br>
                    <div class="task">
                        <a href="themnganhhoc.php"><input type="button" value="Thêm mới" name="Thêm mới"></a>
						<input type="button" name="Xóa" value="Xóa"> 
						<a href="suanganh.php"><input type="button" name="Cập nhật" value="Cập nhật"></a>
					</div>    
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
    </br>
    <footer>
        <?php include('footer-middle.php'); ?>
        </br>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>