<?php

$currentPage = basename($_SERVER['PHP_SELF']);


?>

<aside id="logo-sidebar"
  class="fixed top-0 left-0 z-[35] w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0"
  aria-label="Sidebar">
  <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
    <ul class="space-y-2 font-medium">
      <li>
        <a href="dashboard.php"
          class="<?php echo $currentPage === "dashboard.php" ? "bg-gray-100" : "bg-white"; ?> flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
          <svg class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
            <path
              d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
          </svg>
          <span class="ms-3">Dashboard</span>
        </a>
      </li>

      <li>
        <a href="make-report.php"
          class="<?php echo $currentPage === "make-report.php" ? "bg-gray-100" : "bg-white"; ?> flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
          <i class="text-lg text-gray-500 fa-solid fa-file-pen"></i>
          <span class="flex-1 ms-3 whitespace-nowrap">Buat Laporan</span>
        </a>
      </li>

      <li>
        <a href="/reports.php"
          class="<?php echo $currentPage === "reports.php" ? "bg-gray-100" : "bg-white"; ?> flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
          <i class="text-xl text-gray-500 fa-solid fa-bullhorn"></i>
          <span class="flex-1 ms-3 whitespace-nowrap">Laporan</span>
        </a>
      </li>
      <li>
        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
          <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
            <path
              d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
          </svg>
          <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
        </a>
      </li>
    </ul>
  </div>
</aside>