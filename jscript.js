function confirmation(id){
    var result = confirm("Are you sure to delete?");
    if(result){
        window.location.href = "delete.php?id=" + id;
    }
}

function validation() { 
    const form = document.getElementById("form");
    const username = document.getElementById("username");
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    const birthdate = document.getElementById("birthdate");
    const phone = document.getElementById("password");
    const url = document.getElementById("url");
        
        console.log(username, email, password, birthdate, phone, url); 
    
        var phoneno = /^\d{10}$/;
        var letters = /^[A-Za-z]+$/;
        var expression =/[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
        var regex = new RegExp(expression);
        var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
        var dateformat = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(0[1-9]|1[1-9]|2[1-9])$/;
    
        if (username === "") 
        { 
            window.alert 
            ("Please enter your username."); 
            username.focus(); 
            return false; 
        } 
        if ( username.includes('0') || username.includes('1') 
            || username.includes('2') || username.includes('3') 
            || username.includes('4') || username.includes('5') 
            || username.includes('6') || username.includes('7') 
            || username.includes('8') || username.includes('9')
            || username.includes(' ')
            || !username.value.match(letters)) 
        { 
            window.alert 
            ("invalid, Please enter your valid username."); 
            username.focus(); 
            return false; 
        } 
    
        if (email === "" || !email.includes('@')) { 
            window.alert 
            ("invalid E-mail address, Please enter a valid E-mail address."); 
            email.focus(); 
            return false; 
        } 
    
        if (password === "") { 
            alert("Please enter your password"); 
            password.focus(); 
            return false; 
        } 
    
        
    
        if (password.value.length < 8 || !password.value.match(passw)) { 
            alert 
            ("Password should be at least 8 character long and one uppercase character and one number and one special character"); 
            password.focus(); 
            return false; 
    
        } 
    
        if(!phone.value.match(phoneno)){
              alert("invalid phone number, please inter valid phone number has 10 digit. ");
              phone.focus(); 
              return false;
              } 
    
        if(!dateformate.test(date)){
                alert("invalid date, please inter valid date. ");
                date.focus(); 
                return false;
                } 
    }
    
    function openForm() {
        document.getElementById("myForm").style.display = "block";
      }
      
      function closeForm() {
        document.getElementById("myForm").style.display = "none";
      } 