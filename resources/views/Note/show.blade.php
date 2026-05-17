<x-app-layout>
    @auth
        <div class="py-12">
            <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-xl p-8">
                    
                    <!-- Note Title -->
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">
                        {{ $note->course_name }}
                    </h2>

                    <!-- Note Content -->
                    <div class="text-gray-700 text-lg leading-relaxed mb-8 text-center">
                        {{ $note->content }}
                    </div>

                    <!-- Back Button -->
                    <div class="flex justify-center">
                        <a href="{{ route('note.index') }}"
                           class="px-6 py-2 bg-gray-200 text-gray-700 rounded-md shadow hover:bg-blue-300 transition">
                        Back to Notes
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endauth
</x-app-layout>

