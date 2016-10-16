
<section id="contact">
	<div class="col-md-12">
		<div class="row">
			<div class="text-center">
			<?php if($this->context->getVarValue('emailAddress')<>""):?>
			<?php if($this->context->getVarValue('headline')):?>	
				<h3><?=$this->context->getVarValue('headline');?></h3><?php endif; ?>
				<p>Get in touch with us by filling <strong>contact form below.</p>
				<?php if($this->context->getVarValue('name') && $this->context->getVarValue('email')&& $this->context->getVarValue('message')):?>
				<?php if($this->context->getVarValue('mailerResponse')=="success"):?>
					<div class="alert alert-success"><?=$this->context->getVarValue('sendSuccess');?></div>
                <?php else:?>
					<div class="alert alert-danger"><?=$this->context->getVarValue('mailerResponse');?></div>
				<?php endif; ?>
			<?php endif; ?>
			</div>
			<form id="contactform" class="form-horizontal" role="form" method="post" action="">
			<input type="hidden" name="_csrf" value="<?=$this->context->getVarValue('csrf');?>" />
				<div class="col-md-6">
					<input class="form-control" placeholder="<?=$this->context->getVarValue('namePlaceholder');?>" type="text" value="<?php if($this->context->getVarValue('mailerResponse')!= "success") echo $this->context->getVarValue('name');?>">
					<?php if($this->context->getVarValue('nameErrorFlag')):?><p class="text-danger"><?=$this->context->getVarValue('nameError');?></p><?php endif; ?>
				</div>
				<div class="col-md-6">
					<input class="form-control" placeholder="<?=$this->context->getVarValue('emailPlaceholder');?>" type="email" value="<?php if($this->context->getVarValue('mailerResponse')!= "success") echo $this->context->getVarValue('email');?>">
					<?php if($this->context->getVarValue('emailErrorFlag')):?><p class="text-danger"><?=$this->context->getVarValue('emailError');?></p><?php endif; ?>
				</div>
				<div class="col-md-12">
					<input class="form-control" placeholder="<?=$this->context->getVarValue('subjectPlaceholder');?>" type="text" value="<?php if($this->context->getVarValue('mailerResponse')!= "success") echo $this->context->getVarValue('subject');?>">
					<?php if($this->context->getVarValue('emailErrorFlag')):?><p class="text-danger"><?=$this->context->getVarValue('subjectError');?></p><?php endif; ?>
				</div>
				<div class="col-md-12">
					<textarea class="form-control" rows="6" placeholder="Message"><?php if($this->context->getVarValue('mailerResponse')!= "success") echo $this->context->getVarValue('message');?></textarea>
					<?php if($this->context->getVarValue('messageErrorFlag')):?><p class="text-danger"><?=$this->context->getVarValue('messageError');?></p><?php endif; ?>
				</div>
				<div class="col-md-12">
					<input value="<?=$this->context->getVarValue('sendLabel');?>" class="form-control" type="submit">
				</div>
			</form>
		<?php endif; ?>
		</div>
	</div>
</section>