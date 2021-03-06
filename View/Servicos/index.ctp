<div class="servicos index">
	<h2><?php echo __('Servicos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('veiculo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('motorista_id'); ?></th>
			<th><?php echo $this->Paginator->sort('data'); ?></th>
			<th><?php echo $this->Paginator->sort('obs'); ?></th>
			<th><?php echo $this->Paginator->sort('fornecedor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('requerimento'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($servicos as $servico): ?>
	<tr>
		<td><?php echo h($servico['Servico']['id']); ?>&nbsp;</td>
		<td><?php echo h($servico['Servico']['descricao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($servico['Veiculo']['id'], array('controller' => 'veiculos', 'action' => 'view', $servico['Veiculo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($servico['Motorista']['id'], array('controller' => 'motoristas', 'action' => 'view', $servico['Motorista']['id'])); ?>
		</td>
		<td><?php echo h($servico['Servico']['data']); ?>&nbsp;</td>
		<td><?php echo h($servico['Servico']['obs']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($servico['Fornecedor']['id'], array('controller' => 'fornecedors', 'action' => 'view', $servico['Fornecedor']['id'])); ?>
		</td>
		<td><?php echo h($servico['Servico']['requerimento']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $servico['Servico']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $servico['Servico']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $servico['Servico']['id']), array(), __('Are you sure you want to delete # %s?', $servico['Servico']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Servico'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Motoristas'), array('controller' => 'motoristas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Motorista'), array('controller' => 'motoristas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fornecedors'), array('controller' => 'fornecedors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fornecedor'), array('controller' => 'fornecedors', 'action' => 'add')); ?> </li>
	</ul>
</div>
