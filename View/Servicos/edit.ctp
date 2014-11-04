<div class="servicos form">
<?php echo $this->Form->create('Servico'); ?>
	<fieldset>
		<legend><?php echo __('Edit Servico'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('veiculo_id');
		echo $this->Form->input('motorista_id');
		echo $this->Form->input('data');
		echo $this->Form->input('obs');
		echo $this->Form->input('fornecedor_id');
		echo $this->Form->input('requerimento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Servico.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Servico.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Motoristas'), array('controller' => 'motoristas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Motorista'), array('controller' => 'motoristas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fornecedors'), array('controller' => 'fornecedors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fornecedor'), array('controller' => 'fornecedors', 'action' => 'add')); ?> </li>
	</ul>
</div>
