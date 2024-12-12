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
        <input type="text" name="member_name" id="member_name"> <br><br>
        <select name="days" id="days" onchange="updateReturnDate(this.value)">
            <!-- <option value="-1">Select</option> -->
            <option value="15">15</option>
            <option value="20">20</option>
        </select>

        <br><br>

        <input type="date" name="date_of_return" id="date_of_return">

        <script>
            function updateReturnDate(value) {
                const returnDate = new Date();
                returnDate.setDate(returnDate.getDate() + Number(value));
                const day = returnDate.getDate();
                let month = returnDate.getMonth() + 1;
                if (month < 10)
                    month = '0' + month;
                const year = returnDate.getFullYear()

                const returnDateString = year + "-" + month + "-" + day;
                alert(returnDateString);

                document.getElementById('date_of_return').value = returnDateString;
            }

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