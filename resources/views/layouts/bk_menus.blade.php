<div class="md:flex flex-col md:flex-row md:min-h-screen w-full text-gray-500 dark:text-gray-400">
  <div @click.away="open = false" class="flex flex-col w-full md:w-64 text-gray-700 dark:text-gray-200 dark:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
    <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
      <a href="{{route('dashboard')}}" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark:text-white focus:outline-none focus:shadow-outline">{{ config('app.name') }}</a>
      <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 rounded-lg dark:hover:bg-gray-600 dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {!! request()->routeIs('dashboard') ? 'bg-gray-200 dark:bg-gray-700 dark:hover:text-white' : 'dark:bg-transparent dark:focus:bg-gray-600 dark:focus:text-white' !!}" href="{{route('dashboard')}}">{{ __('admin/menus.Dashboard') }}</a>

      @can('permission_access')
      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 rounded-lg dark:hover:bg-gray-600 dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {!! request()->routeIs('permissions.*') ? 'bg-gray-200 dark:bg-gray-700 dark:hover:text-white' : 'dark:bg-transparent dark:focus:bg-gray-600 dark:focus:text-white' !!}" href="{{route('permissions.index')}}">{{ __('admin/menus.Permissions') }}</a>

      @endcan
      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 rounded-lg dark:hover:bg-gray-600 dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {!! request()->routeIs('tasks.*') ? 'bg-gray-200 dark:bg-gray-700 dark:hover:text-white' : 'dark:bg-transparent dark:focus:bg-gray-600 dark:focus:text-white' !!}" href="{{route('tasks.index')}}">{{ __('admin/menus.Tasks') }}</a>

      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 rounded-lg dark:hover:bg-gray-600 dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {!! request()->routeIs('users.*') ? 'bg-gray-200 dark:bg-gray-700 dark:hover:text-white' : 'dark:bg-transparent dark:focus:bg-gray-600 dark:focus:text-white' !!}" href="{{route('users.index')}}">{{ __('admin/menus.Users') }}</a>

      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 rounded-lg dark:hover:bg-gray-600 dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {!! request()->routeIs('members.*') ? 'bg-gray-200 dark:bg-gray-700 dark:hover:text-white' : 'dark:bg-transparent dark:focus:bg-gray-600 dark:focus:text-white' !!}" href="{{route('members.index')}}">{{ __('admin/menus.Members') }}</a>

      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 rounded-lg dark:hover:bg-gray-600 dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {!! request()->routeIs('adminContacts.*') ? 'bg-gray-200 dark:bg-gray-700 dark:hover:text-white' : 'dark:bg-transparent dark:focus:bg-gray-600 dark:focus:text-white' !!}" href="{{route('adminContacts.index')}}">{{ __('admin/menus.Contact') }}</a>

      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 rounded-lg dark:hover:bg-gray-600 dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {!! request()->routeIs('adminBlog.*') ? 'bg-gray-200 dark:bg-gray-700 dark:hover:text-white' : 'dark:bg-transparent dark:focus:bg-gray-600 dark:focus:text-white' !!}" href="{{route('adminBlog.index')}}">{{ __('admin/menus.Blog') }}</a>
      
      <div @click.away="open = false" class="relative" x-data="{ open: {!! request()->routeIs('programs.*') ? 'true' : 'false' !!} }">
        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark:bg-transparent dark:focus:text-white dark:hover:text-white dark:focus:bg-gray-600 dark:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {!! request()->routeIs('programs.*') ? 'bg-gray-200 dark:bg-gray-700 dark:hover:text-white' : 'dark:bg-transparent dark:focus:bg-gray-600 dark:focus:text-white' !!}">
          <span>{{ __('admin/menus.Program') }}</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
          <div class="px-2 py-2 bg-white rounded-md shadow dark:bg-gray-800">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {!! request()->routeIs('categories.*') ? 'bg-gray-200 dark:bg-gray-700 dark:hover:text-white' : 'dark:bg-transparent dark:focus:bg-gray-600 dark:focus:text-white' !!}" href="{{route('categories.index')}}">{{ __('admin/menus.Category') }}</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {!! request()->routeIs('programs.*') ? 'bg-gray-200 dark:bg-gray-700 dark:hover:text-white' : 'dark:bg-transparent dark:focus:bg-gray-600 dark:focus:text-white' !!}" href="{{route('programs.index')}}">{{ __('admin/menus.Program') }}</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
</div>