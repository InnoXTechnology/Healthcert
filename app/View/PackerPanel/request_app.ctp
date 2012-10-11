<div style="clear:both;"></div>
	<div class="navbar">
		<div class="navbar-inner"  >
			<div class="container" style="width:940px;">
				<div class="container-fluid"  >
					<div class="row-fluid"  >
						<div class="span3">
						</div>
						<div class="span9">
							<ul class="nav">
								<li><?= $this->Html->link('หน้าหลัก', array('action' => 'index')); ?></li>
								<li class="divider-vertical"></li>
								<li class="dropdown active">
									<a href="#" class="active dropdown-toggle" data-toggle="dropdown">ยื่นคำขอ <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><?= $this->Html->link('หนังสือรับรองโรงงาน (สมพ.2)', array('action' => 'requestApp')); ?></li>
										<li><a href="#">ต่ออายุหนังสือรับรองโรงงาน (สมพ.3)</a></li>
									</ul>
								</li>
								
								<li class="divider-vertical"></li>
								<li><?= $this->Html->link('คู่มือการใช้งาน', array('action' => 'manual')); ?></li>
								<li class="divider-vertical"></li>
							</ul>
							<ul class="nav pull-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $first_name; ?><b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">แก้ไขข้อมูลส่วนตัว</a></li>
										<li><a href="#">แก้ไขบัญชีผู้ใช้</a></li>
										<li class="divider"></li>
										<li><?= $this->Html->link('ลงชื่อออก', array('controller' => 'users', 'action' => 'logout')); ?></li>
									</ul>
								</li>
							</ul>
					
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container" style="margin-top:50px;">
		<div class="containerMain">
			<div class="headTopic" style = "font-size: 30px;">คำร้องขอหนังสือรับรองโรงงานผลิตสินค้าเกษตรเพื่อนการส่งออก<br/></div>
			<div class="side">
		<legend1 style="color:#5BAF5B;">1) โรงงานผลิตสินค้าเกษตรเพื่อการส่งออก</legend1>
		<table border="0" cellspacing="2" cellpadding="6" width="750px" style="margin-left:30px;">
		    <tr><td width="200px">ชื่อโรงงาน<br/></td><td colspan="3"><input class="span8" type="text"></td></tr>
		    <tr><td>ที่ตั้งโรงงาน<br/></td><td colspan="3"><textarea class="span8" rows="4"></textarea></td></tr>
		    <tr><td>จังหวัด<br/></td><td width="275px"><input class="span3" type="text"></td><td width="100px">รหัสไปรษณีย์<br/></td><td><input class="span3" type="text"></td></tr>
			<tr><td>โทรศัพท์<br/></td><td><input class="span3" type="text"></td><td >โทรสาร<br/></td><td><input class="span3" type="text"></td></tr>
			<tr><td>ประเภทการรับรอง</td><td><input type="radio" name="rd_gmp" value="GMP" style="margin-left:20px; margin-top: 0px;">&nbsp;&nbsp;&nbsp;GMP<input type="radio" name="rd_haccp" value="HACCP" style="margin-left:40px; margin-top: 0px;">&nbsp;&nbsp;&nbsp;HACCP</td></tr>

			<tr><td>ประเภทโรงงาน</td><td colspan="3"><input type="radio" name="rd_gmp" value="GMP" style="margin-left:20px; margin-top: 0px;">&nbsp;&nbsp;&nbsp;โรงงานแปรรูป
				<input type="radio" name="rd_haccp" value="HACCP" style="margin-left:35px; margin-top: 0px;">&nbsp;&nbsp;&nbsp;โรงคัดบรรจุ<input type="radio" name="rd_gmp" value="GMP" style="margin-left:35px; margin-top: 0px;">&nbsp;&nbsp;&nbsp;ศูนย์กระจายสินค้า</td></tr>

				<tr><td></td><td colspan="3"><input type="radio" name="rd_gmp" value="GMP" style="margin-left:20px; margin-top: 0px;">&nbsp;&nbsp;&nbsp;โรงรม&nbsp;<input class="span2" type="text">
				<input type="radio" name="rd_haccp" value="HACCP" style="margin-left:40px; margin-top: 0px;">&nbsp;&nbsp;&nbsp;อื่นๆ&nbsp;<input class="span2" type="text"></td></tr>
		</table>
	</div>
	<div class="side">
		
		<legend1 style="color:#5BAF5B;">2) ผลิตภัณฑ์ที่ขอรับรอง</legend1>
		<table border="0" cellspacing="2" cellpadding="6" width="750px" style="margin-left:30px;">
		    <tr><td width="100px">ชื่อผลิตภัณฑ์<br/></td><td><input class="span8" type="text"></td></tr>
		    <tr><td>รายละเอียด<br/></td><td><textarea class="span8" rows="4"></textarea></td></tr>
			<tr><td>ประเทศที่ส่งออก<br/></td><td><input class="span8" type="text"></td></tr>
		</table>
	</div>
		
		<div class="side">
		<legend1 style="color:#5BAF5B;">3) เอกสารแนบประกอบคำร้อง</legend1>
		<div style="margin-left:30px;">
			<label>แผนที่ตั้งโรงงาน<br/></label>
			  <input type="file"><br/><br/>
  			<label>แผนผังอาคาร<br/></label>
			  <input type="file"><br/><br/>
			  <label>แผนผังองค์กร<br/></label>
			  <input type="file"><br/><br/>
			  <label>แผนผังขบวนการผลิต (Process Line)<br/></label>
			  <input type="file"><br/><br/>
			  <label>คู่มือคุณภาพ (Quality Manual)<br/></label>
			  <input type="file"><br/><br/>
			  <label>Hazard Analysis (กรณีขอรับรองระบบ HACCP)<br/></label>
			  <input type="file"><br/><br/>
			  <label>HACCP Plan (กรณีขอรับรองระบบ HACCP)<br/></label>
			  <input type="file"><br/><br/>
			  <label>สำเนาทะเบียนบ้านและบัตรประจำตัวประชาชนของผู้ยื่นคำร้อง หรือ ผู้มีอำนาจลงนาม<br/></label>
			  <input type="file"><br/><br/>
			  <label>สำเนาหนังสือการรับรองการจดทะเบียนนิติบุคคล และหรือสำเนาทะเบียนการค้า<br/></label>
			  <input type="file"><br/><br/>
			  <label>สำเนาใบอนุญาตประกอบกิจการโรงงาน (กรณีขอรับรองโรงงานแปรรูป)<br/></label>
			  <input type="file"><br/><br/>
			  <label>สำเนาใบอนุญาตผลิตอาหาร (กรณีขอรับรองโรงงานแปรรูป)<br/></label>
			  <input type="file"><br/><br/>
			  <label>สำเนาใบสำคัญการใช้ฉลากอาหาร (กรณีขอรับรองโรงงานแปรรูป)<br/></label>
			  <input type="file"><br/><br/>
	  	</div>
	</div>
		<button type="submit" class="btn btn-success" style="float:right; margin-left:10px;">ลงทะเบียน</button>
		<button type="clear" class="btn" style="float:right; margin-left:10px;">ยกเลิก</button>
	</div>
</div>

	<script src="../js/jquery-1.8.1.js"></script>
	<script src="../js/bootstrap.js"></script>