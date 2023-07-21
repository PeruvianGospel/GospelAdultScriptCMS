<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>VIDEOS PORNOS</title>
</head>

{{-- HEADER --}}
@include('front/layouts/header')
{{-- FIN HEADER --}}

<body>
{{-- CUERPO DE POSTS --}}
<section class="py-3 sm:py-6 bg-gray-200 text-gray-800">
	<div class="container px-6 mx-auto space-y-8">
		<div class="space-y-2 text-center">
			<h1 class="text-3xl font-bold">Keyword principal</h1>
			<p class="font-serif text-sm text-gray-600">Descripcion del nicho adult.</p>
		</div>
		<div class="grid grid-cols-1 gap-x-2 gap-y-2 sm:grid-cols-2 md:grid-cols-3 videolist lg:grid-cols-4">
			 @for ($i = 0; $i < 20; $i++)
       <article class="flex flex-col rounded bg-gray-100">

				<a href="#" title="Titulo">
					<img alt="Titutlo" class="thumb object-cover w-full h-52 bg-gray-500" src="https://source.unsplash.com/200x200/?love?{{ $i }}">
				
	 
				<div class="flex flex-col flex-1 px-2 text-center">
				<p class="flex-1 py-1 text-lg font-semibold text-black   leadi">Titulo del video {{ $i }}</p>
					<div class=" justify- space-x-2 text-s text-gray-600">
						<span >Mia Khalifa, Phonix Carolina</span>
				
    
					</div>
				</div>
        </a>
			 </article> 
       @endfor
		</div>
	</div>
</section>
{{-- FIN DE CUERPO DE POSTS --}}
</body>

{{-- PAGINATION --}}
@include('front/layouts/pagination')

{{-- FOOTER  --}}
@include('front/layouts/footer')



</html>