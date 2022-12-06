<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Edit Staff Info') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-500 dark:bg-[#020917] border-b border-cyan-400">
                    <x-validation-errors />
                    <form method="POST" action="{{ route('users.edit.role', $user) }}">
                        @method('PUT')
                        @csrf

                        <div class="grid gap-6">
                            <!-- Name -->
                            <div class="space-y-2">
                                <x-label for="name" value="{{ $user->name }}" />

                            </div>
                            <!-- Role -->
                            <div class="space-y-2">
                                <x-label for="role" :value="__('Role')" />

                                <select name="role"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected="{{ $user->getRoleNames() }}">
                                        {{ ucfirst($user->getRoleNames()[0]) }}
                                    </option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div>
                                <x-button class="justify-center w-full gap-2">
                                    <x-heroicon-o-user-add class="w-6 h-6" aria-hidden="true" />
                                    <span>{{ __('Update') }}</span>
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
