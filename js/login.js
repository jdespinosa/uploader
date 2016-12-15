var OBJ;
window.onload = function(){
	document.getElementById('btnlogin').onclick = function(){
		
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