package mycom;
import java.io.Serializable;

public class Operations implements Serializable
{
	String op1, op2, op;
	public Operations()
	{
        
	}
	public void setOp(String x)
	{
		op = x;
	}
	public void setOp1(String x)
	{
		op1 = x;
	}
	public void setOp2(String x)
	{
		op2 = x;
	}
	public String getOp()
	{
		return op;
	}
	public String getOp1()
	{
		return op1;
	}
	public String getOp2()
	{
		return op2;
	}
	public String performOperation()
	{
		String result = "";
		if(op.equals("add"))
			result = Integer.parseInt(op1) + Integer.parseInt(op2) + "";
		else if(op.equals("sub"))
			result = Integer.parseInt(op1) - Integer.parseInt(op2) + "";
		else if(op.equals("mul"))
			result = Integer.parseInt(op1) * Integer.parseInt(op2) + "";
		return result;
	}
}
