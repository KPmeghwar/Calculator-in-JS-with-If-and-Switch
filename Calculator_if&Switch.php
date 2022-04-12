<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>.::Calculator::.</title>
	<style type="text/css">
		h1{
			text-align: center;
            background: brown;
            color: wheat;
            border-radius: 50px;
		}

	</style>
</head>
<body bgcolor="#9980FA">

<script type="text/javascript">
                           /********** Calculator in if contition start**********/

document.write("<h1>Calculator  If Condition in Javascript</h1>");	
 
    document.write("<hr>");
	var number_1=10;
	var number_2=30;
	var operator='*';
    
    if(operator=='+'){
    	var add = number_1+number_2;
    	document.write("The Addition of two variables: "+add);
    }

    if(operator=='-'){
    	var sub = number_1-number_2;
    	document.write("The Subtration of two variables: "+sub);
    }

    if(operator=='*'){
    	var multi = number_1*number_2;
    	document.write("The Multiplication of two variables: "+multi);
    }

    if(operator=='/'){
    	var divi = number_1/number_2;
    	document.write("The Division of two variables: "+divi);
    }
     

    if(operator=='%'){
    	var rem = number_1/number_2;
    	document.write("The Reminder of two variables: "+rem);
    }

    

    document.write("<hr>");

                            /********** Calculator in if contition End**********/

                           /********** Calculator in Switch contition start**********/
 document.write("<h1>Calculator  Switch Condition in Javascript</h1>");
   document.write("<hr>");
 

 switch(operator){
  case "+":
  var add= number_1 + number_2;
  document.write("The Addition of two variables: "+add);
  break;

  case "-":
  var sub= number_1 - number_2;
  document.write("The Subtracion of two variables: "+sub);
  break;
  
  case "*":
  var multi= number_1 * number_2;
  document.write("The Multiplication of two variables: "+multi);
  break;
  
  case "/":
  var divi= number_1 / number_2;
  document.write("The Division of two variables: "+divi);
  break;

  case "%":
  var rem= number_1 / number_2;
  document.write("The The Reminder of two variables: "+rem);
  break;
  
  
 }

   document.write("<hr>");
                            /********** Calculator in if contition end**********/
</script>
</body>
</html>
