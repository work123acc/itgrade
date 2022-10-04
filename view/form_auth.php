<button type="button" class="btn btn-primary head_buttons" data-toggle="modal" data-target="#modal-auth">Войти</button>

<div class="modal" id="modal-auth">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			
			<div class="modal-header">
				<h4 class="modal-title">Авторизация</h4>
				<button class="close" type="button" data-dismiss="modal">
					<i>×</i>
				</button>
			</div>
			
			<form action="./" method="post">
				<div class="modal-body">
					<div class="form-group">
						<p>Логин:</p>
						<input name="login" type="text" class="form-control" placeholder="Логин" value="" required/>
					</div>
					<div class="form-group">
						<p>Пароль:</p>
						<input name="password" type="password" class="form-control" placeholder="Пароль" value="" required/>		
					</div>
				</div>			
				
				<div class="modal-footer">
					
					<button type="submit" class="btn btn-primary">Войти</button>
					
					<button class="btn btn-danger" type="button" data-dismiss="modal">Отмена</button>
				</div>
				
			</form>
			
		</div>	
	</div>	
</div>	



