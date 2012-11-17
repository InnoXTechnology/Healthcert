<?php
$types = array(
		'D' => 'DOA Staff',
		'H' => 'Lab Header',
		'T' => 'Lab Tester',
	);
?>
<?php echo $this->Session->flash(); ?>
<div class="container" style="margin-top:95px;">
	<div class="containerMain">
		<div class="headTopic">ลงทะเบียนเจ้าหน้าที่<br/><div class="engDescriptionHead">Staff Registration</div></div>
		<?= $this->Form->create(); ?>
			<div class="side">
				<legend1 style="color:#5BAF5B;">สร้างบัญชีผู้ใช้</legend1>
				<table border="0" cellspacing="2" cellpadding="6" width="750px" style="margin-left:30px;">
				    <tr><td width="100px">ชื่อบัญชีผู้ใช้<br/><div class="engDescription">Username</div></td><td><?= $this->Form->input('username', array('class' => 'span8', 'div' => false, 'autocomplete' => 'off', 'label' => false));?></td></tr>
				    <tr><td>รหัสผ่าน<br/><div class="engDescription">Password</div></td><td><?= $this->Form->input('password', array('class' => 'span8', 'div' => false, 'autocomplete' => 'off', 'label' => false));?></td></tr>
					<tr><td>ยืนยันรหัสผ่าน<br/><div class="engDescription">Confirm Password</div></td><td><?= $this->Form->input('repassword', array('class' => 'span8', 'div' => false, 'type' => 'password', 'required' => true, 'label' => false));?></td></tr>
					<tr><td>ประเภทสมาชิก<br/><div class="engDescription">Type of Staff</div></td><td><?= $this->Form->input('type', array('class' => 'span8', 'div' => false, 'options' => $types, 'required' => true, 'label' => false, 'empty' => '(โปรดเลือก)'));?></td></tr>
				</table>
			</div>
			<?= $this->Form->submit('ลงทะเบียน', array('class' => 'btn btn-success', 'style' => 'float:right; margin-left:10px;')); ?>
		<?= $this->Form->end(); ?>
	</div>
</div>