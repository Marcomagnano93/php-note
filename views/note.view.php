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
                <div class="row">
                    <div class="col">
                        <form action="" method="post">
                            <div class="note_form">
                                <input for="name" type="text" placeholder="Nome della nota">
                                <textarea for="name"for="body" name="" id="" placeholder="Scrivi qui la tua nota"></textarea>
                            </div>
                            <input type="submit" value="Invia">
                        </form>
                    </div>
                    <div class="col">
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
                </div>



            </div>
            
         </main>
         <!-- footer -->
        <?php require 'partials/footer.php'; ?>
    </div>
