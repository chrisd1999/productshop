<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="index.php" class="navbar-brand d-flex align-items-center" id="top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 185.45 80.54" fill="white">
                        <path d="M0,0H0V96.54H169V0H0ZM139.73,34.24a3.32,3.32,0,1,1-3.31-3.35,3.33,3.33,0,0,1,3.31,3.35m-29.6,0a3.32,3.32,0,1,1-3.32-3.35,3.34,3.34,0,0,1,3.32,3.35M7.65,88.82V68.22H36.52A6.33,6.33,0,0,0,41.6,70.8a6.44,6.44,0,0,0,0-12.87,6.33,6.33,0,0,0-5.08,2.58H7.65V7.72h65.6V30.38H46.68A6.34,6.34,0,0,0,41.6,27.8a6.44,6.44,0,0,0,0,12.87,6.35,6.35,0,0,0,5.08-2.57H73.25V88.82H7.65ZM38.29,64.36a3.32,3.32,0,1,1,3.31,3.35,3.33,3.33,0,0,1-3.31-3.35m6.63-30.12a3.32,3.32,0,1,1-3.32-3.35,3.34,3.34,0,0,1,3.32,3.35m73.38,30.12a3.32,3.32,0,1,1,3.31,3.35,3.33,3.33,0,0,1-3.31-3.35m43,24.46H125.44V69.48a6.38,6.38,0,1,0-7.66,0V88.82H80.9V7.72H103v21.4a6.38,6.38,0,1,0,7.65,0V7.72h21.94v21.4a6.38,6.38,0,1,0,7.66,0V7.72h21.06v81.1Z" transform="translate(0 0)" class="cls-1"></path>
                    </svg>
                    <strong>Product Shop</strong>
                </a>
                <nav>
                    <a class="btn btn-info btn-sm" href="./create.php" title="Create product">Create Product</a>
                </nav>
            </div>
        </div>
    </header>