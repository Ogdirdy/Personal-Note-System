<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-xl p-8">
                
                <!-- Page Title -->
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
                    Edit Note
                </h2>

                <!-- Edit Form -->
                <form method="POST" action="{{ route('note.update', $note) }}" class="space-y-6">
                    @csrf
                    @method('patch')

                    <!-- Course Name -->
                    <div>
                        <x-input-label for="course_name" :value="__('Course Name')" />
                        <x-text-input id="course_name"
                                      class="block mt-1 w-full"
                                      type="text"
                                      name="course_name"
                                      value="{{ old('course_name', $note->course_name) }}"
                                      required
                                      autofocus
                                      autocomplete="course_name" />
                        <x-input-error :messages="$errors->get('course_name')" class="mt-2" />
                    </div>

                    <!-- Content -->
                    <div>
                        <x-input-label for="content" :value="__('Content')" />
                        <textarea id="content"
                                  name="content"
                                  rows="6"
                                  class="block w-full mt-1 border-gray-300 focus:border-indigo-400 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('content', $note->content) }}</textarea>
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>

                    <!-- Buttons -->
                    <div class="flex flex-col items-center space-y-4">
                        <x-primary-button class="px-8 py-3">
                            {{ __('Update Note') }}
                        </x-primary-button>

                        <a href="{{ route('note.index') }}"
                           class="px-6 py-2 bg-gray-200 text-gray-700 rounded-md shadow hover:bg-blue-300 transition">
                            Back to Notes
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

