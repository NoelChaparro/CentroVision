@extends('layouts.base')
@section('titulo')  
    Centro de Visión
@endsection

@section('DatosPaciente')
	
		{{ Form::open(array('action' => 'ExpedientePacienteController@guardarExpediente','class' => 'form-horizontal frmExpedientePaciente')) }}
		<!-- Datos Generales -->
		<div class="tab-pane" id="Datos_Generales">
			
			<fieldset>
				<!-- Form Name -->
				<legend>Registrar Paciente</legend>
					<!-- Text input-->
					<div class="control-group">
					  {{ Form::label('nombre', 'Nombre:', array('class' => 'control-label')) }}
					  <div class="controls">
					    {{ Form::text('nombre','',array('class' => 'input-xlarge')) }}
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="control-group">
					  {{ Form::label('domicilio', 'Domicilio:', array('class' => 'control-label')) }}
					  <div class="controls">
					    {{ Form::text('domicilio','',array('class' => 'input-xlarge')) }}
					  </div>
					</div>
								
					<!-- Text input-->
					<div class="control-group">
					  {{ Form::label('colonia', 'Colonia:', array('class' => 'control-label')) }}
					  <div class="controls">
					    {{ Form::text('colonia','',array('class' => 'input-xlarge')) }}				
					  </div>
					</div>				

					<!-- Text input-->
					<div class="control-group">
					  {{ Form::label('ciudad', 'Ciudad:', array('class' => 'control-label')) }}
					  <div class="controls">
					    {{ Form::text('ciudad','',array('class' => 'input-xlarge')) }}
					  </div>
					</div>

					<!-- Text input-->
					<div class="control-group">
					  {{ Form::label('fechanacimiento', 'Fecha de Nacimiento:',array('class' => 'control-label', 'for' => 'date01')) }}
					  <div class="controls">
					  	{{ Form::text('fechanacimiento','',array('class' => 'input-small datepicker', 'id' => 'date01', 'placeholder' => 'DD/MM/YYYY')) }}
					  </div>
					</div>

					<!-- Multiple Radios (inline) -->
					<div class="control-group">
					  {{ Form::label('sexo', 'Sexo:', array('class' => 'control-label')) }}
					  <div class="controls">
					    <label class="radio inline">
					      <input type="radio" name="Sexo" value="M" checked="checked">
					      Masculino
					    </label>
					    <label class="radio inline">
					      <input type="radio" name="Sexo" value="F">
					      Femenino
					    </label>
					  </div>
					</div>

					<!-- Text input-->
					<div class="control-group">
					  {{ Form::label('ocupacion', 'Ocupación:', array('class' => 'control-label')) }}
					  <div class="controls">
					    {{ Form::text('ocupacion','',array('class' => 'input-xlarge')) }}
					  </div>
					</div>				
									
					<!-- Text input-->
					<div class="control-group">
					  {{ Form::label('telefono', 'Telefono:', array('class' => 'control-label')) }}
					  <div class="controls">
					    {{ Form::text('telefono','',array('class' => 'input-medium')) }}
					  </div>
					</div>					
			
					<!-- Text input-->
					<div class="control-group">
					  {{ Form::label('referencia', 'Referencia:', array('class' => 'control-label')) }}
					  <div class="controls">
					    {{ Form::text('referencia','',array('class' => 'input-xlarge')) }}
					  </div>
					</div>					
					

				
    	<!-- Fin Datos Generales -->
		</div>
		<div class="tab-pane" id="Padecimientos"> 
			<!-- Padecimiento -->
			<fieldset>
				<legend>Padecimiento</legend>

				<!-- Textarea -->
				<div class="control-group">
				  {{ Form::label('sintomatologia', 'Sintomatología:', array('class' => 'control-label')) }}
				  <div class="controls">                     
				    {{ Form::textarea('sintomatologia','',array('class' => 'span6')) }}
				  </div>
				</div>

				<!-- Textarea -->
				<div class="control-group">
				  {{ Form::label('antecedentes', 'Antecedentes:', array('class' => 'control-label')) }}
				  <div class="controls">
				  	{{ Form::textarea('antecedentes','',array('class' => 'span6')) }}
				</textarea>
				  </div>
				</div>
			</fieldset>
			<!-- Fin de Padecimiento -->								
		</div>




		<div class="tab-pane" id="Agudeza_Visual">
			<!-- Agudeza Visual -->
			

			<!-- Form Name -->
			<legend>Agudeza Visual</legend>
			<!-- Text input-->
			<div class="control-group">
			  {{ Form::label('AVSCOD', 'AVSCOD:', array('class' => 'control-label')) }}
			  <div class="controls">
			  	{{ Form::text('AVSCOD','',array('class' => 'input-medium')) }}
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  {{ Form::label('CCD', 'CCD:', array('class' => 'control-label')) }}
			  <div class="controls">
			  	{{ Form::text('CCD','',array('class' => 'input-medium')) }}
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  {{ Form::label('PuntoD', '(.):', array('class' => 'control-label')) }}
			  <div class="controls">
			  	{{ Form::text('PuntoD','',array('class' => 'input-medium')) }}
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  {{ Form::label('AVSCOI', 'AVSCOI:', array('class' => 'control-label')) }}
			  <div class="controls">
			  	{{ Form::text('AVSCOI','',array('class' => 'input-medium')) }}
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  {{ Form::label('CCI', 'CCI:', array('class' => 'control-label')) }}
			  <div class="controls">
			  	{{ Form::text('CCI','',array('class' => 'input-medium')) }}
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  {{ Form::label('PuntoI', '(.):', array('class' => 'control-label')) }}
			  <div class="controls">
			  	{{ Form::text('PuntoI','',array('class' => 'input-medium')) }}
			    
			  </div>
			</div>


			<!-- Form Name -->
			<h3>Tonometría</h3>

			<!-- Text input-->
			<div class="control-group">
   			  {{ Form::label('TonometriaD5', '5.5:', array('class' => 'control-label')) }}
			  <div class="controls">
			  	{{ Form::text('TonometriaD5','',array('class' => 'input-medium')) }}
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
 			  {{ Form::label('TonometriaD10', '10.0:', array('class' => 'control-label')) }}
			  <div class="controls">
			  	{{ Form::text('TonometriaD10','',array('class' => 'input-medium')) }}
			    
			  </div>
			</div>

			<!-- Textarea -->
			<div class="control-group">
			  {{ Form::label('ParpadoD', 'Parpados, Aparato Lagrimal:', array('class' => 'control-label')) }}
			  <div class="controls">
			  	{{ Form::textarea('ParpadoD','',array('class' => 'span6')) }}

			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  {{ Form::label('TonometriaI5', '5.5:', array('class' => 'control-label')) }}
			  <div class="controls">
			  	{{ Form::text('TonometriaI5','',array('class' => 'input-medium')) }}
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  {{ Form::label('TonometriaI10', '10.0:', array('class' => 'control-label')) }}
			  <div class="controls">
			  	{{ Form::text('TonometriaI10','',array('class' => 'input-medium')) }}
			    
			  </div>
			</div>

			<!-- Textarea -->
			<div class="control-group">
		      {{ Form::label('ParpadoI', 'Parpados, Aparato Lagrimal:', array('class' => 'control-label')) }}
			  <div class="controls"> 
			    {{ Form::textarea('ParpadoI','',array('class' => 'span6')) }}                    

			  </div>
			</div>

		<!-- Fin Agudeza Visual -->
		</div>






		<div class="tab-pane" id="Biomicroscopia">
			<!-- biomicroscopia -->		
			<legend>Biomicroscopía</legend>

			<!-- Textarea -->
			<div class="control-group">
			  {{ Form::label('ConjuntivaD', 'ConjuntivaD: ', array ('class' => 'control-label')) }}
			  <div class="controls">
			  	{{ Form::textarea('ConjuntivaD','',array('class' => 'span6')) }}
			  </div>
			</div>

			<!-- Textarea -->
			<div class="control-group">
			  {{ Form::label('CorneaD', 'CorneaD: ', array ('class' => 'control-label')) }}
			  <div class="controls">
			  	{{ Form::textarea('CorneaD','',array('class' => 'span6')) }}
			  </div>
			</div>

			<!-- Textarea -->
			<div class="control-group">
			  {{ Form::label('BUTD', 'BUTD: ', array ('class' => 'control-label')) }}
			  <div class="controls">
			    {{ Form::text('BUTD','',array('class' => 'input-medium')) }}
			    Seg.                
			  </div>
			</div>


			<!-- Textarea -->
			<div class="control-group">
			  {{ Form::label('ConjuntivaI', 'ConjuntivaI: ', array ('class' => 'control-label')) }}
			  <div class="controls">
			  	{{ Form::textarea('ConjuntivaI','',array('class' => 'span6')) }}
			  </div>
			</div>

			<!-- Textarea -->
			<div class="control-group">
			  {{ Form::label('CorneaI', 'CorneaI: ', array ('class' => 'control-label')) }}
			  <div class="controls">
			  	{{ Form::textarea('CorneaI','',array('class' => 'span6')) }}
			  </div>
			</div>

			<!-- Textarea -->
			<div class="control-group">
			  {{ Form::label('BUTI', 'BUTI: ', array ('class' => 'control-label')) }}
			  <div class="controls">
			    {{ Form::text('BUTI','',array('class' => 'input-medium')) }}
			    Seg.                
			  </div>
			</div>

			<!-- Fin de biomicroscopia -->
		</div>


		<!-- Iris -->		
		<legend>Iris</legend>
		<div class="control-group">
			{{ Form::label('IrisPupilasD', 'Iris, Pupilas: ', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::textarea('IrisPupilasD','',array('class' => 'span6')) }}
			</div>
		</div>			

		<div class="control-group">
			{{ Form::label('CristalinoD', 'Cristalino: ', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::textarea('CristalinoD','',array('class' => 'span6')) }}
			</div>
		</div>

		<div class="control-group">
			{{ Form::label('IrisPupilasI', 'Iris, Pupilas: ', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::textarea('IrisPupilasI','',array('class' => 'span6')) }}			
			</div>
		</div>

		<div class="control-group">
			{{ Form::label('CristalinoI', 'Cristalino: ', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::textarea('CristalinoI','',array('class' => 'span6')) }}
			</div>
		</div>
		<!-- Fin Iris -->


		<!-- Fondo -->
		<legend>Fondo</legend>
		<div class="control-group">
			{{ Form::label('PapilaD', 'Papila: ', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::textarea('PapilaD','',array('class' => 'span6')) }}
			</div>
		</div>

		<div class="control-group">
			{{ Form::label('MaculaD', 'Mácula: ', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::textarea('MaculaD','',array('class' => 'span6')) }}
			</div>
		</div>

		<div class="control-group">
			{{ Form::label('PapilaI', 'Papila: ', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::textarea('PapilaI','',array('class' => 'span6')) }}
			</div>
		</div>

		<div class="control-group">
			{{ Form::label('MaculaI', 'Mácula: ', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::textarea('MaculaI','',array('class' => 'span6')) }}
			</div>
		</div>
		<!-- Fin Fondo -->

		<!-- Retina -->
		<legend>Retina</legend>
		<div class="control-group">
			{{ Form::label('VasosD', 'Vasos: ', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::textarea('VasosD','',array('class' => 'span6')) }}
			</div>
		</div>

		<div class="control-group">
			{{ Form::label('RetinaPerifericaD', 'Retina Periférica: ', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::textarea('RetinaPerifericaD','',array('class' => 'span6')) }}
			</div>
		</div>


		<div class="control-group">
			{{ Form::label('VasosI', 'Vasos: ', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::textarea('VasosI','',array('class' => 'span6')) }}
			</div>
		</div>

		<div class="control-group">
			{{ Form::label('RetinaPerifericaI', 'Retina Periférica: ', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::textarea('RetinaPerifericaI','',array('class' => 'span6')) }}
			</div>
		</div>


		<!-- Fin Retina -->

		<!-- Button -->
		<div class="control-group">
		  <label class="control-label"></label>
		  <div class="controls">
		    <input value="Guardar" class="btn btn-large btn-primary" type="submit">
		    <input value="Cancelar" class="btn btn-large btn-primary" type="button">
		  </div>
		</div>

	{{ Form::close() }}
@endsection


@section('Javascript')
	<script src="js/ExpedientePaciente.js"></script>
@endsection