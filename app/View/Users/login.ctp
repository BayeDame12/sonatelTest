<?= $this->Html->css('login') ?>
<?= $this->Form->create('User', array('class' => 'card-body cardbody-color form1')); ?>
<div class="row">
	<div class="col-md-6 offset-md-3 container-fluid ca">
		<h2 class="text-center text-dark mt-5">Login Form</h2>

		<div class="card my-5">
			<div class="text-center">
				<img src="https://www.au-senegal.com/local/cache-gd2/d9/068b52749f47422ba622ac232f9210.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3 img"  alt="profile">
			</div>
			<div class="mb-3">
				<?= $this->Form->input('email', array('label' => '', 'class' => 'form-control ','id'=>'email', 'placeholder' => 'Entrer votre email')); ?>
			</div>
			<div class="mb-3">
				<?= $this->Form->input('password', array('label' => '', 'class' => 'form-control ','id'=>'password', 'placeholder' => 'Entrer votre mot de passe')); ?>
			</div>
			<div class="text-center">
				<?= $this->Form->submit('Login', array('class' => 'btn btn-login px-5 mb-5 w-100 ','id'=>'sub')) ?>
			</div>
			<div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
				Registered? <a href="register" class="text-dark fw-bold"><?= $this->Html->link('Create an
                                          Account', array('controller' => 'users', 'action' => 'register')); ?></a>
			</div>
			<?= $this->Form->end(); ?>
		</div>
	</div>
</div>
<?= $this->Html->script('control') ?>
