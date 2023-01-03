<link rel="stylesheet" href="{{ asset('assets/global/css/iziToast.min.css') }}">
<script src="{{ asset('assets/global/js/iziToast.min.js') }}"></script>
@if(session()->has('notify'))
    @foreach(session('notify') as $msg)
        <script> 
            "use strict";
            iziToast.success({message:"{{ $msg }}", position: "topRight"}); 
        </script>
    @endforeach
@endif

@if ($errors->any())
    @php
        $collection = collect($errors->all());
        $errors = $collection->unique();
    @endphp

    <script>
        "use strict";
        @foreach ($errors as $error)
        iziToast.error({
            message: '{{ __($error) }}',
            position: "topRight"
        });
        @endforeach
    </script>

@endif
<script>
    "use strict";
    function notify(message) {
        iziToast.success({
            message: message,
            position: "topRight"
        });
    }

    function errorMessage(message) {
        iziToast.error({
            message: message,
            position: "topRight"
        });
    }
</script>
