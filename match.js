function getWord(inter,i,indexArray, callback){
	apiurl="https://api.datamuse.com/words?ml=" + inter;
	
	console.log(apiurl);
		
	//Create a request variable and assign a new XMLHttpRequest object to it
	var request = new XMLHttpRequest();
		
	//Open a new connection, using the GET request on the  URL endpoint
	request.open('GET', apiurl, true);
		
	//Accesing JSON data here
	request.onload = function(){
		var data = JSON.parse(this.response);
	
		if (request.status >= 200 && request.status < 400){
			
			var intarray = [];
			
			data.forEach(interest => {
				
				intarray.push(interest.word);
				
				
			});	
				
		
		} else {
			console.log('error');
		}
	console.log(intarray);
	addScore(intarray,inter,i,indexArray,callback);
	}
	
		
	//Send request
	request.send();
}

	function addScore(intarray,word,i,indexArray,callback){
		console.log(indexArray);
		console.log(i);
		var scores = [];
		var test;

		while(i<indexArray.length){
			var j;
			var zeroornot;
			
			//intarray.length here
			for(j=0; j<intarray.length;j++){
				
				var word1 = intarray[j];
				var word2 = indexArray[i];
				
				if(word.equalsIgnoreCase(word2)){
					scores.push(1);
					j=intarray.length;
					zeroornot = true;
				}
				else if(word1.equalsIgnoreCase(word2)){
					scores.push(1);
					j=intarray.length;
					zeroornot = true;
				}
				else{
					zeroornot = false;
				}
				
			
			}
			
			if(!zeroornot){	
			scores.push(0);
			}
			  
			
			
			i+=6;
		}
		
		console.log(scores);
		if(intarray[2].equalsIgnoreCase(indexArray[39])){
				console.log("yes!");
		}
			else{
				console.log("No1");
			}
	
		
		callback(scores);
	}
	
	
	
	
	
	
	
	String.prototype.equalsIgnoreCase = function(otherString) {
    return (this.toUpperCase() == otherString.toUpperCase()) ;
}

	function sort(array){
		var arrayindex = [];
		
		for(var i=4; i>=0; i--){
			for(var j=0; j<array.length; j++){
				if(array[j] == i){
					arrayindex.push(j);
				}
			}
		}
		
		return arrayindex;
		
	}
