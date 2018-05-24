@extends('template')


@section('content')
<div class="container">
<h1>{{$user->name}} Profile</h1>
<p> See what {{$user->name}} has been up to on larael answers </p>
<hr>

<div class="row">
    <div class="col-md-6">
        <h3>Questions</h3>
        @foreach ($user->questions as $question)
            <div class="panel panel-default">
                <div class="panel-body">
                <h4>{{$question->title}}</h4>
                </div>
            </div>
            <div class="panel-footer">
            <a href="{{route('questions.show',$question->id)}}" class="btn btn-link"> View Question</a>
            </div>
        @endforeach
    </div>
    <div class="col-md-6">
        <h3>Answers</h3>
                <!-- display all answers the user has submitted -->
                @foreach ($user->answers as $answer)
                <div class="panel panel-default">
                  <div class="panel-heading">
                    {{ $answer->question->title }}
                  </div>
                  <div class="panel-body">
                    <p>
                      <small>{{ $user->name }}'s answer:</small><br />
                      {{ $answer->content }}
                    </p>
                    {{-- <a href="{{ route('questions.show', $question->id) }}" class="btn btn-primary btn-sm">View Question</a> --}}
                  </div>
                </div>
              @endforeach
        </div>
</div>
</div>

@endsection