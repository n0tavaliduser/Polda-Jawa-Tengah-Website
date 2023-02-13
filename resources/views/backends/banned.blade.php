@extends('layouts.backend')

@section('title', 'Role Alert')

@section('content')
    <div class="min-w-screen min-h-screen flex flex-col items-center justify-center">
        <p class="text-black text-4xl">Akun anda terkunci</p>
        <p>Redirecting ... <i class="fa-solid fa-spinner animate-spin"></i></p>
    </div>
    <form id="logoutForm" method="post" action="{{ route('logout') }}">
        @csrf
    </form>
@endsection

<script>
    setTimeout(function () {
        document.forms['logoutForm'].submit();
    }, 3000);
</script>