<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levering Toevoegen</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-r from-green-400 via-blue-500 to-purple-600 text-white">

<nav class="bg-opacity-10 backdrop-filter backdrop-blur-lg py-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/overzicht-leverancier" class="text-2xl font-bold text-white hover:text-gray-200">
            Leveranciers
        </a>
        <a href="/" class="inline-block px-4 py-2 text-sm font-medium bg-blue-500 rounded-full shadow-md hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300">
            Terug naar Home
        </a>
    </div>
</nav>

<div class="container mx-auto mt-8 px-4">
    <h2 class="text-2xl font-bold mb-4">Levering Toevoegen</h2>

    <div class="bg-white bg-opacity-10 p-6 rounded-xl shadow-2xl backdrop-filter backdrop-blur-lg">
        <form action="{{ route('levering.store', ['leverancier' => $leverancier->id, 'product' => $product->id]) }}" method="POST" class="space-y-6">
            @csrf

            <div class="form-group">
                <label for="datum_levering" class="block text-sm font-medium text-gray-200">Datum Levering</label>
                <input type="date" name="datum_levering" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 bg-gray-800 text-white @error('datum_levering') border-red-500 @enderror">
                @error('datum_levering')
                <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="aantal" class="block text-sm font-medium text-gray-200">Aantal</label>
                <input type="number" name="aantal" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 bg-gray-800 text-white @error('aantal') border-red-500 @enderror" min="1">
                @error('aantal')
                <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="datum_eerst_volgende_levering" class="block text-sm font-medium text-gray-200">Datum Volgende Levering</label>
                <input type="date" name="datum_eerst_volgende_levering" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 bg-gray-800 text-white @error('datum_eerst_volgende_levering') border-red-500 @enderror">
                @error('datum_eerst_volgende_levering')
                <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="w-full bg-green-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300">
                Levering Toevoegen
            </button>
        </form>
    </div>
</div>

</body>
</html>
