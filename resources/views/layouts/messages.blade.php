@if ($errors->any())

<div class="alert alert-danger fixed-top" style="margin-top: 70px;">

    <ul>
        @foreach ($errors->all() as $error)

        <li>
            {{$error}}
        </li>

        @endforeach
    </ul>
</div>
@endif

@if (session('status'))

<div class="alert alert-success fixed-top" style="margin-top: 70px;">

    {{session('status')}}
</div>
@endif