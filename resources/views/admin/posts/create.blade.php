<x-admin-layout>
    <x-slot name="header">
        {{ __('Admin > Create Post')}}
    </x-slot>
    <form method="POST" action="{{ route('admin-posts-create') }}" enctype="multipart/form-data" class="p-3">
        @csrf

        <!-- Title -->
        <div class="p-2">
            <label for="name">{{ __('Title') }}</label>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('title')" required autofocus autocomplete="title" />
        </div>

        <!-- Category -->
        <div class="p-2">
            <label for="category_id">{{ __('Category') }}</label>
            <select name="category_id" id="category_id" class="block">
                <option disabled selected>Select a category</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Content -->
        <div class="p-2">
            <label for="content">{{ __('Content') }}</label>
            <textarea id="content"
                class="block mt-1 w-full rounded"
                name="content" :value="old('title')"
                rows="6"
                required autofocus></textarea>
        </div>

        <x-form-errors />

        <div class="block p-2">
            <x-primary-button type="submit">Create</x-primary-button>
        </div>

    </form>
</x-admin-layout>
