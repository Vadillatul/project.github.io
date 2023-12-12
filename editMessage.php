<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
</head>

<?php
$pesan = mysqli_connect("localhost", "root", "", "register");

$ubah = mysqli_query($pesan, "SELECT * FROM mymessage WHERE your_message='$_GET[edit]'");
$data = mysqli_fetch_array($ubah);

?>


<body>
    <!-- INI DRAWER -->
    <a href="#"
        class="inline-flex items-center px-6 py-2.5 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-green-700 dark:focus:ring-gray-700 ms-3"
        data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example" data-drawer-placement="right"
        aria-controls="drawer-right-example">Message</a>
    <!-- drawer component -->
    <div id="drawer-right-example"
        class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-right-label">
        <div class="mx-auto gap-4 ">
            <h5 id="drawer-label"
                class="inline-flex items-center mb-6 text-base font-semibold text-green-700 dark:text-gray-400 gap-2">
                <svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 16">
                    <path
                        d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                    <path
                        d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                </svg>Message
            </h5>

        </div>
        <form class="mb-6" action="message.php" method="post">
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    email</label>
                <input type="email" id="email" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                    placeholder="john.doe@company.com" required>
            </div>
            <div class="mb-6">
                <label for="subject"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
                <input type="text" id="subject" name="subject"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                    placeholder="Ask your question in here" required>
            </div>
            <div class="mb-6">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    message</label>
                <textarea id="your_message" name="your_message" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                    placeholder="Description..."></textarea>
            </div>
            <p class="mb-6 text-sm text-gray-500 dark:text-gray-400">You can ask questions or provide
                constructive
                criticism and suggestions, <a href="contact.html"
                    class="text-green-600 underline font-medium dark:text-green-500 hover:no-underline">contact
                    us</a>
                for more information. We would like to express our gratitude.</p>
            <div>
                <input type="submit" id="send" name="send" value="Send Message"
                    class="text-white bg-green-700 hover:bg-green-800 w-full focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm text-center px-5 py-2.5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800 block"></input>
                <a href="message.php"
                    class="items-center px-5 py-2.5 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 w-full ms-3 mb-2 p-2 block">See
                    Message</a>
            </div>
        </form>
    </div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

</html>