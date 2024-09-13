<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Name -->
                <div class="my-3">
                    <x-input-label for="product_name" :value="__('Product Name')" />
                    <x-text-input id="product_name" class="block mt-1 w-full" type="text" name="product_name" :value="old('product_name')" />
                    <x-input-error :messages="$errors->get('product_name')" class="mt-2" />
                </div>

                <!-- Name -->
                <div class="my-3">
                    <x-input-label for="mrp_price" :value="__('MRP')" />
                    <x-text-input id="mrp_price" class="block mt-1 w-full" type="text" name="mrp_price" :value="old('mrp_price')" />
                    <x-input-error :messages="$errors->get('mrp_price')" class="mt-2" />
                </div>
                <!-- Name -->
                <div class="my-3">
                    <x-input-label for="selling_price" :value="__('Selling Price')" />
                    <x-text-input id="selling_price" class="block mt-1 w-full" type="text" name="selling_price" :value="old('selling_price')" />
                    <x-input-error :messages="$errors->get('selling_price')" class="mt-2" />
                </div>
                <!-- Name -->
                <div class="my-3">
                    <x-input-label for="short_description" :value="__('Short Description')" />
                    <x-text-input id="short_description" class="block mt-1 w-full" type="text" name="short_description" :value="old('short_description')" />
                    <x-input-error :messages="$errors->get('short_description')" class="mt-2" />
                </div>
                <!-- Name -->
                <div class="my-3">
                    <x-input-label for="long_description" :value="__('Long Description')" />
                    <x-text-input id="long_description" class="block mt-1 w-full" type="text" name="long_description" :value="old('long_description')" />
                    <x-input-error :messages="$errors->get('long_description')" class="mt-2" />
                </div>
                <!-- Name -->
                <div class="my-3">
                    <x-input-label for="category" :value="__('Category')" />
                    <x-text-input id="category" class="block mt-1 w-full" type="text" name="category" :value="old('category')" />
                    <x-input-error :messages="$errors->get('category')" class="mt-2" />
                </div>

                <div class="images">         
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Upload multiple files</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" name="product_images" multiple>
                </div>
                <!-- Name -->
                <div class="my-3">
                    <x-input-label for="tags" :value="__('Tags')" />
                    <x-text-input id="tags" class="block mt-1 w-full" type="text" name="tags" :value="old('tags')" />
                    <x-input-error :messages="$errors->get('tags')" class="mt-2" />
                </div>
                
                <button type="submit" class="mt-2 text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>