<%@ page language="java" contentType="text/html"; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ page import="java.sql.*"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<%
		String url = "jdbc:mysql://localhost:3306/practice";
		String username = "root";
		String password = "";
		
		Class.forName("com.mysql.jdbc.Driver").newInstance();
		
		Connection con = DriverManager.getConnection(url, username, password);
		
	%>
	<%
      try {
         String name = request.getParameter("name");
         int rollnum = Integer.parseInt(request.getParameter("rollnum"));
   
         String query = "delete from students where name = ?";
         PreparedStatement st = con.prepareStatement(query);
         st.setString(1, name);
         int result = st.executeUpdate();

         if(result == 1)
            out.println("Successfull");
         else
            out.println("Failure");
      }
      catch (Exception e) {
         out.println("Failure !" + e.getMessage());
      }
   %>
</body>
</html>