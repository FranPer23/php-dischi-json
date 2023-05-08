<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- vue js  -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>PHP Dischi JSON</title>
</head>

<body style="background-color: #1d2d3c;">
    <div id="app">
        <div class="container ">
            <ul class="d-flex flex-wrap">
                <li v-for="(disk, index) in disks" :key="index">
                    <div class="card border-0 mr-3 mt-4" style="width:15rem; height: 21rem;">
                        <div class="card-body text-center" style="background-color: #112030; color: white;">
                            <img :src="disk.poster" class="card-img-top" alt="..." />

                            <h5 class="card-title">{{ disk.title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ disk.author }}</h6>
                            <p class="card-text">{{ disk.year }}</p>
                        </div>
                    </div>
                </li>
            </ul>




        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>