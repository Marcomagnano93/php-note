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
                <?php
                    // uso i dati prisi dal note controller per impaginare il risultato:

                    if ($result->num_rows > 0) {
                        // Output di ogni riga
                        while($row = $result->fetch_assoc()) {
                            echo "Nota: " . $row["name"]. " " . $row["body"]. "<br>";
                        }
                    } else {
                        echo "0 risultati";
                    }
                ?>
            </div>
            
         </main>
         <!-- footer -->
        <?php require 'partials/footer.php'; ?>
    </div>
