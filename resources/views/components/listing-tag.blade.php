@props(['tagsCsv'])
@php
$tags = explode(',', $tagsCsv);
@endphp

<ul class="d-flex" style="list-style: none">
    @foreach ($tags as $tag )

    <li class="p-2 m-2 rounded text-light" style="background-color: #343a40;">
        <a href="/?tag={{$tag}}" class="text-light text-decoration-none">{{$tag}}</a>
      </li>

    @endforeach

 </ul>
