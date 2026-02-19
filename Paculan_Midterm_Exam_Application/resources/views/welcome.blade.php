<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Paculan | Tech Haven</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-950 text-slate-200 min-h-screen selection:bg-cyan-500/30">

    <div class="fixed top-0 -left-4 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
    <div class="fixed top-0 -right-4 w-72 h-72 bg-cyan-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>

    <div class="relative max-w-6xl mx-auto px-6 py-12">
        <header class="flex justify-between items-center mb-16">
            <div>
                <h1 class="text-4xl font-extrabold tracking-tight text-white bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 to-purple-500">
                    TechVault.
                </h1>
                <p class="text-slate-400 mt-2">Paculan Midterm Exam Application</p>
            </div>
            <div class="hidden md:block">
                <span class="px-4 py-2 rounded-full border border-slate-700 text-xs font-medium text-slate-300 backdrop-blur-md">
                    Laravel v{{ App::VERSION() }}
                </span>
            </div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($products as $product)
            <div class="group relative bg-slate-900/50 border border-slate-800 rounded-3xl p-8 backdrop-blur-xl hover:border-cyan-500/50 transition-all duration-500 hover:-translate-y-2">
                <div class="absolute top-6 right-6">
                    <span class="flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full {{ $product['status'] == 'In Stock' ? 'bg-cyan-400' : 'bg-red-400' }} opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 {{ $product['status'] == 'In Stock' ? 'bg-cyan-500' : 'bg-red-500' }}"></span>
                    </span>
                </div>

                <div class="mb-8">
                    <p class="text-xs font-bold text-cyan-500 uppercase tracking-widest mb-1">{{ $product['brand'] }}</p>
                    <h2 class="text-2xl font-bold text-white group-hover:text-cyan-400 transition-colors">{{ $product['name'] }}</h2>
                </div>

                <div class="flex items-end justify-between mt-auto">
                    <div>
                        <p class="text-slate-500 text-xs uppercase font-semibold tracking-tighter">Current Price</p>
                        <p class="text-3xl font-black text-white">${{ number_format($product['price']) }}</p>
                    </div>
                    
                    <button class="bg-white text-slate-950 p-3 rounded-2xl font-bold hover:bg-cyan-400 transition-colors group-hover:scale-110 duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>
                </div>
            </div>
            @endforeach
        </div>

        <footer class="mt-24 text-center border-t border-slate-900 pt-8">
            <p class="text-slate-600 text-sm italic">
                Developed for Midterm Examination &bull; 2026
            </p>
        </footer>
    </div>

</body>
</html>