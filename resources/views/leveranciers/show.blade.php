<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leveranciers</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-r from-purple-600 via-indigo-500 to-blue-600 text-white">

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
    <div class="overflow-x-auto bg-white bg-opacity-10 p-6 rounded-xl shadow-2xl backdrop-filter backdrop-blur-lg">
        <table class="min-w-full table-auto">
            <thead class="bg-indigo-500">
            <tr>
                <th class="px-4 py-2 text-left text-sm font-semibold text-white">Naam</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-white">Contactpersoon</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-white">Leverancier Nummer</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-white">Mobiel</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-white">Aantal producten</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-white">Producten Tonen</th>
            </tr>
            </thead>
            <tbody class="text-sm text-gray-200">
            @foreach ($leveranciers as $leverancier)
                <tr class="border-t border-gray-400 hover:bg-white hover:bg-opacity-20">
                    <td class="px-4 py-2">{{ $leverancier->naam }}</td>
                    <td class="px-4 py-2">{{ $leverancier->contact_persoon }}</td>
                    <td class="px-4 py-2">{{ $leverancier->leverancier_nummer }}</td>
                    <td class="px-4 py-2">{{ $leverancier->mobiel }}</td>
                    <td class="px-4 py-2">{{ $leverancier->aantal_producten }}</td>
                    <td class="px-4 py-2">
                        <a href="{{ route('leverancier.show-product', $leverancier->id) }}" class="inline-block px-3 py-1 text-sm bg-teal-500 rounded-full shadow hover:bg-teal-600 focus:outline-none focus:ring-4 focus:ring-teal-300">
                            Bekijk Producten
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
