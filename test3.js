/*
 Create an algorithm that generates the following random ID pattern: XXXX-AAAA-BBBB-CCCC
Where XXXX, AAAA, BBBB and CCCC patterns are random alphanumeric
The default is a string: "XXXX-AAAA-BBBB-CCCC"
The result must be stored in a variable. For example:
$id = generarId()
id is ~ abc1-bb12-234a-bcc2 
*/

const idAleatorio = 99;

function generarId() {

  const letras   = "xabc"
  const barrita = "-"
  
  let idCode = ""
  for (let i = 0; i < 4; i++){


    const numero  = Math.floor(Math.random() * idAleatorio)

     idCode += letras[Math.floor(Math.random() * letras.length)] +  letras[Math.floor(Math.random() * letras.length)] + numero + barrita
  
}
  idCode.slice(1,16)
  
  return idCode
  
}

const id = generarId().slice(0,19)



console.log(id)
