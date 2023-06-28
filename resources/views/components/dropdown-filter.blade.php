@props([
    'align' => 'right'
])

<div class="relative inline-flex" x-data="{ open: false }">
    <a
        class="btn bg-white flex items-center px-3 light:bg-slate-800 border-slate-200 hover:border-slate-300 light:border-slate-700 light:hover:border-slate-600 text-slate-500 hover:text-slate-600 light:text-slate-400 light:hover:text-slate-300"
        aria-haspopup="true"
        @click.prevent="open = !open"
        :aria-expanded="open"
    >
        <span class="sr-only">Filter</span><wbr>
        <svg class="w-4 h-4 fill-current item-center inline" viewBox="0 0 16 16">
            <path d="M9 15H7a1 1 0 010-2h2a1 1 0 010 2zM11 11H5a1 1 0 010-2h6a1 1 0 010 2zM13 7H3a1 1 0 010-2h10a1 1 0 010 2zM15 3H1a1 1 0 010-2h14a1 1 0 010 2z" />
        </svg>
    </a>
    <div
        class="w-60 origin-top-right z-10 absolute top-full left-0 right-auto text-center bg-white light:bg-slate-800 border border-slate-200 light:border-slate-700 pt-1.5 rounded shadow-lg overflow-hidden mt-1 {{$align === 'right' ? 'md:left-auto md:right-0' : 'md:left-0 md:right-auto'}}"
        @click.outside="open = false"
        @keydown.escape.window="open = false"
        x-show="open"
        x-transition:enter="transition ease-out duration-200 transform"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-out duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-cloak
    >

    <div class="p-3">
        <label for="input-group-search" class="sr-only">Search</label>
        <div class="relative">

          <input type="text" id="input-group-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 light:bg-gray-600 light:border-gray-500 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" placeholder="Search user">
          <div class="px-2 absolute inset-0 right-auto flex items-center pointer-events-none">
            <svg class="w-5 h-5 text-gray-500 light:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
          </div>
        </div>
      </div>
      <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 light:text-gray-200" aria-labelledby="dropdownSearchButton">
        <li>
          <div class="flex items-center pl-2 rounded hover:bg-gray-100 light:hover:bg-gray-600">
            <input id="checkbox-item-11" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 light:focus:ring-blue-600 light:ring-offset-gray-700 light:focus:ring-offset-gray-700 focus:ring-2 light:bg-gray-600 light:border-gray-500">
            <label for="checkbox-item-11" class="w-full text-start py-2 ml-2 text-sm font-medium text-gray-900 rounded light:text-gray-300">Bonnie Green</label>
          </div>
        </li>
        <li>
          <div class="flex items-center pl-2 rounded hover:bg-gray-100 light:hover:bg-gray-600">
              <input checked id="checkbox-item-12" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 light:focus:ring-blue-600 light:ring-offset-gray-700 light:focus:ring-offset-gray-700 focus:ring-2 light:bg-gray-600 light:border-gray-500">
              <label for="checkbox-item-12" class="w-full text-start py-2 ml-2 text-sm font-medium text-gray-900 rounded light:text-gray-300">Jese Leos</label>
            </div>
        </li>
        <li>
          <div class="flex items-center pl-2 rounded hover:bg-gray-100 light:hover:bg-gray-600">
            <input id="checkbox-item-13" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 light:focus:ring-blue-600 light:ring-offset-gray-700 light:focus:ring-offset-gray-700 focus:ring-2 light:bg-gray-600 light:border-gray-500">
            <label for="checkbox-item-13" class="w-full text-start py-2 ml-2 text-sm font-medium text-gray-900 rounded light:text-gray-300">Michael Gough</label>
          </div>
        </li>
        <li>
          <div class="flex items-center pl-2 rounded hover:bg-gray-100 light:hover:bg-gray-600">
            <input id="checkbox-item-14" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 light:focus:ring-blue-600 light:ring-offset-gray-700 light:focus:ring-offset-gray-700 focus:ring-2 light:bg-gray-600 light:border-gray-500">
            <label for="checkbox-item-14" class="w-full text-start py-2 ml-2 text-sm font-medium text-gray-900 rounded light:text-gray-300">Robert Wall</label>
          </div>
        </li>
        <li>
          <div class="flex items-center pl-2 rounded hover:bg-gray-100 light:hover:bg-gray-600">
            <input id="checkbox-item-15" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 light:focus:ring-blue-600 light:ring-offset-gray-700 light:focus:ring-offset-gray-700 focus:ring-2 light:bg-gray-600 light:border-gray-500">
            <label for="checkbox-item-15" class="w-full text-start py-2 ml-2 text-sm font-medium text-gray-900 rounded light:text-gray-300">Joseph Mcfall</label>
          </div>
        </li>
        <li>
          <div class="flex items-center pl-2 rounded hover:bg-gray-100 light:hover:bg-gray-600">
            <input id="checkbox-item-16" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 light:focus:ring-blue-600 light:ring-offset-gray-700 light:focus:ring-offset-gray-700 focus:ring-2 light:bg-gray-600 light:border-gray-500">
            <label for="checkbox-item-16" class="w-full text-start py-2 ml-2 text-sm font-medium text-gray-900 rounded light:text-gray-300">Leslie Livingston</label>
          </div>
        </li>
              <li>
          <div class="flex items-center pl-2 rounded hover:bg-gray-100 light:hover:bg-gray-600">
            <input id="checkbox-item-17" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 light:focus:ring-blue-600 light:ring-offset-gray-700 light:focus:ring-offset-gray-700 focus:ring-2 light:bg-gray-600 light:border-gray-500">
            <label for="checkbox-item-17" class="w-full text-start py-2 ml-2 text-sm font-medium text-gray-900 rounded light:text-gray-300">Roberta Casas</label>
          </div>
        </li>
      </ul>
      <a href="#" class="flex items-center p-3 text-sm font-medium text-red-600 border-t border-gray-200 rounded-b-lg bg-gray-50 light:border-gray-600 hover:bg-gray-100 light:bg-gray-700 light:hover:bg-gray-600 light:text-red-500 hover:underline">
        <svg class="w-5 h-5 mr-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 6a3 3 0 11-6 0 3 3 0 016 0zM14 17a6 6 0 00-12 0h12zM13 8a1 1 0 100 2h4a1 1 0 100-2h-4z"></path></svg>
        Delete filter
    </a>
    </div>
</div>
