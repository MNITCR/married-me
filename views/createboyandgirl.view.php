<!-- Change title page -->
<?php $title = "Create User"; ?>

<!-- php connection -->
<?php include "../components/php/connect.php" ?>

<!-- php get data location -->
<?php include "../components/php/datalocat.php" ?>

<!-- php check user login or not -->
<?php include "../components/php/checkuserlogin.php" ?>

<!-- php create boy -->
<?php include "../components/php/createboy.php" ?>

<!-- php create girl -->
<?php include "../components/php/creategirl.php" ?>

<!-- php header -->
<?php include "../components/php/head.php" ?>

    <!-- php navbar -->
    <?php include "./navbar.view.php" ?>

    <div class="dark:bg-slate-700 flex min-h-full flex-col justify-center px-6 py-8 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="../components/image/mark.svg" alt="Your Company">
            <h2 class="mt-10 text-center dark:text-white text-2xl font-bold leading-9 tracking-tight text-gray-900 tracking-wide" style="font-family: 'Khmer OS Battambang';">បញ្ចូលភ្ញៀវខាងប្រុសនិងខាងស្រី</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-lg">
            <form class="space-y-4" action="#" method="POST">
                <!-- KH && EN -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:mx-auto sm:w-full sm:max-w-lg">

                    <!-- Input name khmer -->
                    <div>
                        <label for="fullnameKhmer" class="dark:text-white block text-sm font-medium leading-6 text-gray-900" style="font-family: 'Khmer OS Battambang';">ឈ្មោះ ខ្មែរ</label>
                        <div class="mt-2">
                            <input id="fullnameKhmer" oninput="romanizeKhmerName()" name="nameKhmer" type="text" style="font-family: 'Khmer OS Battambang';" required class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <!-- Input name english -->
                    <div>
                        <label for="fullnameEnglish" class="dark:text-white block text-sm font-medium leading-6 text-gray-900" style="font-family: 'Khmer OS Battambang';">ឈ្មោះ អង់គ្លេស</label>
                        <div class="mt-2">
                            <input id="fullnameEnglish" name="nameEnglish" type="text" required class="font-mono px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>

                <!-- PH && Money -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:mx-auto sm:w-full sm:max-w-lg">
                    <!-- input name phone -->
                    <div>
                        <label for="phone" class="dark:text-white block text-sm font-medium leading-6 text-gray-900" style="font-family: 'Khmer OS Battambang';">លេខទូរសព្ទ(Optional)</label>
                        <div class="mt-2">
                            <input id="phone" name="phone" type="text" autocomplete="phone" class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <!-- input name money -->
                    <div>
                        <label for="moneyRiel" class="dark:text-white block text-sm font-medium leading-6 text-gray-900" style="font-family: 'Khmer OS Battambang';">ទឹកប្រាក់</label>
                        <div class="mt-2">
                            <input oninput="exchangeMoney()" placeholder="៛" id="moneyRiel" name="moneyRiel" type="text" required class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <input placeholder="$" id="moneyDolar" name="moneyDolar" type="hidden" class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>

                <!-- input name location -->
                <div class="">
                    <label for="location" class="dark:text-white block text-sm font-medium leading-6 text-gray-900" style="font-family: 'Khmer OS Battambang';">ទីតាំង</label>
                    <div class="mt-2">
                        <select class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" name="location" id="location" style="font-family: 'Khmer OS Battambang';">

                            <!-- php get data location -->
                            <?php include "../components/php/showlocation.php" ?>

                        </select>
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
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:mx-auto sm:w-full sm:max-w-lg">
                    <div>
                        <button type="submit" name="submit_boy" class="px-1 flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" style="font-family: 'Khmer OS Battambang';">បញ្ចូលខាងប្រុស</button>
                    </div>
                    <div>
                        <button type="submit" name="submit_girl" class="px-1 flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" style="font-family: 'Khmer OS Battambang';">បញ្ចូលខាងស្រី</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- script khmer language -->
    <script src="../components/js/khmerLanguage.js"></script>

    <!-- js exchange money -->
    <script src="../components/js/exchange.js"></script>

<!-- php footer -->
<?php include "../components/php/footer.php" ?>


