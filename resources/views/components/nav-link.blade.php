<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
@props([
'active'=>false,
'mobile'=>false
])
<a {{ $attributes }}
    class="{{ $active ?'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md  px-3 py-2 {{ $mobile ? 'block text-base font-medium':'text-sm font-medium' }}"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>