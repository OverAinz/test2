@inject('img', 'App\Models\Image')

<x-layouts.site.layout>
<x-slot name="title">
	Prueba de formularios
</x-slot>
<x-slot name="main">
	<h1 class="text-7xl text-center text-red-400">this is the main content</h1>
	<div>
		<a class="" href="{{route('formulario')}}">Formulario</a>
	</div>

	<div>		
		@foreach($img->all() as $item)
			<div>
				<img src="{{asset(Storage::url($item->name))}}">
				<li>{{$item->name}}</li>	
			</div>							
		@endforeach		
	</div>
	

</x-slot>
</x-layouts.site.layout>