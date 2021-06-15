<x-app-layout title="{{ __('admin/menus.Contact') }}">
    <div class="container grid px-6 mx-auto">
        <header class="my-4 flex items-center justify-between mb-4">
            <h2 class="text-lg leading-6 font-semibold text-gray-700 dark:text-gray-200">{{ __('admin/menus.Contact') }}</h2>
        </header>
        @if ($message = Session::get('success'))
            <div class="min-w-0 p-4 text-white bg-green-600 rounded-lg shadow-xs">
                <p>
                    {{ $message }}
                </p>
            </div>
        @endif
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <div class="relative text-gray-500 focus-within:text-green-600">
                    <div class="absolute inset-y-0 flex items-center pl-2">
                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-green-300 focus:outline-none focus:shadow-outline-green form-input" type="text" id="myInput" onkeyup="myFunction()" placeholder="{{ __('admin/dashboard.Search for projects') }}" aria-label="Search" />
                </div>
                <table class="w-full whitespace-no-wrap"  id="myTable">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">{{ __('admin/users.ID') }}</th>
                            <th class="px-4 py-3">{{ __('admin/users.Name') }}</th>
                            <th class="px-4 py-3">{{ __('admin/users.Email') }}</th>
                            <th class="px-4 py-3">{{ __('admin/users.Comment') }}</th>
                            <th class="px-4 py-3">{{ __('admin/users.Action') }}</th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($contacts as $contact)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                {{ $contact->id }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$contact->name}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                               {{ $contact->email }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                               {{substr($contact->Comment,0 , 60)}}...
                            </td>
                            <td class="px-4 py-3">          
                                <div class="flex items-center space-x-4 text-sm">
                                    <a class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-green-600 rounded-lg focus:outline-none focus:shadow-outline-gray" href="{{ route('adminContacts.show', $contact->id) }}">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path 
                                                d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 5c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm0-2c-2.209 0-4 1.792-4 4 0 2.209 1.791 4 4 4s4-1.791 4-4c0-2.208-1.791-4-4-4z">
                                            </path>
                                        </svg>

                                    </a>
                                    <a class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-green-600 rounded-lg focus:outline-none focus:shadow-outline-gray" href="{{ route('adminContacts.edit', $contact->id) }}">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                            </path>
                                        </svg>
                                    </a>
                                   <form class="inline-block" action="{{ route('adminContacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="px-2 py-1 font-semibold leading-tight text-red-700 rounded-full dark:bg-red-700 dark:text-red-100">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                                 </form>
                            </td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>
               {{-- 
                {{$adminContacts->links()}}
                </span>
                  <style>
                  .w-5{
                    display: none;
                  }
                  </style>
                --}}
            </div>
        </div>
    </div>
    <script>
    function myFunction() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>
</x-app-layout>