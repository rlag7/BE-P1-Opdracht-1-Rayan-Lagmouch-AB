<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leverancier Overzicht</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-bl from-green-400 via-blue-500 to-teal-600 p-6 text-white">

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

<div class="container mx-auto mt-8">
    <!-- Leverancier Informatie -->
    <div class="bg-white bg-opacity-10 p-6 rounded-xl shadow-2xl backdrop-filter backdrop-blur-lg mb-6">
        <h1 class="text-3xl font-bold mb-4">Geleverde producten</h1>
        <p class="text-lg">Naam leverancier: <span class="font-semibold">{{ $leverancier->naam }}</span></p>
        <p class="text-lg">Contactpersoon: <span class="font-semibold">{{ $leverancier->contact_persoon }}</span></p>
        <p class="text-lg">Leveranciernummer: <span class="font-semibold">{{ $leverancier->leverancier_nummer }}</span></p>
        <p class="text-lg">Mobiel: <span class="font-semibold">{{ $leverancier->mobiel }}</span></p>
    </div>

    <!-- Producten Tabel -->
    <div class="bg-white bg-opacity-10 p-6 rounded-xl shadow-2xl backdrop-filter backdrop-blur-lg">
        <h2 class="text-2xl font-semibold mb-4">Geconnecteerde Producten</h2>
        <table class="min-w-full table-auto">
            <thead class="bg-teal-500">
            <tr>
                <th class="px-4 py-2 text-left text-sm font-medium text-white">Naam Product</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-white">Aantal in Magazijn</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-white">Verpakkingshoeveelheid (kg)</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-white">Laatste Levering</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-white">Acties</th>
            </tr>
            </thead>
            <tbody class="text-sm bg-white bg-opacity-20 text-gray-200">
            @forelse($leverancier->producten as $product)
                <tr class="border-t border-gray-300 hover:bg-white hover:bg-opacity-30">
                    <td class="px-4 py-2">{{ $product->naam }}</td>
                    <td class="px-4 py-2">{{ $product->magazijn->aantal_aanwezig ?? 'N/A' }}</td>
                    <td class="px-4 py-2">{{ $product->magazijn->verpakkingseenheid ?? 'N/A' }} kg</td>
                    <td class="px-4 py-2">
                        {{ $product->leveranciers->firstWhere('id', $leverancier->id)?->pivot->datum_levering ?? 'N/A' }}
                    </td>
                    <td class="px-4 py-2">
                        @if ($product->is_actief)
                            <a href="{{ route('leverancier.product.levering.create', [$leverancier->id, $product->id]) }}" class="text-teal-300 hover:text-teal-500">+ Nieuwe Levering</a>
                        @else
                            <span class="text-red-500">Niet meer geproduceerd</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-6 text-gray-400 font-semibold">
                        Dit bedrijf heeft nog geen producten.
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
