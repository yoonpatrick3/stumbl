<?php include "base.php"; ?>
<html>
<title>Stumbl</title>

<head>
<script type="text/javascript" src="match.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<h1> Loading... </h1>

<body>
<?php
	
	//grabs username from $_SESSION and matches their ID.
	$userID = $_SESSION['Username'];
	
	$sql = "SELECT * FROM users WHERE Username = '".$userID."'";
	
	$result =  mysql_query($sql);
	if(is_resource($result) and mysql_num_rows($result)>0){
    $row = mysql_fetch_array($result);
    $idValue = $row["id"];
    }
	
	
	//grabs row from id and puts them into array
	$interestArray = array();
	$query = mysql_query("SELECT * FROM  interests WHERE  id= '".$idValue."'");
	
	while($row = mysql_fetch_array($query)) {
 
    $interestArray[0] = $row['fname'];
	$interestArray[1] = $row['music'];   
	$interestArray[2] = $row['movie'];
	$interestArray[3] = $row['school'];
	$interestArray[4] = $row['major'];
	}
	
	
	$indexArray = array();
	$query2 = mysql_query("SELECT * FROM  interests WHERE id NOT IN ('".$idValue."')");
	
	while($row = mysql_fetch_array($query2)) {
			array_push($indexArray, $row);
	}
	

	

	
	$numArray = count($indexArray);
	$numRow = count($indexArray[0])/2;

	
	
?>
<script type="text/javascript">
	var music = "<?php echo $interestArray[1]; ?>"
	var musicindex = 2;
	var movie = "<?php echo $interestArray[2]; ?>"
	var movieindex = 3;
	var school = "<?php echo $interestArray[3]; ?>"
	var schoolindex = 4;
	var major = "<?php echo $interestArray[4]; ?>"
	var majorindex = 5;
	
	var numArray = "<?php echo $numArray; ?>"
	var numRow = "<?php echo $numRow; ?>"
	
	console.log(numArray);
	console.log(numRow);
	
	var intarray = [];
	var scorearray = [];
	var indexArray = [];
	
	for(var i = 0; i<numArray; i++){
		scorearray.push(0);
	}
	
	
	
	var php2js = <?php echo json_encode($indexArray); ?>;
	
	console.log(php2js);
	
	
	//puts php2js into a 1 dimensional array
	var i;
	var j;
	for(i=0; i<numArray; i++){
		for(j=0; j<numRow; j++){
			var valuep = ((i*(numRow))+j);
			
			indexArray[valuep] = php2js[i][j];
		}
	}
	
	
	console.log(indexArray);
	
	//need callback
	getWord(movie, movieindex, indexArray, function(result){
		var score1 = result;
		console.log(score1);
		
		for(var i = 0; i < score1.length; i++){
			scorearray[i] += score1[i];
			
		}
		
		
	});
	
	getWord(school, schoolindex, indexArray, function(result){
		var score1 = result;
		console.log(score1);
		
		for(var i = 0; i < score1.length; i++){
			scorearray[i] += score1[i];
			
		}
		
		
	});
	
	getWord(major, majorindex, indexArray, function(result){
		var score1 = result;
		console.log(score1);
		
		for(var i = 0; i < score1.length; i++){
			scorearray[i] += score1[i];
			
		}
		
		
	});
	
	getWord(music, musicindex, indexArray, function(result){
		var score1 = result;
		console.log(score1);
		
		for(var i = 0; i < score1.length; i++){
			scorearray[i] += score1[i];
			
		}
		
		
	});
	
	
	setTimeout(function() {
	
	console.log(scorearray);
	var arrayinorder = sort(scorearray);
	 console.log(arrayinorder);
	 
	document.body.innerHTML = "";
	
	var body = document.getElementsByTagName('body')[0];
	var textBody = document.createElement('h1');
	
	var file = location.pathname.split( "/" ).pop();

	var link = document.createElement( "link" );
	link.href = file.substr( 0, file.lastIndexOf( "." ) ) + ".css";
	link.type = "text/css";
	link.rel = "style";
	link.media = "screen,print";

	document.getElementsByTagName( "head" )[0].appendChild( link );



	var text = document.createTextNode("Matches");
	textBody.appendChild(text);
	body.appendChild(textBody);

	tableCreate(arrayinorder);
	
	var logout = document.createElement('a');
	var createAText = document.createTextNode("Click to Log Out");
	logout.href = "logout.php";
	logout.title = "title";
	logout.appendChild(createAText);

	body.appendChild(logout);
	/*
	var createA = document.createElement('a');
        var createAText = document.createTextNode(theCounter);
        createA.setAttribute('href', "http://google.com");
        createA.appendChild(createAText);
        getTheTableTag.appendChild(createA);
        */
	
	
	},1000);
	
	function tableCreate(arrayinorder){
	var body = document.getElementsByTagName('body')[0];
	var tbl = document.createElement('table');
	tbl.style.width = '75%';
    tbl.setAttribute('border', '1');
    tbl.setAttribute('align','center');

    //tb1.setAttribute("class","myTable");

	var thead = document.createElement('thead');
	
	var tr1 = document.createElement('tr');
	var th = document.createElement('th');
	var tbdy = document.createElement('tbody');
	
	

	th.appendChild(document.createTextNode("Name"));
	tr1.appendChild(th);
	var th = document.createElement('th');
	th.appendChild(document.createTextNode("Music"));
	tr1.appendChild(th);
	var th = document.createElement('th');
	th.appendChild(document.createTextNode("Movie"));
	tr1.appendChild(th);
	var th = document.createElement('th');
	th.appendChild(document.createTextNode("School"));
	tr1.appendChild(th);
	var th = document.createElement('th');
	th.appendChild(document.createTextNode("Major"));
	tr1.appendChild(th);
	thead.appendChild(tr1);

	tbl.appendChild(thead);
	
	for(var i = 0; i<arrayinorder.length; i++){
		var tr = document.createElement('tr');
		for(var j = 1; j<6;j++){
			if(i == arrayinorder.length && j ==5){
				break
			} else {
				var td = document.createElement('td');
				td.appendChild(document.createTextNode(indexArray[6*arrayinorder[i]+j]))
				
				
				tr.appendChild(td)
			}
		}
		 tbdy.appendChild(tr);
		
		
	}
	tbl.appendChild(tbdy);
  body.appendChild(tbl)
	}
	
	
</script>
</body>



</style>



</html>