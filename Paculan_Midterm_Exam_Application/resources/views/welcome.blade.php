<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paculan | Midterm Exam</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans leading-normal tracking-normal">

    <nav class="bg-white shadow-md p-6 mb-10">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold text-gray-800 tracking-tight">
                PACULAN <span class="text-blue-600">TECH STORE</span>
            </h1>
        </div>
    </nav>

    <main class="container mx-auto px-4">
        <h2 class="text-xl font-semibold text-gray-600 mb-6 italic">Featured Products</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 hover:shadow-lg transition-shadow duration-300">
                <div class="text-xs font-bold text-blue-500 uppercase mb-2">{{ $product['color'] }}</div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $product['name'] }}</h3>
                <p class="text-gray-500 text-sm mb-4">{{ $product['desc'] }}</p>
                <div class="flex justify-between items-center mt-4 pt-4 border-t border-gray-50">
                    <span class="text-xl font-black text-gray-900">${{ number_format($product['price'], 2) }}</span>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700">
                        View Details
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <footer class="mt-20 py-10 border-t border-gray-200 text-center text-gray-400 text-sm">
        Paculan Midterm Exam Application &copy; 2024
    </footer>

</body>
</html>