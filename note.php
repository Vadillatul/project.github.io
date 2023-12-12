<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Note</title>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />

</head>

<?php
$catatan = mysqli_connect("localhost", "root", "", "register");
if (isset($_POST['note'])) {
   mysqli_query($catatan, "INSERT INTO mynote SET
   title = '$_POST[title]',
   description = '$_POST[description]'
   ");

   echo "<script>window.alert('Catatan anda telah tersimpan')</script>";
}

$mynote = mysqli_query($catatan, "SELECT * FROM mynote");
?>

<body>
   <!-- INI NAVIBAR -->

   <!-- INI CONTENT -->
   <div class="mx-auto p-8">
      <div class="mx-auto p-8 gap-4">
         <div class="bg-gray-50 dark:bg-gray-500 relative overflow-x-auto shadow-md sm:rounded-lg mx-auto p-8">
            <div class="flex flex-wrap p-8 gap-4">
               <?php
               while ($note = mysqli_fetch_array($mynote)) {
                  echo "
                  <div class='mx-auto w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 max-w-sm p-8 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4'>
                  <h5 id='title' class='mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white'>$note[title]</h5>
                  <p id='description' class='h-24 overflow-hidden mb-3 font-normal text-gray-700 dark:text-gray-400'>$note[description]</p>
                  <a href='#' class='inline-flex items-center px-3 py-2 h-12 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800'>Reed More</a>
                  </div>";

                  /* <a href='?delete=$note[description]' value='Delete' class='inline-flex items-center px-3 py-2 h-12 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800'>Delete</a>
                  </div>" */
               }
               ?>

            </div>

            <?php
            if (isset($_GET['delete'])) {
               mysqli_query($catatan, "DELETE FROM mynote WHERE description='$_GET[delete]' ");

               echo "</br>Jangan sebarang menghapus catatan!! hubungi admin jika terjadi kesalahan.";
               echo "<meta http-equiv=refresh content=2; URL='note.php'>";

            }
            ?>

            <div class="flex mt-4 md:mt-6">
               <a href="about.html"
                  class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 ms-3 p-8">Done..</a>
            </div>
         </div>
      </div>
   </div>

   <!-- INI FOOTER -->
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

</html>