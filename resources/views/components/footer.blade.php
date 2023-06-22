<footer class="bg-prusblue mt-24">
    <div class="mx-auto max-w-5xl px-4 py-14 sm:px-6 lg:px-8">
        <div class="flex justify-center text-white">
            <a @if(auth()->check()) href="{{ route('home') }}" @else href="{{ route('landing') }}" @endif>
                <x-application-logo class="block h-36 w-auto fill-current text-gray-800" />
            </a>
        </div>
        <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-white">
            Jadilah bagian dari komunitas alumni, mari saling terhubung dan membangun jaringan yang lebih luas.
        </p>


        <ul class="mt-12 flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-12">
            @if (auth()->check())
                <li>
                    <a href="{{ route('home') }}" class="text-white transition hover:text-white/75">
                        Home
                    </a>
                </li>

                <li>
                    <a href="{{ route('jobs') }}" class="text-white transition hover:text-white/75">
                        Jobs
                    </a>
                </li>

                <li>
                    <a href="{{ route('event') }}" class="text-white transition hover:text-white/75">
                        News & Event
                    </a>
                </li>

                <li>
                    <a href="{{ route('database') }}" class="text-white transition hover:text-white/75">
                        Database
                    </a>
                </li>

                <li>
                    <a href="{{ route('newsletter') }}" class="text-white transition hover:text-white/75">
                        Newsletter
                    </a>
                </li>

                <li>
                    <a href="{{ route('messages') }}" class="text-white transition hover:text-white/75">
                        Messages
                    </a>
                </li>

                <li>
                    <a href="https://alumni.unhas.ac.id/dana-abadi" class="text-white transition hover:text-white/75">
                        Donasi
                    </a>
                </li>
            @else
                <li>
                    <a href="{{ route('event') }}" class="text-white transition hover:text-white/75">
                        News & Events
                    </a>
                </li>
                <li>
                    <a href="https://tracerstudy.unhas.ac.id/" class="text-white transition hover:text-white/75">
                        Tracer Study
                    </a>
                </li>
                <li>
                    <a href="https://alumni.unhas.ac.id/dana-abadi" class="text-white transition hover:text-white/75">
                        Donasi
                    </a>
                </li>
            @endif
        </ul>

        <ul class="mt-12 flex justify-center gap-6 md:gap-8">
            <li>
                <a href="https://www.facebook.com/profile.php?id=100088668265819" rel="noreferrer" target="_blank"
                    class="text-white transition hover:text-white/75">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </li>

            <li>
                <a href="https://www.instagram.com/dirhapda/" rel="noreferrer" target="_blank"
                    class="text-white transition hover:text-white/75">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </li>

            <li>
                <a href="https://www.youtube.com/@dirhapdaunhas" rel="noreferrer" target="_blank"
                    class="text-white transition hover:text-white/75">
                    <span class="sr-only">youtube</span>
                    <svg class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                    </svg>
                </a>
            </li>

            <li>
                <a href="mailto: dirhapda@unhas.ac.id" rel="noreferrer" target="_blank"
                    class="text-white transition hover:text-white/75">
                    <span class="sr-only">Email</span>
                    <svg class="h-10 w-10" fill="#FFFFFF" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M0.5 2.5C0.5 1.67157 1.17157 1 2 1H14C14.8284 1 15.5 1.67157 15.5 2.5V3.70758L8.00001 7.92632L0.5 3.70757V2.5Z"
                            fill="#FFFFFF" />
                        <path
                            d="M0.5 4.85491V12.5C0.5 13.3284 1.17157 14 2 14H14C14.8284 14 15.5 13.3284 15.5 12.5V4.85493L8.00001 9.07367L0.5 4.85491Z" fill="#FFFFFF" />

                    </svg>
                </a>
            </li>

            <li>
                <a href="https://wa.me/6281253584528" rel="noreferrer" target="_blank"
                    class="text-white transition hover:text-white/75">
                    <span class="sr-only">Whatsapp</span>
                    <svg class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>
    <div class=" px-10 py-4 border-t bg-prusblue text-base-content border-sky-950">
        <div class="items-center text-center grid-flow-col text-white">
            <p>Universitas Hasanuddin <br />Direktorat Hub. Alumni & Pengembangan Dana Abadi</p>
        </div>
    </div>
</footer>
