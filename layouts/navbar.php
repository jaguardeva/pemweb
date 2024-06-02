<nav class="fixed top-0 left-0 z-30 w-full text-white border-gray-200" id="main-nav">
  <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
    <div href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="../assets/logo.svg" class="h-8" alt="logo-pemkot" loading="lazy" />
      <h1 href class="self-center text-2xl font-bold text-blue-600 whitespace-nowrap">SAGA<span class="text-blue-700">SBY</span></h1>
    </div>
    <div class="flex items-center space-x-3 md:order-2 md:space-x-0 rtl:space-x-reverse">

      <div class="hidden space-x-3 md:flex">
        <a href="../auth/login.php" class="flex items-center justify-center text-white bg-gradient-to-tr from-[#00226E] to-[#0059E8]  w-[130px] h-[50px] text-center font-semibold text-[18px] rounded  px-5 py-2.5 hover:scale-95 transition-all duration-150">
          Masuk</a>
        <a href="../auth/register.php" id="btnRegister" class="flex items-center justify-center py-2.5 px-5  w-[130px] h-[50px] text-center focus:outline-none bg-transparent rounded border-2 border-white font-semibold text-[18px] hover:scale-95 transition-all duration-150">Daftar</a>
        <a href="../auth/register.php" id="btnRegister2" class="hidden items-center justify-center bg-gradient-to-tr from-[#04975a] to-[#0fbd72] py-2.5 px-5  w-[130px] h-[50px] text-center focus:outline-none bg-transparent rounded  font-semibold text-[18px] hover:scale-95 transition-all duration-150">Daftar</a>
      </div>
      <!-- <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300"
        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
        data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
      </button> -->
      <!-- Dropdown menu -->
      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
        <div class="px-4 py-3">
          <span class="block text-sm text-gray-900">Bonnie Green</span>
          <span class="block text-sm text-gray-500 truncate">name@flowbite.com</span>
        </div>
        <ul class="py-2" aria-labelledby="user-menu-button">
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Earnings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign
              out</a>
          </li>
        </ul>
      </div>
      <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-user" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
    </div>
    <!-- <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
      <ul
        class="flex flex-col p-4 mt-4 font-medium bg-white border border-gray-100 rounded-lg md:p-0 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
        <li>
          <a href="/"
            class="nav-link block py-2 px-3 text-[18px] text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 "
            aria-current="page">Beranda</a>
        </li>
        <li>
          <a href="#"
            class="nav-link  block py-2 px-3 text-[18px] text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">About</a>
        </li>
        <li>
          <a href="#"
            class="nav-link  block py-2 px-3 text-[18px] text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Services</a>
        </li>
        <li>
          <a href="#"
            class="nav-link  block py-2 px-3 text-[18px] text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Pricing</a>
        </li>
        <li>
          <a href="#"
            class="nav-link  block py-2 px-3 text-[18px] text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Contact</a>
        </li>
      </ul>
    </div> -->
  </div>
</nav>