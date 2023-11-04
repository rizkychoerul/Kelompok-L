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
            
        <div class="flex flex-row box-border border-black border-2">
            {{-- Sidebar --}}
            @include('Sidebar')
            
            <div class="flex-1 bg-green-400 h-16">
                
                <div class="m-4 font-lora text-xl mb-20">Home</div>

                <div class="mx-80 w-2/4 h-96 bg-slate-50">

                    <div>Tombol</div>

                    <hr class="my-5 border border-black">

                    <table class="table-auto border-collapse border border-slate-500 w-auto h-auto">
                        <thead>
                            <tr>
                                <th class="border border-slate-600">No</th>
                                <th class="border border-slate-600">Foto</th>
                                <th class="border border-slate-600">Username</th>
                                <th class="border border-slate-600">Email</th>
                                <th class="border border-slate-600">Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-slate-600">1</td>
                                <td class="border border-slate-600">-</td>
                                <td class="border border-slate-600">Rizky</td>
                                <td class="border border-slate-600">rizky@gmail.com</td>
                                <td class="border border-slate-600">Rizky Choerul</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-600">2</td>
                            </tr>
                            <tr>
                                <td class="border border-slate-600">3</td>
                            </tr>
                        </tbody>
                    </table>    
                </div>
            
            </div>

        </div>

        </div>

</body>
</html>