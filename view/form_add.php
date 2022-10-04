<br>
<div class="col-md-6">
	<button type="button" class="btn btn-primary head_buttons11" data-toggle="modal" data-target="#modal-add">Добавить запись</button>
</div>

<div class="modal" id="modal-add">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			
			<div class="modal-header">
				<h4 class="modal-title">Добавить задачу</h4>
				<button class="close" type="button" data-dismiss="modal">
					<i>×</i>
				</button>
			</div>
			
			
			<form action="./" method="post" enctype="multipart/form-data">
				<div class="modal-body">										
					<input name="action" type="hidden" value="1"/>
					<input name="add" type="hidden" value="1"/>
					
	
					
					<div class="form-group">
						<p>Название:</p>
						<input name="name" type="text" class="form-control" placeholder="Название" value="" required/>
					</div>
					
					<div class="form-group">
						<p>Адрес:</p>
						<input name="adress" type="text" patteen="^[A-zА-я-_\., ]{1,}[0-9]{1,}[0-9- ]{0,}$" class="form-control" placeholder="Адрес" value="" required/>
					</div>
					
					
					<div class="form-group">
						<p>Описание:</p>
						<textarea name="description" type="text" class="form-control" placeholder="Описание:" required></textarea>
						
					</div>
					
					<div class="form-group">
						<p>Цена:</p>
						<input name="price" type="text" class="form-control" placeholder="Цена" value="" required/>
					</div>
					
					<div class="form-group">
						<p>Актуальность:</p>
						<select name="status" class="form-control">
							<option value="0">Нет</option>
							<option value="1">Да</option>
						</select>
					</div>	
					
					<div class="form-group">
						<p>Изображение:</p>
						<input name="image" type="file" class="form-control" placeholder="Выберите изображениe" multiple="" accept="image/*" required/>
					</div>
					
					
					
					
					
					
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Добавить</button>
					</div>
					
				</div>
			</form>
		</div>
	</div>	
</div>	


<br>