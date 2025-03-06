<main>
    

    <div class="p-4 sm:ml-64 rounded-lg dark:bg-gray-900 bg-white h-screen border-t border-l border-gray-100 dark:border-gray-700">
        <div class="flex flex-wrap gap-2">
        <button type="button" class="py-2 px-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs me-2  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add New School</button>
            
        <form class="max-w-sm ml-auto ">   
                <label for="default-search" class="mb-1 text-xs font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-3 h-3 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-64 p-2  text-xs text-gray-900 border border-gray-300 rounded-md bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search School..." style="padding-left: 35px; padding-right: 10px" required />
                
                </div>
            </form>
        </div>
        <span class="border-b dark:border-gray-800 border-gray-200  block w-full my-4"></span>
        

        <div class="relative  bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700" >
        <a href="#" class="relative">
            <img class="rounded-t-lg w-full h-20 object-cover" src="../icons/cnhs.jpg" alt="Main Image" />
            <!-- Circle Logo -->
            <div class="absolute left-1/2 -translate-x-1/2 bottom-0 transform translate-y-1/2 w-20 h-20 rounded-full bg-gray-300 flex items-center justify-center shadow-md">
                <img class="w-full h-full rounded-full object-cover" src="../icons/logo.png" alt="Logo" />
            </div>
        </a>
        <div class="p-5 mt-8 bg-white rounded-lg shadow dark:bg-gray-800">
            <a href="#">
                <h5 class="mb-2 font-semibold tracking-tight text-gray-900 dark:text-white">
                    Bunga Integrated School
                </h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                1 admin | 205 users
            </p>
            <div class="flex items-center justify-between">
                <!-- View Button -->
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    View School
                    <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>

                <!-- Three-Dot Menu Button -->
                <div class="relative">
                    <button id="menu-button" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none">
                        <svg class="w-5 h-5 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 6.75a1.5 1.5 0 110-3 1.5 1.5 0 010 3zM12 13.5a1.5 1.5 0 110-3 1.5 1.5 0 010 3zM12 20.25a1.5 1.5 0 110-3 1.5 1.5 0 010 3z"/>
                        </svg>
                    </button>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                            <span class="block text-sm text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a></li>
                            <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Account Settings</a></li>
                            <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    

    </div>

    </main>