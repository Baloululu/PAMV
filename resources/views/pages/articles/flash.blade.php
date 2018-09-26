@if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </div>
@endif