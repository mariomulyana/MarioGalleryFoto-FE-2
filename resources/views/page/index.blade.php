<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/build.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
</head>

<body>


    <nav class="bg-white border-gray-200 shadow-md dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-md p-4 mx-auto">
            <h3 class="text-3xl font-hurricane">Mario</h3>
            <div class="flex gap-1">
                <a href="/login"><button class="px-5 py-1 text-white rounded-full bg-biru">Login</button></a>
                <a href="/register"><button class="px-5 py-1 rounded-full bg-bgcolor2">Register</button></a>
            </div>
        </div>
    </nav>
    <section class="">
        <div class="flex flex-col">
            <h3 class="mt-4 text-5xl text-center font-hurricane">Kamu Memang Sudah Pergi</h3>
            <h3 class="text-center font-hurricane text-7xl">
                Tapi Fotomu Masih Ada Di Galeri
            </h3>
        </div>
        <div class=" mt-9">
            <div class="max-w-screen-md mx-auto ">
                <div class="flex flex-wrap gap-4 px-2">
                    <div>
                        <div class="flex flex-col gap-4">
                            <img src="/assets/bg_01.jpg" alt="" class="transition duration-500 ease-in-out hover:scale-105">
                            <img src="/assets/bg_02.jpg" alt="" class="transition duration-500 ease-in-out hover:scale-105">
                        </div>
                    </div>
                    <div class="max-[480px]:w-full">
                        <img src="/assets/bg_04.jpg" alt="" class="transition duration-500 ease-in-out hover:scale-105 max-[480px]:w-full">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
