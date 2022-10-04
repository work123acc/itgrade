<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-<?= $task['id']; ?>">Изменить</button>


<div class="modal" id="modal-edit-<?= $task['id']; ?>">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			
			<div class="modal-header">
				<h4 class="modal-title">Изменить запись <?= $task['id']; ?></h4>
				<button class="close" type="button" data-dismiss="modal">
					<i>×</i>
				</button>
			</div>
			
			<form action="./" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<input name="action" type="hidden" value="1"/>
					<input name="edit" type="hidden" value="<?= $task['id']; ?>"/>
					
					<div class="form-group">
						<p>Название:</p>
						<input name="name" type="text" class="form-control" placeholder="Название" value="<?= $task['name']; ?>" required/>
					</div>
					
					<div class="form-group">
						<p>Адрес:</p>
						<input name="adress" type="text" patteen="^[A-zА-я-_\., ]{1,}[0-9]{1,}[0-9- ]{0,}$" class="form-control" placeholder="Адрес" value="<?= $task['adress']; ?>" required/>
					</div>
					
					
					<div class="form-group">
						<p>Описание:</p>
						<textarea name="description" type="text" class="form-control" placeholder="Описание:" required><?= trim($task['description']); ?></textarea>
						
					</div>
					
					<div class="form-group">
						<p>Цена:</p>
						<input name="price" type="text" class="form-control" placeholder="Цена" value="<?= $task['price']; ?>" required/>
					</div>
					
					<div class="form-group">
						<p>Актуальность:</p>
						<select name="status" class="form-control">
							<option value="0">Нет</option>
							<option value="1" <?if ($task['status'] === '1') { echo 'selected'; }?> >Да</option>
						</select>
					</div>	
					
					
					
					<div class="form-group">
						<input name="image" type="hidden" value="<?= $task['image']; ?>"/>
						<a href="<?= $task['image'] ?>" class="a_fancy" data-fancybox>
							<img src="<?= trim($task['image'] ); ?>" class="img_edit"/>
						</a>
						<hr>
						

						<p>Обновить изображение:</p>
						<input name="update_image" type="file" class="form-control" placeholder="Выберите изображениe" multiple="" accept="image/*"/>
						

					</div>	
					
					
					
				</div>			
				
				<div class="modal-footer">					
					<button type="submit" class="btn btn-primary">Изменить</button>
				</div>
				
			</form>
			
			</div>	
	</div>	
</div>	