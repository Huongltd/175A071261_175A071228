<?php include('menuchinh.php');?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <?php include('dmchinh.php'); ?>
                <div class="col-md-8">
                <div class="title-module" style="text-align:center;">SỬA PHÂN CÔNG GIẢNG DẠY</div>
                <form name="edit_course">
						<table class="table-form-edit" align="center" bgcolor="#FFFFFF">
							<tr>
								<td colspan="2" align="left"><strong>Sửa phân công giảng dạy</strong></td>								
							</tr>							<tr>
								<td width="200">Giảng viên</td>
								<td width="300"><select >									
                                <option selected="selected">Kiều Tuấn Dũng</option>
									<option>Nguyễn Thị Lan	Hương</option>
									<option >Bùi Tuấn Anh</option>
									<option >Đào Tuấn Anh</option>
									<option >Nguyễn Văn	Phương</option>
									<option >Trần Minh Tuấn</option>									
								</select></td>
                            </tr>
                            <tr>
								<td>Lớp học</td>
								<td><select >
									<option selected="selected">59TH2</option>
									<option>59SH1</option>
									<option >60QXD1</option>
									<option >60CTT2</option>
									<option >59KXD1</option>
									<option >60PM1</option>									
								</select></td>
                            </tr>
                            <tr>
								<td>Học phần</td>
								<td><select >
									<option selected="selected">Công nghệ WEB</option>
									<option >Tiếng Anh 1</option>
									<option >Pháp luật đại cương</option>
									<option >Vật lý đại cương</option>						
								</select></td>
                            </tr>
                            <tr>
								<td align="center" ></td>
								<td><a href="pcgdgiangvien.php"><input type="submit" value="Lưu lại" name="submit"></a><input type="reset" value="Reset"></td>
							</tr>
                            </table>
                            </form>

                </div>
                </div>
                </main>
