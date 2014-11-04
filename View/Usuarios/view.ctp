<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Setor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usuario['Setor']['id'], array('controller' => 'setors', 'action' => 'view', $usuario['Setor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cadastro'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['cadastro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consulta'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['consulta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Relatorio'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['relatorio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Manutencao'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['manutencao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emissao'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['emissao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Solicita Carro'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['solicita_carro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Autoriza Carro'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['autoriza_carro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consulta Solicita'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['consulta_solicita']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consulta Autoriza'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['consulta_autoriza']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cartucho'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['cartucho']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ativo'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['ativo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), array(), __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Setors'), array('controller' => 'setors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Setor'), array('controller' => 'setors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Abastecimentos'), array('controller' => 'abastecimentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Abastecimento'), array('controller' => 'abastecimentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Abastecimentos'); ?></h3>
	<?php if (!empty($usuario['Abastecimento'])): ?>
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
	<?php foreach ($usuario['Abastecimento'] as $abastecimento): ?>
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
