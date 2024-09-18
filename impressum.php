<!DOCTYPE html>
<head>
    <meta charset='utf-8'>
</head>

<?php include "inc/navbar.html"; ?>

<style>
          .image-container {
            display: flex;
            justify-content: center; /* Aligns images in the center horizontally */
            gap: 30px; /* Adds space between images */
        }
        .image-container img {
            width: 10%;
            max-width: 100%; /* Ensures images don't overflow */
            height: auto;
            outline: 5px solid #000;
            outline-offset: 5px;
        }
</style>

<body>
    <h1 style="text-align: center;">Impressum</h1>
    <pre style="text-align: center;">
        Angaben gemäß § 5 TMG:

        Ibrahim Elsherif & Emre Kilic
        FH Technikum Wien
        1200
        Wien

        Kontakt:
        Telefon: +43 133 144 122
        E-Mail: student@technikum-wien.at

        Verantwortlich für den Inhalt nach § 55 Abs. 2 RStV:
        Ibrahim Elsherif & Emre Kilic
        FH Technikum Wien , 1200 Wien

        <h2><b>Das Team:</b></h2>

        <div class="image-container">
          <img src="res/img/placeholder.jpg" alt="Foto von Ibrahim">
          <img src="res/img/placeholder.jpg" alt="Foto von Emre">
        </div>
    </pre>

</body>