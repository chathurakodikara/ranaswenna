<button {{ $attributes->merge([ 'class' => 'bg-indigo-700 px-4 py-2 rounded focus:outline-none hover:bg-indigo-600 transition ease-in-out text-white font-bold leading-relaxed active:bg-indigo-800 disabled:opacity-25 ']) }} type="submit" >

    {{ $slot }}

</button>
