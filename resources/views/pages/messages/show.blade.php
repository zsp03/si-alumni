<x-app-layout>
    @section('title',
    'Job Vacancy
    ')

    <section class="flex flex-row h-screen bg-gray-100 overflow-hidden">
        <div class="flex flex-col justify-between items-center flex-none w-16 bg-gray-200">
            <div class="flex flex-col space-y-4 w-full items-center pt-5">
                <a title="Prticipants" class=" relative  h-16 w-16 flex justify-center items-center">
                    <svg class="svg-icon w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M15.573,11.624c0.568-0.478,0.947-1.219,0.947-2.019c0-1.37-1.108-2.569-2.371-2.569s-2.371,1.2-2.371,2.569c0,0.8,0.379,1.542,0.946,2.019c-0.253,0.089-0.496,0.2-0.728,0.332c-0.743-0.898-1.745-1.573-2.891-1.911c0.877-0.61,1.486-1.666,1.486-2.812c0-1.79-1.479-3.359-3.162-3.359S4.269,5.443,4.269,7.233c0,1.146,0.608,2.202,1.486,2.812c-2.454,0.725-4.252,2.998-4.252,5.685c0,0.218,0.178,0.396,0.395,0.396h16.203c0.218,0,0.396-0.178,0.396-0.396C18.497,13.831,17.273,12.216,15.573,11.624 M12.568,9.605c0-0.822,0.689-1.779,1.581-1.779s1.58,0.957,1.58,1.779s-0.688,1.779-1.58,1.779S12.568,10.427,12.568,9.605 M5.06,7.233c0-1.213,1.014-2.569,2.371-2.569c1.358,0,2.371,1.355,2.371,2.569S8.789,9.802,7.431,9.802C6.073,9.802,5.06,8.447,5.06,7.233 M2.309,15.335c0.202-2.649,2.423-4.742,5.122-4.742s4.921,2.093,5.122,4.742H2.309z M13.346,15.335c-0.067-0.997-0.382-1.928-0.882-2.732c0.502-0.271,1.075-0.429,1.686-0.429c1.828,0,3.338,1.385,3.535,3.161H13.346z">
                        </path>
                    </svg>
                    <div
                        class="absolute top-0 right-0 mr-3 mt-3 bg-red-500 w-4 h-4 text-xs text-white rounded-full text-center">
                        5</div>
                </a>
                <a title="Inbox" class="relative  h-16 w-16 flex justify-center items-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                        </path>
                    </svg>
                    <div
                        class="absolute top-0 right-0 mr-3 mt-3 bg-red-500 w-4 h-4 text-xs text-white rounded-full text-center">
                        5</div>
                </a>

                <a>
                    <div class="rounded-full bg-gray-400 w-8 h-8"></div>
                </a>
            </div>
            <div class="flex flex-col space-y-4 pb-5">
                <a>
                    <div class="rounded-full bg-gray-400 w-8 h-8"></div>
                </a>
                <a>
                    <div class="rounded-full bg-gray-400 w-8 h-8"></div>
                </a>
            </div>

        </div>

        <div class="w-1/3 flex-none bg-gray-100 p-4 flex flex-col space-y-4 overflow-y-auto">
            <div class="flex flex-row justify-between items-center mb-6">
                <h1 class="font-semibold text-2xl">Inbox</h1>
                <svg class="flex-none w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>

            <a class="flex flex-col h-64 overflow-y-auto border-b">
                <div class="border-l-2 border-transparent hover:bg-gray-100 p-3 space-y-4">
                    <div class="flex flex-row items-center space-x-2">
                        <div class="avatar">
                            <div class="w-8 rounded-full">
                                <img src="https://source.unsplash.com/75x75/?portrait"
                                    alt="Tailwind-CSS-Avatar-component" />
                            </div>
                        </div>
                        <strong class="flex-grow text-sm">Maylinda eka</strong>
                        <div class="text-sm text-gray-600">5 Hari</div>
                    </div>

                    <div class="flex flex-row items-center space-x-1">
                        <div class="flex-grow truncate text-xs"> Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit. Eveniet amet repellendus distinctio eum, </div>
                    </div>
                </div>
                <div class="border-l-2 border-transparent hover:bg-gray-100 p-3 space-y-4">
                    <div class="flex flex-row items-center space-x-2">
                        <div class="avatar">
                            <div class="w-8 rounded-full">
                                <img src="https://source.unsplash.com/75x75/?portrait"
                                    alt="Tailwind-CSS-Avatar-component" />
                            </div>
                        </div>
                        <strong class="flex-grow text-sm">Maylinda eka</strong>
                        <div class="text-sm text-gray-600">5 Hari</div>
                    </div>

                    <div class="flex flex-row items-center space-x-1">
                        <div class="flex-grow truncate text-xs"> Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit. Eveniet amet repellendus distinctio eum, </div>
                    </div>
                </div>
                <div class="border-l-2 border-blue-500 bg-blue-100 p-3 space-y-4">
                    <div class="flex flex-row items-center space-x-2">
                        <div class="avatar">
                            <div class="w-8 rounded-full">
                                <img src="https://source.unsplash.com/75x75/?portrait"
                                    alt="Tailwind-CSS-Avatar-component" />
                            </div>
                        </div>
                        <strong class="flex-grow text-sm">Maylinda eka</strong>
                        <div class="text-sm text-gray-600">5 Hari</div>
                    </div>

                    <div class="flex flex-row items-center space-x-1">
                        <div class="flex-grow truncate text-xs"> Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Eveniet amet repellendus distinctio eum, </div>
                    </div>
                </div>
                <div class="border-l-2 border-transparent hover:bg-gray-100 p-3 space-y-4">
                    <div class="flex flex-row items-center space-x-2">
                        <div class="avatar">
                            <div class="w-8 rounded-full">
                                <img src="https://source.unsplash.com/75x75/?portrait"
                                    alt="Tailwind-CSS-Avatar-component" />
                            </div>
                        </div>
                        <strong class="flex-grow text-sm">Maylinda eka</strong>
                        <div class="text-sm text-gray-600">5 Hari</div>
                    </div>

                    <div class="flex flex-row items-center space-x-1">
                        <div class="flex-grow truncate text-xs"> Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Eveniet amet repellendus distinctio eum, </div>
                    </div>
                </div>
                <div class="border-l-2 border-transparent hover:bg-gray-100 p-3 space-y-4">
                    <div class="flex flex-row items-center space-x-2">
                        <div class="avatar">
                            <div class="w-8 rounded-full">
                                <img src="https://source.unsplash.com/75x75/?portrait"
                                    alt="Tailwind-CSS-Avatar-component" />
                            </div>
                        </div>
                        <strong class="flex-grow text-sm">Maylinda eka</strong>
                        <div class="text-sm text-gray-600">5 Hari</div>
                    </div>

                    <div class="flex flex-row items-center space-x-1">
                        <div class="flex-grow truncate text-xs"> Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Eveniet amet repellendus distinctio eum, </div>
                    </div>
                </div>
                <div class="border-l-2 border-transparent hover:bg-gray-100 p-3 space-y-4">
                    <div class="flex flex-row items-center space-x-2">
                        <div class="avatar">
                            <div class="w-8 rounded-full">
                                <img src="https://source.unsplash.com/75x75/?portrait"
                                    alt="Tailwind-CSS-Avatar-component" />
                            </div>
                        </div>
                        <strong class="flex-grow text-sm">Maylinda eka</strong>
                        <div class="text-sm text-gray-600">5 Hari</div>
                    </div>

                    <div class="flex flex-row items-center space-x-1">
                        <div class="flex-grow truncate text-xs"> Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Eveniet amet repellendus distinctio eum, </div>
                    </div>
                </div>
                <div class="border-l-2 border-transparent hover:bg-gray-100 p-3 space-y-4">
                    <div class="flex flex-row items-center space-x-2">
                        <div class="avatar">
                            <div class="w-8 rounded-full">
                                <img src="https://source.unsplash.com/75x75/?portrait"
                                    alt="Tailwind-CSS-Avatar-component" />
                            </div>
                        </div>
                        <strong class="flex-grow text-sm">Maylinda eka</strong>
                        <div class="text-sm text-gray-600">5 Hari</div>
                    </div>

                    <div class="flex flex-row items-center space-x-1">
                        <div class="flex-grow truncate text-xs"> Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Eveniet amet repellendus distinctio eum, </div>
                    </div>
                </div>
                <div class="border-l-2 border-transparent hover:bg-gray-100 p-3 space-y-4">
                    <div class="flex flex-row items-center space-x-2">
                        <div class="avatar">
                            <div class="w-8 rounded-full">
                                <img src="https://source.unsplash.com/75x75/?portrait"
                                    alt="Tailwind-CSS-Avatar-component" />
                            </div>
                        </div>
                        <strong class="flex-grow text-sm">Maylinda eka</strong>
                        <div class="text-sm text-gray-600">5 Hari</div>
                    </div>

                    <div class="flex flex-row items-center space-x-1">
                        <div class="flex-grow truncate text-xs"> Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Eveniet amet repellendus distinctio eum,
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="w-2/3 flex flex-row flex-auto bg-white rounded-tl-xl border-l shadow-xl">
            <div class="w-full border-l border-r border-gray-400 flex flex-col">
                <div class="flex-none h-20 flex flex-row justify-between items-center p-5">
                    <div>
                        <h4 class="text-lg text-gray-800 font-bold">Lorem ipsum dolor sit amet,
                            consectetur adipiscing
                            elit</h4>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <button title="Archive"
                            class="text-gray-700 px-2 py-1 border border-gray-300 rounded-lg shadow hover:bg-gray-200 transition duration-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20">
                                </path>
                            </svg>
                        </button>
                        <button title="Mark As Spam"
                            class="text-gray-700 px-2 py-1 border border-gray-300 rounded-lg shadow hover:bg-gray-200 transition duration-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                </path>
                            </svg>
                        </button>
                        <button title="Delete"
                            class="text-gray-700 px-2 py-1 border border-gray-300 rounded-lg shadow hover:bg-gray-200 transition duration-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex-1 overflow-y-auto p-5 space-y-4 ">
                    <div class="flex items-center justify-between border-t-2 pt-5">
                        <div class="flex items-center">
                            <img src="https://vojislavd.com/ta-template-demo/assets/img/message3.jpg"
                                class="rounded-full w-8 h-8 border border-gray-500">
                            <div class="flex flex-col ml-2">
                                <span class="text-sm font-semibold">
                                    Maylinda eka</span>
                                <span class="text-xs text-gray-400">From: maylinda@gmail.com</span>
                            </div>
                        </div>
                        <span class="text-sm text-gray-500">Jan 30, 2022, 10:23 AM</span>
                    </div>
                    <div class=" py-6 pl-2 text-gray-700">
                        <p>Hi John!</p>
                        <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. </p>
                        <p class="mt-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est
                            laborum.</p>
                        <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit:</p>
                        <ul class="ml-12 list-disc">
                            <li>voluptatem accusantium</li>
                            <li>doloremque laudantium</li>
                            <li>totam rem aperiam</li>
                            <li>eaque ipsa quae ab illo inventore veritatis</li>
                            <li>quasi architecto</li>
                        </ul>
                        <p class="mt-4">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                            fugit, sed quia consequuntur
                            magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                            dolorem ipsum quia dolor
                            sit amet, consectetur.</p>
                        <p class="mt-4">Regards,</p>
                        <p>Betty Garmon</p>
                    </div>
                    <div class="flex items-center justify-between border-t-2 pt-5">
                        <div class="flex items-center">
                            <img src="https://vojislavd.com/ta-template-demo/assets/img/message3.jpg"
                                class="rounded-full w-8 h-8 border border-gray-500">
                            <div class="flex flex-col ml-2">
                                <span class="text-sm font-semibold">
                                    Maylinda eka</span>
                                <span class="text-xs text-gray-400">From: maylinda@gmail.com</span>
                            </div>
                        </div>
                        <span class="text-sm text-gray-500">Jan 30, 2022, 10:23 AM</span>
                    </div>
                    <div class=" py-6 pl-2 text-gray-700">
                        <p>Hi John!</p>
                        <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. </p>
                        <p class="mt-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est
                            laborum.</p>
                        <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit:</p>
                        <ul class="ml-12 list-disc">
                            <li>voluptatem accusantium</li>
                            <li>doloremque laudantium</li>
                            <li>totam rem aperiam</li>
                            <li>eaque ipsa quae ab illo inventore veritatis</li>
                            <li>quasi architecto</li>
                        </ul>
                        <p class="mt-4">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                            fugit, sed quia consequuntur
                            magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                            dolorem ipsum quia dolor
                            sit amet, consectetur.</p>
                        <p class="mt-4">Regards,</p>
                        <p>Betty Garmon</p>
                    </div>

                    <form class="border-t-2 pt-7">
                        <div
                            class=" w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                            <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                <label for="comment" class="sr-only">Your comment</label>
                                <textarea id="comment" rows="4"
                                    class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                    placeholder="Type your reply here..." required></textarea>
                            </div>
                            <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                                <button type="submit"
                                    class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                    Reply
                                </button>
                                <div class="flex pl-0 space-x-1 sm:pl-2">
                                    <button type="button"
                                        class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Attach file</span>
                                    </button>
                                    <button type="button"
                                        class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Set location</span>
                                    </button>
                                    <button type="button"
                                        class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Upload image</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
