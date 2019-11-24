<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Saludo </title>
</head>
<body>
<%@ page import = "Clases.Numero" %>
<form name="form1">
<p>Valor <input name="valor" value= ""/></p>
<p><input type="submit" value="Calcular" /></p>
</form>
<%
	String x = request.getParameter("valor");
	if (x != null && x != ""){
		try{
			Numero n = new Numero(x);
			if (n.esPar())
				out.print(n.getValor() + " es Par");
			else
				out.print(n.getValor() + " es Impar");
	
		out.print("<br>");
	
		out.print(n.getValor() + "! = " + n.factorial());
		}catch(Exception e){
			out.print("Debe introducir un número");
		}
	
		
}
	
%>

</body>
</html>