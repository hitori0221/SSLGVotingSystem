<?php
// Include icon definitions
include 'icons.php';

$activeMenu = isset($_GET['menu']) ? $_GET['menu'] : 0;
$school = [
    'image' => '../icons/logo.png',
    'name' => 'CNHS',
    'email' => ''
];

$profile = [
    'image' => '../icons/Alice_Halo.png',
    'name' => '980831',
    'email' => 'jbtejolan@gmail.com'
];

$items = [
    ['href' => '../pages/admin/Dashboard.php', 'title' => 'Dashboard', 'icon' => $dashboardIcon],
    
];

$items2 = [
    ['href' => '../pages/admin/School.php', 'title' => 'Candidates', 'icon' => $candidateIcon],
    ['href' => '../pages/admin/Users.php', 'title' => 'Voters', 'icon' => $userIcon],
    ['href' => '../pages/admin/Users.php', 'title' => 'Students', 'icon' => $userIcon]
];

$items3 = [
    ['href' => '../pages/admin/School.php', 'title' => 'Election', 'icon' => $candidateIcon],
    ['href' => '../pages/admin/Users.php', 'title' => 'Landing Page', 'icon' => $userIcon],
    ['href' => '../pages/admin/Users.php', 'title' => 'Ballot', 'icon' => $userIcon],

];
?>
<aside id="separator-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform duration-500 ease-in-out -translate-x-full sm:translate-x-0" aria-label="Sidebar">


<div class="overflow-y-auto bg-zinc-100 dark:bg-gray-950 relative h-full">
        
        <?php if ($school !== null): ?>
            <div  aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom" class="flex items-center justify-between gap-2 mx-4 my-3  hover:bg-neutral-800 rounded cursor-pointer p-2">
                <img class="mr-2 w-8 h-8 rounded-full object-cover" src="<?= $school['image']; ?>" alt="Profile">
                <h1 class="w-full text-sm font-semibold dark:text-gray-50 text-gray-900"><?= $school['name']; ?></h1>
                
                <svg class="w-5 h-5 mr-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                </svg>
            </div>

            <div style="width: calc(100% - 1rem)" class=" z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-zinc-900 dark:divide-gray-600" id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 dark:text-white">Super Admin</span>
                            <span class="block text-sm text-gray-500 truncate dark:text-gray-400">superadmin@gmail.com</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">School Settings</a></li>
                            
                            <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a></li>
                        </ul>
                    </div>
        <?php endif; ?>
       
        <ul class="-space-y-0.5 font-medium text-sm relative ">
           

        <div id="active-border" class="absolute left-0 w-0.5 bg-black dark:bg-white transition-all duration-300" style="top: 0px; height: 40px;"></div>


            <?php
                $totalMenu = count($items);
            ?>
            <div class="flex items-center my-4">
                <hr class="flex-grow border-t border-gray-200 dark:border-neutral-900">
            </div>
            <?php foreach ($items as $index => $item): ?>
               

                <li class="relative flex items-center px-4 h-10 cursor-pointer" data-index="<?= $index ?>" data-href="<?= $item['href']; ?>" data-title="<?= $item['title']; ?>">
                    <a href="" id="iconLink" class="flex items-center p-2 rounded-lg w-full dark:hover:bg-neutral-800 hover:bg-neutral-200 hover:text-neutral-950 dark:hover:text-white" data-index="<?= $index ?>" >
                        <svg class="shrink-0 w-[21px] h-[21px]" data-index="<?= $index ?>"  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <?= $item['icon']; ?>
                        </svg>
                        <span class="ms-3 dark:text-white text-black"><?= $item['title']; ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
            
            <div class="flex items-center mb-2 mx-6 mt-6">
                
                <p class="text-sm dark:text-neutral-700">Manage</p>
            </div>

            <?php foreach ($items2  as $index => $item): ?>
              

              <li class="relative flex items-center px-4 h-10 cursor-pointer" data-index="<?= count($items) + $index ?>" data-href="<?= $item['href']; ?>" data-title="<?= $item['title']; ?>">
                  <a href="" id="iconLink" class="flex items-center p-2 rounded-lg w-full dark:hover:bg-neutral-800 hover:bg-neutral-200 hover:text-neutral-950 dark:hover:text-white" data-index="<?= count($items) + $index ?>" >
                      <svg class="shrink-0 w-[21px] h-[21px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                          <?= $item['icon']; ?>
                      </svg>
                      <span class="ms-3"><?= $item['title']; ?></span>
                  </a>
              </li>
          <?php endforeach; ?>

          <div class="flex items-center mb-2 mx-6 mt-6">
                
                <p class="text-sm dark:text-neutral-700">Settings</p>
            </div>

            <?php foreach ($items3  as $index => $item): ?>
              

              <li class="relative flex items-center px-4 h-10 cursor-pointer" data-index="<?= count($items) + count($items2) + $index ?>" data-href="<?= $item['href']; ?>" data-title="<?= $item['title']; ?>">
                  <a href="" id="iconLink" class="flex items-center p-2 rounded-lg w-full dark:hover:bg-neutral-800 hover:bg-neutral-200 hover:text-neutral-950 dark:hover:text-white" data-index="<?= count($items) + count($items2) + $index ?>" >
                      <svg class="shrink-0 w-[21px] h-[21px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                          <?= $item['icon']; ?>
                      </svg>
                      <span class="ms-3"><?= $item['title']; ?></span>
                  </a>
              </li>
          <?php endforeach; ?>
        </ul>
        
        <div  class="border-t border-gray-200 dark:border-neutral-900 fixed bottom-0 left-0 w-64 dark:bg-gray-950  flex items-center justify-center py-4">
            <div style="width: calc(16rem - 2rem);" class="rounded flex items-center justify-between gap-2 dark:hover:bg-neutral-800 hover:bg-neutral-200  cursor-pointer p-2">
                
                <img class="mr-2 w-8 h-8 rounded-full object-cover" src="<?= $profile['image']; ?>" alt="Profile">
                        <div class="w-full flex flex-col flex-wrap">
                            <h1 class=" text-sm font-semibold dark:text-gray-50 text-neutral-950"><?= $profile['name']; ?> </h1>
                            <h1 class="w-full text-xs dark:text-gray-400  break-all"><?= $profile['email']; ?> </h1>
                        </div>
                       
                        <svg class="w-5 h-5 mr-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/>
                        </svg>
                       
        
            </div>
        </div>
        
        
    </div>
    

    
