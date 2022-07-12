<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Show Kid
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('kids.index') }}"
                    class="bg-blue-500 hover:bg-blue-600 text-black font-bold py-2 px-4 rounded">Back to list</a>
            </div>

            <table class="w-full shadow rounded-lg overflow-hidden">

                <tr class="border-b">
                    <th scope="col"
                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        NAME
                    </th>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                        {{ $kid->name }}
                    </td>
                </tr>
                <tr class="border-b">
                    <th scope="col"
                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        SURNAME
                    </th>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                        {{ $kid->surname }}
                    </td>
                </tr>
                <tr class="border-b">
                    <th scope="col"
                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        BIRTHDAY
                    </th>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                        {{ $kid->dob }}
                    </td>
                </tr>
            </table>
            <div class="block mt-8">
                <a href="{{ route('kids.index') }}"
                    class="bg-blue-500 hover:bg-blue-600 text-black font-bold py-2 px-4 rounded">Back to list</a>
            </div>
        </div>
    </div>
</x-app-layout>
