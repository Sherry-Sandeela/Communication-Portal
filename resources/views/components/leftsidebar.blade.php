<aside class=" bg-white shadow h-screen sticky top-0 p-4 flex flex-col justify-between">
    <div>


        <nav class="space-y-2">
            <a href="{{ route('properties.property') }}"
                class="block px-4 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">
                Properties
            </a>

            <a href="{{ route('documents.index') }}"
                class="block px-4 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">
                Documents
            </a>
        </nav>
    </div>

    <div class="mt-6">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="w-full px-4 py-2 rounded-md bg-red-500 gray-700 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">Logout</button>
        </form>
    </div>
</aside>
