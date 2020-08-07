<section id="skills" class="bg-gray-50">
	<div class="relative max-w-xl md:max-w-7xl mx-auto pb-10 px-4 sm:px-8 xl:px-0">
		@foreach($skills as $skillGroup)
			<h3 class="@if(!$loop->first) mt-5 @endif text-lg leading-6 font-medium text-gray-900">
				{{ $skillGroup['title'] }}
			</h3>

			<div class="mt-5 grid grid-cols-2 gap-5 sm:grid-cols-3 md:grid-cols-5">
				@foreach($skillGroup['skills'] as $skill)
					<div class="bg-white overflow-hidden shadow rounded-lg">
						<div class="px-4 py-5 sm:p-6">
							<dl>
								<dt class="text-sm leading-5 font-medium text-gray-500 truncate">
									{{ $skill['years'] }}
								</dt>
								<dd class="mt-1 text-3xl leading-9 font-semibold text-gray-900">
									{{ $skill['label'] }}
								</dd>
							</dl>
						</div>
					</div>
				@endforeach
			</div>
		@endforeach
	</div>
</section>