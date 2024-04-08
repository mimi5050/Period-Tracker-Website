<!DOCTYPE html>
<html>
<head>
  <title>Dashboard | TalentHub</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: whitesmoke;
    }
    .sidenav {
        height: 100%;
        width: 23%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: white;
        overflow-x: hidden;
        padding-top: 80px;
        padding-left: 10px;
        margin-top: 0;
      }



      .sidenav a {
        padding: 20px 8px 6px 16px;
        text-decoration: none;
        font-size: 18px;
        color: #818181;
        display: block;
        margin-bottom:15px;

      }

      .sidenav a:hover {
        color:  #dedab6;  
        background-color:#07bca3; 
        border-radius: 10px; 
        padding: 12px 20px; 
      }

      .main {
        margin-left: 160px;
        padding: 0px 10px;
      }

      a.active {
        background-color: #07bca3; 
        color: white;
        border-radius: 4px;
        font-weight: 900;
      }


    .topnav a {
      float: left;
      color: #333;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 14px;

    }

    .topnav a:hover {
      background-color: #ebdfd3;
      color: #555;
    }

    .topnav a.active {
      background-color: #07bca3; 
      color: white;
      border-radius: 16px;
    }

    .topnav a.signup {
      float: right;
      background-color: #07bca3; 
      color: whitesmoke;
      border-radius: 16px;
    }
    .topnav a.signup:hover {
      color: whitesmoke;
      background-color: #07bca3; 
    }

    .topnav a.split {
      float: right;
      background-color: #ebdfd3;
      color: #333;
    }

    .topnav a.split:hover{
      color: #555;
    }

    .topnav-centered a.title {
      float: left;
      position: absolute;
      font-family: Longhaul;
      font-weight: lighter;
      top: 0%;
      color: black;
    }

    .topnav-centered a.title:hover {
      background-color: white;
    }

    .topnav a.title {
      font-family: Longhaul;
      font-size: x-large;
      font-weight: bold;
    }

    .container {
      display: flex;
      width:85%;
      flex-direction: column;
      height: 100vh;
      margin-left:150px;
      margin-right:0;
    }

    .topnav {
      background-color: white;
      color: #07bca3; 
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      margin-left: 160px;
      padding: 20px 10px;
      position: fixed;
      width: 100%;
      overflow: hidden;
    }

    .topnav h1 {
      margin: 0;
      font-weight: bolder;
      font-size: large;
      margin-left: 100px;
    }
    .topnav-centered {
        margin-top: -80px; 
    }


    .sidenav.topnav-centered a {
      float: none;
      position: absolute;
      left: 50%;
      transform: translate(-50%);
    }

    .dashboard {
      margin-top: 80px;
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-between;
      margin-left: 160px;
      padding: 20px 20px;
    }

    .welcome {
      width: 100%;
      margin-left:30px;
    }

    .welcome h1{
      padding-left: 40px;

    }

    .welcome p{
      padding-left: 40px;
      font-weight: bolder;
      color: #818181;
    }

    .intro {
      padding: 20px;
      text-align: left;
      background: #07bca3;
      color: white;
      font-size: 30px;
      margin-bottom: 40px;
      border-radius: 40px;
      margin-left:45px;
      width: 100%; 
      height:15%;
       
    }

    .intro h1 {
      margin: 0;
      font-weight: bolder;
      font-size: larger;
    }

    .intro p {
      font-size: 16px;
      width: 80%;
      text-align:justify;
    }

    button {
      background-color: #dedab6;
      color: black;
      padding: 20px;
      border: none;
      border-radius: 34px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      font-size: 18px;
      margin-left:300px;
    }


    .cycle-overview {
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-bottom: 20px;
      width: 100%;
      display: block;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin-left: 40px;
      margin-top:-10px;

    }

    .cycle-overview h2{
      width: 100%;
      height:7%;
      text-align:left;
      margin-bottom:20px;
      margin-top:20px;
      color: white;
    
    }

    .cycle-overview a {
      text-decoration: none;
      color: black;
      font-weight: bold;
    }

    .symptom_monitoring {
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 30px;
      margin-bottom: 20px;
      width: 100%;
      display: block;
      justify-content: space-between;
      margin-left: 16px;
    }

    .symptom_monitoring a {
      text-decoration: none;
      color: #333;
      font-weight: bolder;
    }

    .card {
      background-color: whitesmoke;
      border-radius: 4px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 25%;
      margin-bottom:20px;
  
    }

    .card h3 {
      padding: 10%;
      width:100%;
      margin: 0;
      font-weight: bold;
      font-size: 17px;
      color: #555;
    }

    .card p{
      padding-left: 10%;
      font-weight: 900;
      font-size: large;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
      background-color: #07bca3;
      color: white;
    }
    tr:hover {background-color: #e6e3cd;}

    li{
        list-style-type: none;
    }

      td.moderate{
        background-color: rgba(128, 128, 128, 0.5); 
    }
    td.severe{
        background-color: rgba(218, 112, 214, 0.5); 
    }
    td.mild{
        background-color: rgba(255, 182, 193, 0.5); 
    }
    td.mild_moderate{
        background-color: rgba(173, 216, 230, 0.5); 
    }
      
      .active a{
        background-color: #07bca3; 
        color: white;
        border-radius: 4px
      }

      .active a {
        color: white;
      }
      .card i {
        color: #07bca3;
      }

      .card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        transform: translateY(-12px);
        background-color:#07bca3;
      }
      .card:hover i {
        color: white;
      }
      .card:hover p {
        color: white;
      }
      .card:hover h3 {
      color: white !important;
    }


    </style>

    <div class="container">
        <div class="topnav">
          <h1>Dashboard</h1>
        </div>

        <div class="sidenav">
            <div class="topnav-centered">
            <img src="images/logo.png" alt="Logo" style="height: 50px; margin-bottom:20px; margin-top:10px;">
        </div>
          <a class="active" href="#"><i class="fas fa-home"></i> Overview</a>
          <li><a href="cycle_tracking.php"><i class="fas fa-calendar-alt"></i> Menstrual Cycle Tracking</a></li>
          <li><a href="period_predictions.php"><i class="fas fa-chart-line"></i> Period Predictions</a></li>
          <li><a href="fertility_prediction.php"><i class="fas fa-chart-line"></i> Fertility Predictions</a></li>
          <li><a href="symptomLogging.php"><i class="fas fa-notes-medical"></i> Symptom Logging</a></li>
          <li><a href="User_profile.php"><i class="fas fa-user-edit"></i> Edit my profile</a></li>
          <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
          </div>

    <div class="dashboard">
        <div class = "welcome">
            <h1>Hey Pretty!</h1>
            <p>Ready to track your circle? Even when you don't know how, worry less! We got you!</p>
        </div>

        <div class="intro">
            <h1>Get Started</h1>
            <p>We care about you and provide you with your menstrual cycle information. During your menstrual cycle, your hormone levels fluctuate, affecting your mood, energy levels, and more.
              Keeping track of your cycle can help you anticipate changes and better manage your well-being.</p>
            <button onclick="document.location='#'" >Comfirm your Period start date here</button>
            
        </div>

        <div class="cycle-overview">
        <h2><a href="#">Cycle Summary</a></h2>
            <div class="card">
            <h3><i class="fas fa-infinity"></i> Cycle Length</h3>
            <p>29 days</p>
          </div>
          <div class="card">
            <h3><i class="fas fa-tint"></i> Period Length</h3>
            <p>5 days</p>
          </div>
            <div class="card">
            <h3><i class="fas fa-heartbeat"></i> Ovulation Date</h3>
          <p>January 16, 2024</p>
        </div>
        <div class="card">
            <h3><i class="fas fa-baby"></i> Probability of Pregnancy</p>
          <p>30%</p>
        </div>
        <div class="card">
            <h3><i class="fas fa-hourglass-half"></i> Countdown to Ovulation</h3>
          <p>5 days</p>
        </div>
        <div class="card">     
            <h3><i class="fas fa-hourglass-start"></i> Countdown to Next Period</h3>
          <p>12 days</p>
        </div>
      </div>
      
      <div class="symptom_monitoring">
        <h2><a href="#">Symptom Monitoring</a></h2>
        <table>
          <thead>
            <tr>
              <th>Symptom </th>
              <th>First Aid</th>
              <th>Additional Notes</th>
              <th>Rate</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>Menstrual cramps or dysmenorrhea</td>
                <td>Heat</td>
                <td>Adotes</td>
                <td class="severe">Severe</td>
            </tr>
            <tr>
                <td>Abdominal bloating</td>
                <td>Water</td>
                <td> will do sports</td>
                <td class="moderate">Moderate</td>
            </tr>
            <tr>
                <td>Tender breasts</td>
                <td>Supportive bra</td>
                <td> will go to the sports</td>
                <td class="mild"> Mild</td>
            </tr>
            <tr>
                <td>Fatigue</td>
                <td> Rest</td>
                <td>Addotes</td>
                <td class="mild_moderate"> Mild to moderate</td>
            </tr>
          </tbody>
        </table>
        <br>
        <a href="" style="background-color:#07bca3; color:white"><u>View More</u></a>
      </div>
    </div>
  </div>
</body>
</html>
