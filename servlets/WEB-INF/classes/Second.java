import java.io.*;
import javax.servlet.*;

public class Second extends GenericServlet{
   public void service(ServletRequest req, ServletResponse res) throws IOException, ServletException {
      String name = req.getParameter("name");
      String rollnum = req.getParameter("rollnum");

      res.setContentType("text/html");

      PrintWriter out = res.getWriter();
      out.print("<html><body>");
      out.print("<p>hello " + name + " " + rollnum + "</p>");
      out.print("</body></html>");
   }
}