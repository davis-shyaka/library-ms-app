<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Borrowed Books') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg dark:bg-[#020917]">
                {{-- Top Section of the Table --}}
                <div class="w-full text-sm text-left p-4">
                    <div class="flex items-center justify-between space-x-3 xl:flex-row sm:flex-col">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative mt-5">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <form method="POST" action="{{ route('borrowedBooks.search') }}">
                                @csrf
                                <input type="text" id="table-search" name='item'
                                    class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Search for items" />
                            </form>

                        </div>
                        <div class="relative mt-5">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-black" aria-hidden="true" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3 3h14v14H3V3zm12 12V5H5v10h10zm-8 6v-2h12V7h2v14H7zm4-12h2v2h-2v2H9v-2H7V9h2V7h2v2z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <a class="block p-2 pl-10 w-40 text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-green-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                href="{{ route('borrowedBooks.create') }}">Lend a new book</a>
                        </div>
                    </div>
                </div>
                {{-- Begining of Table Content --}}
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-cyan-400">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Cover Image
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Book Title
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Student Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Borrow Date
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Return Date
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Due Status
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($borrowedBooks as $borrowedBook)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="p-4 w-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <td class="p-4 w-32">
                                    {{-- <img src="https://via.placeholder.com/150" alt="Book Image"> --}}
                                </td>
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $borrowedBook->book->title }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $borrowedBook->user->name }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $borrowedBook->borrow_date }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $borrowedBook->return_date }}
                                </td>
                                <td class="py-4 px-6 text-center">
                                    @if ($borrowedBook->is_due === 1)
                                        <button
                                            class="p-1 bg-red-400 rounded-full text-red-900 hover:cursor-text">Already
                                            Due</button>
                                    @endif
                                    @if ($borrowedBook->is_due === 0)
                                        <button
                                            class="p-1 bg-green-400 rounded-full text-green-900 hover:cursor-text">Not
                                            Yet Due</button>
                                    @endif
                                </td>
                                <td class="py-4 px-6 flex items-center space-x-3">
                                    <a href="{{ route('borrowedBooks.edit', $borrowedBook) }}"><button
                                            class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-white hover:text-blue-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                            type="submit">Edit</button></a>
                                    <form method="POST" action="{{ route('borrowedBooks.destroy', $borrowedBook) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-white hover:text-red-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                                            type="submit"
                                            onclick="return confirm(`Are you sure you want to delete this record?`)">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{-- {{ $borrowedBooks->links() }} --}}
            </div>
        </div>
    </div>
</x-app-layout>
