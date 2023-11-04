<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <title>Tampilan admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
        <div class="relative bg-slate-300">
        
            {{-- Header --}}
            @include('Header')
            
        <div class="flex flex-row">
            
            {{-- Sidebar --}}
            @include('Sidebar')
            
            <div class="flex-1 bg-green-400 h-16">
                
                <div class="m-4 font-lora text-xl mb-20">Home</div>

                {{-- Content --}}
                @include('Content')
            
            </div>

        </div>

        {{-- Footer --}}
        @include('Footer')

        </div>

</body>
</html>