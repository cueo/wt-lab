import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;

public class Shopping3 extends HttpServlet
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
			pw.println("<h3>Book: "+sess.getAttribute("book")+"</h3>");
			pw.println("<a href='/examples/Shopping2'>Previous</a>");
			pw.println("<a href='/examples/Shopping4'>Next</a>");
			pw.println("</body></html>");
			pw.close();
		}
		catch(Exception e)
		{
			e.printStackTrace();
		}
	}
}