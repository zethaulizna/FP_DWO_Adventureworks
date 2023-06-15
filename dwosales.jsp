<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>


<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/adventureworksdw?user=root&password=" catalogUri="/WEB-INF/queries/dwoawsales.xml">

select {[Measures].[TotalDue]} ON COLUMNS,
  {([salesperson],[product_sales].[All product_sales],[date].[All date])} ON ROWS
from [Sales]


</jp:mondrianQuery>





<c:set var="title01" scope="session">Query DWO UAS Kel 10</c:set>