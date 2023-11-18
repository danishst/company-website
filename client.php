<?php
include('include/config.php');
session_start();
if(!isset($_SESSION['client'])) {
    header("location:index");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logoonly.jpg" />
    <title>Client - Dashboard</title>
</head>
<style>

body,
body[data-theme="light"] {
  --primaryColor: #f8f8ff ;
  --secondaryColor: #343837;
  --cardColor: #fff;

}

body[data-theme="dark"] {
  --primaryColor: #343837;
  --secondaryColor: #f3ece7;
  --cardColor: #3c4142;

}

body,
button {
  background-color: var(--primaryColor);
}

p,
button {
  color: var(--secondaryColor);
}

;



body {
  background-color: var(--thirdColor);
  color: #fffffd;


}

h1,
p {
  padding: 0;
  margin: 0;
  color: var(--secondaryColor);
  font-family: 'Electrolize', sans-serif;
}

.container {
  padding: 1.5em;
  max-width: 1400px;
  margin: auto;
}

.grid {
  display: inline-block;
  width: 100%;
}

.col {
  width: 25%;
  float: left;
}

.card-container {
  padding: 0 1.5em 3em 1.5em;
}

body .card {
  background-color: var(--cardColor);

  text-align: center;
  padding: 0 0 1em 0;
  border-radius: 0.3em;

}

.card>h1 {
  font-size: 4em;
}

.card>.data-type {
  letter-spacing: 4px;
  margin-left: 8px;
}

.text-sucess {
  color: green;
}

.text-danger {
  color: red;
}

.card>.data-today {
  margin: 2em 0 1em 0;
}

.border {
  background-color: #4267B2;
  height: 0.4em;
  border-top-left-radius: 0.3em;
  border-top-right-radius: 0.3em;
  margin-bottom: 1em;
}

#b-card-red>.border {
  background-color: red;
}

#b-card-facebook>p>i {
  color: #4267B2;
}

#b-card-twitter>.border {
  background-color: #50BFE6;
}

#b-card-twitter>p>i {
  color: #1ba2f4;
}

#b-card-instagram>.border {
  background-color: #FD5B78;
}

#b-card-instagram>p>i {
  background: linear-gradient(to right, #fac06c, #db4e93);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}

#b-card-pinterest>.border {
  background-color: #ED0A3F;
}

#b-card-pinterest>p>i {
  color: #da4e5b;
}

.social-icon {
  font-size: 2em;
}

.social-username {
  letter-spacing: 0.5px;
  padding: 1em 0;
}

.social-username>i {
  vertical-align: middle;
  letter-spacing: 7px;
}

@media (max-width: 1100px) {
  .col {
    width: 50%;
  }
}

@media (max-width: 600px) {
  .col {
    width: 100%;
  }
}

.light-blue {
  color: #8a81bd;
}

#first-header {
  padding: 1.5em 0 3em 1.5em;
}

#hook {
  padding: 0 0 1em 1.5em;
}

.small-card {
  text-align: left;
  position: relative;
  height: 120px;

}

.small-text {
  top: 1.5em;
  left: 1.5em;
  position: absolute;
}

.small-logo {
  top: 1em;
  right: 1.5em;
  position: absolute;
}

.small-number {
  bottom: 0.05em;
  left: 0.3em;
  position: absolute;
}

.small-percent {
  bottom: 0.8em;
  right: 1.5em;
  position: absolute;
}


button {
  font-family: 'Electrolize', sans-serif;
  padding: 0.5em;
  margin-top: 0.8em;
  border-image-slice: 1;
  border-width: 5px;
  /* border-image-source: linear-gradient(to left, #743ad5, #d53a9d); */
  border-color: red;
}
.zoom {
    
    transition: transform .5s; /* Animation */
  /* margin: 0 auto; */
}

.zoom:hover {

  cursor:pointer;
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

.navbar {
  font-size: 18px;
  background-image: linear-gradient(90deg, rgba(232,13,13,0.9164040616246498) 99%, rgba(232,13,13,0.9164040616246498) 100%);
  border: 1px solid rgba(0, 0, 0, 0.2);
  padding-bottom: 10px;
}

.main-nav {
  list-style-type: none;
  display: none;
}

.nav-links,
.logo {
  text-decoration: none;
  color: rgba(255, 255, 255, 0.7);
}

.main-nav li {
  text-align: center;
  margin: 15px auto;
}

.logo {
  display: inline-block;
  font-size: 22px;
  margin-top: 10px;
  margin-left: 20px;
}

.navbar-toggle {
  position: absolute;
  top: 10px;
  right: 20px;
  cursor: pointer;
  color: rgba(255, 255, 255, 0.8);
  font-size: 24px;
}

#chkToggle {
  display: none;
}

#chkToggle:checked + ul.main-nav {
  display: block;
}

