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
    <title>Register</title>
</head>
<body>
    <header class="mb-5 mt-5">
        <h2 class="display-2 text-danger text-center fw-bold"><i class="fa-solid fa-user-plus"></i> Registration</h2>
    </header>

    <main class="container">
        <div class="w-75 mx-auto mb-4">
            <form action="../actions/register.php" method="post" class="mx-auto">
                <div class="row">
                    <div class="col-6 ps-0 mb-4">
                        <label for="first-name" class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" id="first-name" required>
                    </div>
                    <div class="col-6 ps-0 mb-4">
                        <label for="last-name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" id="last-name" required>
                    </div>
                    <div class="col-12 ps-0 mb-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username" required>                        
                    </div>
                    <div class="col-12 ps-0 mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>                        
                    </div>
                    <div class="col-12 ps-0 mb-4 mt-3">
                        <button type="submit" class="btn btn-danger form-control">Register</button>                      
                    </div>
                </div>
            </form>
        </div> 
    </main>
</body>
</html>

<!-- Bootstrap復習ポイント

・fw: font-weight
・inputを並べたいときはcol使用。
・labelのclassは、form-label
・ショートカット　「input:」でtypeが省略できる。
・buttonのclassにもform-controlを入れるのを忘れずに！（幅を合わせる）
・ps-0: padding-start(=padding left)

-->