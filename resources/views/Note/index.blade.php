<x-app-layout>
    @auth
    <div class="max-w-3xl mx-auto p-6 mb-6 text-center">
        <form method="GET" action="{{ route('note.create') }}" class="flex flex-col items-center space-y-3">
            @csrf
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button>{{ __('Create a New Note') }}</x-primary-button>
        </form>
    </div>

    <!-- Notes List -->
    <div class="max-w-5xl mx-auto space-y-4">
        @foreach($notes as $note)
        <div class="bg-gray-50 border border-gray-200 rounded-lg p-5 shadow-sm flex items-center justify-between">
            <div>
                <h3 class="text-xl font-semibold text-gray-800">{{ $note->course_name }}</h3>
            </div>
            <div class="flex space-x-3">
                <!-- View Button -->
                <form method="GET" action="{{ route('note.show', $note) }}">
                    @csrf
                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    <x-primary-button>{{ __('View') }}</x-primary-button>
                </form>

                <!-- Edit Button -->
                <form method="GET" action="{{ route('note.edit', $note) }}">
                    @csrf
                    <x-primary-button>{{ __('Edit') }}</x-primary-button>
                </form>

                <!-- Delete Button -->
                <form method="POST" action="{{ route('note.destroy', $note) }}" onsubmit="return confirmDelete()">
                    @csrf
                    @method('DELETE')
                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    <x-primary-button class="bg-red-600 hover:bg-red-700">
                        {{ __('Delete') }}
                    </x-primary-button>
                </form>

                
                <script>
                    // Show confirmation dialog
                    function confirmDelete() {
                        // Show confirmation dialog
                        return confirm("Are you sure you want to delete this note?");
                    }
                </script>

            </div>
        </div>
        @endforeach
    </div>
    @endauth
</x-app-layout>