<!-- php check user login or not -->
<?php include "../components/php/checkuserlogin.php" ?>

<!-- php connection -->
<?php include "../components/php/connect.php" ?>

<!-- php update girl data -->
<?php include "../components/php/editboy.php" ?>

<!-- Change title page -->
<?php $title = "Table Boy";?>

<!-- php header -->
<?php include "../components/php/head.php" ?>

    <!-- php navbar -->
    <?php include "./navbar.view.php" ?>

    <div class="dark:bg-slate-700 flex min-h-full flex-col justify-center px-6 py-8 lg:px-8">
        <div class="relative overflow-x-hidden shadow-md sm:rounded-lg">
            <table id="printTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="whitespace-nowrap px-6 py-3" style="font-family: 'Khmer OS Battambang';">
                            ល.រ
                        </th>
                        <th scope="col" class="whitespace-nowrap px-6 py-3 whitespace-nowrap" style="font-family: 'Khmer OS Battambang';">
                            ឈ្មោះខ្មែរ
                        </th>
                        <th scope="col" class="whitespace-nowrap px-6 py-3 whitespace-nowrap" style="font-family: 'Khmer OS Battambang';">
                            ឈ្មោះអង្គគ្លេស
                        </th>
                        <th scope="col" class="whitespace-nowrap px-6 py-3 whitespace-nowrap" style="font-family: 'Khmer OS Battambang';">
                            លេខទូរសព្ទ
                        </th>
                        <th scope="col" class="whitespace-nowrap px-6 py-3 whitespace-nowrap" style="font-family: 'Khmer OS Battambang';">
                            ទឹកប្រាក់​ ៛
                        </th>
                        <th scope="col" class="whitespace-nowrap px-6 py-3 whitespace-nowrap" style="font-family: 'Khmer OS Battambang';">
                            ទឹកប្រាក់ $
                        </th>
                        <th scope="col" class="whitespace-nowrap px-6 py-3 whitespace-nowrap" style="font-family: 'Khmer OS Battambang';">
                            ទីតាំង
                        </th>
                        <th scope="col" class="whitespace-nowrap px-6 py-3 whitespace-nowrap" style="font-family: 'Khmer OS Battambang';">
                            មតិយោបល់
                        </th>
                        <th scope="col" class="whitespace-nowrap px-6 py-3 whitespace-nowrap" style="font-family: 'Khmer OS Battambang';">
                            កាលបរិច្ឆេទ
                        </th>
                        <th scope="col" class="whitespace-nowrap px-6 py-3 whitespace-nowrap" style="font-family: 'Khmer OS Battambang';">
                            សកម្មភាព
                        </th>
                    </tr>
                </thead>
                <tbody id="dataTable">
                    <?php
                        $totalUsers = 0;
                        $totalMoneyRiel = 0;
                        $totalMoneyDollar = 0;

                        $userid = $_SESSION['userid'];
                        $query = "SELECT g.*, l.village FROM boy_tbl g
                            JOIN location_tbl l ON g.locaid = l.locaid
                            WHERE g.user_id = '$userid'";
                        // $query = "SELECT * FROM girl_tbl WHERE user_id = '$userid'";
                        $result = mysqli_query($conn, $query);

                        if ($result && mysqli_num_rows($result) > 0) {
                            $counter = 1;

                            while ($row = mysqli_fetch_assoc($result)) {
                                // Calculate totals
                                $totalUsers++;
                                $totalMoneyRiel += $row['moneyriel'];
                                $totalMoneyDollar += $row['moneydolar'];

                                echo <<<HTML
                                    <tr class="table-row odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{$counter}</th>
                                        <td class="px-6 py-4" style="font-family: 'Khmer OS Battambang';">{$row['khmername']}</td>
                                        <td class="px-6 py-4">{$row['englishname']}</td>
                                        <td class="px-6 py-4">{$row['phone']}</td>
                                        <td class="px-6 py-4">{$row['moneyriel']}</td>
                                        <td class="px-6 py-4">{$row['moneydolar']}</td>
                                        <td class="px-6 py-4 whitespace-nowrap" style="font-family: 'Khmer OS Battambang';">{$row['village']}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{$row['commment']}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{$row['created_at']}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#" class="hover:text-red-600 text-red-500 transition ease-in-out" onclick="confirmDelete({$row['boy_id']})"><i class="ri-delete-bin-line"></i></a>
                                            <a href="#" class="hover:text-blue-500 transition ease-in-out" onclick="openEditModal({$row['boy_id']})"><i class="ri-file-edit-line"></i></a>
                                        </td>
                                    </tr>

                                    <!-- ុuser not found  -->
                                    <tr id="messageUser" class="hidden odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                        <td colspan="10" class="text-center px-6 py-4 text-red-200">មិនមានទិន្នន័យទេ</td>
                                    </tr>
                                HTML;

                                $counter++;
                            }
                        } else {
                            echo <<<HTML
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <td colspan="10" class="text-center px-6 py-4 text-red-200">មិនមានទិន្នន័យទេ</td>
                                </tr>
                            HTML;
                        }
                    ?>

                    <!-- Footer table -->
                    <tr class="text-center text-xs table-row odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th colspan="2" scope="col" class="whitespace-nowrap px-6 py-3" style="font-family: 'Khmer OS Battambang';">ចំនួននាក់ចូលរួមសរុប</th>
                        <th colspan="2" scope="col" class="whitespace-nowrap px-6 py-3" style="font-family: 'Khmer OS Battambang';">លុយសរុបគិតជារៀល</th>
                        <th colspan="3" scope="col" class="whitespace-nowrap px-6 py-3" style="font-family: 'Khmer OS Battambang';">លុយសរុបគិតជាដុល្លា</th>
                        <th colspan="3" scope="col" class="whitespace-nowrap px-6 py-3" style="font-family: 'Khmer OS Battambang';">សកម្មភាព</th>
                    </tr>
                    <tr class="text-sm text-center">
                        <td colspan="2" class="px-6 py-3 font-bold" id="total-user"><?= $totalUsers; ?> <span style="font-family: 'Khmer OS Battambang';">នាក់</span></td>
                        <td colspan="2" class="px-6 py-3" id="total-moneyRiel"><?= $totalMoneyRiel;?> ៛</td>
                        <td colspan="3" class="px-6 py-3" id="total-moneyDollar"><?= $totalMoneyDollar; ?> $</td>
                        <td colspan="3"><i id="btn-export" class="ri-printer-line px-6 py-3 hover:text-blue-500 transition ease-in-out cursor-pointer"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <!-- Start pop up edit girl -->
    <div id="editboy-modal" tabindex="-1" aria-hidden="true" class="hidden flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Update Information
                    </h3>
                    <button type="button" id="btn_close_model" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="p-4">
                    <form class="space-y-4" action="#" method="POST">
                        <input type="hidden" id="boy_id" name="boy_id"></input>
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
                                    <?php include "../components/php/connect.php" ?>
                                    <!-- php get data location -->
                                    <?php include "../components/php/datalocat.php" ?>
                                    <!-- show location data -->
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

                        <button type="submit" name="updateBoy" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end pop up edit girl -->


    <!-- Calculate User And Money -->
    <script>
        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        let totalMoneyRielFormatted = numberWithCommas(<?php echo $totalMoneyRiel; ?>);
        let totalMoneyDollarFormatted = numberWithCommas(<?php echo $totalMoneyDollar; ?>);

        document.getElementById("total-moneyRiel").innerHTML = totalMoneyRielFormatted + " ៛";
        document.getElementById("total-moneyDollar").innerHTML = totalMoneyDollarFormatted + " $";
    </script>
    <!-- script Excel download -->
    <script src="../components/js/ExcelDownload.js"></script>

    <!-- script close model boy -->
    <script type="text/javascript" src="../components/js/closemodelboy.js"></script>

    <!-- script khmer language -->
    <script src="../components/js/khmerLanguage.js"></script>

    <!-- js exchange money -->
    <script src="../components/js/exchange.js"></script>

    <!-- js edit boy -->
    <script src="../components/js/editboy.js"></script>

    <!-- js delete boy -->
    <script src="../components/js/deleteboy.js"></script>

<!-- php footer -->
<?php include "../components/php/footer.php" ?>
