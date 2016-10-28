<!DOCTYPE html>
<html>
<head>
	<title> JSP </title>
</head>
<body>
	<jsp:useBean id="myBean" class="mycom.Operations" scope="request"/>
	<%-- <jsp:setProperty name="myBean" property="*" /> --%>
	
	<jsp:getProperty name="myBean" property="op1" />
	<jsp:getProperty name="myBean" property="op2" />
	<jsp:getProperty name="myBean" property="op" />
	<h3> Result: <%= myBean.performOperation() %> </h3>
</body>
</html>
