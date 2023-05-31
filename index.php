<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>PHP OOP-1</title>
</head>
<body>

    <div id="app">
        <!-- HEADER -->
        <header>
            <div class="container">
                <div class="row pt-5">
                    <div class="col">
                        
                        <h1 class="text-center">Movies</h1>
                    </div>
                </div>
            </div>
        </header>

        <!-- MAIN -->
        <main>
            <div class="container">
                <div class="row justify-content-between row-gap-3">

                    <!-- cards -->
                    <div class="card" style="width: 18rem;"
                    v-for="(elem, index) in this.data" :key="index">
                        
                        <div class="card-body">

                            <h5 class="card-title">{{ elem.title }}</h5>

                            <h6>Data: {{ elem.date }}</h6>

                            <h6>Vote: {{ elem.vote }}</h6>

                            <div class="d-flex column-gap-2">

                                <span v-for="(el, i) in elem.category" :key="i" 
                                    class="badge text-bg-primary">
                                    {{ el.genres }}
                                </span>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>    
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Main JS -->
    <script src="./main.js"></script>

</body>
</html>