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
							<li class="dropdown">
								<a href="#" class="active dropdown-toggle" data-toggle="dropdown">ยื่นคำขอ <b class="caret"></b></a>

								<ul class="dropdown-menu">
									<li><?= $this->Html->link('ใบรับรองสุขอนามัย (พ.ก.11)', array('action' => 'requestApp')); ?></li>
									<li><?= $this->Html->link('แก้ไขใบแนบใบรับรองสุขอนามัย (พ.ก.12)', array('action' => 'view_pk11')); ?></li>
								</ul>
							</li>

							<li class="divider-vertical"></li>
							<li class="active"><?= $this->Html->link('ดูผลการตรวจสอบ', array('action' => 'labresult')); ?></li>
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
				<tr align="center" style="background:rgba(110, 158, 48, 0.5); color:#3F3F3F;"><td >ใบคำขอที่</td><td >ผลการตรวจสอบที่</td><td>วันที่ทำการตรวจสอบ</td><td>หัวข้อการตรวจสอบ</td><td>ผลการตรวจสอบ</td><td width="120px">สถานะ</td></tr>
				
				

				<?php foreach ($samples as $sample): ?>
				
				<?php $request_id = $sample['Request']['id']; ?>
				<?php foreach ($sample['Analysis'] as $analysis): ?>
				<tr align="center"><td><?php echo $request_id ?></td><td><?php echo $analysis['sample_id']; ?></td><td><?php echo $analysis['analysis_date']; ?></td><td><?php echo $analysis
				['method']; ?></td><td><?php echo $analysis
				['result']; ?></td><td><?php echo $analysis
				['status']; ?></td></tr>
			<?php endforeach; ?>
			
		<?php endforeach; ?>
	</table>

</div>




</div>
</div>
