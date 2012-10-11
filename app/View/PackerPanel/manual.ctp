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
								<li class="dropdown">
									<a href="#" class="active dropdown-toggle" data-toggle="dropdown">ยื่นคำขอ <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><?= $this->Html->link('หนังสือรับรองโรงงาน (สมพ.2)', array('action' => 'requestApp')); ?></li>
										<li><a href="#">ต่ออายุหนังสือรับรองโรงงาน (สมพ.3)</a></li>
									</ul>
								</li>
								
								<li class="divider-vertical"></li>
								<li class="active"><?= $this->Html->link('คู่มือการใช้งาน', array('action' => 'manual')); ?></li>
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

	<script src="../js/jquery-1.8.1.js"></script>
	<script src="../js/bootstrap.js"></script>