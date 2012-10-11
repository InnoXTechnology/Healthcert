<?php
$arr_province = array(
	"กระบี่" => "กระบี่",
	"กรุงเทพมหานคร" => "กรุงเทพมหานคร",
	"กาญจนบุรี" => "กาญจนบุรี",
	"กาฬสินธุ์" => "กาฬสินธุ์",
	"กำแพงเพชร" => "กำแพงเพชร",
	"ขอนแก่น" => "ขอนแก่น",
	"จันทบุรี" => "จันทบุรี",
	"ฉะเชิงเทรา"  => "ฉะเชิงเทรา" ,
	"ชลบุรี" => "ชลบุรี",
	"ชัยนาท" => "ชัยนาท",
	"ชัยภูมิ" => "ชัยภูมิ",
	"ชุมพร" => "ชุมพร",
	"เชียงราย" => "เชียงราย",
	"เชียงใหม่" => "เชียงใหม่",
	"ตรัง" => "ตรัง",
	"ตราด" => "ตราด",
	"ตาก" => "ตาก",
	"นครนายก" => "นครนายก",
	"นครปฐม" => "นครปฐม",
	"นครพนม" => "นครพนม",
	"นครราชสีมา"  => "นครราชสีมา" ,
	"นครศรีธรรมราช" => "นครศรีธรรมราช",
	"นครสวรรค์" => "นครสวรรค์",
	"นนทบุรี" => "นนทบุรี",
	"นราธิวาส" => "นราธิวาส",
	"น่าน" => "น่าน",
	"บุรีรัมย์" => "บุรีรัมย์",
	"ปทุมธานี" => "ปทุมธานี",
	"ประจวบคีรีขันธ์" => "ประจวบคีรีขันธ์",
	"ปราจีนบุรี" => "ปราจีนบุรี",
	"ปัตตานี"  => "ปัตตานี" ,
	"พะเยา" => "พะเยา",
	"พังงา" => "พังงา",
	"พัทลุง" => "พัทลุง",
	"พิจิตร" => "พิจิตร",
	"พิษณุโลก" => "พิษณุโลก",
	"เพชรบุรี" => "เพชรบุรี",
	"เพชรบูรณ์" => "เพชรบูรณ์",
	"แพร่" => "แพร่",
	"ภูเก็ต" => "ภูเก็ต",
	"มหาสารคาม" => "มหาสารคาม",
	"มุกดาหาร" => "มุกดาหาร",
	"แม่ฮ่องสอน"  => "แม่ฮ่องสอน" ,
	"ยโสธร" => "ยโสธร",
	"ยะลา" => "ยะลา",
	"ร้อยเอ็ด" => "ร้อยเอ็ด",
	"ระนอง" => "ระนอง",
	"ระยอง" => "ระยอง",
	"ราชบุรี" => "ราชบุรี",
	"ลพบุรี" => "ลพบุรี",
	"ลำปาง" => "ลำปาง",
	"ลำพูน" => "ลำพูน",
	"เลย" => "เลย",
	"ศรีสะเกษ" => "ศรีสะเกษ",
	"สกลนคร" => "สกลนคร",
	"สงขลา"  => "สงขลา" ,
	"สตูล" => "สตูล",
	"สมุทรปราการ" => "สมุทรปราการ",
	"สมุทรสงคราม" => "สมุทรสงคราม",
	"สมุทรสาคร" => "สมุทรสาคร",
	"สระแก้ว" => "สระแก้ว",
	"สระบุรี" => "สระบุรี",
	"สิงห์บุรี" => "สิงห์บุรี",
	"สุโขทัย" => "สุโขทัย",
	"สุพรรณบุรี" => "สุพรรณบุรี",
	"สุราษฎร์ธานี"  => "สุราษฎร์ธานี" ,
	"สุรินทร์" => "สุรินทร์",
	"หนองคาย" => "หนองคาย",
	"หนองบัวลำภู" => "หนองบัวลำภู",
	"อยุธยา" => "อยุธยา",
	"อ่างทอง" => "อ่างทอง",
	"อำนาจเจริญ" => "อำนาจเจริญ",
	"อุดรธานี" => "อุดรธานี",
	"อุตรดิตถ์" => "อุตรดิตถ์",
	"อุทัยธานี" => "อุทัยธานี",
	"อุบลราชธานี" => "อุบลราชธานี",);
