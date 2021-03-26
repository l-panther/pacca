@if(count($errors) > 0)
    @foreach ($$errors->all() as $error)
        <div class="w3-container w3-red">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="w3-container w3-green">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="w3-container w3-red">
        {{session('error')}}
    </div>
@endif