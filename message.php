<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Massage</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />

</head>

<?php
$pesan = mysqli_connect("localhost", "root", "", "register");
if (isset($_POST['send'])) {
    mysqli_query($pesan, "INSERT INTO mymessage SET
    email = '$_POST[email]',
    subject = '$_POST[subject]',
    your_message = '$_POST[your_message]'");

    echo "<script>window.alert('Pesan anda telah terkirim')</script>";

} 
?>

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

<body>
    <!-- INI CONTENT -->
    <div class="bg-gray-50 dark:bg-gray-500 mx-auto p-8">
        <div class="mx-auto p-8">
            <div class="bg-gray-50 dark:bg-gray-500 relative overflow-x-auto shadow-md sm:rounded-lg mx-auto p-8">
                <table class="jadwalTable w-full text-sm rtl:text-right text-gray-500 dark:text-gray-400 p-4">
                    <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">Daftar
                        Pesan, Kritik dan Saran..
                    </h2>
                    <thead class="text-center text-x text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="text-center px-6 py-3">
                                No.
                            </th>
                            <th scope="col" class="text-center px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="text-center px-6 py-3">
                                Subject
                            </th>
                            <th scope="col" class="text-center px-6 py-3">
                                Message
                            </th>
                            <th scope="col" class="text-center px-6 py-3">
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $mypesan = mysqli_query($pesan, "SELECT * FROM mymessage ");
                        while ($submit = mysqli_fetch_array($mypesan)) {
                            echo "
                            <tr>
                                <td class='text-center'>$no</td>
                                <td>$submit[email]</td>
                                <td>$submit[subject]</td>
                                <td>$submit[your_message]</td>
                                <td class='text-center'>
                                <a href='?delete=$submit[your_message]'> Delete </a>
                                </td>
                            </tr>";
                            $no++;
                        } ?>
                    </tbody>
                </table>

                <?php
                if (isset($_GET['delete'])) {
                    mysqli_query($pesan, "DELETE FROM mymessage WHERE your_message='$_GET[delete]' ");

                    echo "</br>Jangan sebarang menghapus pesan!! hubungi admin jika terjadi kesalahan.";
                    echo "<meta http-equiv=refresh content=2; URL='register.php'>";

                } 
                ?>

                <div class="flex mt-4 md:mt-6">
                    <a href="about.html"
                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Done..</a>
                </div>

            </div>
        </div>
    </div>
    </div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

</html>