import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;

public class Shopping1 extends HttpServlet
{
	public void doPost(HttpServletRequest req, HttpServletResponse res)throws ServletException, IOException
	{
		try
		{	HttpSession sess = req.getSession(true);
			res.setContentType("text/html");
			PrintWriter pw = res.getWriter();
			
			String mobile = req.getParameter("mobile");
			sess.setAttribute("mobile", mobile);
			String tv = req.getParameter("tv");
			sess.setAttribute("tv", tv);
			String book = req.getParameter("book");
			sess.setAttribute("book", book);
			String pc = req.getParameter("pc");
			sess.setAttribute("pc", pc);

			pw.println("<html><head>");
			pw.println("<title>Shopping cart</title>");
			pw.println("</head>");
			pw.println("<body><h3>Hi! Welcome to the shopping cart!</h3>");
			pw.println("<body><h3>Mobile: "+sess.getAttribute("mobile")+"</h3>");
			pw.println("<a href='/examples/Shopping2'>Next</a>");
			pw.println("</body></html>");
			pw.close();
		}
		catch(Exception e)
		{
			e.printStackTrace();
		}
	}
	public void doGet(HttpServletRequest req, HttpServletResponse res)throws ServletException, IOException
	{
		try
		{	HttpSession sess = req.getSession(true);
			res.setContentType("text/html");
			PrintWriter pw = res.getWriter();
			
			pw.println("<html><head>");
			pw.println("<title>Shopping cart</title>");
			pw.println("</head>");
			pw.println("<body><h3>Hi! Welcome to the shopping cart!</h3>");
			pw.println("<body><h3>Mobile: "+sess.getAttribute("mobile")+"</h3>");
			pw.println("<a href='/examples/Shopping2'>Next</a>");
			pw.println("</body></html>");
			pw.close();
		}
		catch(Exception e)
		{
			e.printStackTrace();
		}
	}
}