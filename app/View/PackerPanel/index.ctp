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
								<li class="active"><?= $this->Html->link('หน้าหลัก', array('action' => 'index')); ?></li>
								<li class="divider-vertical"></li>
								<li class="dropdown">
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
		<div class="containerMain" style="min-height:500px;">
		
			<div class="side" style="margin-top:30px">
		<legend1 style="color:#5BAF5B;">รายการคำร้องขอหนังสือรับรองโรงงาน (สมพ.2) <button class="btn btn-success" style="float:right;">ยื่นคำขอ</button></legend1>
		
		
			<table id="bgTable" border="1" cellspacing="1" cellpadding="6" width="700px" style="margin:auto;">
			 	<tr align="center" style="background:rgba(110, 158, 48, 0.5); color:#3F3F3F;"><td >คำขอที่</td><td>วันที่ขอ</td><td>การกระทำ</td></tr>
				<tr align="center"><td>2555 / 123</td><td>19 พฤศจิกายน 2555 เวลา 19.30 น.</td><td width="130px"><button class="btn" style="width:50px;">ดู</button>&nbsp;<button class="btn btn-danger" style="width:50px;">ลบ</button></td></tr>
				<tr align="center"><td>2555 / 123</td><td>19 พฤศจิกายน 2555 เวลา 19.30 น.</td><td><button class="btn" style="width:50px;">ดู</button>&nbsp;<button class="btn btn-danger" style="width:50px;">ลบ</button></td></tr>
				<tr align="center"><td>2555 / 123</td><td>19 พฤศจิกายน 2555 เวลา 19.30 น.</td><td><button class="btn" style="width:50px;">ดู</button>&nbsp;<button class="btn btn-danger" style="width:50px;">ลบ</button></td></tr>
				
			</table>
			<br/>
	</div>
		
		<div class="side" style="margin-top:30px;">
	<legend1 style="color:#5BAF5B;">รายการคำร้องขอต่ออายุหนังสือรับรองโรงงาน (สมพ.3) <button class="btn btn-success" style="float:right;">ยื่นคำขอ</button></legend1>
		
	
		<table id="bgTable" border="1" cellspacing="1" cellpadding="6" width="700px" style="margin:auto;">
		 	<tr align="center" style="background:rgba(110, 158, 48, 0.5); color:#3F3F3F;"><td >คำขอที่</td><td>วันที่ขอ</td><td>การกระทำ</td></tr>
			<tr align="center"><td>2555 / 123</td><td>19 พฤศจิกายน 2555 เวลา 19.30 น.</td><td width="130px"><button class="btn" style="width:50px;">ดู</button>&nbsp;<button class="btn btn-danger" style="width:50px;">ลบ</button></td></tr>
			<tr align="center"><td>2555 / 123</td><td>19 พฤศจิกายน 2555 เวลา 19.30 น.</td><td><button class="btn" style="width:50px;">ดู</button>&nbsp;<button class="btn btn-danger" style="width:50px;">ลบ</button></td></tr>
			<tr align="center"><td>2555 / 123</td><td>19 พฤศจิกายน 2555 เวลา 19.30 น.</td><td><button class="btn" style="width:50px;">ดู</button>&nbsp;<button class="btn btn-danger" style="width:50px;">ลบ</button></td></tr>
				
		</table>
</div>
		
	</div>
</div>

	<script src="../js/jquery-1.8.1.js"></script>
	<script src="../js/bootstrap.js"></script>