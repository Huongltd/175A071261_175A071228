<?php include('menuchinh.php');?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <?php include('dmchinh.php'); ?>
                <div class="col-sm-8">
                <div class="title-module" style="text-align:center;">DANH SÁCH PHÂN CÔNG HỌC PHẦN CHO LỚP </div>
                <div class="row">
				<div class="col-md-6">
                <div class="label">Lớp học</div>
					<div class="value"><input type="text" name="name"></div>
				</div>
				<div class="col-md-6">
                <div class="label">Học phần</div>
					<div class="value"><input type="text" name="name"></div>
				</div>
                </div>
                <div class="search"><input type="button" value="Tìm" name="search"></div>
                <div class="list-course">
					<table class="list-course" bgcolor="#FFFFFF">
						<tr class="row-first">
							<td width="10"><input type="checkbox"></td>
							<td width="50">Sửa</td>
							<td width="50">Xóa</td>
							<td width="200">Mã lớp</td>
							<td width="150">Lớp học</td>
                            <td width="150">Tên học phần</td>
                        <tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suapclophp.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>							
							<td><a href="sualophoc.php">CNSH</a></td>
							<td>59SH1</td>
							<td>Vật lý đại cương</td>
							
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suapclophp.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>							
							<td><a href="sualophoc.php">CTT</a></td>
							<td>60CTT2</td>
							<td>Tiếng anh 1</td>
							
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suapclophp.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>							
							<td><a href="sualophoc.php">KXD</a></td>
							<td>59KXD1</td>
							<td>Tiếng anh 2</td>
							
                        </tr>
                        
                            </table>
                            <div class="task"><a href="thempclophp.php"><input type="button" value="Thêm mới" name="Thêm mới"></a>
									<input type="button" name="Xóa" value="Xóa"> 
									<a href="suapclophp.php"><input type="button" name="Cập nhật" value="Cập nhật"></a>
					</div>

                </div>
</div>
</div>
</main>
