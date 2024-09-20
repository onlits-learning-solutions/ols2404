<?php

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
        <input type="text" name="book_id" id="book_id" onblur="getBook(this.value)">
        <label for="book_title">Book Title</label>
        <input type="text" name="book_title" id="book_title">

        <br><br>
        <label for="member_id">Member Id</label>
        <input type="text" name="member_id" id="member_id" onblur="getMember(this.value)">
        <label for="member_name">Member Name</label>
        <input type="text" name="member_name" id="member_name">

        <br><br>

        <input type="text" name="date_of_return" id="date_of_return">

        <script>
            const todayDate = new Date();
            todayDate.setDate(todayDate.getDate() + 15);
            alert(todayDate.toDateString());
            document.getElementById('date_of_return').value = todayDate.toDateString();

            function getBook(bookId) {
                const xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById('book_title').value = this.responseText;
                    }
                }
                xhr.open('GET', 'getBook.php?id=' + bookId, true);
                xhr.send();
            }

            function getMember(memberId) {
                const xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById('member_name').value = this.responseText;
                    }
                }
                xhr.open('GET', 'getMember.php?id=' + memberId, true);
                xhr.send();
            }
        </script>

    </form>
</body>

</html>