@media screen and (min-width: 768px) {
  .navbar {
    display: flex;
    justify-content: space-between;
    padding-bottom: 0;
    height: 70px;
    align-items: center;
  }

  #chkToggle:checked + ul.main-nav {
    display: flex;
  }

  .main-nav {
    display: flex;
    margin-right: 30px;
    flex-direction: row;
    justify-content: flex-end;
  }

  .main-nav li {
    margin: 0;
  }

  .nav-links {
    margin-left: 40px;
  }

  .logo {
    margin-top: 0;
  }

  .navbar-toggle {
    display: none;
  }

  .logo:hover,
  .nav-links:hover {
    color: rgba(255, 255, 255, 1);
  }
}

</style>
<body>
      <nav class="navbar">
    <label class="navbar-toggle" id="js-navbar-toggle" for="chkToggle">
            <i class="fa fa-bars"></i>
        </label>
    <a href="#" class="logo">SagarTech Client Panel</a>
    <input type="checkbox" id="chkToggle"></input>
    <ul class="main-nav" id="js-menu">
      <li>
          <a onclick="toggleTheme()" style="cursor:pointer;color:white;">Switch Mode</a>
        
      </li>
      <li>
        <a href="backoffice/logout.php?id=client" class="nav-links" style="cursor:pointer;color:white;">Logout</a>
      </li>
    </ul>
  </nav>
    <div class="container">
        <div id="first-header">
            <h1>Client Dashboard</h1>
        </div>
      <div class="grid">
        <div class="col zoom">
          <div class="card-container">
            <div class="card" id="b-card-red">
              <div class="border"></div>
              <p class="light-blue social-username">
                <img class="pt-1" style="padding-top:1px;" src='images/theme.ico' width="24" height="24">
                <b><small>/Premium</small></b>
              </p>
              <h1>
              <?php
                $sql   = mysqli_query($con,"SELECT COUNT(*) AS total FROM theme");
                $rows  = mysqli_fetch_assoc($sql);
                $total = $rows['total'];
                echo $total;
              ?>
              </h1>
              <p class="light-blue data-type">THEMES</p>
              <p class="data-today text-sucess"><small><br><b>View Themes</b></small></p>
            </div>
          </div>
        </div>
        <div class="col zoom">
          <div class="card-container">
            <div class="card" id="b-card-red">
              <div class="border"></div>
              <p class="light-blue social-username">
              <img src='images/customer.ico' width="24" height="24">
                <b><small>@Exclusive</small></b>
              </p>
              <h1>
            <?php
                $sql   = mysqli_query($con,"SELECT COUNT(*) AS total FROM images WHERE img_act_id = '7'");
                $rows  = mysqli_fetch_assoc($sql);
                $total = $rows['total'];
                echo $total;
            ?>
              </h1>
              <p class="light-blue data-type">CLIENTS</p>
              <p class="data-today text-sucess"><small><br><b>View Clients</b></small></p>
            </div>
          </div>
        </div>
        <div class="col zoom">
          <div class="card-container">
            <div class="card" id="b-card-red">
              <div class="border"></div>
              <p class="light-blue social-username">
              <img src='images/project.ico' width="24" height="24">
                <b><small>@Perfection</small></b>
              </p>
              <h1>
            <?php
                $sql   = mysqli_query($con,"SELECT COUNT(*) AS total FROM portfolio");
                $rows  = mysqli_fetch_assoc($sql);
                $total = $rows['total'];
                echo $total;
            ?>
              </h1>
              <p class="light-blue data-type">PROJECTS</p>
              <p class="data-today text-sucess"><small><br><b>View Projects</b></small></p>
            </div>
          </div>
        </div>
        <!-- <div class="col">
          <div class="card-container">
            <div class="card" id="b-card-instagram">
              <div class="border"></div>
              <p class="light-blue social-username">
                <i class="fab fa-instagram social-icon"></i>
                <b><small>/black.ellis</small></b>
              </p>
              <h1>1242</h1>
              <p class="light-blue data-type">FOLLOWERS</p>
              <p class="data-today text-sucess"><small><i class="fas fa-caret-up"></i><br><b>1099 Today</b></small></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card-container">
            <div class="card" id="b-card-pinterest">
              <div class="border"></div>
              <p class="light-blue social-username">
                <i class="fab fa-pinterest social-icon"></i>
                <b><small>/blackellis0792</small></b>
              </p>
              <h1>2839</h1>
              <p class="light-blue data-type">FOLLOWERS</p>
              <p class="data-today text-danger"><small><i class="fas fa-caret-down"></i><br><b>144 Today</b></small></p>
            </div>
          </div>
        </div> -->
      </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
    function toggleTheme() {
  window.theme = typeof window.theme === "string" ? window.theme : "light";
  var switchToTheme = window.theme === "light" ? "dark" : "light";
  window.theme = switchToTheme;
  document.querySelector("body").setAttribute("data-theme", switchToTheme);
}
</script>
  </body>


</html>