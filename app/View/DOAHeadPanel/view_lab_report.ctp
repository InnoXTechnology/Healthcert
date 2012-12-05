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
			<legend1 style="color:#5BAF5B;">รายงานผลการตรวจแลปของใบคำขอที่ <?= $request['Request']['receipt_no']; ?></legend1>
			<center><h3>ผลการตรวจแลป</h3></center>
			<table id="bgTable" border="1" cellspacing="1" cellpadding="6" width="700px" style="margin:auto;">
				<tr align="center" style="background:rgba(110, 158, 48, 0.5); color:#3F3F3F;">
					<td>ชื่อแลปทดสอบ</td>
					<td>ผลการตรวจแลป</td>
					<td>ผลการอนุมัติ</td>
				</tr>
				<?php foreach ($analyses as $analysis): ?>
				<tr align="center" style="color:#3F3F3F">
					<td><?= $analysis['Analysis']['method']; ?></td>
					<td><?= $analysis['Analysis']['status']; ?></td>
					<td><?= $analysis['Analysis']['approve']; ?></td>
				</tr>
				<?php endforeach; ?>
			</table>
			<br/>
			<center>
				<?= $this->Form->button('ย้อนกลับ', array('onclick' => "location.href='".$this->Html->url(array('action' => 'index',$request['Request']['id']))."'" ,'class' => 'btn btn-info')); ?>
			</center>
		</div>
	</div>
</div>