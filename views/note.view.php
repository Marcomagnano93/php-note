<?php require 'partials/head.php'; ?>

<body>
    <div id="app">
        <!-- header -->
        <?php require 'partials/header.php'; ?>
         <!-- main -->
         <main>
            <div class="container">
                <h1>Le tue note</h1>
            </div>
            <div class="container">

                 <!-- uso i dati presi dal note controller per impaginare il risultato: -->
                <?php
                    if ($result->num_rows > 0) {
                        // Output di ogni riga
                        while($row = $result->fetch_assoc()) {
                            echo "Nota: " . $row["name"]. " " . $row["body"]. "<br>";
                        }
                    } else {
                        echo "non ci sono ancora note";
                    }
                ?>

            </div>
            
         </main>
         <!-- footer -->
        <?php require 'partials/footer.php'; ?>
    </div>
