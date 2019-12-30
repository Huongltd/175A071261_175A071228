<?php include('menuchinh.php');?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <?php include('dmchinh.php'); ?>
                <div class="col-sm-8">

                <div class="title-module" style="text-align:center;">DANH SÁCH HỌC PHẦN</div>
				<div class="row">
					<div class="label">Mã học phần </div> &ensp; 
                    <div class="value"><input type="text" name="code"></div> 
                    <div class="row">
                     &nbsp; &ensp;<div class="label">Tên học phần</div> 
                        <div class="value">
                        <input type="text" name="name"></div> &ensp;  
                    </div> 		
					&ensp;
                    <div class="search">
                    <input type="button" value="Tìm" name="search"></div>
                    </div>
                    <div class="list-course">
					<table class="list-course" bgcolor="#FFFFFF">
						<tr class="row-first">
							<td width="30"><input type="checkbox"></td>
							<td width="50">Sửa</td>
							<td width="50">Xóa</td>
							<td width="150">Mã học phần</td>
							<td width="450">Tên học phần</td>
                            <td width="200">Năm học </td>
                            <td width="100">Học kỳ </td>

						</tr>
						<tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suahocphan.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
							<td>MATH122</td>
                            <td>Giải tích hàm nhiều biến</td>
                            <td>2019-2020</td>
                            <td>2</td>
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suahocphan.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
							<td>PHYS121</td>
                            <td>Vật lý đại cương</td>
                            <td>2019-2020</td>
                            <td>2</td>
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suahocphan.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
							<td>TDUC121</td>
                            <td>Cầu lông</td>
                            <td>2019-2020</td>
                            <td>1</td>
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suahocphan.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
							<td>ENGL112</td>
                            <td>Tiếng Anh 1</td>
                            <td>2018-2019</td>
                            <td>1</td>
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suahocphan.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
							<td>ENGL123</td>
                            <td>Tiếng Anh 2</td>
                            <td>2018-2019</td>
                            <td>2</td>
                        </tr>
                        <tr>
							<td width="10"><input type="checkbox"></td>
							<td><a href="suahocphan.php"><img src="./images/edit.gif" border="0"></a></td>
							<td><a href="#"><img src="./images/deleted.jpg" border="0"></a></td>
							<td>ITL112</td>
                            <td>Pháp luật đại cương</td>
                            <td>2018-2019</td>
                            <td>1</td>
                        </tr>
                        </table>
                        <div class="task">
                        <a href="themhocphan.php"><input type="button" value="Thêm mới" name="Thêm mới"></a>
                        <input type="button" name="Xóa" value="Xóa"> 
                        <a href="suahocphan.php"><input type="button" name="Cập nhật" value="Cập nhật"></a>
</div>
                </div>
                </div>
                </div>
                </main>