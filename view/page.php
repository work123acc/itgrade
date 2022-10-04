<table class="table table-condensed text-center">
	<thead>
		<tr class="text-center">
			
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
					if ($task['status'] === '1') {
					?>
					
					<tr class="bg-info">
						<td><?= $task['name'] ?></td>
						<td><?= $task['adress'] ?></td>
						<td><?= $task['description'] ?></td>
						<td><?= number_format($task['price'], 0, '', ' ');  ?></td>
						<td>
							<a href="<?= $task['image'] ?>" class="a_fancy" data-fancybox>
								<img class="img_before" src="<?= $task['image'] ?>"/>
							</a>
						</td>
						
					</tr>
					
					<? 
					} 
				} 
			}
		?>
		
	</tbody>
</table>


<? if ($this->message) { echo "<h4>{$this->message}</h4>"; }	?>