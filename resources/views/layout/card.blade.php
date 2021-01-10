<div class="card">
    <div class="card-body">
        @isset($cardTitle)
        <div class="card-header">
            {{ $cardTitle }}
        </div>
        @endisset

        <div class="card-body">
            <form action="{{ $formAction ?? '' }}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($formMethod)
                @method($formMethod)
                @endisset

                @yield('card-content')

            </form>
        </div>
    </div>
</div>
