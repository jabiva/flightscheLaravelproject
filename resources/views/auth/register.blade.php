<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
<div class="container">
    {{-- <label class="mb-1">Upload Profile Image</label> --}}
    {{-- <x-text-input id="name" class="block mt-1 w-full" type="file" name="name" :value="old('name')"/> --}}

    <div class="mt-1">
      <x-input-label for="name" :value="__('First name')" />
      <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
      <x-input-error :messages="$errors->get('name')" class="mt-1" />
  </div>

  <div class="mt-1">
      <x-input-label for="middleName" :value="__('Middle name')" />
      <x-text-input id="middleName" class="block mt-1 w-full" type="text" name="middleName" :value="old('middleName')"/>
      <x-input-error :messages="$errors->get('middleName')" class="mt-1" />
  </div>

  <div class="mt-1">
      <x-input-label for="lastName" :value="__('Last name')" />
      <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required autofocus autocomplete="lastName" />
      <x-input-error :messages="$errors->get('lastName')" class="mt-1" />
  </div>

  <div class="mt-1">
    <x-input-label for="address" :value="__('Address')" />
    <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
    <x-input-error :messages="$errors->get('address')" class="mt-1" />
</div>

<div class="mt-1">
    <x-input-label for="birthPlace" :value="__('Place of Birth')" />
    <x-text-input id="birthPlace" class="block mt-1 w-full" type="text" name="birthPlace" :value="old('birthPlace')" required autofocus autocomplete="birthPlace" />
    <x-input-error :messages="$errors->get('birthPlace')" class="mt-1" />
</div>

<div class="row">
    <div class="col-sm-12">

        <div class="mt-1">
            <x-input-label for="birthDate" :value="__('Date of Birth')" />
            <x-text-input id="birthDate" class="block mt-1 w-full" type="date" name="birthDate" :value="old('birthDate')" required autofocus autocomplete="birthDate" />
            <x-input-error :messages="$errors->get('birthDate')" class="mt-1" />
        </div>

    </div>
    <div class="col-sm-6">

        <div class="mt-1">
            <x-input-label for="age" :value="__('Age')" />
            <x-text-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required autofocus autocomplete="age" />
            <x-input-error :messages="$errors->get('age')" class="mt-1" />
        </div>

    </div>
    <div class="col-sm-6">

        <div class="mt-1">
            <x-input-label for="contact" :value="__('Contact No.')" />
            <x-text-input id="contact" class="block mt-1 w-full" type="number" name="contact" :value="old('contact')" required autofocus autocomplete="contact" />
            <x-input-error :messages="$errors->get('contact')" class="mt-1" />
        </div>

    </div>
    <div class="col-sm-6">

        <div class="mt-1">
            <x-input-label for="nationality" :value="__('Nationality')" />
            <x-text-input id="nationality" class="block mt-1 w-full" type="text" name="nationality" :value="old('nationality')" required autofocus autocomplete="nationality" />
            <x-input-error :messages="$errors->get('nationality')" class="mt-1" />
        </div>

    </div>
    <div class="col-sm-6">

        <div class="mt-1">
            <x-input-label for="sex" :value="__('Sex')" />
            <select id="sex" class="block mt-1 w-full" name="sex" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            {{-- <x-input-error :messages="$errors->get('email')" class="mt-1" /> --}}
        </div>

    </div>
</div>


        <!-- Email Address -->
        <div class="mt-1">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-1" />
        </div>

        <!-- Password -->
        <div class="mt-1">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-1" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-1">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
        </div>


<div class="row">
    <div class="col">
        <div class="mt-1">
            <x-input-label for="role" :value="__('Select Role')" />
            <select id="role" class="block mt-1 w-full" name="role" required>
                <option value="Instructor">Instructor</option>
                <option value="Mechanic">Mechanic</option>
                <option value="Student">Student</option>
            </select>
            {{-- <x-input-error :messages="$errors->get('email')" class="mt-1" /> --}}
        </div>
    </div>
    <div class="col">
        <div class="mt-1">
            <x-input-label for="status" :value="__('Select Status')" />
            <select id="status" class="block mt-1 w-full" name="status" required>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
            {{-- <x-input-error :messages="$errors->get('email')" class="mt-1" /> --}}
        </div>
    </div>
</div>

        
        <div class="flex items-center justify-between mt-1">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-1 focus:ring-offset-1 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-1">
                {{ __('Register') }}
            </x-primary-button>
        </div>
</div>

    </form>
</x-guest-layout>
