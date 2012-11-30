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
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

<div class="container" style="margin-top:95px;">
	<div class="containerMain">
		<div class="headTopic" style = "font-size: 30px;">ผลการวิเคราะห์ตัวอย่าง<br/></div>
		<div class="side">
	<table border="0" cellspacing="2" cellpadding="6" width="750px" style="margin-left:30px;">
		<?php
			echo $this->Form->create('Analysis');
		?>
	    <tr>
	    	<td width="200px">หมายเลขตัวอย่าง<br/></td>
	    	<td colspan="3">
	    		<?php echo $this->Form->input('sample_id', array('type' => 'textbox', 'label' => false,'class'=>'span3')) ?>
	    	</td>
	    </tr>
		<tr>
			<td width="200px">ผู้ทดสอบ<br/></td>
			<td colspan="3">
				<?php echo $this->Form->input('analyzer', array('type' => 'textbox', 'label' => false,'class'=>'span3')) ?>
			</td>
		</tr>
		<tr>
			<td width="200px">วันที่ทดสอบ<br/></td>
			<td colspan="3">
				<?php echo $this->Form->input('analysis_date', array('class' => 'span1', 'div' => false, 'label' => false, 'dateFormat' => 'DMY'));?>
			</td>
		</tr>
		<tr>
			<td width="200px">ชนิดการทดสอบ<br/></td>
			<td colspan="3">
				<?php echo $this->Form->input('method', array('type' => 'textbox', 'label' => false,'class'=>'span3')) ?>
			</td>
		</tr>
		<tr>
			<td width="200px">ผลการทดสอบ<br/></td>
			<td colspan="3">
				<?php echo $this->Form->input('result', array('type' => 'textarea', 'label' => false,'class'=>'span8')) ?>
			</td>
			<?php echo $this->Form->input('status', array('type' => 'hidden', 'value' => 'NOT PASS','label' => false,'class'=>'span8')) ?>
		</tr>
	</table>
</div>
	<button type="submit" class="btn btn-success" style="float:right; margin-left:10px;">ส่ง</button>
	<?php
		echo $this->Form->end();
	?>
</div>
	

		<!-- Le javascript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="../js/jquery-1.8.1.js"></script>