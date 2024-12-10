<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leverancier Formulier</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-r from-teal-400 via-cyan-500 to-blue-600 text-white">

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
    <form action="{{ route('leverancier.store') }}" method="post" class="space-y-6 bg-white bg-opacity-10 p-6 rounded-xl shadow-2xl backdrop-filter backdrop-blur-lg max-w-md mx-auto">
        @csrf
        <div class="form-group">
            <label for="naam" class="block text-sm font-medium text-gray-200">Naam</label>
            <input type="text" id="naam" name="naam" value="{{ old('naam') }}"
                   class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 bg-gray-800 text-white @error('naam') border-red-500 @enderror">
            @error('naam')
            <p class="text-sm text-red-400 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="contactpersoon" class="block text-sm font-medium text-gray-200">Contactpersoon</label>
            <input type="text" id="contact_persoon" name="contact_persoon" value="{{ old('contact_persoon') }}"
                   class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 bg-gray-800 text-white @error('contactpersoon') border-red-500 @enderror">
            @error('contact_persoon')
            <p class="text-sm text-red-400 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="leverancier_nummer" class="block text-sm font-medium text-gray-200">Leverancier Nummer</label>
            <input type="text" id="leverancier_nummer" name="leverancier_nummer" value="{{ old('leverancier_nummer') }}"
                   class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 bg-gray-800 text-white @error('leverancier_nummer') border-red-500 @enderror">
            @error('leverancier_nummer')
            <p class="text-sm text-red-400 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="mobiel" class="block text-sm font-medium text-gray-200">Mobiel</label>
            <input type="text" id="mobiel" name="mobiel" value="{{ old('mobiel') }}"
                   class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 bg-gray-800 text-white @error('mobiel') border-red-500 @enderror">
            @error('mobiel')
            <p class="text-sm text-red-400 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="opmerking" class="block text-sm font-medium text-gray-200">Opmerking</label>
            <textarea id="opmerking" name="opmerking" rows="3"
                      class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 bg-gray-800 text-white @error('opmerking') border-red-500 @enderror">{{ old('opmerking') }}</textarea>
            @error('opmerking')
            <p class="text-sm text-red-400 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button type="submit" class="w-full bg-teal-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-teal-700 focus:outline-none focus:ring-4 focus:ring-teal-300">
                Opslaan
            </button>
        </div>
    </form>
</div>

</body>
</html>
