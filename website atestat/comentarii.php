<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Website Title -->
    <title>PROBLEME INFORMATICA</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
	<!-- logo -->
    <link rel="icon" href="images/LIMBAJUL C++.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">
    
    
    

     <!-- Navigation -->
     <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo -->
             <a class="navbar-brand logo-text page-scroll" href="index.html">PROBLEME INFORMATICA</a>

            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="sdc.html">SIRURI DE CARACTERE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="recursivitate.html">RECURSIVITATE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="subprograme.html">SUBPROGRAME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="lcf.html">LUCRU CU FISIERE</a>
                    </li>

                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">FOLOSITOARE</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="back.html"><span class="item-text">METODA BACKTRACKING</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="greedy.html"><span class="item-text">METODA GREEDY</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="pd.html"><span class="item-text">PROGRAMARE DINAMICA</span></a>
                            
                            
                        </div>
                    </li>
                    <!-- end of dropdown menu -->

                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="quiz.html">QUIZ</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>PAGINA DE FEEDBACK</h1>
                    <br>
                    <p> <font color="white"> Aici puteti vedea comentariile lasate de alti vizitatori ai acestui site!</p>

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <font color="black">
                        <a href="index.html">Home</a><i class="fa fa-angle-double-right"></i><span>Comentarii si pareri</span>
                        </font>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->
    

    <?php

include("php/conect.php");

$sql=" select * from users";
$rezultat=mysqli_query($mysql,$sql);

echo "<table> <tr> <td> Nr. crt. </td><td>  Nume: </td><td> Prenume: </td><td> Email: </td><td> Comentariu: </td> </tr> <br>";

while
($rand=mysqli_fetch_array($rezultat)) 
echo "<tr><td>".$rand["id"]."</td><td> ".$rand["nume"]."</td><td> ".$rand["prenume"]." </td><td> ".$rand["email"]." </td><td>".$rand["comentariu"]." </td></tr>";

"</table>"
?>


    

    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>