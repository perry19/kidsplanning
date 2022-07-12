<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="Manage Keepers" href="{{ route('keepers.index') }}" :isActive="request()->routeIs('keepers.index')">
        <x-slot name="icon">
            <x-icons.github class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="Manage Kids" href="{{ route('kids.index') }}" :isActive="request()->routeIs('kids.index')">
        <x-slot name="icon">
            <x-icons.twitter class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="Planning" href="{{ route('planning.index') }}" :isActive="request()->routeIs('planning.index')">
        <x-slot name="icon">
            <x-icons.menu-fold-left class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="Tasks/TODOs" href="{{ route('tasks.index') }}" :isActive="request()->routeIs('tasks.index')">
        <x-slot name="icon">
            <x-icons.menu-fold-right class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="Calendar" href="{{ route('calendar') }}" :isActive="request()->routeIs('calendar')">
        <x-slot name="icon">
            <x-icons.figma class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="Chat" href="{{ route('chats.index') }}" :isActive="request()->routeIs('chats.index')">
        <x-slot name="icon">
            <x-icons.empty-circle class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="Manage Finances" href="{{ route('finances.index') }}" :isActive="request()->routeIs('finances.index')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="Blog" href="{{ route('posts.index') }}" :isActive="request()->routeIs('posts.index')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    {{-- Examples --}}
    
    {{-- <x-sidebar.dropdown title="Buttons" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Text button" href="{{ route('buttons.text') }}"
            :active="request()->routeIs('buttons.text')" />
        <x-sidebar.sublink title="Icon button" href="{{ route('buttons.icon') }}"
            :active="request()->routeIs('buttons.icon')" />
        <x-sidebar.sublink title="Text with icon" href="{{ route('buttons.text-icon') }}"
            :active="request()->routeIs('buttons.text-icon')" />
    </x-sidebar.dropdown> --}}
       
</x-perfect-scrollbar>