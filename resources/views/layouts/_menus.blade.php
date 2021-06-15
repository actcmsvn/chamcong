<div class="py-4 text-gray-500 dark:text-gray-400">
    <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
        {{ config('app.name') }}
    </a>
    <ul class="mt-6">
      <li class="relative px-6 py-3">
          {!! request()->routeIs('dashboard') ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
          <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold {!! request()->routeIs('dashboard') ? 'text-gray-800 dark:text-gray-100' : '' !!} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('dashboard')}}">
              <svg class="w-5 h-5" ari a-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                  </path>
              </svg>
              <span class="ml-4">{{ __('admin/menus.Dashboard') }}</span>
          </a>
      </li>
      @can('task_access')
      <li class="relative px-6 py-3">
          {!! request()->routeIs('tasks.*') ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
          <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold {!! request()->routeIs('tasks.*') ? 'text-gray-800 dark:text-gray-100' : '' !!} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('tasks.index')}}">
              <svg class="w-5 h-5" ari a-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
              <span class="ml-4">{{ __('admin/menus.Tasks') }}</span>
          </a>
      </li>
      @endcan
      @can('tag_access')
      <li class="relative px-6 py-3">
          {!! request()->routeIs('tags.*') ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
          <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold {!! request()->routeIs('tags.*') ? 'text-gray-800 dark:text-gray-100' : '' !!} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('tags.index')}}">
              <svg class="w-5 h-5" ari a-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
              <span class="ml-4">{{ __('admin/menus.Tag') }}</span>
          </a>
      </li>
      @endcan
      @can('user_access')
      <li class="relative px-6 py-3">
          {!! request()->routeIs('users.*') ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
          <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold {!! request()->routeIs('users.*') ? 'text-gray-800 dark:text-gray-100' : '' !!} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('users.index')}}">
              <svg class="w-5 h-5" ari a-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
              </svg>
              <span class="ml-4">{{ __('admin/menus.Users') }}</span>
          </a>
      </li>
      @endcan
      @can('member_access')
      <li class="relative px-6 py-3">
          {!! request()->routeIs('members.*') ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
          <a class="inline-flex items-center w-full text-sm font-semibold {!! request()->routeIs('members.*') ? 'text-gray-800 dark:text-gray-100' : '' !!} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('members.index')}}">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
              </svg>
              <span class="ml-4">{{ __('admin/menus.Members') }}</span>
          </a>
      </li>
      @endcan
      @can('contact_access')
      <li class="relative px-6 py-3">
          {!! request()->routeIs('adminContacts.*') ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
          <a class="inline-flex items-center w-full text-sm font-semibold {!! request()->routeIs('adminContacts.*') ? 'text-gray-800 dark:text-gray-100' : '' !!} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('adminContacts.index')}}">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                  </path>
              </svg>
              <span class="ml-4">{{ __('admin/menus.Contact') }}</span>
          </a>
      </li>
      @endcan
      @can('category_access')
      <li class="relative px-6 py-3">
          {!! request()->routeIs('categories.*') ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
          <a class="inline-flex items-center w-full text-sm font-semibold {!! request()->routeIs('categories.*') ? 'text-gray-800 dark:text-gray-100' : '' !!} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('categories.index')}}">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                  </path>
              </svg>
              <span class="ml-4">{{ __('admin/menus.Category') }}</span>
          </a>
      </li>
      @endcan
      @can('blog_access')
      <li class="relative px-6 py-3">
          {!! request()->routeIs('blogs.*') ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
          <a class="inline-flex items-center w-full text-sm font-semibold {!! request()->routeIs('blogs.*') ? 'text-gray-800 dark:text-gray-100' : '' !!} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('blogs.index')}}">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                  </path>
              </svg>
              <span class="ml-4">{{ __('admin/menus.Blog') }}</span>
          </a>
      </li>
      @endcan
      @can('permission_access')
      <li class="relative px-6 py-3">
          {!! request()->routeIs('permissions.*') ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
          <a class="inline-flex items-center w-full text-sm font-semibold {!! request()->routeIs('permissions.*') ? 'text-gray-800 dark:text-gray-100' : '' !!} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('permissions.index')}}">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                  </path>
              </svg>
              <span class="ml-4">{{ __('admin/menus.Permission') }}</span>
          </a>
      </li>
      @endcan
      @can('program_access')
      <div @click.away="open = false" class="relative" x-data="{ open: {!! request()->routeIs('categories.*') ? 'true' : 'false' !!} }">
        <a @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark:bg-transparent dark:focus:text-white dark:hover:text-white dark:focus:bg-gray-600 dark:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {!! request()->routeIs('categories.*') ? 'text-gray-800 dark:text-gray-100' : '' !!} {!! request()->routeIs('categories.*') ? 'text-gray-800 dark:text-gray-100' : '' !!}">
          <span class="ml-4">{{ __('admin/menus.Program') }}</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
          <li class="relative px-6 py-3">
            {!! request()->routeIs('categories.*') ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a class="inline-flex items-center w-full text-sm font-semibold {!! request()->routeIs('categories.*') ? 'text-gray-800 dark:text-gray-100' : '' !!} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('categories.index')}}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                    <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                </svg>
                <span class="ml-4">{{ __('admin/menus.Category') }}</span>
            </a>
          </li>

          <li class="relative px-6 py-3">
            {!! request()->routeIs('charts') ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a class="inline-flex items-center w-full text-sm font-semibold {!! request()->routeIs('charts') ? 'text-gray-800 dark:text-gray-100' : '' !!} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('charts')}}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                    <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                </svg>
                <span class="ml-4">{{ __('admin/menus.Charts') }}</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
              {!! request()->routeIs('buttons') ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
              <a class="inline-flex items-center w-full text-sm font-semibold {!! request()->routeIs('buttons') ? 'text-gray-800 dark:text-gray-100' : '' !!} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('buttons')}}">
                  <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                      </path>
                  </svg>
                  <span class="ml-4">{{ __('admin/menus.Buttons') }}</span>
              </a>
          </li>
          <li class="relative px-6 py-3">
              {!! request()->routeIs('modals') ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
              <a class="inline-flex items-center w-full text-sm font-semibold {!! request()->routeIs('modals') ? 'text-gray-800 dark:text-gray-100' : '' !!} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('modals')}}">
                  <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                      </path>
                  </svg>
                  <span class="ml-4">{{ __('admin/menus.Modals') }}</span>
              </a>
          </li>
          <li class="relative px-6 py-3">
              {!! request()->routeIs('tables') ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
              <a class="inline-flex items-center w-full text-sm font-semibold {!! request()->routeIs('tables') ? 'text-gray-800 dark:text-gray-100' : '' !!} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('tables')}}">
                  <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                  </svg>
                  <span class="ml-4">{{ __('admin/menus.Tables') }}</span>
              </a>
          </li>
          <li class="relative px-6 py-3">
              {!! request()->routeIs('calendar') ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
              <a class="inline-flex items-center w-full text-sm font-semibold {!! request()->routeIs('calendar') ? 'text-gray-800 dark:text-gray-100' : '' !!} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('calendar')}}">
                  <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                  </svg>
                  <span class="ml-4">{{ __('admin/menus.Calendar') }}</span>
              </a>
          </li>
          <li class="relative px-6 py-3">
            {!! request()->routeIs('forms') ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold {!! request()->routeIs('forms') ? 'text-gray-800 dark:text-gray-100' : '' !!} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('forms')}}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                    </path>
                </svg>
                <span class="ml-4">{{ __('admin/menus.Forms') }}</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
              {!! request()->routeIs('cards') ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
              <a class="inline-flex items-center w-full text-sm font-semibold {!! request()->routeIs('cards') ? 'text-gray-800 dark:text-gray-100' : '' !!} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('cards')}}">
                  <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                      </path>
                  </svg>
                  <span class="ml-4">{{ __('admin/menus.Cards') }}</span>
              </a>
          </li>
        </div>
      </div>
      @endcan
    </ul>
  </div>
