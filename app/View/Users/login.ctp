<?php echo $this->Session->flash(); ?>
<div class="container" style="margin-top:50px;">
	<div id="wrapper" style="margin-top:-30px; margin-bottom:80px;">
		<?= $this->Form->create('User', array('action' => 'login')); ?>
		<div id="wrappertop"></div>
		<div id="wrappermiddle">
			<h2 style="margin-top:-5px;">ลงชื่อเข้าใช้</h2>
				<div id="username_input">
					<div id="username_inputleft"></div>
					<div id="username_inputmiddle">
						<?= $this->Form->input('username', array('label' => false, 'div' => false, 'placeholder' => 'บัญชีผู้ใช้', 'id' => 'url', 'style' => 'width:256px; height:40px;')); ?>
						<img id="url_user" src="../images/mailicon.png" alt="">
					</div>
						<div id="username_inputright"></div>
				</div>

				<div id="password_input">
					<div id="password_inputleft"></div>
					<div id="password_inputmiddle">
						<?= $this->Form->input('password', array('label' => false, 'div' => false, 'placeholder' => 'รหัสผ่าน', 'id' => 'url', 'style' => 'width:256px; height:40px;')); ?>
						<img id="url_password" src="../images/passicon.png" alt="">
					</div>
						<div id="password_inputright"></div>
				</div>

				<div id="submit">
					<?= $this->Form->submit('../images/submit.png',array('type'=>'image', 'div' => false, 'onMouseOver' => 'javascript:this.src="../images/submit_hover.png"', 'onMouseOut' => 'javascript:this.src="../images/submit.png"'));  ?>
				</div>
				<div id="links_left"><?= $this->Html->link('ลืมรหัสผ่าน', array( 'action' => 'forget_pass')); ?></div>
				<div id="links_right">
					<?= $this->Html->link('
					ลงทะเบียน', array( 'action' => 'export_regis')); ?>
				</div>
		</div>
		<div id="wrapperbottom"></div>
		<?= $this->Form->end(); ?>
	</div>