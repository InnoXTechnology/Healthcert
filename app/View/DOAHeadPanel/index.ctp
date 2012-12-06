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
			<legend1 style="color:#5BAF5B;">รายงานผลการตรวจแลป</legend1>
			<table id="bgTable" border="1" cellspacing="1" cellpadding="6" width="700px" style="margin:auto;">
				<tr align="center" style="background:rgba(110, 158, 48, 0.5); color:#3F3F3F;">
					<td>คำขอที่</td>
					<td>ผู้ประกอบการ</td>
					<td>วันที่ขอ</td>
					<td>รายละเอียดผู้ขอ</td>
					<td>ผลการตรวจแลป</td>
					<td>การกระทำ</td>
				</tr>
				
				<?php foreach ($requests as $request): ?>
				<tr align="center" style="color:#3F3F3F">
					<td><?= $request['Request']['receipt_no']; ?></td>
					<td><?= $request['Exporter']['name']; ?></td>
					<?php $date = date_create($request['Request']['receipt_date']); ?>
					<td><?= date_format($date, 'd F Y เวลา H:i น.'); ?></td>

					<td>
						<?= $this->Form->button('ดู', array('onclick' => "location.href='".$this->Html->url(array('action' => 'view_report_pk11',$request['Request']['id']))."'" ,'class' => 'btn btn-info', 'style' => 'width:50px;')); ?>
					</td>

					<td>
						<?= $this->Form->button('ดู', array('onclick' => "location.href='".$this->Html->url(array('action' => 'view_lab_report',$request['Request']['id']))."'" ,'class' => 'btn btn-info', 'style' => 'width:50px;')); ?>
					</td>

					<td width="140px">
						<?= $this->Form->button('ผ่าน', array('onclick' => "if(confirm('Are you sure to confirm?')) location.href='".$this->Html->url(array('action' => 'apply_status',$request['Request']['id'],'pass'))."'" ,'class' => 'btn btn-success')); ?>
						&nbsp;
						<?= $this->Form->button('ไม่ผ่าน', array('onclick' => "if(confirm('Are you sure to confirm?')) location.href='".$this->Html->url(array('action' => 'apply_status',$request['Request']['id'],'fail'))."'" ,'class' => 'btn btn-danger', 'style' => 'width:70px;')); ?>
					</td>


				</tr>
				<?php endforeach; ?>
			</table>
			<br/>
		</div>

	</div>
</div>