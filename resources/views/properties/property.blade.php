<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Properties') }}
        </h2>
    </x-slot>

    <div x-data="{ tab: 'properties' }" class="p-6 lg:p-8 bg-black-200 border-b border-gray-200">
        {{-- top button --}}

        <div class="flex justify-end gap-4 mb-6">
            <a href="#" class="bg-black-600 hover:bg-blue-700 text-black px-4 py-2 rounded-lg shadow">
                Associate Property (property_id)
            </a>

            <a href="#" class="bg-green-600 hover:bg-green-700 text-black px-4 py-2 rounded-lg shadow">
                Associate Owner (owner_id)
            </a>
        </div>
        {{-- taps  --}}
        <div class="border-b mb-6 flex gap-6">
            <button @click="tab = 'properties'"
                :class="tab === 'properties'
                    ?
                    'border-b-2 border-blue-600 text-blue-600 font-semibold' :
                    'text-gray-600'"
                class="pb-2">
                Associated Properties
            </button>

            <button @click="tab = 'owners'"
                :class="tab === 'owners'
                    ?
                    'border-b-2 border-blue-600 text-blue-600 font-semibold' :
                    'text-gray-600'"
                class="pb-2">
                Associated Owners
            </button>
        </div>

        {{-- tab content --}}

        <div x-show="tab === 'properties'" x-transition>
            <div class="bg-white p-4 rounded-lg shadow mb-10">
                <h2 class="text-xl font-semibold mb-3">Associated Properties</h2>
                <table class="w-full border">
                    <thead class="bg-grap-100">
                        <tr>
                            <th class="p-2 border"> ID</th>
                            <th class="p-2 border"> User ID</th>
                            <th class="p-2 border"> Property Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            No properites
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
        {{-- tap 2 --}}
        <div x-show="tab === 'owners'" x-transition>
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-3">Associated Owners</h2>

                <table class="w-full border">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-2 border">Owner ID</th>
                            <th class="p-2 border">Owner Name</th>
                            <th class="p-2 border">Owner Tp</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <p>No properites</p>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
