
<?php include('menuchinh.php');?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <?php include('dmchinh.php'); ?>
                <div class="col-md-8">
                <div class="title-module" style="text-align:center;">DANH SÁCH LỚP HỌC</div>
				<div class="row">
					<div class="label">Mã lớp học </div> &nbsp; 
					<div class="value"><input type="text" name="code"></div>   &ensp;   		
					<div class="label">Tên lớp học</div> &nbsp; 
                    <div class="value"><input type="text" name="name"></div>  &ensp; 
                <div class="row">
                    <div class="col-md-12">
                    <div class="label">Ngành học</div>
                    <select name="ngành học">
                    <option value="--">--------</option>
                    <option value="TLA101">Kỹ thuật xây dựng công trình thủy</option>
                    <option value="TLA114">Quản lý xây dựng</option>
                    <option value="TLA111">Công nghệ kỹ thuật xây dựng</option>
                    <option value="TLA119">Công nghệ sinh học</option>
                    </select>         			
                    </div>
                    <div class="row">
                    <div class="search">
                    &ensp; &ensp;  <input type="button" value="Tìm" name="search"></div>
                    </div>
                    </div>
                </div> 
                <div class="list-course">
					<table class="list-course" bgcolor="#FFFFFF">
						<tr class="row-first">
							<td width="30"><input type="checkbox"></td>
							<td width="50">Sửa</td>
							<td width="50">Xóa</td>
							<td width="100">Mã lớp học</td>
							<td width="150">Tên lớp học</td>
							<td width="400">Ngành học </td>
						
						</tr>
						<tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="sualophoc.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
							<td >CNSH</td>
							<td>59SH1</td>
							<td>Công nghệ sinh học</td>
						</tr>
						<tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="sualophoc.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
							<td>KXD</td>
							<td >59KXD1</td>
							<td>Công nghệ kỹ thuật xây dựng</td>
            </tr>
            <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="sualophoc.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
							<td >CTT</td>
							<td>60CTT2</td>
							<td>Kỹ thuật xây dựng công trình thủy</td>
            </tr>
            <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="sualophoc.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
							<td >QXD</td>
							<td>61QXD1</td>
							<td>Quản lý xây dựng</td>
						</tr>
            </table>
            </br>
            <div class="task">
                <a href="themlophoc.php"><input type="button" value="Thêm mới" name="Thêm mới"></a>
                <input type="button" name="Xóa" value="Xóa"> 
                <a href="sualophoc.php"><input type="button" name="Cập nhật" value="Cập nhật"></a>
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