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
<!-- new -->

<div class="container" style="margin-top:95px;">
		<div class="containerMain">
		<?= $this->Form->create(array('type' => 'file')); ?>
			<div class="headTopic">ลงทะเบียนผู้ส่งออก<br/><div class="engDescriptionHead">Exporter Registration</div></div>
		
			<div class="side">
		<legend1 style="color:#5BAF5B;">ข้อมูลทั่วไป</legend1>
		<table border="0" cellspacing="2" cellpadding="6" width="750px" style="margin-left:30px;">
		    <tr><td width="100px">ชื่อผู้ส่งออก<br/><div class="engDescription">Name of Exporter</div></td><td colspan="3"><?= $this->Form->input('Exporter.name', array('class' => 'span8', 'div' => false, 'label' => false));?></td></tr>
		    <tr><td>ที่อยู่ผู้ส่งออก<br/><div class="engDescription">Address of Exporter</div></td><td colspan="3"><?= $this->Form->input('Exporter.address', array('class' => 'span8', 'div' => false, 'label' => false));?></td></tr>
		    <tr><td>จังหวัด<br/><div class="engDescription">Province</div></td><td width="275px"><?= $this->Form->input('Exporter.province', array('class' => 'span3', 'options' => $arr_province, 'div' => false, 'label' => false, 'empty' => '(โปรดเลือก)'));?></td><td width="100px">รหัสไปรษณีย์<br/><div class="engDescription">Postal Code</div></td><td><?= $this->Form->input('Exporter.postcode', array('class' => 'span3', 'div' => false, 'label' => false));?></td></tr>
			<tr><td>โทรศัพท์<br/><div class="engDescription">Telephone</div></td><td><?= $this->Form->input('Exporter.phone', array('class' => 'span3', 'div' => false, 'label' => false));?></td><td >โทรสาร<br/><div class="engDescription">Facsimile</div></td><td><?= $this->Form->input('Exporter.fax', array('class' => 'span3', 'div' => false, 'label' => false));?></td></tr>
			<tr><td>อีเมลล์<br/><div class="engDescription">E-mail</div></td><td colspan="3"><?= $this->Form->input('Exporter.email', array('class' => 'span8', 'div' => false, 'label' => false));?></td></tr>
		</table>
	</div>
	<div class="side">
		
		<legend1 style="color:#5BAF5B;">สร้างบัญชีผู้ใช้</legend1>
		<table border="0" cellspacing="2" cellpadding="6" width="750px" style="margin-left:30px;">
		    <tr><td width="100px">ชื่อบัญชีผู้ใช้<br/><div class="engDescription">Username</div></td><td><?= $this->Form->input('username', array('class' => 'span8', 'div' => false, 'autocomplete' => 'off', 'label' => false));?></td></tr>
		    <tr><td>รหัสผ่าน<br/><div class="engDescription">Password</div></td><td><?= $this->Form->input('password', array('class' => 'span8', 'div' => false, 'autocomplete' => 'off', 'label' => false));?></td></tr>
			<tr><td>ยืนยันรหัสผ่าน<br/><div class="engDescription">Confirm Password</div></td><td><?= $this->Form->input('repassword', array('class' => 'span8', 'div' => false, 'type' => 'password', 'required' => true, 'label' => false));?></td></tr>
			<?= $this->Form->input('type', array('value' => 'E', 'div' => false, 'type' => 'hidden'));?>
		</table>
	</div>
		
		<div class="side">
		<legend1 style="color:#5BAF5B;">แนบเอกสารหลักฐาน</legend1>
		<div style="margin-left:30px;">
			<label>สําเนาบัตรประจําตัวประชาชนหรือหนังสือเดินทาง<br/><div class="engDescription">A copy of the identification card or passport.</div></label>
			  <?php echo $this->Form->input('Exporter.id_card', array('type' => 'file','label' => false)); ?>
			  <?php echo $this->Form->input('Exporter.id_card_dir', array('type' => 'hidden')); ?>
			  <br/>
  			<label>สําเนาหนังสือรับรองการจดทะเบียนนิติบุคคลและผู้มีอํานาจลงชื่อแทนนิติบุคคผู้ขออนุญาตนี้ออกใหม่ไม่เกินหกเดือน <br/>(กรณีนิติบุคคลเป็นผู้ขออนุญาต)<br/><div class="engDescription">A copy of the certificate of corporate registration and signatures authorized, issued within six months. (In case of the applicant is a corporation)</div></label>
  			  <?php echo $this->Form->input('Exporter.cert_corp', array('type' => 'file','label' => false)); ?>
			  <?php echo $this->Form->input('Exporter.cert_corp_dir', array('type' => 'hidden')); ?>
  			  <br/>
  			<label>สําเนาบัตรประจําตัวประชาชนของกรรมการผู้มีอํานาจลงชื่อแทนนิติบุคคลหรือหนังสือเดินทาง<br/><div class="engDescription">A copy of the identification card of person authorized sign for the corporate entity or passport.</div></label>
  			  <?php echo $this->Form->input('Exporter.id_corp', array('type' => 'file','label' => false)); ?>
			  <?php echo $this->Form->input('Exporter.id_corp_dir', array('type' => 'hidden')); ?>
  			  <br/>
  			<label>หนังสือมอบอํานาจในกรณีมอบอํานาจให้ผู้อื่นดําเนินการแทน<br/><div class="engDescription">Application letter of authorized to submit the application for permit.</div></label>
  			  <?php echo $this->Form->input('Exporter.app_letter', array('type' => 'file','label' => false)); ?>
			  <?php echo $this->Form->input('Exporter.app_letter_dir', array('type' => 'hidden')); ?>
  			  <br/>
	  	</div>
	</div>
		<?= $this->Form->submit('ลงทะเบียน', array('class' => 'btn btn-success', 'style' => 'float:right; margin-left:10px;')); ?>
		<?= $this->Form->button('ยกเลิก', array('onclick' => "location.href='".$this->Html->url(array('action' => 'login'))."'" ,'class' => 'btn', 'style' => 'float:right; margin-left:10px;')); ?>
	</div>
	<?= $this->Form->end(); ?>
</div>