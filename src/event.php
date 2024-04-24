<?php
include('public/security/scurity.php');  
include('public/core/header.php');
include('public/components/navbar.php'); 
?>

    <!-- Event -->
    <section class="py-16 mt-40 md:pt-0 overflow-x-hidden">
        <div class="container mx-auto px-3">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Event 1 -->
                <div class="bg-white rounded-[32px] shadow-md border flex flex-col items-center text-center">
                    <img src="./public/assets/event/event1.png" alt="Education" class="mb-4">
                    <h2 class="text-xl font-bold p-6">Plenary 5: The Future of Education 2024</h2>
                    <p class="mb-4 text-grey">Jum'at, 08 September 2023</p>
                    <a href="detailevent1.html">
                        <button class="bg-tbn mb-6 text-grey text-sm font-semibold rounded-full px-4 py-2">Join Sekarang</button>
                    </a>
                </div>
                <!-- Event 2 -->
                <div class="bg-white rounded-[32px] shadow-md border flex flex-col items-center text-center">
                    <img src="./public/assets/event/event2.png" alt="Sales" class="mb-4">
                    <h2 class="text-xl font-bold p-6">Transformational Sales Conference 2023</h2>
                    <p class="mb-4 text-grey">Jum'at,10 November 2023</p>
                    <a href="detailevent2.html">
                        <button class="bg-tbn mb-6 text-grey text-sm font-semibold rounded-full px-4 py-2">Join Sekarang</button>
                    </a>
                </div>
                <!-- Event 3 -->
                <div class="bg-white rounded-[32px] shadow-md border flex flex-col items-center text-center">
                    <img src="./public/assets/event/event3.png" alt="Green Tech" class="mb-4">
                    <h2 class="text-xl font-bold p-6">Workshop 2: Green Technology & Green Energy</h2>
                    <p class="mb-4 text-grey">Kamis,07 September2023</p>
                    <a href="detailevent3.html">
                        <button class="bg-tbn mb-6 text-grey text-sm font-semibold rounded-full px-4 py-2">Join Sekarang</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
include('public/components/footer.php'); 
include('public/core/script.php'); 
include('public/core/footer.php'); 
?>