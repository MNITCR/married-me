<!-- php connect to db -->
<?php include "../components/php/connect.php" ?>

<!-- php sing up -->
<?php include "../components/php/singup.php" ?>

<!-- Change title page -->
<?php $title = "Sing up";?>

<!-- php head -->
<?php include "../components/php/head.php" ?>

    <div class="dark:bg-slate-800 flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="../components/image/mark.svg" alt="Your Company">
            <h2 class="mt-10 text-center dark:text-white text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign up to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-5" action="#" method="POST">

                <!-- input name -->
                <div>
                    <label for="fullname" class="dark:text-white block text-sm font-medium leading-6 text-gray-900">Full name</label>
                    <div class="mt-2">
                        <input id="fullname" name="fullname" type="text" autocomplete="fullname" required class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <!-- input phone -->
                <div>
                    <label for="phone" class="dark:text-white block text-sm font-medium leading-6 text-gray-900">Phone number</label>
                    <div class="mt-2">
                        <input id="phone" name="phone" type="text" autocomplete="phone" required class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <!-- input password -->
                <div>
                    <label for="password" class="dark:text-white block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <!-- button sing up -->
                <div>
                    <button type="submit" name="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign up</button>
                </div>
            </form>

            <p class="mt-4 text-center text-sm text-gray-500">
            If your have account?
            <a href="./singin.view.php" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Go to sing in</a>
            </p>
        </div>
    </div>

<!-- php footer -->
<?php include "../components/php/footer.php" ?>
