<?php
    class breadcrumbs {
        public function createBreadcrumbs($items) {
            $breadcrumbs = '
            <nav class="flex items-center space-x-2 text-sm" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2">
                    <li>
                        <a href="#" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">Home</a>
                    </li>';

            foreach ($items as $item) {
                $breadcrumbs .= $item;
            }
        }
    }

?>