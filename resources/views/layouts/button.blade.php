<form method="get" action="/{{ $action }}">
    {{ csrf_field() }}
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ $btn_name }}</button>
    </div>
</form>
