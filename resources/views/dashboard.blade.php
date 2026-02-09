<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Welcome Card -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-center">
                    <h2 class="text-2xl font-bold mb-3">
                        Welcome, {{ Auth::user()->name }}!
                    </h2>
                    <p class="text-gray-600">
                        You are successfully logged in to the Dashboard.
                    </p>
                </div>
            </div>

            <!-- User Info & Status -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- User Info Card -->
                <div class="bg-white shadow-sm rounded-lg">
                    <div class="border-b px-6 py-4 font-semibold text-gray-700">
                        User Info
                    </div>
                    <div class="p-6 text-gray-800">
                        <p class="mb-2">
                            <strong>Name:</strong> {{ Auth::user()->name }}
                        </p>
                        <p>
                            <strong>Email:</strong> {{ Auth::user()->email }}
                        </p>
                    </div>
                </div>

                

            </div>
        </div>
    </div>
</x-app-layout>
