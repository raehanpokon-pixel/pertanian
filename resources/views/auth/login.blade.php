<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md">

        <div class="bg-white shadow-xl rounded-3xl p-8">

            <h1 class="text-3xl font-bold text-center text-slate-800 mb-8">
                Login Admin
            </h1>

            @if(session('error'))
                <div class="bg-red-100 border border-red-300 text-red-700 p-3 rounded-xl mb-4">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('login.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block text-slate-700 mb-2">
                        Username
                    </label>

                    <input
                        type="text"
                        name="username"
                        class="w-full border border-slate-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-slate-500"
                        required>
                </div>

                <div class="mb-6">
                    <label class="block text-slate-700 mb-2">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        class="w-full border border-slate-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-slate-500"
                        required>
                </div>

                <button
                    type="submit"
                    class="w-full bg-slate-800 hover:bg-slate-700 text-white py-3 rounded-xl font-semibold">

                    Login

                </button>

            </form>

        </div>

    </div>

</body>
</html>