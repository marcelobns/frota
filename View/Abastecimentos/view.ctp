<div class="abastecimentos view">
<h2><?php echo __('Abastecimento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($abastecimento['Abastecimento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Veiculo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($abastecimento['Veiculo']['id'], array('controller' => 'veiculos', 'action' => 'view', $abastecimento['Veiculo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Motorista'); ?></dt>
		<dd>
			<?php echo $this->Html->link($abastecimento['Motorista']['id'], array('controller' => 'motoristas', 'action' => 'view', $abastecimento['Motorista']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Abastecimento'); ?></dt>
		<dd>
			<?php echo h($abastecimento['Abastecimento']['data_abastecimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Combustivel'); ?></dt>
		<dd>
			<?php echo h($abastecimento['Abastecimento']['combustivel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nquantabast'); ?></dt>
		<dd>
			<?php echo h($abastecimento['Abastecimento']['nquantabast']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Km Anterior'); ?></dt>
		<dd>
			<?php echo h($abastecimento['Abastecimento']['km_anterior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Km Atual'); ?></dt>
		<dd>
			<?php echo h($abastecimento['Abastecimento']['km_atual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumo Medio'); ?></dt>
		<dd>
			<?php echo h($abastecimento['Abastecimento']['consumo_medio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Km Rodado'); ?></dt>
		<dd>
			<?php echo h($abastecimento['Abastecimento']['km_rodado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Solicitacao'); ?></dt>
		<dd>
			<?php echo h($abastecimento['Abastecimento']['data_solicitacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fornecedor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($abastecimento['Fornecedor']['id'], array('controller' => 'fornecedors', 'action' => 'view', $abastecimento['Fornecedor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($abastecimento['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $abastecimento['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacao'); ?></dt>
		<dd>
			<?php echo h($abastecimento['Abastecimento']['observacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requerimento'); ?></dt>
		<dd>
			<?php echo h($abastecimento['Abastecimento']['requerimento']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Abastecimento'), array('action' => 'edit', $abastecimento['Abastecimento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Abastecimento'), array('action' => 'delete', $abastecimento['Abastecimento']['id']), array(), __('Are you sure you want to delete # %s?', $abastecimento['Abastecimento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Abastecimentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Abastecimento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Veiculos'), array('controller' => 'veiculos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Veiculo'), array('controller' => 'veiculos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Motoristas'), array('controller' => 'motoristas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Motorista'), array('controller' => 'motoristas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fornecedors'), array('controller' => 'fornecedors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fornecedor'), array('controller' => 'fornecedors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
