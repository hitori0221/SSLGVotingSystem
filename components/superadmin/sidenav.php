<?php
// Include icon definitions
include_once 'icons.php';

$profile = [
    'image' => '../icons/Alice_Halo.png',
    'name' => 'Super Admin',
    'email' => 'john.doe@example.com'
];

$items = [
    ['href' => '../pages/Dashboard_SuperAdmin.php', 'title' => 'Dashboard', 'icon' => $dashboardIcon, 'isActive' => ($_SERVER['REQUEST_URI'] == '/SSLGVotingSystem/pages/Dashboard_SuperAdmin.php')],
    ['href' => '../pages/School_SuperAdmin.php', 'title' => 'Schools', 'icon' => $schoolIcon , 'isActive' => ($_SERVER['REQUEST_URI'] == '/SSLGVotingSystem/pages/School_SuperAdmin.php')],
    ['href' => '../pages/Users_SuperAdmin.php', 'title' => 'Users', 'icon' => $userIcon , 'isActive' => ($_SERVER['REQUEST_URI'] == '/SSLGVotingSystem/pages/Users_SuperAdmin.php')],
    ['href' => '../pages/Database_SuperAdmin.php', 'title' => 'Database', 'icon' => $databaseIcon , 'isActive' => ($_SERVER['REQUEST_URI'] == '/SSLGVotingSystem/pages/Database_SuperAdmin.php')]
];

$items2 = [
    ['href' => '../pages/Settings_SuperAdmin.php', 'title' => 'Settings', 'icon' => $settingIcon , 'isActive' => ($_SERVER['REQUEST_URI'] == '/sslg/pages/Settings_SuperAdmin.php')]
];
?>

<aside id="separator-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform duration-500 ease-in-out -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <?php if ($profile !== null): ?>
            <li class="flex justify-center">
                <div>
                    <img class="w-20 h-20 mx-auto rounded-full object-cover" src="<?= $profile['image']; ?>" alt="Profile">
                    <h1 class="text-lg font-semibold text-center dark:text-gray-50 text-gray-900"><?= $profile['name']; ?></h1>
                    
                </div>
            </li>
        <?php endif; ?>
      
            <hr class="border-t border-gray-200 dark:border-gray-700 my-4"/>
        <ul class="space-y-2 font-medium text-sm">
            <?php foreach ($items as $item): ?>
                <?php
                    // Check if the current page URL matches the sidebar item href
                    $activeClass = $item['isActive'] ? 'bg-gray-700 text-white' : 'text-gray-900 dark:text-white group hover:bg-gray-100 dark:hover:bg-gray-700 group';
                    $iconClass = $item['isActive'] ? 'text-white' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white';
                ?>
                <li>
                    <a href="<?= $item['href']; ?>" class="flex items-center p-2 rounded-lg <?= $activeClass; ?>">
                        <svg class="shrink-0 w-[24px] h-[24px] <?= $iconClass; ?>" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <?= $item['icon']; ?>
                        </svg>
                        <span class="ms-3"><?= $item['title']; ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
            <div class="flex items-center">
  
  <hr class="flex-grow border-t border-gray-200 dark:border-gray-700">
</div>


            <?php foreach ($items2 as $item): ?>
                <?php
                    // Check if the current page URL matches the sidebar item href
                    $activeClass = $item['isActive'] ? 'bg-gray-700 text-white' : 'text-gray-900 dark:text-white group hover:bg-gray-100 dark:hover:bg-gray-700 group';
                    $iconClass = $item['isActive'] ? 'text-white' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white';
                ?>
                <li>
                    <a href="<?= $item['href']; ?>" class="flex items-center p-2 rounded-lg <?= $activeClass; ?>">
                        <svg class="shrink-0 w-[24px] h-[24px] <?= $iconClass; ?>" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <?= $item['icon']; ?>
                        </svg>
                        <span class="ms-3"><?= $item['title']; ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</aside>
