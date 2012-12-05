<?php 
	$transports = array(
		'บก' => 'บก',
		'เรือ' => 'เรือ',
		'อากาศ' => 'อากาศ',
	);
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
		$status = array(
			'กำลังดำเนินการ' => 'กำลังดำเนินการ',
			'อนุมัติ' => 'อนุมัติ',
			'ไม่อนุมัติ' => 'ไม่อนุมัติ',
		);
?>


<div class="navbar">
		<div class="navbar-inner"  >
			<div class="container" style="width:940px;">
				<div class="container-fluid"  >
					<div class="row-fluid"  >
						<div class="span3">
						</div>
						<div class="span9">
							<div class="span9">
								<ul class="nav">
									<li ><?= $this->Html->link('หน้าหลัก', array('action' => 'index')); ?></li>
									<li class="divider-vertical"></li>
									<li class="dropdown active">
										<a href="#" class="active dropdown-toggle" data-toggle="dropdown">รายการคำขอ <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><?= $this->Html->link('ใบรับรองสุขอนามัย (พ.ก. 11)', array('action' => 'view_pk11')); ?></li>
											<li><?= $this->Html->link('รายการคำขอแก้ไขใบแนบใบรับรองสุขอนามัย (พ.ก. 12)', array('action' => 'view_edit_pk11')); ?></li>
										</ul>
									</li>
								
									<li class="divider-vertical"></li>
									<li><?= $this->Html->link('คู่มือการใช้งาน', array('action' => 'manual')); ?></li>
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
</div>

<?php echo $this->Session->flash(); ?>
	<div class="container" style="margin-top:50px;">
		<div class="containerMain">
			<?= $this->Form->create(); ?>
			<div class="headTopic">คำขอใบรับรองสุขอนามัย<br/><div class="engDescriptionHead">Application for Health Certificate</div></div>
		
			<div class="side">
		<legend1 style="color:#5BAF5B;">ผู้ประกอบการโรงคัดบรรจุ</legend1>
		<table border="0" cellspacing="2" cellpadding="6" width="750px" style="margin-left:30px;">
			<?= $this->Form->input('EditPacker.id', array('value' => '', 'div' => false, 'type' => 'hidden', 'id' => 'packerId'));?>
			<?= $this->Form->input('User.id', array('value' => '', 'div' => false, 'type' => 'hidden', 'id' => 'userId'));?>
		    <tr><td width="170px">ชื่อผู้ประกอบการโรงคัดบรรจุ<br/><div class="engDescription">Name of Packer</div></td><td colspan="3"><?= $this->Form->input('EditPacker.name', array('class' => 'span7', 'id' => 'packerName' ,'div' => false, 'label' => false,));?></td></tr>
		    <tr><td>ที่อยู่ผู้ประกอบการโรงคัดบรรจุ<br/><div class="engDescription">Address of Packer</div></td><td colspan="3"><?= $this->Form->input('EditPacker.address', array('class' => 'span7', 'id' => 'packerAddress' ,'div' => false, 'label' => false));?></td></tr>
		    <tr><td>จังหวัด<br/><div class="engDescription">Province</div></td><td width="200px"><?= $this->Form->input('EditPacker.province', array('class' => 'span3', 'id' => 'packerProvince' , 'options' => $arr_province, 'div' => false, 'label' => false, 'empty' => '(โปรดเลือก)'));?></td><td width="76px">รหัสไปรษณีย์<br/><div class="engDescription">Postal Code</div></td><td><?= $this->Form->input('EditPacker.postcode', array('class' => 'span3', 'id' => 'packerPostcode' ,'div' => false, 'label' => false));?></td></tr>
			<tr><td>โทรศัพท์<br/><div class="engDescription">Telephone</div></td><td><?= $this->Form->input('EditPacker.phone', array('class' => 'span3', 'id' => 'packerPhone' ,'div' => false, 'label' => false));?></td><td >โทรสาร<br/><div class="engDescription">Facsimile</div></td><td><?= $this->Form->input('EditPacker.fax', array('class' => 'span3','id' => 'packerFax' , 'div' => false, 'label' => false));?></td></tr>
		</table>
	</div>
	
	<div class="side">
		
		<legend1 style="color:#5BAF5B;">พืชที่ยื่นขอใบรับรองสุขอนามัย</legend1>
		<table border="0" cellspacing="2" cellpadding="6" width="750px" style="margin-left:30px;">
		    <tr><td width="200px">ชื่อพืชหรือผลิตผลพืช<br/><div class="engDescription">Name of plants or plant product</div></td><td colspan="5"><?= $this->Form->input('EditRequest.product_name', array('class' => 'span7', 'div' => false, 'label' => false));?></td></tr>
			<tr><td>น้ำหนัก<br/><div class="engDescription">Weight</div></td><td width="150px"><?= $this->Form->input('EditRequest.product_weight', array('class' => 'span2', 'div' => false, 'label' => false));?></td><td width="100px">กิโลกรัม<br/><div class="engDescription">Kilogram</div></td><td width="30px">มูลค่า<br/><div class="engDescription">Value</div></td><td><?= $this->Form->input('EditRequest.product_value', array('class' => 'span2', 'div' => false, 'label' => false));?></td><td width="60px">บาท<br/><div class="engDescription">Baht</div></td></tr>
			<tr><td>รหัสแปลง GAP/Organic<br/><div class="engDescription">Code of GAP/Organic</div></td><td colspan="5"><?= $this->Form->input('EditRequest.gap_code', array('class' => 'span7', 'div' => false, 'label' => false));?></td></tr>
		</table>
		<table border="0" cellspacing="2" cellpadding="6" width="750px" style="margin-left:30px;">
		    <tr><td width="330px">ชื่อเชื้อจุลินทรีย์หรือสิ่งอื่นใดที่เป็นอันตรายต่อมนุษย์<br/><div class="engDescription">Name of microorganisms or other harmful substances</div></td><td width="10px"><?= $this->Form->input('EditRequest.is_microorganisms', array('class' => false, 'div' => false, 'label' => false));?></td><td>จุลินทรีย์<br/><div class="engDescription">Microorganisms</div></td><td width="10px"><?= $this->Form->input('EditRequest.is_harmful', array('class' => false, 'div' => false, 'label' => false));?></td><td>สารตกค้าง<br/><div class="engDescription">Harmful Substances</div></td></tr>
		</table>
		<?= $this->Form->input('EditRequest.status', array('value' => 'กำลังดำเนินการ', 'div' => false, 'type' => 'hidden', 'id' => 'packerId'));?>
	</div>
	
