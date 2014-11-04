<div class="nostasfiscais index">
	<h2>Notas Fiscais</h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('fornecedor_id'); ?></th>			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($notas_fiscais as $nota_fiscal): ?>
	<tr>
		<td><?php echo h($nota_fiscal['NotaFiscal']['id']); ?>&nbsp;</td>
		<td><?php echo h($nota_fiscal['NotaFiscal']['numero']); ?>&nbsp;</td>		
		<td>
			<?php echo $this->Html->link($nota_fiscal['Fornecedor']['id'], array('controller' => 'fornecedors', 'action' => 'view', $nota_fiscal['Fornecedor']['id'])); ?>
		</td>		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $nota_fiscal['NotaFiscal']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $nota_fiscal['NotaFiscal']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $nota_fiscal['NotaFiscal']['id']), array(), __('Are you sure you want to delete # %s?', $nota_fiscal['NotaFiscal']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New notaFiscal'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Motoristas'), array('controller' => 'motoristas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Motorista'), array('controller' => 'motoristas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fornecedors'), array('controller' => 'fornecedors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fornecedor'), array('controller' => 'fornecedors', 'action' => 'add')); ?> </li>
	</ul>
</div>
