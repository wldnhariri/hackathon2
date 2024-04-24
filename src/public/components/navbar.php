<!-- Navigation -->
<nav class="py-9 px-4 fixed top-0 w-full z-10 bg-white shadow-md" x-data="{navOpen : true}">
    <div class="container mx-auto">
        <div class="flex items-center justify-between">
            <img src="./public/assets/logotbn.svg" alt="" class="order-1 sm:order-2">
            <img @click="navOpen = ! navOpen" src="./public/assets/toggle.svg" alt="" class="lg:hidden  order-2 sm:order-1">
            <div class="order-2 hidden lg:block">
                <ul class="flex gap-16">
                    <li class="text-grey font-normal text-lg">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="text-grey font-normal text-lg opacity-50">
                        <a href="about.php">Tentang Kami</a>
                    </li>
                    <li class="text-grey font-normal text-lg opacity-50">
                        <a href="event.php">Event</a>
                    </li>
                    <li class="text-grey font-normal text-lg opacity-50">
                        <a href="program.php">Program</a>
                    </li>
                </ul>
            </div>
            <?php
            if (isset($_SESSION['status_code']) && $_SESSION['status_code'] == 'success') {
                echo '
            <div class="order-3 hidden sm:block">
                <p class="text-grey font-bold text-lg opacity-75">Hallo 🙏, Muh Irsyad Kamal</p>
             </div>
            ';
            } else {
                echo '
            <div class="order-3 hidden sm:block">
                <a href="login.php">
                    <button class="grow bg-white px-8 py-4 font-bold text-grey rounded-full text-sm">Login</button>
                </a>
                <a href="signup.php">
                    <button class="grow bg-tbn px-8 py-4 font-bold text-white rounded-full text-sm">Sign Up</button>
                </a>
            </div>
            ';
            }
            ?>
        </div>
    </div>
    <div x-show="navOpen" x-data="{open : false}" class="z-50 fixed bottom-0 right-0 left-0 bg-white p-4 border lg:hidden" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
        <ul class="flex justify-between">
            <li>
                <button class="flex justify-center flex-col items-center gap-1">
                    <ion-icon name="home-outline" class="text-2xl text-tbn"></ion-icon>
                    <span class="text-tbn text-base font-bold">Home</span>
                </button>
            </li>
            <li>
                <button class=" flex justify-center flex-col items-center gap-1">
                    <a href="about.php" class="flex justify-center flex-col items-center gap-1">
                        <ion-icon name="albums-outline" class="text-2xl text-grey opacity-50"></ion-icon>
                        <span class="text-grey opacity-50 text-base font-normal">Tentang Kami</span>
                    </a>
                </button>
            </li>
            <li>
                <button class="flex justify-center flex-col items-center gap-1">
                    <a href="event.php" class="flex justify-center flex-col items-center gap-1">
                        <ion-icon name="sparkles-outline" class="text-2xl text-grey opacity-50"></ion-icon>
                        <span class="text-grey opacity-50 text-base font-normal">Event</span>
                    </a>
                </button>
            </li>
            <li>
                <button class="flex justify-center flex-col items-center gap-1">
                    <a href="program.php" class="flex justify-center flex-col items-center gap-1">
                        <ion-icon name="megaphone-outline" class="text-2xl text-grey opacity-50"></ion-icon>
                        <span class="text-grey opacity-50 text-base font-normal">Program</span>
                    </a>
                </button>
            </li>
            <li>
                <button @click="open = !open" class="flex justify-center flex-col items-center gap-1">
                    <ion-icon name="menu-outline" class="text-2xl text-grey opacity-50"></ion-icon>
                    <span class="text-grey opacity-50 text-base font-normal">More</span>
                </button>
            </li>
        </ul>
        <div x-show="open" class="absolute bottom-24 left-1/2 -translate-x-1/2 flex gap-4 w-3/4" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
            <a href="login.php">
                <button class="grow bg-white shadow-md px-8 py-4 font-bold text-grey rounded-full text-sm">Login</button>
            </a>
            <button class="grow bg-tbn shadow-md px-8 py-4 font-bold text-white rounded-full text-sm">Sign Up</button>

        </div>
    </div>
</nav>