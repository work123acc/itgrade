<table class="table table-condensed text-center">
	<thead>
		<tr class="text-center">
			<th>#</th>
			
			<th>Название</th>
			<th>Адрес</th>
			<th>Описание</th>
			
			<th>
				<? if ($_GET['sort'] === 'asc') { ?>
					<a href="./?sort=desc">Цена↑</a>
					<? } elseif ($_GET['sort'] === 'desc'){ ?>
					<a href="./?sort=asc">Цена↓</a>
					<? } else { ?>
					<a href="./?sort=desc">Цена</a>
				<? } ?>
			</th>
			
			
			<th>Актуальность</th>
			<th>Изображение</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>				
		
		<? 
			//add_dump($this->tasksList , 'tasklist' ) ;			
			if ($this->tasksList['tasks']) {
				foreach ($this->tasksList['tasks'] as $task) { 
					$class = '';
					if ($task['status'] === '1') {$class = 'bg-info'; }
					else if ($task['edit'] === '1') {$class = 'bg-success'; }
				?>
				
				<tr class="<?= $class ?>">
					<td><?= $task['id'] ?></td>
					<td><?= $task['name'] ?></td>
					<td><?= $task['adress'] ?></td>
					<td><?= $task['description'] ?></td>
					<td><?= number_format($task['price'], 0, '', ' ');  ?></td>
					<td><?= ($task['status'] === '1') ? '✓' : ''; ?></td>
					<td>
						<a href="<?= $task['image'] ?>" class="a_fancy" data-fancybox>
							<img class="img_before" src="<?= $task['image'] ?>"/>
						</a>
					</td>
					
					<? if ($this->user === 'admin') {  ?>
						<td><? require './view/form_edit.php'; ?></td>
						<td><? require './view/form_delete.php'; ?></td>
					<? } ?>
					
					
				</tr>
				
				<? 
				} 
			}
		?>
		
	</tbody>
</table>


<? if ($this->message) { echo "<h4>{$this->message}</h4>"; }	?>