@if (session('delete'))
    <div class="alert alert-danger">
        {{session('delete')}}
    </div>
@endif