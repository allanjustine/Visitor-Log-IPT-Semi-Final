<div>
    @if (count($errors)>0)
        <div class="card-body help-block text-danger text-warning">
            Please fix the following:
            <ul>
                @foreach ($errors->all() as $err)
                <li>{{$err}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
