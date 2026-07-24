<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk | Dinas Kesehatan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-50 font-sans text-slate-900">
    <main class="flex min-h-screen items-center justify-center p-5">
        <section class="w-full max-w-md rounded-2xl border border-slate-200 bg-white p-7 shadow-xl shadow-slate-200/60 sm:p-9">
            <div class="mb-8 text-center">
                <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-blue-600 to-indigo-700 text-xl font-bold text-white">DK</div>
                <h1 class="text-2xl font-bold">Masuk ke akun Anda</h1>
                <p class="mt-2 text-sm text-slate-500">Sistem Informasi Dinas Kesehatan</p>
            </div>

            @if (session('status'))
                <div class="mb-5 rounded-lg bg-emerald-50 px-4 py-3 text-sm text-emerald-700">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf
                <div>
                    <label for="email" class="mb-1.5 block text-sm font-medium text-slate-700">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="email" class="w-full rounded-lg border @error('email') border-red-400 @else border-slate-300 @enderror px-3 py-2.5 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100">
                    @error('email')<p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="password" class="mb-1.5 block text-sm font-medium text-slate-700">Kata sandi</label>
                    <input id="password" name="password" type="password" required autocomplete="current-password" class="w-full rounded-lg border @error('password') border-red-400 @else border-slate-300 @enderror px-3 py-2.5 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100">
                    @error('password')<p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>@enderror
                </div>
                <label class="flex items-center gap-2 text-sm text-slate-600"><input type="checkbox" name="remember" value="1" class="rounded border-slate-300 text-blue-600 focus:ring-blue-500"> Ingat saya</label>
                <button type="submit" class="w-full rounded-lg bg-blue-600 px-4 py-2.5 font-semibold text-white transition hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-200">Masuk</button>
            </form>
            <p class="mt-7 text-center text-sm text-slate-600">Belum memiliki akun? <a href="{{ route('register') }}" class="font-semibold text-blue-600 hover:text-blue-700">Daftar sekarang</a></p>
        </section>
    </main>
</body>
</html>
