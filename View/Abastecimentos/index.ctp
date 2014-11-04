<div class="abastecimentos index">
	<h2><?php echo __('Abastecimentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th>#</th>
		<th><?php echo $this->Paginator->sort('data_abastecimento'); ?></th>
		<th><?php echo $this->Paginator->sort('veiculo_id'); ?></th>
		<th><?php echo $this->Paginator->sort('motorista_id'); ?></th>
		<th><?php echo $this->Paginator->sort('combustivel_id'); ?></th>
		<th><?php echo $this->Paginator->sort('km_atual'); ?></th>
		<th><?php echo $this->Paginator->sort('consumo_medio'); ?></th>
		<th><?php echo $this->Paginator->sort('km_rodado'); ?></th>
		<th><?php echo $this->Paginator->sort('data_solicitacao'); ?></th>
		<th><?php echo $this->Paginator->sort('fornecedor_id'); ?></th>
		<th><?php echo $this->Paginator->sort('requerimento'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($abastecimentos as $abastecimento): ?>
	<tr>
		<td><?php echo h($abastecimento['Abastecimento']['id']); ?>&nbsp;</td>
		<td><?php echo h($abastecimento['Abastecimento']['data_abastecimento']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($abastecimento['Veiculo']['id'], array('controller' => 'veiculos', 'action' => 'view', $abastecimento['Veiculo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($abastecimento['Motorista']['id'], array('controller' => 'motoristas', 'action' => 'view', $abastecimento['Motorista']['id'])); ?>
		</td>
		<td><?php echo h($abastecimento['Abastecimento']['combustivel_id']); ?>&nbsp;</td>
		<td><?php echo h($abastecimento['Abastecimento']['km_atual']); ?>&nbsp;</td>
		<td><?php echo h($abastecimento['Abastecimento']['consumo_medio']); ?>&nbsp;</td>
		<td><?php echo h($abastecimento['Abastecimento']['km_rodado']); ?>&nbsp;</td>
		<td><?php echo h($abastecimento['Abastecimento']['data_solicitacao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($abastecimento['Fornecedor']['id'], array('controller' => 'fornecedors', 'action' => 'view', $abastecimento['Fornecedor']['id'])); ?>
		</td>
		<td><?php echo h($abastecimento['Abastecimento']['requerimento']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $abastecimento['Abastecimento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $abastecimento['Abastecimento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $abastecimento['Abastecimento']['id']), array(), __('Are you sure you want to delete # %s?', $abastecimento['Abastecimento']['id'])); ?>
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