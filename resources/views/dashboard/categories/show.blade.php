<x-layouts.app>
    <div class="max-w-4xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
            <div>
                <h1 class="text-3xl font-bold text-white tracking-tight">Category Details</h1>
                <p class="mt-1 text-gray-400">Viewing information for "{{ $category->name }}"</p>
            </div>
            <div class="flex gap-3">
                <a href="{{ route('dashboard.category.edit', $category->id) }}"
                    class="inline-flex items-center justify-center gap-2 px-4 py-2 bg-amber-600 hover:bg-amber-700 rounded-lg text-white font-medium transition-colors shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                    </svg>
                    <span>Edit</span>
                </a>
                <a href="{{ route('dashboard.category.index') }}"
                    class="inline-flex items-center justify-center gap-2 px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded-lg text-white font-medium transition-colors shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    <span>Back</span>
                </a>
            </div>
        </div>

        <div class="bg-gray-800 rounded-xl shadow-2xl overflow-hidden border border-gray-700">
            <div class="flex flex-col md:flex-row">
                <!-- Image Section -->
                <div class="md:w-2/5 bg-gray-900 flex items-center justify-center p-6">
                    <div class="w-full h-full flex items-center justify-center">
                        @if($category->image)
                            <div class="relative rounded-lg overflow-hidden shadow-2xl bg-gradient-to-b from-blue-600 to-blue-800 p-1">
                                <img src="{{ $category->image }}" alt="{{ $category->name }}" class="w-full h-auto object-cover rounded shadow">
                            </div>
                        @else
                            <div class="w-full aspect-square max-w-xs bg-gray-700 rounded-lg flex flex-col items-center justify-center p-8">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-gray-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="text-gray-400 text-center">No Image Available</span>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Content Section -->
                <div class="md:w-3/5 p-6 sm:p-8">
                    <div class="space-y-6">
                        <!-- Category Info -->
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <div class="h-8 w-2 bg-blue-500 rounded-full"></div>
                                <h2 class="text-2xl font-bold text-white">{{ $category->name }}</h2>
                            </div>
                            <div class="flex items-center ml-4 text-gray-400 text-sm">
                                <span class="bg-gray-700 px-3 py-1 rounded-full">{{ $category->slug }}</span>
                            </div>
                        </div>

                        <!-- Metadata -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 bg-gray-750 rounded-lg p-4">
                            <div>
                                <h3 class="text-xs uppercase tracking-wider text-gray-500 font-medium mb-1">Created</h3>
                                <div class="flex items-center gap-2 text-gray-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span>{{ $category->created_at->format('d M Y, H:i') }}</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xs uppercase tracking-wider text-gray-500 font-medium mb-1">Updated</h3>
                                <div class="flex items-center gap-2 text-gray-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>{{ $category->updated_at->format('d M Y, H:i') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Description -->
                        <div>
                            <h3 class="text-sm font-semibold uppercase tracking-wider text-gray-400 mb-2">Description</h3>
                            <div class="bg-gray-750 rounded-lg p-4 text-gray-300 leading-relaxed">
                                @if($category->description)
                                    {{ $category->description }}
                                @else
                                    <p class="text-gray-500 italic">No description available for this category.</p>
                                @endif
                            </div>
                        </div>

                        <!-- Associated Products -->
                        <div>
                            <h3 class="text-sm font-semibold uppercase tracking-wider text-gray-400 mb-2">Associated Data</h3>
                            <div class="bg-gray-750 rounded-lg p-4">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-300">Products in this category</span>
                                    <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-bold">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>