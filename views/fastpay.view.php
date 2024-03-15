<!-- Change title page -->
<?php $title = "Fast Pay"; ?>

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
            <span id="text-not-success" class="text-red-600 font-medium" style="font-family: 'Khmer OS Battambang';font-size: 15px;"> <!--Some Message--> </span>
        </div>
    </div>

    <!-- form create boy and girl -->
    <div class="dark:bg-slate-700 flex min-h-full flex-col justify-center px-6 py-8 lg:px-8">
        
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
