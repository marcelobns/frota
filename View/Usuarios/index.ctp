<div class="usuarios index">
	<h2><?php echo __('Usuarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('setor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('cadastro'); ?></th>
			<th><?php echo $this->Paginator->sort('consulta'); ?></th>
			<th><?php echo $this->Paginator->sort('relatorio'); ?></th>
			<th><?php echo $this->Paginator->sort('manutencao'); ?></th>
			<th><?php echo $this->Paginator->sort('emissao'); ?></th>
			<th><?php echo $this->Paginator->sort('solicita_carro'); ?></th>
			<th><?php echo $this->Paginator->sort('autoriza_carro'); ?></th>
			<th><?php echo $this->Paginator->sort('consulta_solicita'); ?></th>
			<th><?php echo $this->Paginator->sort('consulta_autoriza'); ?></th>
			<th><?php echo $this->Paginator->sort('cartucho'); ?></th>
			<th><?php echo $this->Paginator->sort('ativo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?php echo h($usuario['Usuario']['id']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['username']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($usuario['Setor']['id'], array('controller' => 'setors', 'action' => 'view', $usuario['Setor']['id'])); ?>
		</td>
		<td><?php echo h($usuario['Usuario']['password']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['cadastro']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['consulta']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['relatorio']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['manutencao']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['emissao']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['solicita_carro']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['autoriza_carro']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['consulta_solicita']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['consulta_autoriza']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['cartucho']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['ativo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usuario['Usuario']['id']), array(), __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Setors'), array('controller' => 'setors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Setor'), array('controller' => 'setors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Abastecimentos'), array('controller' => 'abastecimentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Abastecimento'), array('controller' => 'abastecimentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
