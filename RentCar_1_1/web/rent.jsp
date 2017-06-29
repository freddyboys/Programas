<%-- 
    Document   : rent
    Created on : Jun 28, 2017, 12:05:23 PM
    Author     : dfondos2
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <h1>Welcome</h1>
        <%-- 
        <% Clases.RentCar myCar= new Clases.RentCar(); %>
        I own <%= myCar.getAuto() %>
        --%>
         
        <jsp:useBean id="myCar" class="Clases.RentCar" />
        <jsp:setProperty name="myCar" value="<%= request.getParameter("date") %>" property="auto" />
        <jsp:getProperty name="myCar" property="auto"/><br>
        
        <jsp:setProperty name="myCar" value="<%= request.getParameter("car") %>" property="car" />
           <jsp:getProperty name="myCar" property="car"/>
       
        
        
        
    </body>
</html>
