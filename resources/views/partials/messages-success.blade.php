@if(session()->has('messages'))
    <div class="alert alert-success fade in">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>Following errors occurred:</h4>
        <ul>
            @foreach($messages->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif