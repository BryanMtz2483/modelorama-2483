@props(['tipo'])
@php
    switch($tipo){
        case 'info':
        $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
        break;

        case 'danger':
        $class = 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400';
        break;

        default:
        $class = 'text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text-gray-300';
        break;
    }
@endphp

<div class="container">
<div class="p-4 mb-4 text-sm rounded-lg {{ $class }}" role="alert">
        <span class="font-medium">Titulo</span> 
        {{ $slot }}
        
    </div>


</div>
