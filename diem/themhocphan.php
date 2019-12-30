<?php include('menuchinh.php');?>
<main>
      <div class="container-fluid">
            <div class="row">
                <?php include('dmchinh.php'); ?>
                <div class="col-sm-8">
                <div class="title-module" style="text-align: center;">THÊM MỚI LỚP HỌC PHẦN</div>
                <form name="edit_course">
                  <table class="table-form-edit" align="center" bgcolor="#FFFFFF">
                  <tr>
                      <td width="180">Mã học phần</td>
                      <td width="300"><input type="text"  name="mahp" size="40"></td>
                    </tr>
                    <tr>
                      <td>Tên học phần</td>
                      <td><input type="text" value="" size="40"></td>
                    </tr>
                    <tr>
                      <td width="180">Năm học</td>
                      <td width="300"><select name="namhoc">
                                        <option value="#">-------</option>
                                        <option value="2017-2018">2017-2018</option>
                                        <option value="2018-2019">2018-2019</option>
                                        <option value="2019-2020">2019-2020</option>
                                        <option value="2020-2021">2020-2021</option>
                                </select>    </td>
                    </tr>
                    <tr>
                      <td>Học kỳ</td>
                      <td> <select name="hocky">
                                                 <option value="#">-------</option>
                                                <option value="1-1">Học kỳ 1</option>
                                                <option value="2-2">Học kỳ 2</option>
                                        </select>   </td>
                    </tr>
                    <tr>
								<td align="center" ></td>
								<td><a href="hocphan.php"><input type="submit" value="Lưu lại" name="submit"> </a>  &ensp;<input type="reset" value="Reset"></td>
                            </tr>
                  </table>
                    </form>
                </div>
            </div>
        </div>
     </main>
  
							