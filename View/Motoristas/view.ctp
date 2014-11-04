<div class="motoristas view">
<h2><?php echo __('Motorista'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($motorista['Motorista']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($motorista['Motorista']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ativo'); ?></dt>
		<dd>
			<?php echo h($motorista['Motorista']['ativo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Motorista'), array('action' => 'edit', $motorista['Motorista']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Motorista'), array('action' => 'delete', $motorista['Motorista']['id']), array(), __('Are you sure you want to delete # %s?', $motorista['Motorista']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Motoristas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Motorista'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Abastecimentos'), array('controller' => 'abastecimentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Abastecimento'), array('controller' => 'abastecimentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos'), array('controller' => 'servicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico'), array('controller' => 'servicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Abastecimentos'); ?></h3>
	<?php if (!empty($motorista['Abastecimento'])): ?>
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
	<?php foreach ($motorista['Abastecimento'] as $abastecimento): ?>
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
	<?php if (!empty($motorista['Servico'])): ?>
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
	<?php foreach ($motorista['Servico'] as $servico): ?>
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
<div class="related">
	<h3><?php echo __('Related Veiculos'); ?></h3>
	<?php if (!empty($motorista['Veiculo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Responsavel'); ?></th>
		<th><?php echo __('Veiculo'); ?></th>
		<th><?php echo __('Placa'); ?></th>
		<th><?php echo __('Motorista Id'); ?></th>
		<th><?php echo __('Ativo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($motorista['Veiculo'] as $veiculo): ?>
		<tr>
			<td><?php echo $veiculo['id']; ?></td>
			<td><?php echo $veiculo['responsavel']; ?></td>
			<td><?php echo $veiculo['veiculo']; ?></td>
			<td><?php echo $veiculo['placa']; ?></td>
			<td><?php echo $veiculo['motorista_id']; ?></td>
			<td><?php echo $veiculo['ativo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'veiculos', 'action' => 'view', $veiculo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'veiculos', 'action' => 'edit', $veiculo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'veiculos', 'action' => 'delete', $veiculo['id']), array(), __('Are you sure you want to delete # %s?', $veiculo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
