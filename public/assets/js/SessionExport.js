// import CryptoJS from 'crypto-js';

class SessionExport{

 static Session=()=>{
    let ciphertext  = sessionStorage.getItem("officeAdmin");
    if(ciphertext){
      let bytes = CryptoJS.AES.decrypt(ciphertext.toString(), 'pkaard');
    var decryptedData = JSON.parse(bytes.toString(CryptoJS.enc.Utf8));
    return decryptedData;
    }
 }

 static setSession = (data)=>{
    var ciphertext = CryptoJS.AES.encrypt(JSON.stringify(data), 'pkaard');
    sessionStorage.setItem('officeAdmin',ciphertext);
    return true;
 }


 static localStorage=()=>{
   let ciphertext  = localStorage.getItem("officeAdmin");
   if(ciphertext){
     let bytes = CryptoJS.AES.decrypt(ciphertext.toString(), 'pkaard');
   var decryptedData = JSON.parse(bytes.toString(CryptoJS.enc.Utf8));
   return decryptedData;
   }
}

static setLocalStorage = (data)=>{
   var ciphertext = CryptoJS.AES.encrypt(JSON.stringify(data), 'pkaard');
   localStorage.setItem('officeAdmin',ciphertext);
   return true;
}


    
}

// export default SessionExport;