@props(['listing'])
<div class="card  m-1" style="max-width: 500px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{$listing->logo? asset('storage/' .$listing->logo): asset('images/laravel img 2.png')}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5  class="card-title" > <a href="/listings/{{$listing->id}}"  >{{$listing->title}}</a> </h5>

              <h6 class="card-title">{{$listing->company}}</h6>
             <x-listing-tag :tagsCsv="$listing->tags"/>
              <p class="card-text"><small class="text-muted">{{$listing->location}}</small></p>
              <h6  class="card-title text-end" > <a href="/listings/{{$listing->id}}"  >View More</a> </h6>
            </div>
          </div>
        </div>
      </div>
