<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
</head>

<style>
    /* Style table */
    .jadwalTable {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .jadwalTable th,
    .jadwalTable td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    .jadwalTable th {
        background-color: #f2f2f2;
    }

    .jadwalTable tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>

<?php
$koneksi = mysqli_connect("localhost", "root", "", "register");

$ubah = mysqli_query($koneksi, "SELECT * FROM myregister WHERE phone='$_GET[edit]'");
$data = mysqli_fetch_array($ubah);

?>

<body>
    <!-- INI CONTENT -->
    <div class="bg-gray-50 dark:bg-gray-500 mx-auto p-8">
        <div class="mx-auto p-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-auto p-8">
                <form action="register.php" method="post">
                    <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white py-2">
                        Edit
                        Data Register Anda!</h2>
                    <div class="grid gap-6 mb-6 md:grid-cols-2 mx-auto">
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                            <input type="text" id="first_name" name="first_name"
                                value="<?php echo $data['first_name']; ?>"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="John" required>
                        </div>
                        <div>
                            <label for="last_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                name</label>
                            <input type="text" id="last_name" name="last_name" value="<?php echo $data['last_name']; ?>"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="Doe" required>
                        </div>
                        <div>
                            <label for="company"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                            <input type="text" id="company" name="company" value="<?php echo $data['company']; ?>"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="Flowbite" required>
                        </div>
                        <div>
                            <label for="phone"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                number</label>
                            <input type="tel" id="phone" name="phone" value="<?php echo $data['phone']; ?>"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="0123-4567-8900" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" required>
                        </div>
                        <div>
                            <label for="website"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website URL</label>
                            <input type="url" id="website" name="website" value="<?php echo $data['website']; ?>"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                placeholder="https://flowbite.com" required>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                            address</label>
                        <input type="email" id="email" name="email" value="<?php echo $data['email']; ?>"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            placeholder="john.doe@company.com" required>
                    </div>
                    <div class="mb-6">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" id="password" name="password" value="<?php echo $data['password']; ?>"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            placeholder="•••••••••" required>
                    </div>
                    <div class="mb-6">
                        <label for="confirm_password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                            password</label>
                        <input type="password" id="confirm_password" name="confirm_password"
                            value="<?php echo $data['confirm_password']; ?>"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            placeholder="•••••••••" required>
                    </div>
                    <div class="flex items-start mb-6">
                        <div class="flex items-center h-5">
                            <input id="remember" type="checkbox" value=""
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-green-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-green-600 dark:ring-offset-gray-800"
                                required>
                        </div>
                        <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300 px-2">I
                            agree
                            with
                            the <a href="#" class="text-green-600 hover:underline dark:text-green-500">terms and
                                conditions</a>.</label>
                    </div>
                    <input type="submit" id="submit" name="submit" value="Submit"
                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"></input>
                    <a href="register.php"
                        class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 ms-3 p-2">Cancel</a>
                </form>

                <?php
                if (isset($_POST['submit'])) {
                    mysqli_query($koneksi, "UPDATE myregister SET
                    first_name = '$_POST[first_name]',
                    last_name = '$_POST[last_name]',
                    company = '$_POST[company]',
                    phone = '$_POST[phone]',
                    website = '$_POST[website]',
                    email = '$_POST[email]',
                    password = '$_POST[password]',
                    confirm_password = '$_POST[confirm_password]'
                    WHERE phone = '$_GET[edit]'
                    ");

                    echo "Data anda telah di edit";
                    echo "<meta http-equiv=refresh content=1; URL='register.php'>";
                }

                ?>
            </div>
        </div>
    </div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

</html>