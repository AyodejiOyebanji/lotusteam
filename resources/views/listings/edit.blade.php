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

<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 mt-5">
        <div class="card  text-white">
          <div class="card-header text-dark">
            <h3 class="card-title">Edit </h3>
            <p>Edit: {{$listing->title}}</p>
          </div>
          <div class="card-body">
            <form action="/listings/{{$listing->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="form-group">
                <label for="jobTitle">Company Name</label>
                <input type="text" class="form-control" name="company" placeholder="Company Name" value="{{$listing->company}}">
                @error('company')
                <p class="text-danger ">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="jobTitle">Job Title</label>
                <input type="text" class="form-control" name="title"  placeholder="Enter job title" value="{{$listing->title}}">
                @error('title')
                <p class="text-danger ">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="jobTitle">Job Location</label>
                <input type="text" class="form-control" name="location"  placeholder="Enter job location" value="{{$listing->location}}">
                @error('location')
                <p class="text-danger ">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="jobTitle">Email</label>
                <input type="text" class="form-control" name="email"  placeholder="Email" value="{{$listing->email}}">
                @error('email')
                <p class="text-danger ">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="companyName">Website Url</label>
                <input type="text" class="form-control"   name="website" placeholder="Enter Website url" value="{{$listing->website}}">
                @error('website')
                <p class="text-danger ">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="companyName">Logo</label>
                <input type="file" class="form-control" name="logo"  value="{{old('logo')}}">
                <img src="{{$listing->logo? asset('storage/' .$listing->logo): asset('images/laravel img 2.png')}}" class="img-fluid rounded-start" alt="...">
                @error('logo')
                <p class="text-danger ">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="jobDescription">Job Description</label>
                <textarea class="form-control" name=" description" rows="5" placeholder="Enter job description" >{{$listing->description}}</textarea>
                @error('description')
                <p class="text-danger ">{{$message}}</p>
                @enderror
              </div>

              <div class="form-group">
                <label for="jobLocation">Tags</label>
                <input type="text" class="form-control" name="tags" placeholder="Tags (Separated by comma )" value="{{$listing->tags}}">
                @error('tags')
                <p class="text-danger ">{{$message}}</p>
                @enderror
              </div>

              <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2  w-100 mt-3 ">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
