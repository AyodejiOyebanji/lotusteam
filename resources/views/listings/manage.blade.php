@extends('layout')
@section('content')

<table class="table mt-5">

    <tbody>

        @unless ($listings->isEmpty())
        @foreach ($listings as $listing )
        <tr>

          <td>{{$listing->title}}</td>
          <td><a href="/listings/{{$listing->id}}/edit" class="btn btn-success">Edit</a></td>
          <td>
            <form method="POST" action="/listings/{{$listing->id}}">
                @csrf
                @method("DELETE")
                    <button class="btn btn-danger ms-2" >Delete</button>
            </form>
        </tr>


        @endforeach
        @else

        <tr>

            <td><p>No Listing Available</p></td>

          </tr>

        @endunless

    </tbody>
  </table>

@endsection
