<!-- Connect to db -->
<?php include "../components/php/connect.php" ?>

<!-- get data user -->
<?php include "../components/php/getalldata.php" ?>

<!-- update user -->
<?php include "../components/php/update.php" ?>

<nav class="bg-gray-800">
  <div class="mx-auto max-w-full px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button id="MobileMenuButton" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <img class="h-8 w-auto" src="../components/image/mark.svg" alt="Your Company">
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <a style="font-family: 'Kh Koulen';" href="./createboyandgirl.view.php" class="<?= $_SERVER["REQUEST_URI"] === '/married-me/views/createboyandgirl.view.php'? 'bg-gray-700' : '' ?> text-gray-300 hover:bg-gray-600 hover:text-white rounded-md px-3 py-2 text-sm font-medium">តារាងខាងប្រុស និង ខាងស្រី</a>
            <a style="font-family: 'Kh Koulen';" href="./table.boy.view.php" class="<?= $_SERVER["REQUEST_URI"] === '/married-me/views/table.boy.view.php'? 'bg-gray-700' : '' ?> text-gray-300 hover:bg-gray-600 hover:text-white rounded-md px-3 py-2 text-sm font-medium">បញ្ចីខាងប្រុស</a>
            <a style="font-family: 'Kh Koulen';" href="./table.girl.view.php" class="<?= $_SERVER["REQUEST_URI"] === '/married-me/views/table.girl.view.php'? 'bg-gray-700' : '' ?> text-gray-300 hover:bg-gray-600 hover:text-white rounded-md px-3 py-2 text-sm font-medium">បញ្ចីខាងស្រី</a>
          </div>
        </div>
      </div>

      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <?php
          if($_SERVER["REQUEST_URI"] != '/married-me/views/table.girl.view.php' && $_SERVER["REQUEST_URI"] != '/married-me/views/table.boy.view.php'){
            echo '
              <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">View notifications</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
              </button>
            ';
          }
          else{
            echo'<div class="">
              <input type="search" oninput="searchTable()" placeholder="ស្វែងរក" name="pro-search" id="pro-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
            </div>';
          }


        ?>

        <!-- Profile dropdown -->
        <div class="relative ml-3">
          <div>
            <button id="btnPfDd" type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
          </div>

          <div id="userMenu" class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal">Your Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <a style="font-family: 'Kh Koulen';" href="./createboyandgirl.view.php" class="<?= $_SERVER["REQUEST_URI"] === '/married-me/views/createboyandgirl.view.php'? 'bg-gray-700' : '' ?> text-gray-300 hover:bg-gray-700 block rounded-md px-3 py-2 text-base font-medium" >តារាងខាងប្រុស និង ខាងស្រី</a>
      <a style="font-family: 'Kh Koulen';" href="./table.boy.view.php" class="<?= $_SERVER["REQUEST_URI"] === '/married-me/views/table.boy.view.php'? 'bg-gray-700' : '' ?> text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">បញ្ចីខាងប្រុស</a>
      <a style="font-family: 'Kh Koulen';" href="./table.girl.view.php" class="<?= $_SERVER["REQUEST_URI"] === '/married-me/views/table.girl.view.php'? 'bg-gray-700' : '' ?> text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">បញ្ចីខាងស្រី</a>
    </div>
  </div>
</nav>

<!-- Start pop up profile -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-md max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
              <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Information about you
              </h3>
              <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
              </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5">
            <form class="space-y-4" action="#" method="POST">
              <!-- input name -->
              <div>
                <label for="pro-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input value="<?= $fullName; ?>" type="text" name="pro-name" id="pro-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
              </div>

              <!-- Input phone -->
              <div>
                <label for="pro-phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
                <input value="<?= $phone; ?>" type="text" name="pro-phone" id="pro-phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
              </div>

              <!-- Input password -->
              <div>
                  <label for="pro-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                  <input value="<?= $password; ?>" type="text" name="pro-password" id="pro-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
              </div>

              <button type="submit" name="update" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
            </form>
          </div>
      </div>
  </div>
</div>
<!-- end pop up profile -->

<!-- js log out -->
<script src="../components/js/logout.js"></script>

<!-- js drop down menu -->
<script src="../components/js/dropdownmenu.js"></script>

<!-- js drop down profile -->
<script src="../components/js/dropDPF.js"></script>

<!-- js search user -->
<script src="../components/js/searchuser.js"></script>
