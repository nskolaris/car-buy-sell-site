<div class="planes index">
	<ul class="tab-menu">
		<li><?php echo $this->Html->link(__('Todos'), array('controller'=>'front_pages', 'action'=>'coming_soon'), array('title'=>'Ver todos los planes de ahorro')); ?></li>
		<li><?php echo $this->Html->link(__('Adjudicados'), array('controller'=>'planesusados', 'action'=>'adjudicados'), array('title'=>'Planes de ahorro automotor adjudicados')); ?></li>
		<li><?php echo $this->Html->link(__('Comenzados'), array('controller'=>'planesusados', 'action'=>'comenzados'), array('title'=>'Planes de ahorro automotor comenzados')); ?></li>
		<li><?php echo $this->Html->link(__('Nuevos'), array('controller'=>'planes', 'action'=>'index'), array('title'=>'Planes de ahorro automotor nuevos', 'class'=>'actual')); ?></li>
	</ul>
	<div class="tab-panel">
		<?php echo $this->element('listado-planes-menu-marcas')?>
		<div class="listado-planes">
			<?php
			foreach ($planes as $plan):
			?>
			<div class="item" style="background-image:url('<?php echo $this->webroot?>img/tuplanya/tmp-imagen-plan.png');">
				<h2><?php echo $this->Html->link($plan['Plan']['denominacion'], array('controller' => 'planes', 'action' => 'ver', $plan['Plan']['id'])); ?></h2>
				<div class="volanta"><?php echo h($plan['Plantipo']['denominacion']); ?></div>
				<p class="descripcion"><?php echo h($plan['Plan']['volanta']); ?></p>
				<div class="pie">
					<div class="precio"><?php echo h( $this->Number->format($plan['Plan']['precio0km'], array('places' => 0,'before' => '$ ','escape' => false,'decimals' => ',','thousands' => '.'))); ?></div>
					<div class="cuota-pura">cuota: <?php echo h($this->Number->format($plan['Plan']['cuotaPura'], array('places' => 0,'before' => '$ ','escape' => false,'decimals' => ',','thousands' => '.'))); ?></div>
				</div>
			</div>
		<?php endforeach; ?>
		<div style="clear:both"></div>
	</div>
	</div>	
	</div>
	<?php echo $this->element('banner-grande')?>

</div>
