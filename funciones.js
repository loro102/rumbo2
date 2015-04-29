function mandarGalleta(nombre, valor, caducidad) {
  document.cookie = nombre + "=" + escape(valor)
    + ((caducidad == null) ? "" : ("; expires=" + caducidad.toGMTString()))
}
function consultarGalleta(nombre) {
  var buscamos = nombre + "=";
  if (document.cookie.length > 0) {
    i = document.cookie.indexOf(buscamos);
    if (i != -1) {
      i += buscamos.length;
      j = document.cookie.indexOf(";", i);
      if (j == -1)
        j = document.cookie.length;
      return unescape(document.cookie.substring(i,j));
    } else return "";
  }
  else return "";
}

    /**
    * funcion para comprobar si una año es bisiesto
    * argumento anyo > año extraido de la fecha introducida por el usuario
    */
    function anyoBisiesto(anyo)
    {
        /**
        * si el año introducido es de dos cifras lo pasamos al periodo de 1900. Ejemplo: 25 > 1925
        */
        if (anyo < 100)
            var fin = anyo + 1900;
        else
            var fin = anyo ;

        /*
        * primera condicion: si el resto de dividir el año entre 4 no es cero > el año no es bisiesto
        * es decir, obtenemos año modulo 4, teniendo que cumplirse anyo mod(4)=0 para bisiesto
        */
        if (fin % 4 != 0)
            return false;
        else
        {
            if (fin % 100 == 0)
            {
                /**
                * si el año es divisible por 4 y por 100 y divisible por 400 > es bisiesto
                */
                if (fin % 400 == 0)
                {
                    return true;
                }
                /**
                * si es divisible por 4 y por 100 pero no lo es por 400 > no es bisiesto
                */
                else
                {
                    return false;
                }
            }
            /**
            * si es divisible por 4 y no es divisible por 100 > el año es bisiesto
            */
            else
            {
                return true;
            }
        }
    }
   
    /**
    * funcion principal de validacion de la fecha
    * argumento fecha > cadena de texto de la fecha introducida por el usuario
    */
    function esfecha(objeto)
    {
       /**
       * obtenemos la fecha introducida y la separamos en dia, mes y año
       */
       var a, mes, dia, anyo, febrero;
       a=objeto.value;
       dia=a.split("/")[0];
       mes=a.split("/")[1];
       anyo=a.split("/")[2];
    if( (isNaN(dia)==true) || (isNaN(mes)==true) || (isNaN(anyo)==true) )
    {
        alert("La fecha introducida debe estar formada sólo por números separados por barras __/__/__");
     return false;
       }
        if (anyo < 100)
            if (anyo<20)
				anyo = parseInt(anyo) + 2000;
	        else
				anyo = parseInt(anyo) + 1900;

		if(anyoBisiesto(anyo))
           febrero=29;
       else
           febrero=28;
       /**
       * si el mes introducido es negativo, 0 o mayor que 12 > alertamos y detenemos ejecucion
       */
       if ((mes<1) || (mes>12))
       {
           alert("El mes introducido no es valido. Por favor, introduzca un mes correcto");
           objeto.focus();
           objeto.select();
           return false;
       }
       /**
       * si el mes introducido es febrero y el dia es mayor que el correspondiente
       * al año introducido > alertamos y detenemos ejecucion
       */
       if ((mes==2) && ((dia<1) || (dia>febrero)))
       {
           alert("El dia introducido no es valido. Por favor, introduzca un dia correcto");
           objeto.focus();
           objeto.select();
           return false;
       }
       /**
       * si el mes introducido es de 31 dias y el dia introducido es mayor de 31 > alertamos y detenemos ejecucion
       */
       if (((mes==1) || (mes==3) || (mes==5) || (mes==7) || (mes==8) || (mes==10) || (mes==12)) && ((dia<1) || (dia>31)))
       {
           alert("El dia introducido no es valido. Por favor, introduzca un dia correcto");
           objeto.focus();
           objeto.select();
           return false;
       }
       /**
       * si el mes introducido es de 30 dias y el dia introducido es mayor de 301 > alertamos y detenemos ejecucion
       */
       if (((mes==4) || (mes==6) || (mes==9) || (mes==11)) && ((dia<1) || (dia>30)))
       {
           alert("El dia introducido no es valido. Por favor, introduzca un dia correcto");
           objeto.focus();
           objeto.select();
           return false;
       }
       /**
       * si el mes año introducido es menor que 1900 o mayor que 2010 > alertamos y detenemos ejecucion
       * NOTA: estos valores son a eleccion vuestra, y no constituyen por si solos fecha erronea
       */
       if ((anyo<1900) || (anyo>2016))
       {
           alert("El año introducido no es valido. Por favor, introduzca un año entre 1900 y 2013");
           objeto.focus();
           objeto.select();
		   return false;
       }
       /**
       * en caso de que todo sea correcto > enviamos los datos del formulario
       * para ello debeis descomentar la ultima sentencia
       */
       else
          //alert("La fecha introducida es correcta. Gracias por su colaboración");
          //document.forms[0].submit();   
		  return true;
    }    
	
function trim(campo)
{
	cadena=campo.value
	for(i=0; i<cadena.length; )
	{
		if(cadena.charAt(i)==" ")
			cadena=cadena.substring(i+1, cadena.length);
		else
			break;
	}

	for(i=cadena.length-1; i>=0; i=cadena.length-1)
	{
		if(cadena.charAt(i)==" ")
			cadena=cadena.substring(0,i);
		else
			break;
	}
	
	campo.value=cadena;
}