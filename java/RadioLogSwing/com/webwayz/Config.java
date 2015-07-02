/**
 * @author $Author: Conor Gilmer $
 * @version $Revision: 1 $
 * 
 * Generic Config file recycled 
 * Could read from file, use Properties or Resource Bundles 
 * or set statically here 
 */
import java.util.*;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;

public class Config
{
	/********** PUBLIC STATIC VARIABLES **********/

	/* system information */
	public static String systemName     = "Radio Log Book";
	public static String systemVersion  = systemName+" Release 0_1";
	public static String authorName     = "Conor Gilmer <conor.gilmer@gmail.com>";
	public static String websiteAddress = "www.conorgilmer.com/radio";

    /* Locale and Timezone set */
	public static Locale locale = new Locale("en","IE"); //ISO
	public static TimeZone zone = new SimpleTimeZone(3600000,"IRL",
		 Calendar.MARCH,-1,Calendar.SUNDAY,3*60*60*1000,
		 Calendar.OCTOBER,-1,Calendar.SUNDAY,3*60*60*1000);
	
	static java.text.DateFormat dateFormat = new java.text.SimpleDateFormat("yyyy-MM-dd",Config.locale);

	/* log file */
	public static String logFile = "logs/RadioLogFile.log";
	/* radio codes todo import in codes/ q codes etc */
//	public static Hashtable radioCodes=new Hashtable();

	/* DB Properties */
//	public static String dbDriver = "org.gjt.mm.mysql.Driver";
//	public static String dbURL = "jdbc:mysql://localhost/dbname";
//  public static String dbServer = "localhost";
//  public static String dbUser   = "user";
//  public static String dbPass   = "";
//  public static String dbDB     = "dbname";
    
    /* DB Properties read from resource bundle */
//  public static ResourceBundle db = ResourceBundle.getBundle("db", locale);
//	public static String dbDriver = db.getString("dbDriver");
//	public static String dbURL    = db.getString("dbUrl");
//  public static String dbServer = db.getString("dbServer");
//  public static String dbUser   = db.getString("dbUser");
//  public static String dbPass   = db.getString("dbPass");
//  public static String dbDB     = "opendata";
    
    
    /* DB Properties read from property file 
     * need to call the function getDBProp to set the values 
     */
    public static String dbDriver = null;
	public static String dbURL    = null;
    public static String dbServer = null;
    public static String dbUser   = null;
    public static String dbPass   = null;
    public static String dbTable  = null;
    
    
    /* get read from file */
    public static void getDBProp() {
	Properties props = new Properties();
	try {
		props.load(new FileInputStream("db.properties"));
		dbUser   = props.getProperty("dbUser");
		dbPass   = props.getProperty("dbPass");
	    dbServer = props.getProperty("dbServer");
	    dbURL    = props.getProperty("dbUrl");
	    dbDriver = props.getProperty("dbDriver");
		
		
	} catch (FileNotFoundException e) {		
		System.out.println("File not found");
		e.printStackTrace();
	} catch (IOException e) {
		System.out.println("File IO Error");
		e.printStackTrace();
	}
	
	
    } /* end of getDBProp */
    
    
    
    
    
}
