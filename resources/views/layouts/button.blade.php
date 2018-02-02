<form method="get" action="/{{ $page }}/create">
    {{ csrf_field() }}
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
</form>