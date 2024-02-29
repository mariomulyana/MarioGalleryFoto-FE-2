@extends('layouts.master')
@push('cssjsexternal')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

@endpush
@section('content')
<section class="mt-32">
    <div class="items-center max-w-screen-md mx-auto ">
        <h3 class="text-5xl text-center font-hurricane">PinMe</h3>
    </div>
</section>
<section>
    <div class="flex flex-col items-center max-w-screen-md px-2 mx-auto mt-4">
        <div>
            <img src="/assets/users.png" alt="" class="w-24" id="imageUser">
        </div>
        <h3 class="text-xl font-semibold" id="namaUser">

        </h3>
        <small class="text-xs " id="bio"></small>
        <div class="flex flex-row mt-3">
            <a href="/pengikut">
                <small class="mr-4 text-abuabu" id="follower"></small>
            </a>
            <a href="/mengikuti">
                <small class="text-abuabu" id="follow"></small>
            </a>

        </div>
        <div id="tombolikuti">
            <button class="px-4 mt-4 text-white bg-black rounded-full">Pengikut</button>
        </div>

    </div>
</section>
<section class="mt-10">
    <div class="max-w-screen-md mx-auto">
        <div class="flex flex-wrap justify-center gap-2">
            <div class="w-20">
                <div class="flex flex-col items-center">
                    <img src="/assets/users.png" alt="" class="w-14">
                    <a href="other-pin.html"><h5 class="mt-2 text-xs">Omensoft</h5></a>
                    <button class="w-full mt-1 text-xs text-white bg-black rounded-full">Ikuti</button>
                </div>
            </div>
            <div class="w-20">
                <div class="flex flex-col items-center">
                    <img src="/assets/users.png" alt="" class="w-14">
                    <a href="other-pin.html"><h5 class="mt-2 text-xs">Aliyatun nisa</h5></a>
                    <button class="w-full mt-1 text-xs rounded-full bg-bgcolor2">Mengikuti</button>
                </div>
            </div>
            <div class="w-20">
                <div class="flex flex-col items-center">
                    <img src="/assets/users.png" alt="" class="w-14">
                    <a href="other-pin.html"><h5 class="mt-2 text-xs">OmenSoft</h5></a>
                    <button class="w-full mt-1 text-xs text-white bg-black rounded-full">Ikuti</button>
                </div>
            </div>
            <div class="w-20">
                <div class="flex flex-col items-center">
                    <img src="/assets/users.png" alt="" class="w-14">
                    <a href="other-pin.html"><h5 class="mt-2 text-xs">Aliyatun nisa</h5></a>
                    <button class="w-full mt-1 text-xs rounded-full bg-bgcolor2">Mengikuti</button>
                </div>
            </div>
            <div class="w-20">
                <div class="flex flex-col items-center">
                    <img src="/assets/users.png" alt="" class="w-14">
                    <a href="other-pin.html"><h5 class="mt-2 text-xs">OmenSoft</h5></a>
                    <button class="w-full mt-1 text-xs text-white bg-black rounded-full">Ikuti</button>
                </div>
            </div>
            <div class="w-20">
                <div class="flex flex-col items-center">
                    <img src="/assets/users.png" alt="" class="w-14">
                    <a href="other-pin.html"><h5 class="mt-2 text-xs">Aliyatun nisa</h5></a>
                    <button class="w-full mt-1 text-xs rounded-full bg-bgcolor2">Mengikuti</button>
                </div>
            </div>
            <div class="w-20">
                <div class="flex flex-col items-center">
                    <img src="/assets/users.png" alt="" class="w-14">
                    <a href="other-pin.html"><h5 class="mt-2 text-xs">OmenSoft</h5></a>
                    <button class="w-full mt-1 text-xs text-white bg-black rounded-full">Ikuti</button>
                </div>
            </div>
            <div class="w-20">
                <div class="flex flex-col items-center">
                    <img src="/assets/users.png" alt="" class="w-14">
                    <a href="other-pin.html"><h5 class="mt-2 text-xs">Aliyatun nisa</h5></a>
                    <button class="w-full mt-1 text-xs rounded-full bg-bgcolor2">Mengikuti</button>
                </div>
            </div>
            <div class="w-20">
                <div class="flex flex-col items-center">
                    <img src="/assets/users.png" alt="" class="w-14">
                    <a href="other-pin.html"><h5 class="mt-2 text-xs">OmenSoft</h5></a>
                    <button class="w-full mt-1 text-xs text-white bg-black rounded-full">Ikuti</button>
                </div>
            </div>
            <div class="w-20">
                <div class="flex flex-col items-center">
                    <img src="/assets/users.png" alt="" class="w-14">
                    <a href="other-pin.html"><h5 class="mt-2 text-xs">Aliyatun nisa</h5></a>
                    <button class="w-full mt-1 text-xs rounded-full bg-bgcolor2">Mengikuti</button>
                </div>
            </div>
            <div class="w-20">
                <div class="flex flex-col items-center">
                    <img src="/assets/users.png" alt="" class="w-14">
                    <a href="other-pin.html"><h5 class="mt-2 text-xs">OmenSoft</h5></a>
                    <button class="w-full mt-1 text-xs text-white bg-black rounded-full">Ikuti</button>
                </div>
            </div>
            <div class="w-20">
                <div class="flex flex-col items-center">
                    <img src="/assets/users.png" alt="" class="w-14">
                    <a href="other-pin.html"><h5 class="mt-2 text-xs">Aliyatun nisa</h5></a>
                    <button class="w-full mt-1 text-xs rounded-full bg-bgcolor2">Mengikuti</button>
                </div>
            </div>
            <div class="w-20">
                <div class="flex flex-col items-center">
                    <img src="/assets/users.png" alt="" class="w-14">
                    <a href="other-pin.html"><h5 class="mt-2 text-xs">OmenSoft</h5></a>
                    <button class="w-full mt-1 text-xs text-white bg-black rounded-full">Ikuti</button>
                </div>
            </div>
            <div class="w-20">
                <div class="flex flex-col items-center">
                    <img src="/assets/users.png" alt="" class="w-14">
                    <a href="other-pin.html"><h5 class="mt-2 text-xs">Aliyatun nisa</h5></a>
                    <button class="w-full mt-1 text-xs rounded-full bg-bgcolor2">Mengikuti</button>
                </div>
            </div>
            <div class="w-20">
                <div class="flex flex-col items-center">
                    <img src="/assets/users.png" alt="" class="w-14">
                    <a href="other-pin.html"><h5 class="mt-2 text-xs">OmenSoft</h5></a>
                    <button class="w-full mt-1 text-xs text-white bg-black rounded-full">Ikuti</button>
                </div>
            </div>
            <div class="w-20">
                <div class="flex flex-col items-center">
                    <img src="/assets/users.png" alt="" class="w-14">
                    <a href="other-pin.html"><h5 class="mt-2 text-xs">Aliyatun nisa</h5></a>
                    <button class="w-full mt-1 text-xs rounded-full bg-bgcolor2">Mengikuti</button>
                </div>
            </div>
            <div class="w-20">
                <div class="flex flex-col items-center">
                    <img src="/assets/users.png" alt="" class="w-14">
                    <a href="other-pin.html"><h5 class="mt-2 text-xs">OmenSoft</h5></a>
                    <button class="w-full mt-1 text-xs text-white bg-black rounded-full">Ikuti</button>
                </div>
            </div>
            <div class="w-20">
                <div class="flex flex-col items-center">
                    <img src="/assets/users.png" alt="" class="w-14">
                    <a href="other-pin.html"><h5 class="mt-2 text-xs">Aliyatun nisa</h5></a>
                    <button class="w-full mt-1 text-xs rounded-full bg-bgcolor2">Mengikuti</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('footerjsexternal')
    <script src="/javascript/pengikut.js"></script>
@endpush
