<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	hi ${obj.aid},${obj.aname},${obj.tech}
	<form action="addAlein">
		<input type="text" name="aid">
		<input type="text" name="aname">
		<input type="text" name="tech">
		<input type="submit">
	</form>
	<form action="getAlein">
		<input type="text" name="tech">
		<input type="submit">
	</form>
	<form action="delAlein" >
		<input type="text" name="aid">
		<input type="submit">
	</form>
	
	
</body>
</html>