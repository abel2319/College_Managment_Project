function verifier_champ_pwd()
{
  var obj = document.getElementById("user_pwd");
  var ch = obj.value;
  if(ch.length != 0){
    obj.style.outline = 'groove 3px green';
    return true;
  }
  else{
    obj.style.outline = 'groove 3px red';
    return false;
  }
}

function verifier_champ_name()
{
  var obj = document.getElementById("user_name");
  var regex_exp = /^([a-zA-Z\d_]+)$|^([a-zA-Z\d_]+@)$|^([a-zA-Z\d_]+@[a-z-]+)$|^([a-zA-Z\d_]+@[a-z-]+\.)$|^([a-zA-Z\d_]+@[a-z-]+\.[a-z]{1,3})$/;
  var ch = obj.value;
  if(regex_exp.test(ch)){
    obj.style.outline = 'groove 3px green';
    return true;
  }
  else{
    obj.style.outline = 'groove 3px red';
    return false;
  }
}

function crypter_pwd(pwd)
{
  var ch = '';
  var tmp, ech = 'AZaz';
  a = ech.charCodeAt(0);
  b = ech.charCodeAt(1);
  c = ech.charCodeAt(2);
  d = ech.charCodeAt(3);
  for(var i in pwd){
    tmp = pwd.charCodeAt(i);
    if(a <= tmp && tmp <= b){
      ch += String.fromCharCode(a+(tmp-a+3)%26);
    }
    else if(c <= tmp && tmp <= d){
      ch += String.fromCharCode(c+(tmp-c+3)%26);
    }
    else{
      ch += pwd[i];
    }
  }
  return ch;
}

function envoyer()
{
  var pass = true;
  var uname = document.getElementById("user_name");
  var upwd = document.getElementById("user_pwd");

  if(!verifier_champ_name()){
    pass = false;
  }

  if(!verifier_champ_pwd()){
    pass = false;
    upwd.value = '';
  }

  if(pass){
    var rupwd = crypter_pwd(upwd.value);
    upwd.value = rupwd;
    return true;
  }
  else{
    return false;
  }
}
