@extends('layouts.backend')

@section('title', 'Role Alert')

@section('content')
    <div class="min-w-screen min-h-screen flex flex-col items-center justify-center">
        @if (auth()->user())            
            <p class="text-black text-4xl">Maaf Role Tidak Sesuai</p>
        @else
            <p class="text-black text-4xl">Maaf Anda Belum Login</p>
        @endif
        <p>Redirecting ... <i class="fa-solid fa-spinner animate-spin"></i></p>
    </div>
@endsection

<script>
    setTimeout(function () {
        window.location.href = "/";
    }, 3000);
</script>