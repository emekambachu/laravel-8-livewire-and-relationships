<div>
    @if(session()->has('message'))
        <div class="p-2 mb-2 bg-success text-white text-center">
            {{ session()->get('message') }}
        </div>
    @endif
</div>
