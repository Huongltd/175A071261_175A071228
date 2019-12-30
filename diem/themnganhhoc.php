<?php include('menuchinh.php'); ?>
      <main>
      <div class="container-fluid">
            <div class="row">
                <?php include('dmchinh.php'); ?>
                <div class="col-sm-8">
                <div class="title-module" style="text-align:center;">THÊM NGÀNH HỌC</div>
					<form name="edit_course">
						<table class="table-form-edit" align="center" bgcolor="#FFFFFF">
							
							<tr>
								<td width="180">Mã ngành</td>
								<td width="300"><input type="text" value="" name="makh" size="40"></td>
							</tr>
							<tr>
								<td>Tên ngành học</td>
								<td><input type="text" value="" size="40"></td>
							</tr>						
							<tr>
								<td align="center" ></td>
								<td><a href="nganhhoc.php"><input type="submit" value="Lưu lại" name="submit">  &ensp; </a><input type="reset" value="Reset"></td>
							</tr>
						</table>
					</form>		
                </div>
                </div>
            </div>
            </div>
      </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>