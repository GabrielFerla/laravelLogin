<div>
    <div class="max-w-4xl mx-auto mt-5">
        <div class="px-4 sm:px-6 lg:px-8">
            <form wire:submit.prevent="save">
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Book name</label>
                    <input type="text"
                            wire:model="books.name"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Harry Potter"
                           required="">
                    @error('books.name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <div class="mb-6">
                    <label for="isbn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Book Isbn</label>
                    <input type="number"
                            wire:model="books.isbn"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="123">
                    @error('books.isbn') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <div class="mb-6">
                    <label for="value" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Book Value</label>
                    <input type="text"
                            wire:model="books.value"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="25.65">
                    @error('books.value') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <div class="flex items-center justify-start space-x-4">
                    <a href="/user" class="text-gray-900  font-medium  text-sm ">Back</a>
                    <button type="submit"
                    class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 ml-3 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                        Save
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
