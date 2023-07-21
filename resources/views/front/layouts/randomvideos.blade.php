<div class="titulo col-span-4">
	<h3 class="font-bold text-3xl underline mb-2">Trending videos 🔥</h3>
</div>
<div class="grid grid-cols-2 gap-x-2 gap-y-2 sm:grid-cols-4 md:grid-cols-4 videolist lg:grid-cols-5 mb-10">
			 @for ($i = 0; $i < 15; $i++)
       <article class="flex flex-col rounded ">
				<a href="/video/Mia-khaslifa-1232" title="Titulo">
					<img alt="Titutlo" class="thumb object-cover w-full h-52 bg-gray-500" src="https://source.unsplash.com/200x200/?love?{{ $i }}">
				
	 
				<div class="flex flex-col flex-1 px-2 sm:text-center">
				<p class="flex-1 py-1 text-lg font-semibold text-black   leadi">Titulo del video {{ $i }}</p>
					<div class=" justify- space-x-2 text-xs sm:text-s text-gray-600">
						<span >Mia Khalifa, Phonix Carolina</span>
				
    
					</div>
				</div>
        </a>
			 </article> 
       @endfor
		</div>