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



<div class="card mb-3" style="max-width: 100%;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{$listing->logo? asset('storage/' .$listing->logo): asset('images/laravel img 2.png')}}" class="img-fluid rounded-start" alt="...">
           </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title" > {{$listing->title}} </h4>
          <h5 class="card-title">{{$listing->company}}</h5>
          <p class="text-muted"> {{$listing['description']}}</p>
          <x-listing-tag :tagsCsv="$listing->tags"/>
          <p class="card-text"><small class="text-muted">{{$listing->location}}</small></p>

          <div>
            <a href="mailto:{{$listing->email}}" target="_blank" class="btn "  style=" background:#ee7724; color:white"> Contact Employer</a>
            <a href="{{$listing->website}}" target="_blank" class="btn btn-outline-warning " style="color: black"> Visit Website</a>
          </div>
        </div>
    </div>
    <div class="d-flex">
        <a href="/listings/{{$listing->id}}/edit" class="btn " style="width:5%; background:#ee7724; color:white">Edit</a>
        <form method="POST" action="/listings/{{$listing->id}}">
            @csrf
            @method("DELETE")
                <button class="btn btn-danger ms-2" >Delete</button>
        </form>

    </div>
    </div>
  </div>


@endsection
