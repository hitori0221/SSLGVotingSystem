<?php

    include_once '../includes/components.php';

?>

<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    
    <script>
    // On page load, set theme from localStorage
    if (localStorage.getItem("theme") === "dark") {
      document.documentElement.classList.add("dark");
    }
  </script>
 
    <link href="../src/output.css" rel="stylesheet">
    <style>
    
    </style>

    
</head>
<body class="bg-gray-50 dark:bg-neutral-950 ">
    <div class="flex sm:ml-64 items-center">
        <button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar" aria-controls="separator-sidebar" type="button" class="inline-flex items-center p-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
        </button>
   
        <header class="bg-gray-50 dark:bg-neutral-950  text-black border-neutral-200 flex-1 ">
            <div class="flex flex-wrap items-center justify-between mx-auto p-4 border-l border-neutral-100 dark:border-neutral-900">
                <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="text-lg font-semibold text-gray-800 dark:text-gray-50">SSLG Voting System</span>

                <nav class="flex flex-wrap mr-auto ml-4" aria-label="Breadcrumb">
                    <ol class="inline-flex flex-wrap items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                <svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.5 2c-.178 0-.356.013-.492.022l-.074.005a1 1 0 0 0-.934.998V11a1 1 0 0 0 1 1h7.975a1 1 0 0 0 .998-.934l.005-.074A7.04 7.04 0 0 0 22 10.5 8.5 8.5 0 0 0 13.5 2Z"/>
                                    <path d="M11 6.025a1 1 0 0 0-1.065-.998 8.5 8.5 0 1 0 9.038 9.039A1 1 0 0 0 17.975 13H11V6.025Z"/>
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        
                    </ol>
                </nav>


                </a>
                
            </div>
    </header>

        
    </div>

    

    <main id="main-content" class=" p-11 sm:ml-64 rounded-l-lg h-screen border-t border-l border-gray-100 dark:border-neutral-800 
        bg-white dark:bg-zinc-900 bg-cover bg-center "
       >
        
    </main>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    
    <script>

function toggleTheme() {
    let currentTheme = localStorage.getItem("theme");

    if (currentTheme === "dark") {
        localStorage.setItem("theme", "light");
        document.documentElement.classList.remove("dark");
    } else {
        localStorage.setItem("theme", "dark");
        document.documentElement.classList.add("dark");
    }
}

// Apply saved theme on page load
document.addEventListener("DOMContentLoaded", () => {
    if (localStorage.getItem("theme") === "dark") {
        document.documentElement.classList.add("dark");
    }
});



</script>
</body>
</html>