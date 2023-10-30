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
    @vite('resources/css/app.css')
</head>
<body>
        {{-- Navbar --}}
        <div class="flex flex-row h-20 bg-blue-500">
            <div class="px-7 mx-20 my-5 font-lora text-4xl bg-gradient-to-tl from-cyan-600 via-green-400 rounded-2xl text-blue-600">Admin</div>
        </div>
        
        <div class="w-80 h-screen bg-slate-400 absolute">
            
            {{-- Button --}}
            <div class="mx-5 my-5 ring-1 ring-slate-400 rounded-md text-center hover:bg-cyan-600 cursor-pointer ease-linear duration-500 shadow-lg bg-blue-500">
                <button class="px-28 py-2 text-green-400 font-lora hover:text-black">User</button>
            </div>
            <div class="mx-5 my-5 ring-1 ring-slate-400 rounded-md text-center hover:bg-cyan-600 cursor-pointer ease-linear duration-500 shadow-lg bg-blue-500">
                <button class="px-28 py-2 text-green-400 font-lora">Module</button>
            </div>
            <div class="mx-5 my-5 ring-1 ring-slate-400 rounded-md text-center hover:bg-cyan-600 cursor-pointer ease-linear duration-500 shadow-lg bg-blue-500">
                <button class="px-28 py-2 text-green-400 font-lora">Role</button>
            </div>
            <div class="mx-5 my-5 ring-1 ring-slate-400 rounded-md text-center hover:bg-cyan-600 cursor-pointer ease-linear duration-500 shadow-lg bg-blue-500">
                <button class="px-28 py-2 text-green-400 font-lora">Menu</button>
            </div>
            <div class="mx-5 my-5 ring-1 ring-slate-400 rounded-md text-center hover:bg-cyan-600 cursor-pointer ease-linear duration-500 shadow-lg bg-blue-500">
                <button class="py-2.5 text-green-400 font-lora">Assign Role</button>
            </div>
            <div class="mx-5 my-5 ring-1 ring-slate-400 rounded-md text-center hover:bg-cyan-600 cursor-pointer ease-linear duration-500 shadow-lg bg-blue-500">
                <button class="py-2.5 text-green-400 font-lora">Setting Website</button>
            </div>
            <div class="mx-5 my-5 ring-1 ring-slate-400 rounded-md text-center hover:bg-cyan-600 cursor-pointer ease-linear duration-500 shadow-lg bg-blue-500">
                <button class="py-2.5 text-green-400 font-lora">Layout Setting</button>
            </div>
        
        </div>

        <div class="flex flex-row h-20 bg-slate-300 shadow-xl mb-9">
            <div class="px-7 mx-20 my-5 font-lora text-4xl">Home</div>
        </div>

        <div class="flex flex-row h-20 bg-slate-300 shadow-xl">
            <div class="px-7 mx-20 my-5 font-lora text-4xl bg-gradient-to-tl from-cyan-600 via-green-400 rounded-2xl text-blue-600"></div>
        </div>

</body>
</html>