?>
<div class="container" style="margin-top:95px;">
		<div class="containerMain">
		<?= $this->Form->create('User'); ?>
			<div class="headTopic">ลงทะเบียนผู้ประกอบการ<br/><div class="engDescriptionHead">Packer Registration</div></div>
		
			<div class="side">
		<legend1 style="color:#5BAF5B;">1. ข้อมูลทั่วไป</legend1>
		<table border="0" cellspacing="2" cellpadding="6" width="750px" style="margin-left:30px;">
			<tr><td width="100px">ชื่อผู้ประกอบการ<br/><div class="engDescription">Name of Packer</div></td><td colspan="3"><?= $this->Form->input('Packer.name', array('class' => 'span8', 'div' => false, 'label' => false));?></td></tr>		    
		    <tr><td>ที่อยู่ผู้ประกอบการ<br/><div class="engDescription">Address of Packer</div></td><td colspan="3"><?= $this->Form->input('Packer.address', array('class' => 'span8', 'div' => false, 'label' => false));?></td></tr>
		    <tr><td>จังหวัด<br/><div class="engDescription">Province</div></td><td width="275px"><?= $this->Form->input('Packer.province', array('class' => 'span3', 'options' => $arr_province, 'div' => false, 'label' => false, 'empty' => '(โปรดเลือก)'));?></td><td width="100px">รหัสไปรษณีย์<br/><div class="engDescription">Postal Code</div></td><td><?= $this->Form->input('Packer.postcode', array('class' => 'span3', 'div' => false, 'label' => false));?></td></tr>
			<tr><td>โทรศัพท์<br/><div class="engDescription">Telephone</div></td><td><?= $this->Form->input('Packer.phone', array('class' => 'span3', 'div' => false, 'label' => false));?></td><td >โทรสาร<br/><div class="engDescription">Facsimile</div></td><td><?= $this->Form->input('Packer.fax', array('class' => 'span3', 'div' => false, 'label' => false));?></tr>
		</table>
	</div>
	<div class="side">
		
		<legend1 style="color:#5BAF5B;">2. สร้างบัญชีผู้ใช้</legend1>
		<table border="0" cellspacing="2" cellpadding="6" width="750px" style="margin-left:30px;">
		    <tr><td width="100px">ชื่อบัญชีผู้ใช้<br/><div class="engDescription">Username</div></td><td><?= $this->Form->input('username', array('class' => 'span8', 'div' => false, 'autocomplete' => 'off', 'label' => false));?></td></tr>
		    <tr><td>รหัสผ่าน<br/><div class="engDescription">Password</div></td><td><?= $this->Form->input('password', array('class' => 'span8', 'div' => false, 'autocomplete' => 'off', 'label' => false));?></td></tr>
			<tr><td>ยืนยันรหัสผ่าน<br/><div class="engDescription">Confirm Password</div></td><td><?= $this->Form->input('repassword', array('class' => 'span8', 'div' => false, 'type' => 'password', 'required' => true, 'label' => false));?></td></tr>

			<?= $this->Form->input('type', array('value' => 'P', 'div' => false, 'type' => 'hidden'));?>
		</table>
	</div>
		<?= $this->Form->submit('ลงทะเบียน', array('class' => 'btn btn-success', 'style' => 'float:right; margin-left:10px;')); ?>
		<?= $this->Form->button('ยกเลิก', array('onclick' => "location.href='".$this->Html->url(array('action' => 'login'))."'" ,'class' => 'btn', 'style' => 'float:right; margin-left:10px;')); ?>
	</div>
	<?= $this->Form->end(); ?>
</div>