<?php include('menuchinh.php');?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <?php include('dmchinh.php'); ?>
                <div class="col-md-8">
                <div class="title-module" style="text-align:center;">DANH SÁCH PHÂN CÔNG GIẢNG DẠY</div>
				<div class="filter">	
                <div class="row">
				<div class="col-md-6">
                <div class="label">Giảng viên</div>
					<div class="value"><input type="text" name="name"></div>
				</div>
				<div class="col-md-6">
                <div class="label">Lớp</div>
					<div class="value"><input type="text" name="name"></div>
				</div>
                </div>
                <div class="row">
                        <div class="col-md-6">
                        <div class="label">Học phần</div> 
                    <div class="value"><input type="text" name="name"></div> 
                        </div>
                        <div class="col-md-6">
                        <div class="search"><input type="button" value="Tìm" name="search"></div>
                        </div>
                    </div>									
				</div>
			  <div class="list-course">
					<table class="list-course" bgcolor="#FFFFFF">
						<tr class="row-first">
							<td width="10"><input type="checkbox"></td>
							<td width="50">Sửa</td>
							<td width="50">Xóa</td>
							<td width="200">Giảng viên</td>
							<td width="150">Lớp</td>
                            <td width="150">Học phần</td>	
                            <td width="100">Học kỳ</td>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suapcgdgv.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>							
							<td ><a href="suagv.php">Đào Tuấn Anh</a></td>
							<td><a href="sualophoc.php">60CTT2</a></td>
                            <td><a href="suahocphan.php">Vật lý đại cương</a></td>
                            <td>2</td>
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suapcgdgv.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>							
							<td ><a href="suagv.php">Nguyễn Văn	Phương</a></td>
							<td><a href="sualophoc.php">59SH1</a></td>
                            <td><a href="suahocphan.php">Pháp luật đại cương</a></td>
                            <td>1</td>
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suapcgdgv.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>							
							<td ><a href="suagv.php">Nguyễn Thị Lan	Hương	</a></td>
							<td><a href="sualophoc.php">61QXD1</a></td>
                            <td><a href="suahocphan.php">Tiếng Anh 1</a></td>
                            <td>1</td>
                        </tr>
                        </table>
                        </br>
                        </br>
                        <div class="task">
                        <a href="thempcgdgv.php"><input type="button" value="Thêm mới" name="Thêm mới"></a>
						<input type="button" name="Xóa" value="Xóa"> 
						<a href="suapcgdgv.php"><input type="button" name="Cập nhật" value="Cập nhật"></a>
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

                    <footer >
                    <?php include('footer-middle.php');?>
</footer>