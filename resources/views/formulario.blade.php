<x-layouts.site.layout>
	<x-slot name='title'>
		Formulario...
	</x-slot>
	<x-slot name='main'>
		<div>
			<a href="{{route('inicio')}}">Back</a>
		</div>

		<form method="POST" action="{{route('upload')}}" role="form" enctype="multipart/form-data">
 			@csrf

			<div>
				<label>This the camp to put the name</label>	
			</div>
			<div>
				<input id="imagen" name="imagen" type="file">	
			</div>
			<div>
				<button type="submit">Guardar</button>
			</div>
			
		</form>
	</x-slot>
</x-layout.site.layout>