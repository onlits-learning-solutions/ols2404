<?php
require 'book-model.php';
require 'member-model.php';

$book_id = $_POST['book_id'];
$book = fetch_book($book_id);

$member_id = $_POST['member_id'];
$member = fetch_member($member_id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circulation</title>
</head>

<body>
    <form action="" method="post">
        <label for="book_id">Book Id</label>
        <input type="text" name="book_id" id="book_id" value="<?= $book['id'] ?>" onblur="form.submit()">
        <!-- <button>Search</button> <br> -->
        <label for="book_title">Book Title</label>
        <input type="text" name="book_title" id="book_title" value="<?= $book['title'] ?>">
        <br><br>
        <label for="member_id">Member Id</label>
        <input type="text" name="member_id" id="member_id" value="<?= $member['id'] ?>" onblur="form.submit()">
        <!-- <button>Search</button> -->
        <label for="member_name">Member Name</label>
        <input type="text" name="member_name" id="member_name" value="<?= $member['name'] ?>">

        <br><br>

        <input type="text" name="date_of_return" id="date_of_return">

        <script>
            const todayDate = new Date();
            todayDate.setDate(todayDate.getDate() + 15);
            alert(todayDate.toDateString());
            document.getElementById('date_of_return').value = todayDate.toDateString();
        </script>

    </form>
</body>

</html>