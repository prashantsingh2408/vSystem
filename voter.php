<html>
<link type="text/css" id="dark-mode" rel="stylesheet" href="https://hamarafuture.com/voting/home.php" />
<style type="text/css" id="dark-mode-custom-style"></style>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Voting System.</title>
	<link rel="shortcut icon" href="https://hamarafuture.com/voting/style/img/logo2.png" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link href="./voter_files/bootstrap.min.css" rel="stylesheet" />
	<link href="./voter_files/animate.css" rel="stylesheet" />
	<link href="./voter_files/demo.css" rel="stylesheet" />
	<script src="./voter_files/jquery.min.js.download"></script>
	<script src="./voter_files/bootstrap.min.js.download"></script>
	<link href="./voter_files/custom.css" rel="stylesheet" />
	<link href="./voter.css">
</head>

<body>
	<div class="header">
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="https://hamarafuture.com/voting/home.php#">Online Voting Portal</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li class="active">
						<a href="https://hamarafuture.com/voting/home.php#">Hello </a>
					</li>

					<li>
						<a href="login.html">Logout</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="container">
			<div class="row">
				<br />
				<center>
					<h1>Choose Your Party</h1>
				</center>

				<div class="col-sm-4"></div>
				<div class="col-sm-4 animated ZoomIn">
					<?php
					include "config.php";
					if (!isset($_POST["giveVote"])) {
						echo '<form method="post" action="voter.php">';
						$sql = "SELECT nameParty from party";
						if ($result = mysqli_query($conn, $sql)) {
							while ($row = mysqli_fetch_row($result)) {
								$val = $row[0];
								echo '
												<table align="center" class="table" style="
										margin-top: 40px;
										width: 90%;
										border: solid  1px;
										padding: 15px;
										">
							
										<tbody>
										<tr>
											<td><input type="radio" name="giveVote" value = "'.$val.'" /></td>
											<td style="font-size: 20px; padding-top: 20px">' . $val . '</td>
										</tr>
										
										</tbody>
										</table>
							
										';
							}
						}
								
								
						echo '		
								<center>
									<button type="submit" class="btn btn-success" name="submit">
										Vote Now
									</button>
							</br></br></br>	
								</center>	
						</form>
						';
					}
						else{
                            //Save vote on Database
                            foreach ($_POST as $key => $value) {
                                if ($key == 'giveVote') {
                                    $nameParty = test_input($value);
                                    
                                    //Find current vote
                                    $sqlCurrentVote = "SELECT vote FROM party WHERE nameParty = '".$nameParty."'";
                                    $sqlCurrentVoteQuery = mysqli_query($conn, $sqlCurrentVote);
                                    $sqlCurrentVoteRow = mysqli_fetch_assoc($sqlCurrentVoteQuery);
                                    foreach ($sqlCurrentVoteRow as $key => $value) {
					
									}
									$increment = $value + 1;
									$sqlSave = "UPDATE party SET vote =".$increment." WHERE nameParty ='".$nameParty."'";
									mysqli_query($conn, $sqlSave);
									echo "<script> alert('You Voted')
									window.location.href = './login.html' </script>";
                                }
                            }
                        }
						?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>