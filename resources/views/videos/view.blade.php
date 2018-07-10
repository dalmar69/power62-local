@extends('layouts.home')
@section('content')

<div class="video">
<!-- Youtube video -->

	<div class="row">

        <h1 class="header header-shadow">
            @if($_SERVER['REQUEST_URI'] == "/videos/1")
                THE <br> POWER 62 1.0 <br> GAMEPLAY
            @endif
            @if($_SERVER['REQUEST_URI'] == "/videos/2")
                THE SANDOONIANS OF ERAX <br>
                ARE GETTING READY TO WEAPONIZE <br>
                THE 'EPC' <br>
                SEE WHY WE'ER ALL AT RISK.
            @endif
        </h1>
		<iframe class="iframe" src="https://www.youtube.com/embed/VCnqFcr-2FE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
    </div>
</div>

<script>
    document.body.style.overflow = "hidden";
</script>
@endsection