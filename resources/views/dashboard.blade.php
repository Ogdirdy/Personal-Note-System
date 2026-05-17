<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-black-900 leading-tight text-center">
            Welcome, {{ Auth::user()->name }}
            <br>
            Personalized Note System
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-xl">
                <div class="p-10 text-center flex flex-col items-center space-y-6">

                    <!-- Welcome Message -->
                    <h3 class="text-xl font-semibold text-gray-800">
                        You are logged into the Personal Notes System
                    </h3>
                    <p class="text-gray-600 max-w-md">
                        Start organizing your courses and keeping track of your learning journey.
                    </p>

                    <!-- Call to Action -->
                    <a href="{{ url('/note') }}"
                        class="px-6 py-3 bg-gray-400 text-gray-900 font-semibold rounded-lg shadow hover:bg-blue-400 transition">
                        Check Your Notes
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>