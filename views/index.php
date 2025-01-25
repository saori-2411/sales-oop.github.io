<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
    <header class="mb-5 mt-5">
        <h2 class="display-2 text-primary text-center fw-bold">LOGIN <i class="fa-solid fa-right-to-bracket"></i></h2>
    </header>

    <main class="container">
        <div class="w-50 mx-auto mb-4">
            <form action="../actions/login.php" method="post" class="mx-auto">
                <div class="form-group d-flex aline-items-center mb-2">
                    <label for="username" class="form-label me-2 mt-2" style="width: 100px;">Username</label>
                    <input type="text" name="username" placeholder="Username" class="form-control mb-2" required autofocus>
                </div>
                <div class="form-group d-flex aline-items-center mb-4">
                    <label for="password" class="form-label me-2 mt-2" style="width: 100px;">Password</label>
                    <input type="password" name="password" placeholder="Password" class="form-control mb-4" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 mb-4">Login</button>
                <div class="text-center">
                    <a href="register.php" class="btn btn-danger w-50">Create an Account</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>



<!-- Bootstrap復習ポイント

・labelとinputを横並びにする場合は、CSSの「フレックスボックス(=form-group)」を利用する。
・labelとinputの間に隙間を作るには、「me-XX」で調整する
・「style="width: 100px;"」をすることでラベルの幅を一定に保つことができ、入力欄の位置が統一される。
・labelの位置をinputの高さに対して中央に表示するためには、「mt-2」などを用いて微調整する。
・リンク付きのボタンは、<a>を使う。リンクをつける際は、type="submit"は不要。

作成所要時間：30分
-->