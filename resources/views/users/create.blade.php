<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Add a new Librarian') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-500 dark:bg-[#020917] border-b border-cyan-400">
                    <x-validation-errors />
                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf

                        <div class="grid gap-6">
                            <!-- Name -->
                            <div class="space-y-2">
                                <x-label for="name" :value="__('Name')" />
                                <x-input-with-icon-wrapper>
                                    <x-slot name="icon">
                                        <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                                    </x-slot>
                                    <x-input withicon id="name" class="block w-full" type="text" name="name"
                                        :value="old('name')" required autofocus placeholder="{{ __('Name') }}" />
                                </x-input-with-icon-wrapper>
                            </div>

                            <!-- Email Address -->
                            <div class="space-y-2">
                                <x-label for="email" :value="__('Email')" />
                                <x-input-with-icon-wrapper>
                                    <x-slot name="icon">
                                        <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                                    </x-slot>
                                    <x-input withicon id="email" class="block w-full" type="email" name="email"
                                        :value="old('email')" required placeholder="{{ __('Email') }}" />
                                </x-input-with-icon-wrapper>
                            </div>

                            <!-- Reg Number -->
                            <div class="space-y-2">
                                <x-label for="reg_number" :value="__('Reg Number')" />
                                <x-input-with-icon-wrapper>
                                    <x-slot name="icon">
                                        <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                                    </x-slot>
                                    <x-input withicon id="email" class="block w-full" type="number"
                                        name="reg_number" :value="old('reg_number')" required
                                        placeholder="{{ __('Reg Number') }}" />
                                </x-input-with-icon-wrapper>
                            </div>

                            <!-- Phone Number -->
                            <div class="space-y-2">
                                <x-label for="phone_number" :value="__('Phone Number')" />
                                <x-input-with-icon-wrapper>
                                    <x-slot name="icon">
                                        <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                                    </x-slot>
                                    <x-input withicon id="phone_number" class="block w-full" type="tel"
                                        name="phone_number" :value="old('phone_number')" required
                                        placeholder="{{ __('Phone Number') }}" />
                                </x-input-with-icon-wrapper>
                            </div>

                            <!-- Password -->
                            <div class="space-y-2">
                                <x-label for="password" :value="__('Password')" />
                                <x-input-with-icon-wrapper>
                                    <x-slot name="icon">
                                        <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                                    </x-slot>
                                    <x-input withicon id="password" class="block w-full" type="password"
                                        name="password" required autocomplete="new-password"
                                        placeholder="{{ __('Password') }}" />
                                </x-input-with-icon-wrapper>
                            </div>

                            <!-- Confirm Password -->
                            <div class="space-y-2">
                                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                                <x-input-with-icon-wrapper>
                                    <x-slot name="icon">
                                        <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                                    </x-slot>
                                    <x-input withicon id="password_confirmation" class="block w-full" type="password"
                                        name="password_confirmation" required
                                        placeholder="{{ __('Confirm Password') }}" />
                                </x-input-with-icon-wrapper>
                            </div>

                            <!-- Role -->
                            <div class="space-y-2">
                                <x-label for="role" :value="__('Role')" />

                                <select name="role"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected="">...</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div>
                                <x-button class="justify-center w-full gap-2">
                                    <x-heroicon-o-user-add class="w-6 h-6" aria-hidden="true" />
                                    <span>{{ __('Register') }}</span>
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
