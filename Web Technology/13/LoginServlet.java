import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class LoginServlet extends HttpServlet
{
	public void doPost(HttpServletRequest req, HttpServletResponse res) throws IOException
	{
		res.setContentType("text/html");
		PrintWriter pw = res.getWriter();

		String user = (String) req.getParameter("user");
		String pass = (String) req.getParameter("pass");
		if(user.equals("mo") && pass.equals("moey"))
		{
			pw.println("<!DOCTYPE html>");
			pw.println("<html>");
			pw.println("<head><title>Login Servlet</title></head>");
			pw.println("<body>");
			pw.println("<h3>Login Successful! Welcome. :)</h3>");
			pw.println("</body>");
			pw.println("</html>");
		}
		else
		{
			pw.println("<!DOCTYPE html>");
			pw.println("<html>");
			pw.println("<head><title>Login Servlet</title></head>");
			pw.println("<body>");
			pw.println("<h3>Login Failed! Sorry. :(</h3>");
			pw.println("<br />");
			pw.println("<a href='localhost:8080/6.html'>Back to Login page</a>");
			pw.println("</body>");
			pw.println("</html>");
		}
		pw.close();
	}
} 