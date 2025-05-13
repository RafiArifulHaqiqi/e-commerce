<x-layouts.app>
    <div class="max-w-4xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
            <div>
                <h1 class="text-3xl font-bold text-white tracking-tight">Add New Category</h1>
                <p class="mt-1 text-gray-400">Create a new product category for your inventory</p>
            </div>
            <a href="{{ route('dashboard.category.index') }}"
                class="flex items-center gap-2 text-gray-300 hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                <span>Back to Categories</span>
            </a>
        </div>

        <div class="bg-gray-800 rounded-xl shadow-2xl overflow-hidden border border-gray-700">
            <div class="p-6 sm:p-8">
                <form action="{{ route('dashboard.category.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    
                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-300 mb-1">Category Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" 
                            class="w-full bg-gray-700 border-0 rounded-lg shadow-inner text-white px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none transition-shadow"
                            placeholder="Enter category name">
                        @error('name')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description Field -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-300 mb-1">Description</label>
                        <textarea name="description" id="description" rows="4" 
                            class="w-full bg-gray-700 border-0 rounded-lg shadow-inner text-white px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none transition-shadow resize-none"
                            placeholder="Describe your category">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Category Image URL -->
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-300 mb-1">Category Image URL</label>
                        <div class="flex items-center space-x-2">
                            <div class="flex-1">
                                <input type="text" name="image" id="image" value="{{ old('image') }}" 
                                    class="w-full bg-gray-700 border-0 rounded-lg shadow-inner text-white px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none transition-shadow"
                                    placeholder="https://example.com/image.jpg">
                                @error('image')
                                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-12 h-12 bg-gray-600 rounded-lg flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                        <p class="mt-1 text-xs text-gray-400">Enter a valid image URL for your category thumbnail</p>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <flux:button type="submit" variant="filled" color="blue" 
                            class="w-full py-3 rounded-lg font-medium text-base shadow-lg hover:shadow-xl transition-all duration-300">
                            <span class="flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                                Create Category
                            </span>
                        </flux:button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>