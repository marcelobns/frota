<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Add Usuario'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('setor_id');
		echo $this->Form->input('password');
		echo $this->Form->input('cadastro');
		echo $this->Form->input('consulta');
		echo $this->Form->input('relatorio');
		echo $this->Form->input('manutencao');
		echo $this->Form->input('emissao');
		echo $this->Form->input('solicita_carro');
		echo $this->Form->input('autoriza_carro');
		echo $this->Form->input('consulta_solicita');
		echo $this->Form->input('consulta_autoriza');
		echo $this->Form->input('cartucho');
		echo $this->Form->input('ativo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Setors'), array('controller' => 'setors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Setor'), array('controller' => 'setors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Abastecimentos'), array('controller' => 'abastecimentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Abastecimento'), array('controller' => 'abastecimentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
