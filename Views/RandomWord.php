<?php require_once("Components/Layout.php"); ?>

<body class="container-fluid vh-100 d-flex flex-column justify-content-center">
    
    <div class="col-12 d-flex justify-content-center mb-4 pt-2">
        <form class="d-flex" method="post" action="?action=store">
            <input type="text" class="form-control me-2" name="word" placeholder="Enter a new word">
            <input type="text" class="form-control ms-2" name="meaning" placeholder="and it's meaning">
            <button class="btn btn-success ms-4">Add</button>
        </form>
    </div>

    
    <div class="container d-flex justify-content-center">
        <a href="?action=random">
            <button class="btn btn-dark me-3">
                Study
            </button>
        </a>
        <a href="?action=create">
            <button class="btn btn-primary ms-3">
                Show All
            </button>
        </a>
    </div>

    <div class="container vw-100 mt-5 d-flex justify-content-center">
    <?php
        echo 
        "
        <div class='card text-dark bg-light m-2 d-flex justify-content-center align-items-center' style='width: 10rem; height: 10rem; filter: drop-shadow(1px 5px 10px gray)';>
            <div class='text-center' style='font-size: 1.8rem;'>{$data['randomcard']['word']}</div>

        </div>

        ";
        
    ?>


    </div>




<?php require_once("Components/Footer.php"); ?>