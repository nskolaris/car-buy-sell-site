<div class="users form">
    <h2><?php __('Agregar Administrador'); ?></h2>
    <?php echo $this->Form->create('Admin');?>
    <fieldset>
	<table>
		<?php
			echo '<tr class="rows">';
				echo '<td colspan="2" class="cell cell_1">';
					echo $this->Form->input('username', array('label'=>'Nombre de usuario'));
					echo '&nbsp;';
				echo '</td>';
			echo '</tr>';
			
			echo '<tr class="rows">';
				echo '<td colspan="2" class="cell cell_1">';
					echo $this->Form->input('password-sincodificar', array('label'=>'Clave'));
					echo '&nbsp;';
				echo '</td>';
			echo '</tr>';
			
			echo '<tr class="rows">';
				echo '<td colspan="2" class="cell cell_1">';
					echo $this->Form->input('nombre', array('label'=>'Nombre'));
					echo '&nbsp;';
				echo '</td>';
			echo '</tr>';
			
			echo '<tr class="rows">';
				echo '<td colspan="2" class="cell cell_1">';
					echo $this->Form->input('apellido', array('label'=>'Apellido'));
					echo '&nbsp;';
				echo '</td>';
			echo '</tr>';
			
			echo '<tr class="rows">';
				echo '<td colspan="2" class="cell cell_1">';
					echo $this->Form->input('email');
					echo '&nbsp;';
				echo '</td>';
			echo '</tr>';
			
			echo '<tr class="rows">';
				echo '<td colspan="2" class="cell cell_1">';
					echo $this->Form->input('habilitado');
					echo '&nbsp;';
				echo '</td>';
			echo '</tr>';
						
		?>
	</table>
    </fieldset>
    <?php echo $this->Form->end('Crear');?>
</div>
