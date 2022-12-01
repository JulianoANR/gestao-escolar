@props([
    'blue' => null,
    'cyan' => null,
    'emerald' => null,
    'gray' => null,
    'green' => null,
    'indigo' => null,
    'orange' => null,
    'purple' => null,
    'red' => null,
    'rose' => null,
    'sky' => null,
    'slate' => null,
    'stone' => null,
    'teal' => null,
    'violet' => null,
    'black' => null,
])

<a
{{

$attributes->class([
'px-3 py-2 rounded-md text-sm text-center leading-4 font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 hover:text-white',
'text-blue-700 border border-blue-700 focus:ring-blue-700 hover:bg-blue-800' => $blue,
'text-cyan-700 border border-cyan-700 focus:ring-cyan-700 hover:bg-cyan-800' => $cyan,
'text-emerald-700 border border-emerald-700 focus:ring-emerald-700 hover:bg-emerald-800' => $emerald,
'text-gray-700 border border-gray-700 focus:ring-gray-700 hover:bg-gray-800' => $gray,
'text-green-700 border border-green-700 focus:ring-green-700 hover:bg-green-800' => $green,
'text-indigo-700 border border-indigo-700 focus:ring-indigo-700 hover:bg-indigo-800' => $indigo,
'text-orange-700 border border-orange-700 focus:ring-orange-700 hover:bg-orange-800' => $orange,
'text-purple-700 border border-purple-700 focus:ring-purple-700 hover:bg-purple-800' => $purple,
'text-red-700 border border-red-700 focus:ring-red-700 hover:bg-red-800' => $red,
'text-rose-700 border border-rose-700 focus:ring-rose-700 hover:bg-rose-800' => $rose,
'text-sky-700 border border-sky-700 focus:ring-sky-700 hover:bg-sky-800' => $sky,
'text-slate-700 border border-slate-700 focus:ring-slate-700 hover:bg-slate-800' => $slate,
'text-stone-700 border border-stone-700 focus:ring-stone-700 hover:bg-stone-800' => $stone,
'text-teal-700 border border-teal-700 focus:ring-teal-700 hover:bg-teal-800' => $teal,
'text-violet-700 border border-violet-700 focus:ring-violet-700 hover:bg-violet-800' => $violet,
])
}}>
{{ $slot }}
</a>
