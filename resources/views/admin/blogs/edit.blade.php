<x-app-layout title="{{ __('admin/menus.Blog') }}">
    <div class="container grid px-6 mx-auto">
        <header class="my-4 flex items-center justify-between mb-4">
            <h2 class="text-lg leading-6 font-semibold text-gray-700 dark:text-gray-200">{{ __('Edit Blog') }}</h2>
            <a class="hover:bg-light-blue-200 hover:text-light-blue-800 group flex items-center rounded-md bg-light-blue-100 text-light-blue-600 text-sm font-semibold px-4 py-2 dark:bg-green-700 dark:text-green-100 dark:text-gray-200" href="{{ route('blogs.index') }}">
              <svg class="group-hover:text-light-blue-600 text-light-blue-500 mr-2" width="26" height="20" fill="currentColor">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M26.105,21.891c-0.229,0-0.439-0.131-0.529-0.346l0,0c-0.066-0.156-1.716-3.857-7.885-4.59 c-1.285-0.156-2.824-0.236-4.693-0.25v4.613c0,0.213-0.115,0.406-0.304,0.508c-0.188,0.098-0.413,0.084-0.588-0.033L0.254,13.815 C0.094,13.708,0,13.528,0,13.339c0-0.191,0.094-0.365,0.254-0.477l11.857-7.979c0.175-0.121,0.398-0.129,0.588-0.029 c0.19,0.102,0.303,0.295,0.303,0.502v4.293c2.578,0.336,13.674,2.33,13.674,11.674c0,0.271-0.191,0.508-0.459,0.562 C26.18,21.891,26.141,21.891,26.105,21.891z">
                </path>
              </svg>
              {{ __('Back') }}
            </a>
        </header>
        @if ($errors->any())
            <div>
                <div class="font-medium text-red-600">Whoops! Something went wrong.</div>

                <ul class="mt-3 text-sm text-red-600 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{route('blogs.update', $blogs->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input hidden type="text" name="created_by" id="created_by" required value="{{ auth()->id() }}">
            <div class="row">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">{{ __('admin/contents.title') }}</span>
                    <input id="title" name="title" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" value="{{$blogs->title}}" onkeyup="ChangeToSlug();" />
                </label>
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">{{ __('admin/contents.slug') }}</span>
                    <input id="slug" name="slug" value="{{ old('slug', $blogs->slug) }}" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                </label>

                <div class="grid grid-cols-3 gap-3">
                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Viewed</span>
                            <div class="relative text-gray-500 focus-within:text-green-600 dark:focus-within:text-green-400">
                                <input class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray form-input" name="views" value="{{ old('views', $blogs->views) }}" />
                                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                            viewBox="0 0 24 24">
                                        <path 
                                            d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 5c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm0-2c-2.209 0-4 1.792-4 4 0 2.209 1.791 4 4 4s4-1.791 4-4c0-2.208-1.791-4-4-4z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </label>

                        <label class="flex items-center dark:text-gray-400">
                            <input class="text-green-600 form-checkbox focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray switch-input" type="checkbox" @if (old('is_published', $blogs->is_published) == 1) checked @endif name="is_published" />
                            <input hidden type="text" name="is_published" id="is_published" value="{{ $blogs->is_published }}">
                            <span class="ml-2">{{ __('admin/contents.is_published') }}
                            </span>
                        </label>
                        <br />
                        <label class="flex items-center dark:text-gray-400">
                            <input class="text-green-600 form-checkbox focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray switch-input" type="checkbox"  @if (old('is_featured', $blogs->is_featured) == 1) checked @endif name="is_featured" />
                            <input hidden type="text" name="is_featured" id="is_featured" value="{{ $blogs->is_featured }}">
                            <span class="ml-2">{{ __('admin/contents.is_featured') }}
                            </span>
                        </label>
                    </div>
                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">{{ __('admin/menus.Tag') }}</span>
                            <div class="relative text-gray-500 focus-within:text-green-600 dark:focus-within:text-green-400">
                                <select name="tags[]" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray" multiple="multiple">
                                   @foreach($tags as $tag)
                                        <option value="{{$tag->id}}" @if ($selectedTags->contains($tag->id)) selected @endif>{{$tag->name}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </label>
                    </div>
                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">{{ __('admin/menus.Category') }}</span>
                            <div class="relative text-gray-500 focus-within:text-green-600 dark:focus-within:text-green-400">
                                <select name="category_id" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray">
                                   @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </label>
                    </div>
                </div>

                <label class="block mt-1 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">{{ __('admin/contents.description') }}</span>
                    <textarea name="description" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray" rows="3">{{ old('description', $blogs->description) }}</textarea>
                </label>
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">{{ __('admin/contents.content') }}</span>
                    <textarea name="contents" class="contents block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray" rows="15">
                    @if(!old('contents'))
                    {!! $blogs->contents !!}
                    @endif
                    {!! old('contents') !!}
                    </textarea>
                    <script src="{{ asset('vendor/tinymce/tinymce.js') }}"></script>
                    <script>
                        tinymce.init({
                          selector: 'textarea.contents',  // change this value according to your HTML
                          plugins: [ "spellchecker code autolink link image fullscreen searchreplace wordcount visualblocks visualchars insertdatetime media table paste textcolor textpattern emoticons media lists" ],
                          toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link unlink image | code | forecolor backcolor | emoticons",
                          image_advtab: true,
                                    skin: "oxide-dark",
                                    content_css: "dark",
                                    height: 400,
                          /* content_css : "/css/style.css", */
                                    relative_urls: false,
                          convert_urls: false,
                          remove_script_host : false,
                          font_formats: "Comfortaa; Arial Black=arial black,avant garde; Courier New=courier new,courier; Lato Black=lato; Roboto=roboto;",
                          icons: "thin",
                        });
                    </script>
                </label>
            </div>

            <div class="row">
                <div class="col-6 text-gray-700 dark:text-gray-400">
                <label>Old Image</label>
                <div><img src="{{ Storage::url($blogs->img_path) }}" style="max-height:100px" ;></div>
                    <label>Add new Image</label>
                    <input type="file" name="img_path" class="form-control" value="{{ $blogs->img_path }}">
                    <br>
                </div>
            </div>
        
            <div class="mt-4">
              <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green">
                Submit
                </button>
            </div>
        </form>
    </div>
</x-app-layout>