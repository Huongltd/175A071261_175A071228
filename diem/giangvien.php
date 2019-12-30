<?php include('menuchinh.php');?>
<main>
        <div class="container-fluid">
            <div class="row">
                <?php include('dmchinh.php'); ?>
                <div class="col-sm-8">
                <div class="title-module" style="text-align:center;">DANH SÁCH GIẢNG VIÊN</div>
				<div class="row">
					<div class="label">Tên giảng viên</div> &nbsp; 
					<div class="value"><input type="text" name="code"></div>   &ensp;   		
                    <div class="label">Ngành</div>&nbsp; 
                    <select name="ngành học">
                    <option value="--">--------</option>
                    <option value="TLA101">Kỹ thuật xây dựng công trình thủy</option>
                    <option value="TLA114">Quản lý xây dựng</option>
                    <option value="TLA111">Công nghệ kỹ thuật xây dựng</option>
                    <option value="TLA119">Công nghệ sinh học</option>
                    </select>     
                    &ensp;   &ensp;  		
					<div class="search"><input type="button" value="Tìm" name="search"></div>
                </div>
                </br>
                <div class="list-course">
					<table class="list-course">
						<tr class="row-first">
							<td width="30"><input type="checkbox"></td>
							<td width="50">Sửa</td>
							<td width="50">Xóa</td>
                            <td width="200">Tên giảng viên</td>
                            <td width="100">Ngày sinh</td>
                            <td width="100">Số điện thoại</td>
                            <td width="200">Tên ngành học</td> 
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suagv.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
                            <td ><a href="#"></a>Nguyễn Văn	Phương</td>
                            <td>10/02/1984</td>
                            <td>0945656369 </td>
							<td>Quản lý xây dựng</td>
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suagv.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
                            <td ><a href="#"></a>Đào Tuấn Anh</td>
                            <td>19/06/1971</td>
                            <td>0904238952 </td>
							<td>Kỹ thuật xây dựng công trình thủy</td>
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suagv.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
                            <td ><a href="#"></a>Bùi Tuấn Anh</td>
                            <td>11/12/1987</td>
                            <td>0978318336 </td>
							<td>Công nghệ kỹ thuật xây dựng</td>
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suagv.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
                            <td ><a href="#"></a>Nguyễn Thị Lan	Hương	</td>
                            <td>15/02/1975</td>
                            <td>0904248104</td>
							<td>Công nghệ sinh học</td>
                        </tr>
                        </table>
                    </br>
                    </br>
                    <div class="task">
                        <a href="themgv.php"><input type="button" value="Thêm mới" name="Thêm mới"></a>
						<input type="button" name="Xóa" value="Xóa"> 
						<a href="suagv.php"><input type="button" name="Cập nhật" value="Cập nhật"></a>
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