<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Member</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="main-grid-container">
    <header><?php require('header.php') ?></header>
    <aside><?php require('sidebar.php') ?></aside>
    <main>
        <h3>New Member</h3>
        <form class="col-2">
            <div class="left">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
                <button type="submit">Submit</button>
            </div>
            <div class="right">
                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </form>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>