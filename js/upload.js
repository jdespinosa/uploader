window.onload = function(){
	document.getElementById('txtkey').onkeyup = function(){
		var spstat = document.getElementById('spstat');
		
		// attempt to validate submission key
		
		// read key
		var key = this.value;
		
		if(key == '' ){
			spstat.innerText = '';
			return;
			
		}
		
		// show loading status
		spstat.innerText = 'checking...';
		
		var xhr = new XMLHttpRequest();
		var url = 'utilities/validateKey.php?key=' + key;
		xhr.open('GET', url, true);
		xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200 ){
				var dat = JSON.parse(xhr.responseText);
				
				switch(dat.res){
					case 'VALID':
						spstat.innerText = "Ok";	
						break;
					case 'INVALID':
						spstat.innerText = "Invalid";
						break;
					case 'ERROR':
						spstat.innerText = "Server Error!";
						break;
				}
			}
		};
		xhr.send();
	};
	
	document.getElementById('btnsubmit').onclick = function(){
		// validate input
		var uname = document.getElementById('txtusername');
		var pwd = document.getElementById('txtpassword');
		
		if(uname.value == '' || pwd.value == ''){
			alert('Pls. fill up all fields first!');
			return;
		}
		
		var xhr = new XMLHttpRequest();
		var formData = new FormData();
		var url = "post/login.php";
		
		formData.append('username', uname.value);
		formData.append('password', pwd.value);
		
		xhr.open("POST", url, true);
		xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
				var dat = JSON.parse(xhr.responseText);
				
				switch(dat.res){
					case 'OK':
						window.location.href = '/index.php';
						break;
					case 'FAILED':
						document.getElementById('err').innerHTML = 'Invalid username and/or password';
						break;
					case 'INVALID_DATA':
						document.getElementById('err').innerHTML = 'Server Error';
						break;
				}
				
			}
		};
		xhr.send(formData);
	};
};