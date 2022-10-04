<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-<?= $task['id']; ?><?= $task['id']; ?>">Удалить</button>

<div class="modal" id="modal-delete-<?= $task['id']; ?><?= $task['id']; ?>">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			
			<div class="modal-header">
				<h4 class="modal-title">Удалить запись <?= $task['id']; ?></h4>
				<button class="close" type="button" data-dismiss="modal">
					<i>×</i>
				</button>
			</div>
			
			<form action="./" method="post">
				<div class="modal-body">
					<input name="action" type="hidden" value="1"/>
					<input name="delete" type="hidden" value="<?= $task['id']; ?>"/>
					
					<div class="form-group">
						<p> Желаете удалить данную задачу, созданную <?= $task['user']; ?>? </p>
						<p> <?= $task['task']; ?> </p>
					</div>
				</div>			
				
				<div class="modal-footer">					
					<button type="submit" class="btn btn-danger">Удалить</button>
				</div>
				
			</form>
			
		</div>	
	</div>	
</div>	