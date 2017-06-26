@extends('layouts.app')


@section('content')
<div class="container">
    <h2>Add Another Meal</h2>

    <hr>

    <form action="/users/{{$user->id}}/meals" method="POST">

        {{csrf_field()}}

        <input type="hidden" name="_token" value="wrDAeeBZ34F1r8hBQNUkkW6voaypR7qYjgFLtJWO">

        <div class="form-group row">
            <label for="name" class="col-sm-1 form-control-label">Name</label>
            <div class="col-sm-10">
                <input name="name" type="text" class="form-control" placeholder="Meal Name" required="">
            </div>
            <div class="col-sm-1">
                <button type="submit" value="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </div>

    </form>
</div>
@endsection