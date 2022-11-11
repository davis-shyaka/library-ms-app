<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="Tasks" href="{{ route('tasks.index') }}" :isActive="request()->routeIs('tasks.index')">
        <x-slot name="icon">
            <x-icons.tasks class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="Users" href="{{ route('users.index') }}" :isActive="request()->routeIs('users.index')">
        <x-slot name="icon">
            <x-icons.users class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown title="Borrowed Books" :active="Str::startsWith(
        request()
            ->route()
            ->uri(),
        'borrowedBooks',
    )">
        <x-slot name="icon">
            <x-icons.borrowedBooks class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        <x-sidebar.sublink title="All Borrowed Books" href="{{ route('borrowedBooks.index') }}" :active="request()->routeIs('borrowedBooks.index')" />
        <x-sidebar.sublink title="Lend a New Book" href="{{ route('borrowedBooks.create') }}" :active="request()->routeIs('borrowedBooks.create')" />
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Books" :active="Str::startsWith(
        request()
            ->route()
            ->uri(),
        'books',
    )">
        <x-slot name="icon">
            <x-icons.books class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        <x-sidebar.sublink title="All Books" href="{{ route('books.index') }}" :active="request()->routeIs('books.index')" />
        <x-sidebar.sublink title="Add a New Book" href="{{ route('books.create') }}" :active="request()->routeIs('books.create')" />
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Authors" :active="Str::startsWith(
        request()
            ->route()
            ->uri(),
        'authors',
    )">
        <x-slot name="icon">
            <x-icons.authors class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        <x-sidebar.sublink title="All Authors" href="{{ route('authors.index') }}" :active="request()->routeIs('authors.index')" />
        <x-sidebar.sublink title="Add a New Author" href="{{ route('authors.create') }}" :active="request()->routeIs('authors.create')" />
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Categories" :active="Str::startsWith(
        request()
            ->route()
            ->uri(),
        'categories',
    )">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        <x-sidebar.sublink title="All Categories" href="{{ route('categories.index') }}" :active="request()->routeIs('categories.index')" />
        <x-sidebar.sublink title="Add a New Category" href="{{ route('categories.create') }}" :active="request()->routeIs('categories.create')" />
    </x-sidebar.dropdown>

    {{-- <x-sidebar.dropdown title="Books" :active="Str::startsWith(
        request()
            ->route()
            ->uri(),
        'buttons',
    )">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        <x-sidebar.sublink title="Authors" href="{{ route('buttons.text') }}" :active="request()->routeIs('buttons.text')" />
        <x-sidebar.sublink title="Categories" href="{{ route('buttons.icon') }}" :active="request()->routeIs('buttons.icon')" />
        <x-sidebar.sublink title="Borrwed Books" href="{{ route('buttons.text-icon') }}" :active="request()->routeIs('buttons.text-icon')" />
    </x-sidebar.dropdown> --}}

    {{-- <div x-transition x-show="isSidebarOpen || isSidebarHovered" class="text-sm text-gray-500">Library Management</div>

    @php
        $links = array_fill(0, 5, '');
    @endphp

    @foreach ($links as $index => $link)
        <x-sidebar.link title="Add Book {{ $index + 1 }}" href="#" />
    @endforeach --}}

</x-perfect-scrollbar>
