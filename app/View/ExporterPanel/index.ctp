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
									<li><?= $this->Html->link('ใบรับรองสุขอนามัย (พ.ก.11)', array('action' => 'requestApp')); ?></li>
									<li><?= $this->Html->link('แก้ไขใบแนบใบรับรองสุขอนามัย (พ.ก.12)', array('action' => 'requestApp')); ?></li>
								</ul>
							</li>

							<li class="divider-vertical"></li>
							<li><?= $this->Html->link('ดูผลการตรวจสอบ', array('action' => 'labresult')); ?></li>
							<li class="divider-vertical"></li>
							
							<li><?= $this->Html->link('คู่มือการใช้งาน', array('action' => 'manual')); ?></li>
							<li class="divider-vertical"></li>
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

<?php echo $this->Session->flash(); ?>

<div class="container" style="margin-top:50px;">
		<div class="containerMain" style="min-height:500px;">
		
			<div class="side" style="margin-top:30px">
		<legend1 style="color:#5BAF5B;">รายการคำขอใบรับรองสุขอนามัย (พ.ก.11) <?= $this->Form->button('ยื่นคำขอ', array('onclick' => "location.href='".$this->Html->url(array('action' => 'requestApp'))."'" ,'class' => 'btn btn-success', 'style' => 'float:right;')); ?>
		</legend1>
			<table id="bgTable" border="1" cellspacing="1" cellpadding="6" width="700px" style="margin:auto;">
			 	<tr align="center" style="background:rgba(110, 158, 48, 0.5); color:#3F3F3F;"><td >คำขอที่</td><td>วันที่ขอ</td><td>สถานะ</td><td>การกระทำ</td></tr>
			<?php foreach ($requests as $request): ?>
				<tr align="center" style="color:#3F3F3F"><td><?= $request['Request']['receipt_no']; ?></td>
					<?php $date = date_create($request['Request']['receipt_date']); ?>
					<td><?= date_format($date, 'd F Y เวลา H:i น.'); ?></td><td><?= $request['Request']['status']; ?></td>
					<td width="130px"><?= $this->Form->button('ดู', array('onclick' => "location.href='".$this->Html->url(array('action' => 'view_report_pk11',$request['Request']['id']))."'" ,'class' => 'btn', 'style' => 'width:50px;')); ?>&nbsp;<?= $this->Form->button('ลบ', array('onclick' => "if(confirm('Are you sure to delete?'))
						location.href='".$this->Html->url(array('action' => 'delete_by_id',$request['Request']['id']))."'" ,'class' => 'btn btn-danger', 'style' => 'width:50px;')); ?>&nbsp;<?= $this->Form->button('ยื่นคำขอแก้ไข', array('onclick' => "location.href='".$this->Html->url(array('action' => 'edit_report_pk11',$request['Request']['id']))."'" ,'class' => 'btn btn-info', 'style' => 'width:110px; margin-top:5px;')); ?></td>
				</tr>
			<?php endforeach; ?>
			</table>
			<br/>
	</div>
	
		
		<div class="side" style="margin-top:30px;">
	<legend1 style="color:#5BAF5B;">รายการคำแก้ไขใบแนบใบรับรองสุขอนามัย (พ.ก.12)</legend1>
		
	
		<table id="bgTable" border="1" cellspacing="1" cellpadding="6" width="700px" style="margin:auto;">
		 	<tr align="center" style="background:rgba(110, 158, 48, 0.5); color:#3F3F3F;"><td >คำขอที่</td><td>วันที่ขอ</td><td>สถานะ</td><td>การกระทำ</td></tr>
			<?php foreach ($editrequests as $request): ?>
				<tr align="center"><td><?= $request['EditRequest']['receipt_no']; ?></td><td><?= $request['EditRequest']['receipt_date']; ?></td><td><?= $request['EditRequest']['status']; ?></td><td width="130px"><?= $this->Form->button('ดู', array('onclick' => "location.href='".$this->Html->url(array('action' => 'view_report_pk11',$request['EditRequest']['id']))."'" ,'class' => 'btn', 'style' => 'width:50px;')); ?>&nbsp;<?= $this->Form->button('ลบ', array('onclick' => "if(confirm('Are you sure to delete?'))
						location.href='".$this->Html->url(array('action' => 'delete_by_id',$request['EditRequest']['id']))."'" ,'class' => 'btn btn-danger', 'style' => 'width:50px;')); ?></td></tr>
			<?php endforeach; ?>	
		</table>

		</div>

	</div>
</div>