<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>ADD BOOK | BRILLIANT BOOKS</title>
</head>

<body>
    <div class="container my-5">
        <header class="d-flex justify-content-between my-4">
            <h1>Add New Book</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>

        <form action="process.php" method="post">
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="title" placeholder="Book Title:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="author" placeholder="Author Name:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="publisherName" placeholder="Publisher Name:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="year-of-release" placeholder="When was book released">
            </div>

            <div class="form-elemnt my-4">
                <select name="type" id="" class="form-control">
                    <option value="">Select Book Type:</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Crime">Crime</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Horror">Horror</option>
                </select>
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="bookPrice" placeholder="How much does the book cost">
            </div>
            <div class="form-element my-4">
                <textarea name="description" id="" class="form-control" placeholder="Book Description:"></textarea>
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" value="Add Book" class="btn btn-primary">
            </div>
        </form>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3 class="mt-0 mb-3 fw-bold fs-2">Services</h3>
                    <ul class="">
                        <li><a href="./index.php" class="link-underline link-underline-opacity-0 text-white">Home</a></li>
                        <li><a href="./pages//category.php" class="link-underline link-underline-opacity-0 text-white">Category</a></li>
                        <li><a href="./pages//about//aboutUs.php" class="link-underline link-underline-opacity-0 text-white">About us</a></li>
                        <li><a href="./pages//cart.php" class="link-underline link-underline-opacity-0 text-white">Cart</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3 class="mt-0 mb-3 fw-bold fs-2">About</h3>
                    <ul>
                        <li><a href=" #" class="link-underline link-underline-opacity-0 text-white">Company</a></li>
                        <li><a href="#" class="link-underline link-underline-opacity-0 text-white">Team</a></li>
                        <li><a href="#" class="link-underline link-underline-opacity-0 text-white">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3 class="mt-0 mb-3 fw-bold fs-2">Brilliant Books store</h3>
                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                </div>
                <div class="col-md-6 item text">
                    <h3 class="mt-0 mb-3 fw-bold fs-2">Careers</h3>
                    <ul class="">
                        <li><a href="./pages//authentication//administratorLogin.php" class="link-underline link-underline-opacity-0 text-white">Intranet</a></li>
                        <li><a href="./pages//adminDashboard.php" class="link-underline link-underline-opacity-0 text-white">Intranet</a></li>
                        <li><a href="./pages//careers//careers.php" class="link-underline link-underline-opacity-0 text-white">Get a job</a></li>
                    </ul>
                </div>
                <div class=" col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                </div>
            </div>
            <p class="copyright text-align-center pt-4 fs-4 mb-0">Brilliant Book Store © 2023</p>
        </div>
    </footer>
</body>

</html>