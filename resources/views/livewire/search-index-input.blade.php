<div class="w-full md:w-96 inline-block relative ">
    <input type="" name=""
        class="leading-snug border-gray-400 focus:border-indigo-600 border focus:outline-none focus:bg-indigo-50 block w-full appearance-none bg-gray-100 text-lg text-gray-600 py-2 px-4 pl-8 rounded-lg "
        placeholder="Search.." wire:model.debounce.250ms='search_index'/>
        {{-- $emit('search_index') --}}
    <div class="pointer-events-none absolute pl-3 inset-y-0 left-0 flex items-center px-2 text-gray-400">

        <svg class="fill-current h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999">
            <path
                d="M508.874 478.708L360.142 329.976c28.21-34.827 45.191-79.103 45.191-127.309C405.333 90.917 314.416 0 202.666 0S0 90.917 0 202.667s90.917 202.667 202.667 202.667c48.206 0 92.482-16.982 127.309-45.191l148.732 148.732c4.167 4.165 10.919 4.165 15.086 0l15.081-15.082c4.165-4.166 4.165-10.92-.001-15.085zM202.667 362.667c-88.229 0-160-71.771-160-160s71.771-160 160-160 160 71.771 160 160-71.771 160-160 160z" />
        </svg>
    </div>
</div>
