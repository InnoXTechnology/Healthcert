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

<div class="container" style="margin-top:95px;">
	<div class="containerMain">
		<div class="headTopic" style = "font-size: 30px;">รับตัวอย่าง<br/></div>
		<div class="side">
	<table border="0" cellspacing="2" cellpadding="6" width="750px" style="margin-left:30px;">
		<?php
			echo $this->Form->create('Sample');
		?>
		<tr>
	    	<td width="200px">วันที่รับตัวอย่าง<br/></td>
	    	<td colspan="3">
	    		<?php echo $this->Form->input('submit_date', array('class' => 'span1', 'div' => false, 'label' => false, 'dateFormat' => 'DMY'));?>
	    	</td>
	    </tr>
		<tr>
	    	<td width="200px">หมายเลขผู้ส่งออก<br/></td>
	    	<td colspan="3">
	    		<?php echo $this->Form->input('exporter_id', array('type' => 'textbox', 'label' => false,'class'=>'span3')) ?>
	    	</td>
	    </tr>
	    <tr>
	    	<td width="200px">หมายเลขคำร้อง<br/></td>
	    	<td colspan="3">
	    		<?php echo $this->Form->input('request_id', array('type' => 'textbox', 'label' => false,'class'=>'span3')) ?>
	    	</td>
	    </tr>
	    <tr>
	    	<td width="200px">คำอธิบายตัวอย่าง<br/></td>
	    	<td colspan="3">
	    		<?php echo $this->Form->input('description', array('type' => 'textarea', 'label' => false,'class'=>'span8')) ?>
	    	</td>
	    </tr>
	    <tr>
	    	<td width="200px">สภาพตัวอย่าง<br/></td>
	    	<td colspan="3">
	    		<?php echo $this->Form->input('state', array('type' => 'textarea', 'label' => false,'class'=>'span8')) ?>
	    	</td>
	    </tr>

	</table>
</div>
	<button type="submit" class="btn btn-success" style="float:right; margin-left:10px;">ส่ง</button>
	<?php
		echo $this->Form->end();
	?>
</div>