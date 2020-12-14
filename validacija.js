function emailValidacija(inputText){  
		var formatMejla = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
		if(inputText.value.match(formatMejla)){  
			document.email.tekst.focus();  
				alert("Tačno unesen email");
			return true;  
		}  
		else{  
			alert("Uneli ste pogrešnu e-mail adresu");  
			document.email.tekst.focus();  
			return false;  
			}  
		}  