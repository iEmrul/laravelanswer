@extends('template')

@section('content')
<div class="container">
    <h1>{{$question->title}}</h1>
    <p class="lead">
        {{$question->description}}
    </p>
    <p>
        Submitted by {{$question->user->name}} on {{$question->created_at->diffForHumans()}}
    </p>
    <hr />
    @if($question->answers->count() > 0 )
    @foreach($question->answers as $answer)
        <div class="panel panel-default">
            <div class="panel-body">
                <p>
                    {{$answer->content}}
                </p>
            <h6>Answer by {{$answer->user->name}}</h6>
            </div>
        </div>
        <hr />
    @endforeach
    @else
    <p>
        No Answers for this questions yet.
    </p>
    @endif

<form action="{{route('answers.store')}}" method="post">
    {{csrf_field() }}
    <h4>Submit your own answer</h4>
    <textarea class="form-control"  rows="4" name="content" ></textarea>
<input type="hidden" value= "{{$question->id}}" name="question_id" />
<button class="btn btn-primary"> Submit </button>
</form>
</div>


@endsection