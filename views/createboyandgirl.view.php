<!-- Change title page -->
<?php $title = "Create User"; ?>

<!-- php connection -->
<?php include "../components/php/connect.php" ?>

<!-- php get data location -->
<?php include "../components/php/datalocat.php" ?>

<!-- php check user login or not -->
<?php include "../components/php/checkuserlogin.php" ?>

<!-- php header -->
<?php include "../components/php/head.php" ?>

    <!-- php navbar -->
    <?php include "./navbar.view.php" ?>

    <!-- Success alert -->
    <div id="formSuccessAlert" class="sticky top-0 absolute w-full -translate-y-[10rem] transition-all ease-in-out duration-300 z-50" id="alertSuccess">
        <div class="bg-slate-800 backdrop-blur-xl z-20 max-w-sm absolute right-5 top-5 rounded-lg py-3 px-4 flex gap-3 border border-green-600 justify-center items-center" style="box-shadow: 0px 0px 5px 0px blue">
            <div class="rounded-l-lg flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-green-600 fill-current" viewBox="0 0 16 16" width="20" height="20"><path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path></svg>
            </div>
            <span id="text-success" class="text-slate-200 font-medium" style="font-family: 'Khmer OS Battambang';font-size: 15px;"> <!--Some Message--> </span>
        </div>
    </div>

    <!-- Not Success alert -->
    <div id="formNotSuccessAlert" class="sticky top-0 absolute w-full -translate-y-[10rem] transition-all ease-in-out duration-300 z-50" id="alertSuccess">
        <div class="bg-slate-800 backdrop-blur-xl z-20 max-w-sm absolute right-5 top-5 rounded-lg py-3 px-4 flex gap-3 border border-green-600 justify-center items-center" style="box-shadow: 0px 0px 5px 0px blue">
            <div class="rounded-l-lg flex items-center">
                <svg class="w-[18px] text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20"><path d="M11.9997 10.5865L16.9495 5.63672L18.3637 7.05093L13.4139 12.0007L18.3637 16.9504L16.9495 18.3646L11.9997 13.4149L7.04996 18.3646L5.63574 16.9504L10.5855 12.0007L5.63574 7.05093L7.04996 5.63672L11.9997 10.5865Z"></path></svg>
            </div>
            <span id="text-not-success" class="text-slate-200 font-medium" style="font-family: 'Khmer OS Battambang';font-size: 15px;"> <!--Some Message--> </span>
        </div>
    </div>

    <!-- form create boy and girl -->
    <div class="dark:bg-slate-700 flex min-h-full flex-col justify-center px-6 py-8 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="../components/image/mark.svg" alt="Your Company">
            <h2 class="mt-10 text-center dark:text-white text-2xl font-bold leading-9 tracking-tight text-gray-900 tracking-wide" style="font-family: 'Khmer OS Battambang';">បញ្ចូលភ្ញៀវខាងប្រុសនិងខាងស្រី</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-lg">
            <form class="space-y-4" action="#" method="POST">
                <!-- KH && EN -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 sm:mx-auto sm:w-full sm:max-w-lg">

                    <!-- Input name khmer -->
                    <div>
                        <label for="fullnameKhmer" class="dark:text-white block text-sm font-medium leading-6 text-gray-900" style="font-family: 'Khmer OS Battambang';">ឈ្មោះ ខ្មែរ</label>
                        <div class="mt-2">
                            <input id="fullnameKhmer" oninput="romanizeKhmerName()" name="nameKhmer" type="text" style="font-family: 'Khmer OS Battambang';" required class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        <p id="KHError" class="hidden mt-2 text-sm text-red-600 dark:text-red-400" style="font-family: 'Khmer OS Battambang';font-size: 13px;"><span class="font-medium font-bold text-red-400">មានកំហុស!</span> អាចបញ្ចូលបានតែឈ្មោះខ្មែរ។</p>
                    </div>

                    <!-- Input name english -->
                    <div>
                        <label for="fullnameEnglish" class="dark:text-white block text-sm font-medium leading-6 text-gray-900" style="font-family: 'Khmer OS Battambang';">ឈ្មោះ អង់គ្លេស</label>
                        <div class="mt-2">
                            <input id="fullnameEnglish" name="nameEnglish" type="text" required class="font-mono px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        <p id="EGError" class="hidden mt-2 text-sm text-red-600 dark:text-red-400" style="font-family: 'Khmer OS Battambang';font-size: 13px;"><span class="font-medium font-bold text-red-400">មានកំហុស!</span> អាចបញ្ចូលបានតែឈ្មោះអង់គ្លេស។</p>
                    </div>
                </div>

                <!-- PH && Money -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 sm:mx-auto sm:w-full sm:max-w-lg">
                    <!-- input name phone -->
                    <div>
                        <label for="phone" class="dark:text-white block text-sm font-medium leading-6 text-gray-900" style="font-family: 'Khmer OS Battambang';">លេខទូរសព្ទ(Optional)</label>
                        <div class="mt-2">
                            <input id="phone" name="phone" type="text" autocomplete="phone" class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        <p id="PHError" class="hidden mt-2 text-sm text-red-600 dark:text-red-400" style="font-family: 'Khmer OS Battambang';font-size: 13px;"><span class="font-medium font-bold text-red-400">មានកំហុស!</span> បញ្ចូលបានតែលេខក្រោម១០ខ្ទង់។</p>
                    </div>

                    <!-- input name money -->
                    <div>
                        <label for="moneyRiel" class="dark:text-white block text-sm font-medium leading-6 text-gray-900" style="font-family: 'Khmer OS Battambang';">ទឹកប្រាក់</label>
                        <div class="mt-2">
                            <input oninput="exchangeMoney()" placeholder="៛" id="moneyRiel" name="moneyRiel" type="text" required class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <input placeholder="$" id="moneyDolar" name="moneyDolar" type="hidden" class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        <p id="MRError" class="hidden mt-2 text-sm text-red-600 dark:text-red-400" style="font-family: 'Khmer OS Battambang';font-size: 13px;"><span class="font-medium font-bold text-red-400">មានកំហុស!</span> អាចបញ្ចូលបានតែលេខ។</p>
                    </div>
                </div>

                <!-- input name location -->
                <div class="">
                    <label for="location" class="dark:text-white block text-sm font-medium leading-6 text-gray-900" style="font-family: 'Khmer OS Battambang';">ទីតាំង</label>
                    <div class="mt-2 relative">
                        <div class="flex gap-2 flex-row">
                            <input id="location" name="location" type="text" class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" style="font-family: 'Khmer OS Battambang';">
                            <button type="button" class="px-6 rounded-md bg-indigo-600 text-white hover:bg-indigo-500 transition-all" style="font-family: 'Khmer OS Battambang';" id="create-location">បង្កើត</button>
                        </div>
                        <p id="LCError" class="hidden mt-2 text-sm text-red-600 dark:text-red-400" style="font-family: 'Khmer OS Battambang';font-size: 13px;"><span class="font-medium font-bold text-red-400">មានកំហុស!</span> បញ្ចូលបានតែអក្សរខ្មែរ។</p>
                        <div id="resultS" class="mt-3 text-blue-600" style="font-family: 'Khmer OS Battambang';font-size: 13px;"></div>
                        <div id="resultF" class="mt-3 text-red-400" style="font-family: 'Khmer OS Battambang';font-size: 13px;"></div>

                        <div class="absolute h-[200px] w-full overflow-y-auto space-y-1 p-2 text-left bg-gray-800 dark:text-gray-400 rounded mt-1" id="listLocation" style="display: none;">
                            <!-- data from database -->
                        </div>
                    </div>
                </div>

                <!-- input name command -->
                <div class="">
                    <label for="command" class="dark:text-white block text-sm font-medium leading-6 text-gray-900" style="font-family: 'Khmer OS Battambang';">មតិយោបល់</label>
                    <div class="mt-2">
                        <textarea id="command" name="command" rows="5" style="font-family: 'Khmer OS Battambang';" class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>

                <!-- button boy and girl -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 sm:mx-auto sm:w-full sm:max-w-lg">
                    <div>
                        <button type="button" name="submit_boy" class="sub-validate px-1 flex w-full justify-center rounded-md bg-indigo-600 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" style="font-family: 'Khmer OS Battambang';">បញ្ចូលខាងប្រុស</button>
                    </div>
                    <div>
                        <button type="button" name="submit_girl" class="sub-validate px-1 flex w-full justify-center rounded-md bg-indigo-600 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" style="font-family: 'Khmer OS Battambang';">បញ្ចូលខាងស្រី</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- script alert not success -->
    <script src="../components/js/AlertNotSuccess.js"></script>

    <!-- script alert success -->
    <script src="../components/js/AlertSuccess.js"></script>

    <!-- script validation create boy and girl -->
    <script src="../components/js/ValidationCreateBoyAndGirl.js"></script>

    <!-- script show list location -->
    <script src="../components/js/showListLocation.js"></script>

    <!-- script create location -->
    <script src="../components/js/createLocation.js"></script>

    <!-- script khmer language -->
    <script src="../components/js/khmerLanguage.js"></script>

    <!-- js exchange money -->
    <script src="../components/js/exchange.js"></script>

<!-- php footer -->
<?php include "../components/php/footer.php" ?>
