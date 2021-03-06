@extends('layouts.app')

@section('content')
    <div class="container">
      <br />
    <a class="btn btn-primary" href="{{ url('create')}}" role="button">Create new Link</a>
    	    <br /><br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Url</th>
        <th>Description</th>

        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($links as $link)

      <tr>
        <td>{{$link['id']}}</td>
        <td>{{$link['title']}}</td>

        <td>{{$link['url']}}</td>
        <td>{{$link['description']}}</td>


        <td><a href="{{action('LinkController@edit', $link['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('LinkController@destroy', $link['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
