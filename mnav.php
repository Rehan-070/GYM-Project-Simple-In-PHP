<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav bar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #fo1{
            font-family: 'Courier New', Courier, monospace;
            font:bold;
            color: cyan;
            font-size:20px;
        }
     </style>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
             <div class="container-fluid">
               <a class="navbar-brand" href="#" id="fo1"><b>RS2 GYM</b></a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav">
                   <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="loginp.php">HOME</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="register.php">SIGNUP</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="logout.php">LOGOUT</a>
                   </li>
  
                 </ul>
               </div>
             </div>
           </nav>
</body>
</html>