<?php
include "sess.php";
include "conn.php";
$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$s = $conn->prepare($sql);
$s->execute();
$result = $s->fetch(PDO::FETCH_ASSOC);
$ownedone = $result['ownedone'];
$points = $result['points'];
$ownedtwo = $result['ownedtwo'];
$ownedthree = $result['ownedthree'];
$ownedfour = $result['ownedfour'];
$ownedfive = $result['ownedfive'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Chat</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
	body{width:80%;font-family:calibri;}
	.error {color:#FF0000;}
	.chat-connection-ack{color: #ffffff;}
	.chat-message {border-bottom-left-radius: 4px;border-bottom-right-radius: 4px;
	}
	#btnSend {background: #26af26;border: #26af26 1px solid;	border-radius: 4px;color: #FFF;display: block;margin: 15px 0px;padding: 10px 50px;cursor: pointer;
	}
	#chat-box {background: #fff8f8;border: 0px solid #ffdddd;border-radius: 4px;border-bottom-left-radius:0px;border-bottom-right-radius: 0px;min-height: 300px;padding: 10px;overflow: auto;
	}
	.chat-box-html{color: #ffffff;margin: 10px 0px;font-size:16px;}
	.chat-box-message{color: #17A2B8;padding: 5px 10px; font-size: 16px; background-color: #fff;border: 1px solid #ffdddd;border-radius:4px;display:inline-block;}
	.chat-input{border: 1px solid "border-info";border-top: 0px;width: 100%;box-sizing: border-box;padding: 10px 8px;color: #191919;
	}
	</style>	
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script>  
	function showMessage(messageHTML) {
		$('#chat-box').append(messageHTML);
	}

	$(document).ready(function(){
		var websocket = new WebSocket("ws://localhost:8090/demo/php-socket.php"); 
		websocket.onopen = function(event) { 
			showMessage("<div class='chat-connection-ack'>Connection is established!</div>");		
		}
		websocket.onmessage = function(event) {
			var Data = JSON.parse(event.data);
			showMessage("<div class='"+Data.message_type+"'>"+Data.message+"</div>");
			$('#chat-message').val('');
		};
		
		websocket.onerror = function(event){
			showMessage("<div class='error'>Problem due to some Error</div>");
		};
		websocket.onclose = function(event){
			showMessage("<div class='chat-connection-ack'>Connection Closed</div>");
		}; 
		
		$('#frmChat').on("submit",function(event){
			event.preventDefault();
			//$('#chat-user').attr("type","hidden");		
			var messageJSON = {
				chat_user: $('#chat-user').val(),
				chat_message: $('#chat-message').val()
			};
			websocket.send(JSON.stringify(messageJSON));
		});
	});
	function thisFunction() {
	var text = document.getElementById("chat-message").value;
	document.getElementById("chat-message").value =  text + "😃";
	}
	function thisFunction2() {
	var text = document.getElementById("chat-message").value;
	document.getElementById("chat-message").value =  text + "👿";
	}
	function thisFunction3() {
	var text = document.getElementById("chat-message").value;
	document.getElementById("chat-message").value =  text + "😎";
	}
	function thisFunction4() {
	var text = document.getElementById("chat-message").value;
	document.getElementById("chat-message").value =  text + "🐈";
	}
	function thisFunction5() {
	var text = document.getElementById("chat-message").value;
	document.getElementById("chat-message").value =  text + "🐕";
	}
	</script>
</head>
<body>
	<div class="container">
	<?php
	include "nav.php";
	?>
	<br>
	<div class="row">
		<div class="col-9">
<form name="frmChat" id="frmChat">
			<div id="chat-box" class="bg-info"></div>
			<input type="text" value="<?php echo $_SESSION['username']; ?>" name="chat-user" id="chat-user" placeholder="Name" class="chat-input" readonly />
			<input type="text" name="chat-message" id="chat-message" placeholder="Message"  class="chat-input chat-message" value="" required />
			<input type="submit" id="btnSend" name="send-chat-message" value="Send" >
		</form>
	</div>
	<div class="col-1.5">
	<div class="card">
		<div class="card-body">
			<?php
			if ($ownedone == "true") { ?>
		<button onclick="thisFunction()" class="btn btn-success mr-2 ml-2"><h4><img width=50 src="smileyhappy.png" alt=""></h4></button>
		<?php	} 
		else { ?>
		<button class="btn btn-danger mr-2 ml-2"><h4>Unowned</h4></button>
		<?php
		}
		?>
	</div>
	</div>
	<div class="card">
		<div class="card-body">
			<?php
			if ($ownedtwo == "true") { ?>
		<button onclick="thisFunction2()" class="btn btn-success mr-2 ml-2"><h4><img width=50 src="meanemoji.png" alt=""></h4></button>
		<?php	} 
		else { ?>
		<button class="btn btn-danger mr-2 ml-2"><h4>Unowned</h4></button>
		<?php
		}
		?>
	</div>
	</div>
	<div class="card">
		<div class="card-body">
			<?php
			if ($ownedthree == "true") { ?>
		<button onclick="thisFunction3()" class="btn btn-success mr-2 ml-2"><h4><img width=50 src="cooool.png" alt=""></h4></button>
		<?php	} 
		else { ?>
		<button class="btn btn-danger mr-2 ml-2"><h4>Unowned</h4></button>
		<?php
		}
		?>
	</div>
	</div>
</div>
	<div class="col-1.5">
	<div class="card">
		<div class="card-body">
			<?php
			if ($ownedfour == "true") { ?>
		<button onclick="thisFunction4()" class="btn btn-success mr-2 ml-2"><h4><img width=50 src="cat-emoji.png" alt=""></h4></button>
		<?php	} 
		else { ?>
		<button class="btn btn-danger mr-2 ml-2"><h4>Unowned</h4></button>
		<?php
		}
		?>
	</div>
	</div>
	<div class="card">
		<div class="card-body">
			<?php
			if ($ownedfive == "true") { ?>
		<button onclick="thisFunction5()" class="btn btn-success mr-2 ml-2"><h4><img width=50 src="dog.png" alt=""></h4></button>
		<?php	} 
		else { ?>
		<button class="btn btn-danger mr-2 ml-2"><h4>Unowned</h4></button>
		<?php
		}
		?>
	
	</div>
	</div>
	</div>
	</div>
</div>
</body>
</html>