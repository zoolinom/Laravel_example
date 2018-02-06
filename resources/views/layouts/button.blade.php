@if(!empty($delete))
    <form method="post" action="/{{ $action }}">
        {{ method_field('DELETE') }}
@else
    <form method="get" action="/{{ $action }}">
        @endif
    {{ csrf_field() }}
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ $btn_name }}</button>
    </div>
    </form>
    </form>
