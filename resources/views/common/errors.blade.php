@if ($errors->any())
    <div class="alert alert-danger col-md-5">
        @foreach ($errors->all() as $error)
            <li> {{$error}} </li>
        @endforeach
    </div>
@endif