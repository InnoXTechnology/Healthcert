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
								<li class="active"><?= $this->Html->link('ยื่นคำขอ', array('action' => 'requestApp')); ?></li>
								<li class="divider-vertical"></li>
								<li><?= $this->Html->link('วิธีการใช้งาน', array('action' => 'manual')); ?></li>
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

	<div class="container" style="margin-top:20px;">
		
		<div class="container-fluid"style="margin-top:30px;">
			<div class="row-fluid">
				<div class="span3">
					<ul class="nav nav-tabs nav-stacked">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Profile</a></li>
						<li><a href="#">Messages</a></li>
					</ul>
				</div>
				<div class="span9">
					<div class="containerMain">
						
						<div style="text-align:center; margin-top:30px; margin-bottom:40px; color:#808085; font-size:40px;">กรอกคำขอ</div>
							
		
						<div class="side">
							<legend1 style="color:#5BAF5B;">ผู้ประกอบการโรงคัดบรรจุ</legend1>
							<table border="0" cellspacing="2" cellpadding="5" width="600px" style="margin-left:40px;">
								<tr><td width="100px">ชื่อ</td><td><input class="span9" type="text"></td></tr>
								<tr><td>ที่อยู่</td><td><textarea class="span9" rows="4"></textarea></td></tr>
								<tr><td>จังหวัด</td><td><input class="span9" type="text"></td></tr>
								<tr><td>รหัสไปรษณีย์</td><td><input class="span9" type="text"></td></tr>
								<tr><td>โทรศัพท์</td><td><input class="span9" type="text"></td></tr>
								<tr><td>โทรสาร</td><td><input class="span9" type="text"></td></tr>
							</table>
						</div>
						<div class="side">
							<legend1 style="color:#5BAF5B;">โรงคัดบรรจุ</legend1>
							<table border="0" cellspacing="2" cellpadding="5" width="600px" style="margin-left:40px;">
								<tr><td width="100px">รหัส</td><td><input class="span9" type="text"></td></tr>
								<tr><td width="100px">ชื่อ</td><td><input class="span9" type="text"></td></tr>
								<tr><td>ที่อยู่</td><td><textarea class="span9" rows="4"></textarea></td></tr>
								<tr><td>จังหวัด</td><td><input class="span9" type="text"></td></tr>
								<tr><td>รหัสไปรษณีย์</td><td><input class="span9" type="text"></td></tr>
								<tr><td>โทรศัพท์</td><td><input class="span9" type="text"></td></tr>
								<tr><td>โทรสาร</td><td><input class="span9" type="text"></td></tr>
							</table>
						</div>
		
						<div class="side">
							<legend1 style="color:#5BAF5B;">ผู้รับสินค้า</legend1>
							<table border="0" cellspacing="2" cellpadding="5" width="600px" style="margin-left:40px;">
								<tr><td width="100px">ชื่อ</td><td><input class="span9" type="text"></td></tr>
								<tr><td>ที่อยู่</td><td><textarea class="span9" rows="9"></textarea></td></tr>
								<tr><td>ส่งโดยพาหนะ</td><td><input class="span9" type="text"></td></tr>
								<tr><td>วันที่ส่งออก</td><td><input class="span9" type="text"></td></tr>
							</table>
						</div>
						<div class="side">
							<legend1 style="color:#5BAF5B;">ขอยื่นคำขอใบรับรองสุขอนามัยสำหรับพืชดังต่อไปนี้</legend1>
							<div style="margin-left:40px;">
								ชื่อเชื้อจุลินทรีย์หรือสิ่งอื่นใดที่เป็นอันตรายต่อมนุษย์<br/>
								<input style="margin-top:10px;"class="span11" type="text">
							</div>
							<br/>
							<div align="center">
								<table width="100%" border="1" cellspacing="0" cellpadding="8">
									<tr align="center">
										<td >ตัวอย่างที่</td>
										<td>ชื่อพืช</td>
										<td>น้ำหนัก<br/>(กก.)</td>
										<td>มูลค่า<br/>(บาท)</td>
										<td>รหัสแปลง</td>
									</tr>
									<tr align="center" >
										<td><input style="width:50px;" type="text"></td>
										<td><input style="width:150px;" type="text"></td>
										<td><input style="width:50px;"type="text"></td>
										<td><input style="width:50px;"type="text"></td>
										<td><input style="width:50px;"type="text"></td>
									</tr>
									<tr align="center" >
										<td><input style="width:50px;" type="text"></td>
										<td><input style="width:150px;" type="text"></td>
										<td><input style="width:50px;"type="text"></td>
										<td><input style="width:50px;"type="text"></td>
										<td><input style="width:50px;"type="text"></td>
									</tr>
									<tr align="center" >
										<td><input style="width:50px;" type="text"></td>
										<td><input style="width:150px;" type="text"></td>
										<td><input style="width:50px;"type="text"></td>
										<td><input style="width:50px;"type="text"></td>
										<td><input style="width:50px;"type="text"></td>
									</tr>
							          
								</table>
								<div style="margin-top:10px; text-align:right; margin-bottom:10px;"><a href="#">เพิ่มบรรทัด</a></div>
							</div>
						</div>
						<button type="submit" class="btn btn-success" style="float:right; margin-left:10px;">ส่งใบคำขอ</button>
						<button type="clear" class="btn" style="float:right; margin-left:10px;">ยกเลิก</button>
					</div>
				</div>
		      
			</div>
		</div>
	</div>

	<script src="../js/jquery-1.8.1.js"></script>
	<script src="../js/bootstrap.js"></script>