<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('New Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-500 dark:bg-[#020917] border-b border-cyan-400">
                    <x-validation-errors />
                    <form method="POST" action="{{ route('books.store') }}">
                        @csrf
                        <div class="relative space-y-4">
                            <div>
                                <label class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Title</label>
                                <input name="title" type="text" id="floating_filled"
                                    class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " />

                            </div>

                            <div>
                                <label
                                    class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Author</label>
                                <select name="author_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected="">...</option>
                                    @foreach ($authors as $author)
                                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <label
                                class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea name="description" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Enter the description ..."></textarea>


                            <label class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Category</label>

                            <select name="category_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected="">...</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                            <div>
                                <label
                                    class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Language</label>
                                <select name="language"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected="">...</option>
                                    <option>English</option>
                                    <option>French</option>
                                    <option>Kinyarwanda</option>
                                    <option>Japanese</option>
                                    <option>Italic</option>
                                    <option>German</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div>
                                <label
                                    class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Format</label>
                                <select name="format"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected="">...</option>
                                    <option>Hard Cover</option>
                                    <option>Paper Back</option>
                                    <option>Trade Paper Back</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div>
                                <label
                                    class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Publisher</label>
                                <input name="publisher" type="text" id="floating_filled"
                                    class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " />
                            </div>

                            <div>
                                <label class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">ISBN</label>
                                <input name="isbn" type="text" id="floating_filled"
                                    class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " />
                            </div>

                            <div>
                                <label
                                    class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Quantity</label>
                                <input name="quantity" type="number" min="1" max="5000" id="floating_filled"
                                    class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-1/2 text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " />
                            </div>

                            <label class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Image</label>
                            <div class="max-w-xl">
                                <label
                                    class="flex justify-center w-25 h-20 px-4 transition bg-white border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-gray-400 focus:outline-none">
                                    <span class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                        <span class="font-medium text-gray-600">
                                            Drop files to Attach, or
                                            <span class="text-blue-600 underline">browse</span>
                                        </span>
                                    </span>
                                    <input type="file" name="file_upload" class="hidden">
                                </label>
                                <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Keep
                                    the image small, and follow the resolution guidelines</div>
                            </div>
                            <button
                                class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-white hover:text-green-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
