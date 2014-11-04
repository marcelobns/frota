<div class="servicos view">
<h2><?php echo __('Servico'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Veiculo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($servico['Veiculo']['id'], array('controller' => 'veiculos', 'action' => 'view', $servico['Veiculo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Motorista'); ?></dt>
		<dd>
			<?php echo $this->Html->link($servico['Motorista']['id'], array('controller' => 'motoristas', 'action' => 'view', $servico['Motorista']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Obs'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['obs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fornecedor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($servico['Fornecedor']['id'], array('controller' => 'fornecedors', 'action' => 'view', $servico['Fornecedor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requerimento'); ?></dt>
		<dd>
			<?php echo h($servico['Servico']['requerimento']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Servico'), array('action' => 'edit', $servico['Servico']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Servico'), array('action' => 'delete', $servico['Servico']['id']), array(), __('Are you sure you want to delete # %s?', $servico['Servico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Motoristas'), array('controller' => 'motoristas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Motorista'), array('controller' => 'motoristas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fornecedors'), array('controller' => 'fornecedors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fornecedor'), array('controller' => 'fornecedors', 'action' => 'add')); ?> </li>
	</ul>
</div>
