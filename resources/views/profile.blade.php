<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center dark:text-white leading-tight">
            {{ Auth::user()->name }}'s {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-[#020917] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-cyan-400">
                    <x-validation-errors />
                    <x-success-message />

                    <form method="POST" action="{{ route('profile.update') }}">
                        @method('PUT')
                        @csrf
                        <div class="grid lg:grid-cols-3 gap-6 sm:grid-cols-1">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="name" :value="__('Name')" />
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                        value="{{ auth()->user()->name }}" autofocus />
                                </div>
                                <div>
                                    <x-label for="email" :value="__('Email')" />
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        value="{{ auth()->user()->email }}" autofocus />
                                </div>
                            </div>
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="name" :value="__('Reg Number')" />
                                    <x-input id="reg_number" class="block mt-1 w-full" type="number" name="reg_number"
                                        value="{{ auth()->user()->reg_number }}" autofocus />
                                </div>
                                <div>
                                    <x-label for="phone_number" :value="__('Phone Number')" />
                                    <x-input id="phone_number" class="block mt-1 w-full" type="tel"
                                        name="phone_number" value="{{ auth()->user()->phone_number }}" autofocus />
                                </div>
                            </div>
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="new_password" :value="__('New password')" />
                                    <x-input id="new_password" class="block mt-1 w-full" type="password" name="password"
                                        autocomplete="new-password" />
                                </div>
                                <div>
                                    <x-label for="confirm_password" :value="__('Confirm password')" />
                                    <x-input id="confirm_password" class="block mt-1 w-full" type="password"
                                        name="password_confirmation" autocomplete="confirm-password" />
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button variant='success' class="ml-3">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
