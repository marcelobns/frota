<div class="veiculos index">
	<h2><?php echo __('Veiculos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('responsavel'); ?></th>
			<th><?php echo $this->Paginator->sort('veiculo'); ?></th>
			<th><?php echo $this->Paginator->sort('placa'); ?></th>
			<th><?php echo $this->Paginator->sort('motorista_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ativo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($veiculos as $veiculo): ?>
	<tr>
		<td><?php echo h($veiculo['Veiculo']['id']); ?>&nbsp;</td>
		<td><?php echo h($veiculo['Veiculo']['responsavel']); ?>&nbsp;</td>
		<td><?php echo h($veiculo['Veiculo']['veiculo']); ?>&nbsp;</td>
		<td><?php echo h($veiculo['Veiculo']['placa']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($veiculo['Motorista']['id'], array('controller' => 'motoristas', 'action' => 'view', $veiculo['Motorista']['id'])); ?>
		</td>
		<td><?php echo h($veiculo['Veiculo']['ativo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $veiculo['Veiculo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $veiculo['Veiculo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $veiculo['Veiculo']['id']), array(), __('Are you sure you want to delete # %s?', $veiculo['Veiculo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Veiculo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Motoristas'), array('controller' => 'motoristas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Motorista'), array('controller' => 'motoristas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Abastecimentos'), array('controller' => 'abastecimentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Abastecimento'), array('controller' => 'abastecimentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
