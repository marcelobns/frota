<div class="veiculos view">
<h2><?php echo __('Veiculo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsavel'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['responsavel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Veiculo'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['veiculo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Placa'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['placa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Motorista'); ?></dt>
		<dd>
			<?php echo $this->Html->link($veiculo['Motorista']['id'], array('controller' => 'motoristas', 'action' => 'view', $veiculo['Motorista']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ativo'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['ativo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Veiculo'), array('action' => 'edit', $veiculo['Veiculo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Veiculo'), array('action' => 'delete', $veiculo['Veiculo']['id']), array(), __('Are you sure you want to delete # %s?', $veiculo['Veiculo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Motoristas'), array('controller' => 'motoristas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Motorista'), array('controller' => 'motoristas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Abastecimentos'), array('controller' => 'abastecimentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Abastecimento'), array('controller' => 'abastecimentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Abastecimentos'); ?></h3>
	<?php if (!empty($veiculo['Abastecimento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Veiculo Id'); ?></th>
		<th><?php echo __('Motorista Id'); ?></th>
		<th><?php echo __('Data Abastecimento'); ?></th>
		<th><?php echo __('Combustivel'); ?></th>
		<th><?php echo __('Nquantabast'); ?></th>
		<th><?php echo __('Km Anterior'); ?></th>
		<th><?php echo __('Km Atual'); ?></th>
		<th><?php echo __('Consumo Medio'); ?></th>
		<th><?php echo __('Km Rodado'); ?></th>
		<th><?php echo __('Data Solicitacao'); ?></th>
		<th><?php echo __('Fornecedor Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Observacao'); ?></th>
		<th><?php echo __('Requerimento'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($veiculo['Abastecimento'] as $abastecimento): ?>
		<tr>
			<td><?php echo $abastecimento['id']; ?></td>
			<td><?php echo $abastecimento['veiculo_id']; ?></td>
			<td><?php echo $abastecimento['motorista_id']; ?></td>
			<td><?php echo $abastecimento['data_abastecimento']; ?></td>
			<td><?php echo $abastecimento['combustivel']; ?></td>
			<td><?php echo $abastecimento['nquantabast']; ?></td>
			<td><?php echo $abastecimento['km_anterior']; ?></td>
			<td><?php echo $abastecimento['km_atual']; ?></td>
			<td><?php echo $abastecimento['consumo_medio']; ?></td>
			<td><?php echo $abastecimento['km_rodado']; ?></td>
			<td><?php echo $abastecimento['data_solicitacao']; ?></td>
			<td><?php echo $abastecimento['fornecedor_id']; ?></td>
			<td><?php echo $abastecimento['usuario_id']; ?></td>
			<td><?php echo $abastecimento['observacao']; ?></td>
			<td><?php echo $abastecimento['requerimento']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'abastecimentos', 'action' => 'view', $abastecimento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'abastecimentos', 'action' => 'edit', $abastecimento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'abastecimentos', 'action' => 'delete', $abastecimento['id']), array(), __('Are you sure you want to delete # %s?', $abastecimento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Abastecimento'), array('controller' => 'abastecimentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Servicos'); ?></h3>
	<?php if (!empty($veiculo['Servico'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Veiculo Id'); ?></th>
		<th><?php echo __('Motorista Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Obs'); ?></th>
		<th><?php echo __('Fornecedor Id'); ?></th>
		<th><?php echo __('Requerimento'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($veiculo['Servico'] as $servico): ?>
		<tr>
			<td><?php echo $servico['id']; ?></td>
			<td><?php echo $servico['descricao']; ?></td>
			<td><?php echo $servico['veiculo_id']; ?></td>
			<td><?php echo $servico['motorista_id']; ?></td>
			<td><?php echo $servico['data']; ?></td>
			<td><?php echo $servico['obs']; ?></td>
			<td><?php echo $servico['fornecedor_id']; ?></td>
			<td><?php echo $servico['requerimento']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'servicos', 'action' => 'view', $servico['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'servicos', 'action' => 'edit', $servico['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'servicos', 'action' => 'delete', $servico['id']), array(), __('Are you sure you want to delete # %s?', $servico['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