</aside>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll("li[data-index]");
    const activeBorder = document.getElementById("active-border");


    function moveBorderTo(item, animate = true) {
        if (!item) return;
        const rect = item.getBoundingClientRect();
        activeBorder.style.top = item.offsetTop + 10 + "px";
        activeBorder.style.height = rect.height - 20 + "px";
        activeBorder.style.transition = animate ? "top 0.3s ease, height 0.3s ease" : "none";
    }

    function loadPage(url, index, updateUrl = true) {
        if (!url) return;

        if (updateUrl) {
            const params = new URLSearchParams(window.location.search);
            params.set("menu", index);
            history.pushState(null, "", `${window.location.pathname}?${params.toString()}`);
        }

        fetch(url, { method: "GET", headers: { "X-Requested-With": "XMLHttpRequest" } })
        .then(response => response.text())
        .then(data => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(data, "text/html");
            const newContent = doc.querySelector("main");
            if (newContent) {
                document.querySelector("main").innerHTML = newContent.innerHTML;
                
            }
        })
        .catch(error => console.error("Error loading page:", error));

        const links = document.querySelectorAll("#iconLink"); // Ensure class selector is correct

        links.forEach(link => {
            const linkIndex = parseInt(link.getAttribute("data-index"));

            console.log(`Checking link index: ${linkIndex}, Current index: ${index}`); // Debugging

            if (linkIndex == index) {
                link.classList.add("dark:text-white", "text-neutral-950"); // Highlight the current link
                link.classList.remove("text-gray-500", "dark:text-gray-400");
               
            } else {
                link.classList.remove("dark:text-white", "text-neutral-950"); // Remove highlight from others
                link.classList.add("text-gray-500", "dark:text-gray-400");
            }

         
        });


    }

    function setActiveMenu() {
        const params = new URLSearchParams(window.location.search);
        const activeIndex = params.get("menu") || "0";

        const activeItem = document.querySelector(`li[data-index='${activeIndex}']`);
        if (activeItem) {
            moveBorderTo(activeItem, false);
            const link = activeItem.getAttribute("data-href");
            loadPage(link, activeIndex, false);
        }

        

        
    }

    setActiveMenu();

    items.forEach(item => {
        item.addEventListener("click", function (e) {
            e.preventDefault();
            const link = this.getAttribute("data-href");
            const index = this.getAttribute("data-index");
            moveBorderTo(this, true);
            loadPage(link, index);
        });
    });

    window.addEventListener("popstate", setActiveMenu);
});

</script>