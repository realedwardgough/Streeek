<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Streeek: Easy Habit Manager</title>
    <link rel="stylesheet" href="{{ asset(path: 'css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <!-- Axios CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> 

</head>
<body>
    

    <!-- Navigation -->
    <nav>
        <header>
            <h1><b>Streeek</b>.</h1>
            <h2>Get your streeek on!</h2>
        </header>
    </nav>

    <!-- Main Content -->
    <main>

        <div class="habits-container">
            <div class="habit-card">
                <div class="habit-card-header">
                    <h3>Exercise</h3>
                    <button class="delete-habit">Delete</button>
                </div>
            </div>

            <div class="habit-card">
                <div class="habit-card-header">
                    <h3>Writing</h3>
                    <button class="delete-habit">Delete</button>
                </div>
            </div>

            <div class="habit-card">
                <div class="habit-card-header">
                    <h3>Coding</h3>
                    <button class="delete-habit">Delete</button>
                </div>
            </div>
        </div>

    </main>



</body>
</html>