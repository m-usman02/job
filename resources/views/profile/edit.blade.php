<x-app-layout>
<form method="POST" action="{{ route('profile.update') }}">
      @method('POST')
<div class="py-12">
   <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
      
            @csrf
            <div class="container pt-5 py-5">
            <div class="row">
            <!-- Name -->
            <div class="col-md-4">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="auth()->user()->name" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="col-md-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="auth()->user()->email" required />
            </div>

            <!-- Password -->
            <div class="col-md-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

         

            <div class="flex items-center justify-end mt-4">
               

                <x-button class="ml-4">
                    Save
                </x-button>
            </div>
        </div>
    </div>

        </div>
        </div>
        </div>
        </form>
    </x-app-layout>