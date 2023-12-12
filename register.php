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
if (isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($koneksi, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($koneksi, $_POST['last_name']);
    $company = mysqli_real_escape_string($koneksi, $_POST['company']);
    $phone = mysqli_real_escape_string($koneksi, $_POST['phone']);
    $website = mysqli_real_escape_string($koneksi, $_POST['website']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($koneksi, $_POST['confirm_password']);

    $submit = mysqli_query($koneksi, "INSERT INTO myregister VALUES ('$first_name', '$last_name', '$company', '$phone', '$website', '$email', '$password', '$confirm_password')");

    if ($submit) {
        echo "<script>window.alert('Data anda berhasil disimpan')</script>";
    }
}

?>

<body>
    <!-- INI CONTENT -->
    <div class="bg-gray-50 dark:bg-gray-500 mx-auto p-8">
        <div class="mx-auto p-8">
                <div class="bg-gray-50 dark:bg-gray-500 relative overflow-x-auto shadow-md sm:rounded-lg mx-auto p-8">
                    <table
                        class="jadwalTable w-full text-sm rtl:text-right text-gray-500 dark:text-gray-400 p-4">
                        <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">Data Base
                            User..
                        </h2>
                        <thead class="text-center text-x text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="text-center px-6 py-3">
                                    No.
                                </th>
                                <th scope="col" class="text-center px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="text-center px-6 py-3">
                                    Company
                                </th>
                                <th scope="col" class="text-center px-6 py-3">
                                    Phone
                                </th>
                                <th scope="col" class="text-center px-6 py-3">
                                    Website
                                </th>
                                <th scope="col" class="text-center px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="text-center px-6 py-3">
                                    Edit
                                </th>
                                <th scope="col" class="text-center px-6 py-3">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $mysubmit = mysqli_query($koneksi, "SELECT * FROM myregister ");
                            while ($submit = mysqli_fetch_array($mysubmit)) {
                                echo "
                            <tr>
                                <td class='text-center'>$no</td>
                                <td>$submit[first_name] $submit[last_name]</td>
                                <td >$submit[company]</td>
                                <td class='text-center'>$submit[phone]</td>
                                <td class='text-center'>$submit[website]</td>
                                <td class='text-center'>$submit[email]</td>
                                <td class='text-center'><a href='editRegister.php?edit=$submit[phone]'> Edit </a></td>
                                <td class='text-center'><a href='?delete=$submit[phone]'> Delete </a></td>
                            </tr>";
                                $no++;
                            } ?>
                        </tbody>
                    </table>

                    <?php
                    if (isset($_GET['delete'])) {
                        mysqli_query($koneksi, "DELETE FROM myregister WHERE phone='$_GET[delete]'");

                        echo "</br>Jangan sebarang menghapus pesan!! hubungi admin jika terjadi kesalahan.";
                        echo "<meta http-equiv=refresh content=2; URL='register.php'>";
                    } ?>

                    <div class="flex mt-4 md:mt-6">
                        <a href="index.html"
                            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Done..</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

</html>