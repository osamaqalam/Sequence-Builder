<?php
   ob_start();
   session_start();
?>
<nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
            <span class="navbar-toggler-icon"></span>


        </button>

        <span class="navbar-text">CourseSequence</span>
        <div class="collapse navbar-collapse" id="collapse_target">



        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
                    Dropdown
                    <span class="caret"></span>
                </a>
            <div class="dropdown-menu" aria-labelledby="dropdown_target">
                <ul class="navbar-nav">
                <a class="dropdown-item">Item 1</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item">Item 2</a>
                <a class="dropdown-item">Item 3</a>
                <a class="dropdown-item">Item 4</a>
                </ul>
            </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 2 </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us </a>
            </li>
        </ul>

         <ul class="navbar-nav ">
               <!-- PROFILE DROPDOWN - scrolling off the page to the right -->
               <li class="nav-item dropdown">
                   <a href="#" class="nav-link dropdown-toggle" id="navDropDownLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Welcome 

               <?php 
                if(isset($_SESSION['loggedin']))
                 echo ', '.$_SESSION['userName']; 
               ?>!
          
           </a>
                   <div class="dropdown-menu" aria-labelledby="navDropDownLink">
                       <a class="dropdown-item" href="#">Preferences</a>
                       <div class="dropdown-divider"></div>
                       <a class="dropdown-item" href="FrontEnd/logout.php">Logout</a>
                   </div>
               </li>
           </ul>

        </div>
    </nav>
