	{{ Form::model($event_setting->configurable, ['route' => ['settingpdf.update', $event_setting->configurable], 'method' => 'put']) }}
	<div class="form-group">
		{{ Form::label('global_observation', 'Observação') }}
		{{ Form::textarea('global_observation', null, ['class' => 'form-control', 'placeholder' => '']) }}
	</div>
	<div class="form-group">
		{{ Form::label('statement_responsibility', 'Termo') }}
		{{ Form::textarea('statement_responsibility', null, ['class' => 'form-control', 'placeholder' => '']) }}
	</div>
	{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
	{{ Form::close() }}		