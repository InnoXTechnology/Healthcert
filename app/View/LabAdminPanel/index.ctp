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
	
	
	<?php echo $this->Session->flash(); ?>
	<div class="container" style="margin-top:50px;">
			<div class="containerMain" style="min-height:500px;">
				<div class="side" style="margin-top:30px">
					<legend1 style="color:#5BAF5B;">รายงานผลการทดลอง</legend1>


					<table id="bgTable" border="1" cellspacing="1" cellpadding="6" width="780px" style="margin:auto;">
						<tr align="center" style="background:rgba(110, 158, 48, 0.5); color:#3F3F3F;"><td >ผลการตรวจสอบที่</td><td>วันที่ทำการตรวจสอบ</td><td>หัวข้อการตรวจสอบ</td><td>ผลการตรวจสอบ</td><td>การกระทำ</td><td width="120px">สถานะ</td></tr>
						<?php foreach ($analyses as $analysis): ?>
						<tr align="center"><td><?php echo $analysis['analyses']['sample_id']; ?></td><td><?php echo $analysis['analyses']['analysis_date']; ?></td><td><?php echo $analysis['analyses']['method']; ?></td><td><?php echo $analysis['analyses']['result']; ?></td><td width="200px"><?= $this->Form->button(
							
							'อนุมัติ'
							, array('onclick' => "if(confirm('ต้องการอนุมัติ?'))
								location.href='".$this->Html->url(array('action' => 'click_pass',$analysis['analyses']['id']))."'" ,'class' => 'btn', 'style' => 'width:90px;')); ?><?= $this->Form->button('ไม่อนุมัติ', array('onclick' => "if(confirm('ยกเลิกการอนุมัติ?'))
								location.href='".$this->Html->url(array('action' => 'click_not_pass',$analysis['analyses']['id']))."'" ,'class' => 'btn btn-danger', 'style' => 'width:90px;')); ?></td><td><?php echo $analysis['analyses']['approve']; ?></td></tr>
							<?php endforeach; ?>
						</table>

					</div>




				</div>
			</div>