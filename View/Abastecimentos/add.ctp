<div class="abastecimentos form">
<?php echo $this->Form->create('Abastecimento'); ?>
	<fieldset>
		<legend><?php echo __('Add Abastecimento'); ?></legend>
	<?php
		echo $this->Form->input('veiculo_id');
		echo $this->Form->input('motorista_id');
		echo $this->Form->input('data_abastecimento');
		echo $this->Form->input('combustivel');
		echo $this->Form->input('nquantabast');
		echo $this->Form->input('km_anterior');
		echo $this->Form->input('km_atual');
		echo $this->Form->input('consumo_medio');
		echo $this->Form->input('km_rodado');
		echo $this->Form->input('data_solicitacao');
		echo $this->Form->input('fornecedor_id');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('observacao');
		echo $this->Form->input('requerimento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Abastecimentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Motoristas'), array('controller' => 'motoristas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Motorista'), array('controller' => 'motoristas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fornecedors'), array('controller' => 'fornecedors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fornecedor'), array('controller' => 'fornecedors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
