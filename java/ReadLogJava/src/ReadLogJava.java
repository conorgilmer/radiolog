/*
 * Read Java MySql database of Radio Log files
 */
import java.sql.*;
import java.util.Properties;
import java.io.FileInputStream;

public class ReadLogJava {

	public static void main(String[] args) {
		System.out.println("Radio Log Book Entries");
		
		try
	    {
			Properties props = new Properties();
			props.load(new FileInputStream("config/db.properties"));
			
			String theUser  = props.getProperty("dbuser");
			String thePass  = props.getProperty("dbpass");
			String theUrl   = props.getProperty("dbserver");
			
			
	      // create our mysql database connection
	      String myDriver = "org.gjt.mm.mysql.Driver";
	      //String myUrl = "jdbc:mysql://localhost/opendata";
	      Class.forName(myDriver);
	      Connection conn = DriverManager.getConnection(theUrl, theUser, thePass);
	      System.out.println("Connected to DB.\n");
	  
	      // our SQL SELECT query.
	      // if you only need a few columns, specify them by name instead of using "*"
	      String query = "SELECT * FROM radiolog";

	      // create the java statement
	      Statement st = conn.createStatement();
	  
	      // execute the query, and get a java resultset
	      ResultSet rs = st.executeQuery(query);
	  
	      // iterate through the java resultset
	      while (rs.next())
	      {
	        int id = rs.getInt("id");
	        String frequency = rs.getString("frequency");
	        String name = rs.getString("name");
	        String band = rs.getString("band");
	        String type = rs.getString("type");
	        String unit = "kHz";
	        String times = rs.getString("times");

	  
	        // print the results
	        System.out.format("%s \t %s%s \t%s %s\t %s \t%s\n", id, frequency, unit,band, type, name, times);
	      }
	      st.close();
	    }
	    catch (Exception e)
	    {
	      System.err.println("Got an exception! ");
	      System.err.println(e.getMessage());
	    }

	}

}
