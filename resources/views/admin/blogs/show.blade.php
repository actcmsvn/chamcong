<x-app-layout title="{{ __('admin/menus.Blog') }}">
    <div class="container grid px-6 mx-auto">
        <header class="my-4 flex items-center justify-between mb-4">
            <h2 class="text-lg leading-6 font-semibold text-gray-700 dark:text-gray-200">{{ __('Blog detail') }}</h2>
            <a class="hover:bg-light-blue-200 hover:text-light-blue-800 group flex items-center rounded-md bg-light-blue-100 text-light-blue-600 text-sm font-semibold px-4 py-2 dark:bg-green-700 dark:text-green-100 dark:text-gray-200" href="{{ route('blogs.index') }}">
              <svg class="group-hover:text-light-blue-600 text-light-blue-500 mr-2" width="26" height="20" fill="currentColor">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M26.105,21.891c-0.229,0-0.439-0.131-0.529-0.346l0,0c-0.066-0.156-1.716-3.857-7.885-4.59 c-1.285-0.156-2.824-0.236-4.693-0.25v4.613c0,0.213-0.115,0.406-0.304,0.508c-0.188,0.098-0.413,0.084-0.588-0.033L0.254,13.815 C0.094,13.708,0,13.528,0,13.339c0-0.191,0.094-0.365,0.254-0.477l11.857-7.979c0.175-0.121,0.398-0.129,0.588-0.029 c0.19,0.102,0.303,0.295,0.303,0.502v4.293c2.578,0.336,13.674,2.33,13.674,11.674c0,0.271-0.191,0.508-0.459,0.562 C26.18,21.891,26.141,21.891,26.105,21.891z">
                </path>
              </svg>
              {{ __('Back') }}
            </a>
        </header>
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Title</span>
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md text-gray-700 dark:text-gray-200 dark:bg-gray-800">
                {{$blogs->title}}
            </div>
        </label>
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md text-gray-700 dark:text-gray-200 dark:bg-gray-800">
            <div class="grid grid-cols-2 gap-3">
                <div>
                    <img src="{{ Storage::url($blogs->img_path) }}" style="max-height:100px" ;>
                </div>
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        {{ $blogs->descriptions }}
                    </p>
                </div>
            </div>
        </div>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md text-gray-700 dark:text-gray-200 dark:bg-gray-800">            
            <p class="text-sm text-gray-600 dark:text-gray-400">
                {!! $blogs->contents !!}
            </p>
            <span class="text-sm text-gray-600 dark:text-gray-400">
                {!! $blogs->author !!}
            </span>
        </div>
    </div>
</x-app-layout>
