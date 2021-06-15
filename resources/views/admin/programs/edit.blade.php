<x-app-layout title="{{ __('admin/menus.Program') }}">
    <div class="container grid px-6 mx-auto">
        <header class="my-4 flex items-center justify-between mb-4">
            <h2 class="text-lg leading-6 font-semibold text-gray-700 dark:text-gray-200">{{ __('Edit Program') }}</h2>
            <a class="hover:bg-light-blue-200 hover:text-light-blue-800 group flex items-center rounded-md bg-light-blue-100 text-light-blue-600 text-sm font-semibold px-4 py-2 dark:bg-green-700 dark:text-green-100 dark:text-gray-200" href="{{ route('program.index') }}">
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
    
        <form action="{{route('program.update', $programs->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input hidden type="text" name="updated_by" id="updated_by" required value="{{ auth()->id() }}">
            <div class="row">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Title</span>
                    <input name="title" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" value="{{$programs->title}}" />
                </label>
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">{{ __('admin/menus.Category') }}</span>
                    <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray" name="category_id">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </label>
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">views</span>
                    <input type="number" name="views" value="{{$programs->views}}" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                </label>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" @if (old('is_published', 1) == 1) checked @endif class="custom-control-input" name="is_published" id="is_published" onclick="$('#is_published').val($(this).prop('checked') ? '1' : '0');">
                    <label class="custom-control-label" for="is_published">is_published</label>
                    <input hidden type="text" name="is_published" id="is_published" value=" {{$programs->is_published}}">
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" @if (old('is_featured', 0) == 1) checked @endif class="custom-control-input" name="is_featured" id="is_featured" onclick="$('#is_featured').val($(this).prop('checked') ? '1' : '0');">
                    <label class="custom-control-label" for="is_featured">is_featured</label>
                    <input hidden type="text" name="is_featured" id="is_featured" value="{{ $programs->is_featured }}">
                </div>
                
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Slug</span>
                    <input id="slug" name="slug" value="{{ $programs->slug }}" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                </label>
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Description</span>
                    <textarea name="description" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray" rows="3">{{ old('description', $programs->description) }}</textarea>
                </label>
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Contents</span>
                    <textarea name="contents" class="contents block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray" rows="15">
                    @if(!old('contents'))
                    {!! $programs->contents !!}
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

            <div class="row text-gray-700 dark:text-gray-400">
                <div class="col-6 text-gray-700 dark:text-gray-400">
                    <label class="text-gray-700 dark:text-gray-400">Old Image
                        <img src="{{ Storage::url($programs->img_path) }}" style="max-height:100px" ;>
                    </label>
                    <label class="text-gray-700 dark:text-gray-400">Add new Image
                        <input type="file" name="img_path" class="form-control" value="{{ $programs->img_path }}">
                    </label>
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