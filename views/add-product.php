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
    <title>Add product</title>
</head>
<body>
    <header class="mb-5 mt-5">
        <h2 class="display-2 text-info text-center fw-bold"><i class="fa-solid fa-box"></i> Add Product</h2>
    </header>

    <main class="container">
        <div class="w-50 mx-auto mb-4">
            <form action="../actions/add-product.php" method="post" class="mx-auto">
                <div class="row">
                    <div class="col-12 ps-0 mb-4">
                        <label for="product_name" class="form-label">Product Name</label>
                        <input type="text" name="product_name" class="form-control" id="product_name" required>                        
                    </div>
                    <div class="col-6 ps-0 mb-4">
                        <label for="price" class="form-label">Price</label>
                        <div class="input-group">
                            <div class="input-group-text">$</div>
                            <input type="number" name="price" class="form-control" id="price" required>
                        </div>
                    </div>
                    <div class="col-6 ps-0 mb-4">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" name="quantity" class="form-control" id="quantity" required>
                    </div>
                    <div class="col-12 ps-0 mb-4 mt-3">
                        <button type="submit" class="btn btn-info form-control">Add</button>                      
                    </div>
                </div>
            </form>
        </div> 
    </main>
</body>
</html>

<!-- 復習ポイント

・円マークの部分は、input-groupで作成する。

-->