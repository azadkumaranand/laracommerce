<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form action="{{route('comment.store')}}" method="POST">
                @csrf
                <!-- Name -->
                <div class="my-3">
                    <x-input-label for="message" :value="__('Comment')" />
                    <x-text-input id="message" class="block mt-1 w-full" type="text" name="message" :value="old('message')" />
                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                </div>
                <div class="my-3">
                    <select name="product_id" id="">
                        @foreach($products as $product)
                            <option value="{{$product->id}}">{{$product->product_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="my-3">
                    <select name="rating" id="">
                        @for($i=1; $i<=5; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                </div>
                <button>Submit</button>
                {{-- <button type="submit" class="mt-2 text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Submit</button> --}}
            </form>
        </div>
    </div>
</x-app-layout>