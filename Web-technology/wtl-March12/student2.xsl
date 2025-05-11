<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Student Registration</title>
                <style>
                    table {
                        width: 50%;
                        border-collapse: collapse;
                        margin: 20px;
                    }
                    th, td {
                        border: 1px solid black;
                        padding: 10px;
                        text-align: left;
                    }
                    th {
                        background-color: #f2f2f2;
                    }
                </style>
            </head>
            <body>
                <h2>Student Registration Details</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Email</th>
                        <th>Marks</th>
                    </tr>
                    <xsl:for-each select="students/student">
                    <xsl:sort select="name"/>
                     <!-- <xsl:if test="marks &gt; 60"> -->
     <tr>
      <td><xsl:value-of select="id"/></td>
      <td><xsl:value-of select="name"/></td>
      <td><xsl:value-of select="course"/></td>
      <td><xsl:value-of select="email"/></td>
       <!-- <td><xsl:value-of select="marks"/></td> -->
      <xsl:choose>
        <xsl:when test="marks &gt; 60">
          <td bgcolor="#0000FF">
          <xsl:value-of select="marks"/></td>
        </xsl:when>
        <xsl:otherwise>
            <td bgcolor="#FFFF00">
          <xsl:value-of select="marks"/></td>
        </xsl:otherwise>
      </xsl:choose>
    </tr>
                         <!-- </xsl:if> -->
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
