<?php include('menuchinh.php');?>
<main>
        <div class="container-fluid">
            <div class="row">
                <?php include('dmchinh.php'); ?>
                <div class="col-sm-8">
                <div class="title-module" style="text-align: center;">SỬA GIẢNG VIÊN</div>
                <form name="edit_course">
                  <table class="table-form-edit" align="center" bgcolor="#FFFFFF">
                    
                    <tr>
                      <td width="180">Tên giảng viên</td>
                      <td width="300"><input type="text" value="Nguyễn Văn Phương" size="40"></td>
                    </tr>
                    <tr>
                      <td>Ngày sinh</td>
                      <td><input type="#" value="10/02/1984" name="bdaytime"></td>
                    </tr>
                    <tr>
                      <td width="180">Số điện thoại</td>
                      <td width="300"><input type="text" value="0945656369" name="sdt" size="40"></td>
                    </tr>
                    <tr>
                      <td width="180">Ngành học</td>
                      <td width="300"><input type="text" value="Quản lý xây dựng" size="40"></td>
                    </tr>
                    <tr>
                    <td align="center" ></td>
                    <td><a href="giangvien.php"><input type="submit" value="Lưu lại" name="submit"></a>  &ensp; <input type="reset" value="Reset"></td>
                  </tr>
                  </table>
                  </form>
                </div>
            </div>
        </div>
     </div>
</main>
