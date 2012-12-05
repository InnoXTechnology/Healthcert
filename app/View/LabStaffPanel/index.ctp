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
								<li class="active"><?= $this->Html->link('รับตัวอย่าง', array('action' => 'sample')); ?></li>
								<li class="active"><?= $this->Html->link('ผลการวิเคราะห์', array('action' => 'result')); ?></li>
							</ul>
							<ul class="nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $first_name; ?><b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="">แก้ไขข้อมูลส่วนตัว</a></li>
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