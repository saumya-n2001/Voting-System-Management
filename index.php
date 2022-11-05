<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php voting system</title>

    <!--Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class="text-info text-center p-3">Voting System </h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Login</h2>
        <div class="container text-center">
            <form action="./actions/login.php" method="POST">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto"
                     name="username" placeholder="Enter your username" require="required">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto"
                     name="mobile" placeholder="Enter your mobile number" require="required" maxLength="10" minLength="10">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto"
                     name="password" placeholder="Enter your password" require="required">
                </div>
                <div class="mb-3">
                    <select name="std" class=" form-select w-50 m-auto" >
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">Login</button>
                <p>Don't have an account?<a href="./partials/registration.php" 
                 class="text-white"> Register here</a></p>
            </form>
        </div>
</div>



</body>
</html> 