<div class="side">
		
		<legend1 style="color:#5BAF5B;">พาหนะ</legend1>
		
		<table border="0" cellspacing="2" cellpadding="6" width="750px" style="margin-left:30px;">
		    <tr><td width="200px">ส่งโดยพาหนะ<br/><div class="engDescription">Means of Conveyance</div></td><td colspan="5">
		    	<?= $this->Form->input('EditRequest.vehicle', array('class' => 'span3', 'options' => $transports, 'div' => false, 'label' => false, 'empty' => '(โปรดเลือก)'));?>
		    </td></tr>
			
		</table>
		
		
	</div>

	
	<div class="side">
		
		<legend1 style="color:#5BAF5B;">ผู้รับ</legend1>
		<p style="margin-left:35px;">รายละเอียดการส่งออก</p>
		
		
		<table border="0" cellspacing="2" cellpadding="6" width="750px" style="margin-left:30px;">
			<tr><td>ผู้รับสินค้า<br/><div class="engDescription">Consignee</div></td><td colspan="5"><?= $this->Form->input('EditExportdetail.receiver', array('class' => 'span7', 'div' => false, 'label' => false));?></td></tr>
			<tr><td>ที่อยู่ผู้รับสินค้า<br/><div class="engDescription">Address of Consignee</div></td><td colspan="5"><?= $this->Form->input('EditExportdetail.receiver_addr', array('class' => 'span7', 'div' => false, 'label' => false));?></td></tr>
			<tr><td>วันที่ส่ง<br/><div class="engDescription">Ship Date</div></td><td width="200px" colspan="2"><?= $this->Form->input('EditExportdetail.ship_date', array('class' => 'span1', 'div' => false, 'label' => false, 'dateFormat' => 'DMY'));?></td><td width="45px">ส่วนที่<br/><div class="engDescription">Lot No.</div></td><td colspan="2"><?= $this->Form->input('EditExportdetail.lot_no', array('class' => 'span3', 'div' => false, 'label' => false));?></td></tr>
			<tr><td>หมายเลขลงทะเบียน<br/><div class="engDescription">Registration No.</div></td><td colspan="2" width="150px"><?= $this->Form->input('EditExportdetail.regis_no', array('class' => 'span3', 'div' => false, 'label' => false));?></td><td width="30px">น้ำหนัก<br/><div class="engDescription">Weight</div></td><td><?= $this->Form->input('EditExportdetail.weight', array('class' => 'span2', 'div' => false, 'label' => false));?></td><td width="60px">กิโลกรัม<br/><div class="engDescription">Kilogram</div></td></tr>
		</table>
		
		 
		
		
		
		
	</div>
	
	<div class="side">
		
			<legend1 style="color:#5BAF5B;">พาหนะ</legend1>
		
			<table border="0" cellspacing="2" cellpadding="6" width="750px" style="margin-left:30px;">
			    <tr><td width="200px">ส่งโดยพาหนะ<br/><div class="engDescription">Means of Conveyance</div></td><td colspan="5">
			    	<?= $this->Form->input('EditRequest.status', array('class' => 'span3', 'id' => 'packerProvince' , 'options' => $status, 'div' => false, 'label' => false));?>
			    </td></tr>
			
			</table>
		
			<div style="height:20px; padding:10px;">
	   		 	<? echo $this->Form->input('EditRequest.id', array('type' => 'hidden')); ?>
	   			 <? echo $this->Form->input('EditPacker.id', array('type' => 'hidden')); ?>
	   			 <? echo $this->Form->input('Exporter.id', array('type' => 'hidden')); ?>
	   		 	<? echo $this->Form->input('PackingHouse.id', array('type' => 'hidden')); ?>
	   			 <? echo $this->Form->input('EditExportdetail.id', array('type' => 'hidden')); ?>
				<?= $this->Form->submit('บันทึก', array('class' => 'btn btn-success', 'style' => 'float:right; margin-left:10px;')); ?>
			
			</div>
		</div>
	<?= $this->Form->end(); ?>
	<?= $this->Form->button('ยกเลิก', array('onclick' => "location.href='".$this->Html->url(array('action' => 'index'))."'" ,'class' => 'btn', 'style' => 'float:right; margin-left:10px;')); ?>
	</div>
	
	
</div>
	
	
</div>