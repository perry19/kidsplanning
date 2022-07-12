<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Keeper's Info
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('keepers.update', $keeper->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-4 bg-white sm:p-4">
                            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', $keeper->name) }}" />
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-4 bg-white sm:p-4">
                            <label for="surname" class="block font-medium text-sm text-gray-700">Surname</label>
                            <input type="text" name="surname" id="surname" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('surname', $keeper->surname) }}" />
                            @error('surname')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-4 bg-white sm:p-4">
                            <label for="dob" class="block font-medium text-sm text-gray-700">Date of birth</label>
                            <input type="text" name="dob" id="dob" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('dob', $keeper->dob) }}" />
                            @error('dob')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-4 bg-white sm:p-4">
                            <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                            <input type="text" name="email" id="email" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('email', $keeper->email) }}" />
                            @error('email')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-4 bg-white sm:p-4">
                            <label for="color" class="block font-medium text-sm text-gray-700">Color</label>
                            <input type="text" name="color" id="color" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('color', $keeper->color) }}" />
                            @error('color')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>