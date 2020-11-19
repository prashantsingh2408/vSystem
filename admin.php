<!-- saved from url=(0041)https://hamarafuture.com/voting/admin.php -->
<html>
  <link
    type='text/css'
    id='dark-mode'
    rel='stylesheet'
    href='https://hamarafuture.com/voting/admin.php'
  />
  <style type='text/css' id='dark-mode-custom-style'></style>

  <head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <title>Voting System.</title>
    <link
      rel='shortcut icon'
      href='https://hamarafuture.com/voting/style/img/logo2.png'
    />

    <meta name='viewport' content='width=device-width, initial-scale=1' />

    <link href='./admin_files/bootstrap.min.css' rel='stylesheet' />
    <link href='./admin_files/animate.css' rel='stylesheet' />
    <link href='./admin_files/demo.css' rel='stylesheet' />
    <script src='./admin_files/jquery.min.js.download'></script>
    <script src='./admin_files/bootstrap.min.js.download'></script>
    <link href='./admin_files/custom.css' rel='stylesheet' />

    <style>
      ._3emE9--dark-theme .-S-tR--ff-downloader {
        background: rgba(30, 30, 30, 0.93);
        border: 1px solid rgba(82, 82, 82, 0.54);
        box-shadow: 0 4px 7px rgba(30, 30, 30, 0.55);
        color: #fff;
      }

      ._3emE9--dark-theme
        .-S-tR--ff-downloader
        ._6_Mtt--header
        ._2VdJW--minimize-btn {
        background: #3d4b52;
      }

      ._3emE9--dark-theme
        .-S-tR--ff-downloader
        ._6_Mtt--header
        ._2VdJW--minimize-btn:hover {
        background: #131415;
      }

      ._3emE9--dark-theme .-S-tR--ff-downloader ._10vpG--footer {
        background: rgba(30, 30, 30, 0.93);
      }

      ._2mDEx--white-theme .-S-tR--ff-downloader {
        background: #fff;
        border: 1px solid rgba(82, 82, 82, 0.54);
        box-shadow: 0 4px 7px rgba(30, 30, 30, 0.55);
        color: #314c75;
      }

      ._2mDEx--white-theme .-S-tR--ff-downloader ._6_Mtt--header {
        font-weight: 700;
      }

      ._2mDEx--white-theme
        .-S-tR--ff-downloader
        ._2dFLA--container
        ._2bWNS--notice {
        border: 0;
        color: rgba(0, 0, 0, 0.88);
      }

      ._2mDEx--white-theme .-S-tR--ff-downloader ._10vpG--footer {
        background: #fff;
      }

      .-S-tR--ff-downloader {
        display: block;
        overflow: hidden;
        position: fixed;
        bottom: 20px;
        right: 7.1%;
        width: 330px;
        height: 180px;
        background: rgba(30, 30, 30, 0.93);
        border-radius: 2px;
        color: #fff;
        z-index: 99999999;
        border: 1px solid rgba(82, 82, 82, 0.54);
        box-shadow: 0 4px 7px rgba(30, 30, 30, 0.55);
        transition: 0.5s;
      }

      .-S-tR--ff-downloader._3M7UQ--minimize {
        height: 62px;
      }

      .-S-tR--ff-downloader._3M7UQ--minimize .nxuu4--file-info,
      .-S-tR--ff-downloader._3M7UQ--minimize ._6_Mtt--header {
        display: none;
      }

      .-S-tR--ff-downloader ._6_Mtt--header {
        padding: 10px;
        font-size: 17px;
        font-family: sans-serif;
      }

      .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn {
        float: right;
        background: #f1ecec;
        height: 20px;
        width: 20px;
        text-align: center;
        padding: 2px;
        margin-top: -10px;
        cursor: pointer;
      }

      .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover {
        background: #e2dede;
      }

      .-S-tR--ff-downloader ._13XQ2--error {
        color: red;
        padding: 10px;
        font-size: 12px;
        line-height: 19px;
      }

      .-S-tR--ff-downloader ._2dFLA--container {
        position: relative;
        height: 100%;
      }

      .-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info {
        padding: 6px 15px 0;
        font-family: sans-serif;
      }

      .-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info div {
        margin-bottom: 5px;
        width: 100%;
        overflow: hidden;
      }

      .-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice {
        margin-top: 21px;
        font-size: 11px;
      }

      .-S-tR--ff-downloader ._10vpG--footer {
        width: 100%;
        bottom: 0;
        position: absolute;
        font-weight: 700;
      }

      .-S-tR--ff-downloader ._10vpG--footer ._2V73d--loader {
        animation: n0BD1--rotation 3.5s linear forwards;
        position: absolute;
        top: -120px;
        left: calc(50% - 35px);
        border-radius: 50%;
        border: 5px solid #fff;
        border-top-color: #a29bfe;
        height: 70px;
        width: 70px;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar {
        width: 100%;
        height: 18px;
        background: #dfe6e9;
        border-radius: 5px;
      }

      .-S-tR--ff-downloader
        ._10vpG--footer
        ._24wjw--loading-bar
        ._1FVu9--progress-bar {
        height: 100%;
        background: #8bc34a;
        border-radius: 5px;
      }

      .-S-tR--ff-downloader ._10vpG--footer ._2KztS--status {
        margin-top: 10px;
      }

      .-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1XilH--state {
        float: left;
        font-size: 0.9em;
        letter-spacing: 1pt;
        text-transform: uppercase;
        width: 100px;
        height: 20px;
        position: relative;
      }

      .-S-tR--ff-downloader
        ._10vpG--footer
        ._2KztS--status
        ._1jiaj--percentage {
        float: right;
      }
    </style>
  </head>
 
  <body>
  <?php
  //include "config.php";
  if (isset($_POST['party'])) {
      include 'addParty.php';
  }
  if (isset($_POST['addNow'])) {
      include 'addRemoveVoter.php' ;
  }
  if(isset($_POST['reset'])){
    include 'resetVote.php';
  }
    if (isset($_POST['removeParty'])) {
        include 'removeParty.php';
    }

  ?> 
    <div class='header'>
      <nav class='navbar navbar-inverse'>
        <div class='container'>
          <div class='navbar-header'>
            <a
              class='navbar-brand'
              href='https://hamarafuture.com/voting/admin.php#'
              >Online Voting Portal</a
            >
          </div>
          <ul class='nav navbar-nav navbar-right'>
            <li class='active'>
              <a href='https://hamarafuture.com/voting/admin.php#'
                >Hii' admin</a
              >
            </li>

            <li>
              <a href="login.html">Logout</a>
            </li>

            <li>
              <br />&nbsp;&nbsp;&nbsp;<button
                type='button'
                class='btn btn-primary'
                data-toggle='modal'
                data-target='#reset'
              >
                Reset Voting
              </button>
            </li>
          </ul>
        </div>
      </nav>
      <div class='container'>
        <br />
        <div class='row'>
          <div
            class='col-sm-3'
            style='background-color: #95223f; color: #eeeeee; padding: 20px'
          >
            <center>
              <h1>Winner Party</h1>

              <hr />
              <br />
              <?php
              include "config.php";
              $maxSql ="SELECT MAX(vote) 
                    FROM party; 
                    ";
              
                  $maxValueArray = mysqli_query($conn, $maxSql);
                  $row = mysqli_fetch_assoc($maxValueArray);
                  $maxValue = $row['MAX(vote)'];
                  //party select
                  $partyMaxSql = "SELECT nameParty FROM party WHERE vote = ".$maxValue;
                
              if($partyMaxArray = mysqli_query($conn, $partyMaxSql)){
                  $voteRow = mysqli_fetch_assoc($partyMaxArray);
                  $vote = $voteRow['nameParty'];
  
                  echo "<h3>".$vote." &nbsp;&nbsp;&nbsp;".$maxValue." votes</h3>";
              }
              else{
                echo "Not Declare";
              }
              ?>
            </center>
          </div>
          <div class='col-sm-1'></div>
          <div class='col-sm-3'>
            <form
              method='post'
              action='admin.php'
              id='form'
              style='object-fit: contain; padding: 0px; margin-top: 0px'
            >
              <table
                align=''
                width=''
                border='0'
                style='
                  min-width: 100%;
                  padding: 1px;
                  object-fit: contain;
                  border: solid #dcdcdc 2px;
                  border-top: solid darkred 5px;
                '
              >
                <tbody>
                  <tr>
                    <td align='center' style='padding-bottom: 2px'>
                      <font color='' size='4'>Add New Party</font>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <br /><input
                        type='text'
                        name='party'
                        class='form-control'
                        placeholder='Party Name'
                        required=''
                      />
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <button
                        type='submit'
                        class='btn btn-success'
                        onclick='popUp()'
                      >
                        Add Now
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </form>
          </div>
          <div class='col-sm-1'></div>
          <div class='col-sm-3'>
            <form
			  method='post'
			  action = 'admin.php'
              id='form'
              style='object-fit: contain; padding: 0px; margin-top: 0px'
            >
              <table
                align=''
                width=''
                border='0'
                style='
                  min-width: 100%;
                  padding: 1px;
                  object-fit: contain;
                  border: solid #dcdcdc 2px;
                  border-top: solid darkred 5px;
                '
              >
                <tbody>
                  <tr>
                    <td align='center' style='padding-bottom: 2px'>
                      <font color='' size='4'>Add &amp; Remove Voter</font>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <br /><input
                        type='email'
                        name='email'
                        class='form-control'
                        placeholder='Voter Email'
                        required=''
                      />
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <input
                        type='password'
                        name='name'
                        class='form-control'
                        placeholder='Voter Name'
                        required=''
                      />
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <label class='radio-inline'>
                        <input type='radio' name='radioA' value='add' />Add
                      </label>
                      <label class='radio-inline'>
                        <input
                          type='radio'
                          name='radioR'
                          value='remove'
                        />Remove
                      </label>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <button type='submit' class='btn btn-success' name = 'addNow' >
                        Add Now
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </form>
          </div>

          <div class='col-sm-5'>
            <table
              width='90%'
              align='center'
              class='table'
              style='border: solid #balck 5px; padding: 1px; text-align: center'
            >
              <caption style='text-align: center'>
                <h3 align='center'>All Parties</h3>
              </caption>
              <tbody>
              <tr
                  style='padding: 1px; border: solid #dcdcdc 1px'
                  bgcolor='lightblue'
                >
                  <td style='padding: 1px'><b>sno</b></td>
                  <td style='padding: 1px'><b>Name</b></td>
                  <td style='padding: 1px'><b>Vote</b></td>
                  <td style='padding: 1px'><b>Action</b></td> 
                  </tr>
                <?php
                  include 'config.php';
                  $sql = 'Select sno, nameParty, vote, actionAdmin FROM party';
                  if ($result= mysqli_query($conn, $sql)) {
                      while ($row = mysqli_fetch_row($result)) {
                          $sno = $row[0];
                          $nameParty = $row[1];
                          $vote = $row[2];
                          $actionAdmin = $row[3];
                      
                          echo "
                          <tr style='padding: 1px'>
                            <td style='padding: 1px'>".$sno."</td>
                            <td style='padding: 1px'>".$nameParty."</td>
                            <td style='padding: 1px'>".$vote."</td>

                            <td style='padding: 0px'>
                              <form method='POST' action = 'admin.php'>
                                <button
                                  class='btn btn-primary'
                                  type='submit'
                                  name='removeParty' 
                                  value =".$sno." 
                                  style='padding: 5px'
                                >
                                  Remove
                                </button>
                              </form>
                            </td>
                          </tr>";
                      }
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div id='reset' class='modal fade' role='dialog' style='z-index: 1111'>
      <div class='modal-dialog'>
        <!-- Modal content-->
        <div class='modal-content'>
          <div class='modal-header'>
            <button type='button' class='close' data-dismiss='modal'>×</button>
            <h4 class='modal-title' style='float: left'>Are You Sure ?</h4>
          </div>
          <div class='modal-body'>
            <form method='post' action="admin.php">
              <button
                type='submit'
                class='btn btn-success'
                style='width: 100px'
                name='reset'
              >
                Ok
              </button>
              &nbsp;&nbsp;<button
                type='button'
                class='btn btn-default'
                data-dismiss='modal'
                style='width: 100px'
              >
                Cancel
              </button>
            </form>
          </div>
          <div class='modal-footer'></div>
        </div>
      </div>
    </div>

    <div
      style='
        background-color: rgb(255, 143, 0);
        display: none;
        color: white;
        text-align: center;
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100%;
        height: auto;
        min-width: 100%;
        min-height: auto;
        max-width: 100%;
        font: 12px 'Helvetica Neue', Helvetica, Arial, Geneva, sans-serif;
        cursor: pointer;
        padding: 5px;
      '
    >
      <span
        style='
          color: white;
          font: 12px 'Helvetica Neue', Helvetica, Arial, Geneva, sans-serif;
        '
        >You have turned off the paragraph player. You can turn it on again from
        the options page.</span
      ><img
        src='chrome-extension://gfjopfpjmkcfgjpogepmdjmcnihfpokn/img/icons/icon-close_16.png'
        style='
          width: 20px;
          height: auto;
          min-width: 20px;
          min-height: auto;
          max-width: 20px;
          float: right;
          margin-right: 10px;
        '
      />
    </div>
    <script>
      function popUp() {
        alert('Party Add successfully');
      }
    </script>
  </body>
</html>
