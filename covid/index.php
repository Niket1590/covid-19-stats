
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include './resources/css/style.php' ?>
   
    <title>COVID-19 STATS </title>
  </head>
  <body>
    
    <header>
      <div class="logo">
        <img src="./resources/img/logo.png" alt="" />
        <p>COVID-19<br />STATS</p>
      </div>
      <nav>
        <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="#">ABOUT</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <div class="stats">
        <div class="latest-report">
          <div class="country">
            <div class="name">Loading...</div>
            <div class="change-country">change</div>
            <div class="search-country hide">
              <div class="search-box">
                <input
                  type="text"
                  id="search-input"
                  placeholder="Search Country..."
                />
                <img class="close" src="./resources/img/close.svg" alt="" />
              </div>
              <div class="country-list"></div>
            </div>
          </div>
          <div class="total-cases">
            <div class="title">Total Cases</div>
            <div class="value">0</div>
            <div class="new-value">+0</div>
          </div>
          <div class="deaths">
            <div class="title">Deaths</div>
            <div class="value">0</div>
            <div class="new-value">+0</div>
          </div>
        </div>
        <div class="chart">
          <canvas id="axes_line_chart"></canvas>
        </div>
      </div>
    </main>
    <div class="details" id="aboutcorona">
      <h1>About COVID-19</h1>
    </div>
    <div class="row">
      <div class="diag">
        <img src="img/diagram.png" alt="">
      </div>
      <div class="content">Coronavirus disease (COVID-19) is an infectious disease caused by the SARS-CoV-2 virus.

Most people infected with the virus will experience mild to moderate respiratory illness and recover without requiring special treatment. However, some will become seriously ill and require medical attention. Older people and those with underlying medical conditions like cardiovascular disease, diabetes, chronic respiratory disease, or cancer are more likely to develop serious illness. Anyone can get sick with COVID-19 and become seriously ill or die at any age. 

The best way to prevent and slow down transmission is to be well informed about the disease and how the virus spreads. Protect yourself and others from infection by staying at least 1 metre apart from others, wearing a properly fitted mask, and washing your hands or using an alcohol-based rub frequently. Get vaccinated when it’s your turn and follow local guidance.

The virus can spread from an infected person’s mouth or nose in small liquid particles when they cough, sneeze, speak, sing or breathe. These particles range from larger respiratory droplets to smaller aerosols. It is important to practice respiratory etiquette, for example by coughing into a flexed elbow, and to stay home and self-isolate until you recover if you feel unwell.</div>
    </div></div>
    
    <style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.difficulty{
  text-align: center;
}
</style>
</head>
<body>

<h2 class="difficulty">Submit your difficulty</h2>


<div class="container">
  <form action="connect.php" method="POST">
  <div class="row">
    <div class="col-25">
      <label for="fname"> Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Phone no.</label>
    </div>
    <div class="col-75">
      <input type="text" id="phone" name="phoneno" placeholder="Your number">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country">email id</label>
    </div>
    <div class="col-75">
    
      <input type="text" id="email" name="emailid" placeholder="Email id..">
    
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Symptoms</label>
    </div>
    <div class="col-75">
    <input type="text" id="sympt" name="symp" placeholder="write your symptoms">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Description</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <br>
  <div class="row">
    <button type ="submit" name="submit">Submit</button>
  </div>
  </form>
</div>

    <footer>
      <div class="footer-container">
        <div class="copyright">
          <p>Copyright © 2021 Niket kumar</p>
        </div>
      </div>
    </footer>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI="
      crossorigin="anonymous"
    ></script>
    <script src="resources/js/countries.js"></script>
    <script src="resources/js/app.js"></script>
  </body>
</html>

