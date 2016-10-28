import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;

public class Shopping4 extends HttpServlet
{
	public void doGet(HttpServletRequest req, HttpServletResponse res)throws ServletException, IOException
	{
		try
		{	HttpSession sess = req.getSession(true);
			res.setContentType("text/html");
			PrintWriter pw = res.getWriter();
			
			pw.println("<html><head>");
			pw.println("<title>Shopping cart</title>");
			pw.println("</head>");
			pw.println("<h3>PC: "+sess.getAttribute("pc")+"</h3>");
			pw.println("<a href='/examples/Shopping3'>Previous</a>");
			pw.println("</body></html>");
			pw.close();
		}
		catch(Exception e)
		{
			e.printStackTrace();
		}
	}
}