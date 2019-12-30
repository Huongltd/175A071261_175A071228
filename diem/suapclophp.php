<?php include('menuchinh.php');?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <?php include('dmchinh.php'); ?>
                <div class="col-sm-8">
                <div class="title-module" style="text-align:center;">SỬA PHÂN CÔNG HỌC PHẦN CHO LỚP</div>
                <form name="edit_course">
						<table class="table-form-edit" align="center" bgcolor="#FFFFFF">
														
							<tr>
								<td width="150">Lớp học</td>
								<td width="300"><input type="text" value="59SH1" size="30"></td>
							</tr>
							<tr>
                            <td>Học phần</td>
								<td><select >
									<option selected="selected">Tiếng Anh 2</option>
									<option >Tiếng Anh 1</option>
									<option >Pháp luật đại cương</option>
                                    <option >Vật lý đại cương</option>
                                    <option>Công nghệ WEB</option>						
								</select></td>
                            </tr>
                            <tr>
								<td align="center" ></td>
								<td><a href="pcgdlophoc.php"><input type="submit" value="Lưu lại" name="submit"></a><input type="reset" value="Reset"></td>
                            </tr>
                            </table>
                </div>
                </div>
                </div>
                </main>
