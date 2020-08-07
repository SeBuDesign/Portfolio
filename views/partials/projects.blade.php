<section id="projects">
	<div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
		<div class="absolute inset-0">
			<div class="bg-white h-1/3 sm:h-2/3"></div>
		</div>
		<div class="relative max-w-7xl mx-auto">
			<div class="text-center">
				<h2 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
					Projects of Sven
				</h2>
				<p class="mt-3 max-w-2xl mx-auto text-xl leading-7 text-gray-500 sm:mt-4">
					See where I have worked on and what experience I gained during the projects.
				</p>
			</div>
			<div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
				@foreach($projects as $project)
					<div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
						<div class="flex-shrink-0">
							<img class="h-48 w-full object-cover object-top" src="{{ $project['images']['1x'] }}" srcset="{{ $project['images']['1x'] }} 1x, {{ $project['images']['2x'] }} 2x" alt="{{ $project['title'] }}">
						</div>
						<div class="flex-1 bg-white p-6 flex flex-col justify-between">
							<div class="flex-1">
								<p class="text-sm leading-5 font-medium text-orange-500">
									{{ $project['category'] }}
								</p>
								<div>
									<h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
										{{ $project['title'] }}
									</h3>
									<p class="mt-3 text-base leading-6 text-gray-500">
										{{ $project['description'] }}
									</p>
								</div>
							</div>
							<div class="mt-6 flex items-center">
								<p class="text-sm leading-5 text-gray-500">{{ $project['date'] }}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>			  
</section>