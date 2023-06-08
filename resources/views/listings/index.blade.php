@extends('layout')
@section('content')



<style>
    .gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724#ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
</style>



{{-- @if (count($listings) == 0)
        <p>No listing found</p>
@endif --}}

@unless (count($listings) == 0)
<div class="row row-cols-1 row-cols-md- ">
    @foreach ($listings as $listing)
        <x-listing-card :listing="$listing"/>
    @endforeach

</div>
@else
<div>
    <h1 class="text-center mt-5">No listing found</h1>

</div>

@endunless

<div class="mt-2 p-2">
{{-- {{$listings->links()}} --}}
</div>

@endsection
