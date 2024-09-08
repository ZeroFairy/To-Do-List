<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna ToDoList</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-3 p-5 border border-4 border-dark">
    <div class="container mt-1 p-2 border border-3 border-dark bg-info">
        <h1 class="text-center text-white">Login Pengguna ToDoList</h1>
    </div>

        <form method="post" action="/ToDoList/login">
            <?= csrf_field() ?>
            <div class="form-group row mt-3">
                <label for="username" class="col-2 col-form-label">Username</label>
                <div class="col-10"> 
                    <input type="text" class="form-control border border-2 border-dark" name="username" id="username">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label for="password" class="col-2 col-form-label">Password</label>
                <div class="col-10">
                    <input type="text" class="form-control border border-2 border-dark" name="password" id="password">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-2"></div>
                <div class="col-10">
                    <input type="submit" class="btn btn-dark mt-3" value="Login">
                </div>
            </div>
        </form>

        <br><br>
        belum punya akun?
        <a href="/ToDoList/sign">Sign Up</a>
    </div>
</body>
</html>