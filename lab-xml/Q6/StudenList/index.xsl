<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Student List</title>
            </head>
            <body>
                <h1>
                    <xsl:value-of select="/StudentList/Title" />
                </h1>
                <xsl:for-each select="/StudentList/Student">
                    <ul>
                        <li> Name: <xsl:value-of select="name" />,
                            Address: <xsl:value-of select="address" />,
                            Roll no: <xsl:value-of select="rollno" />,
                            Batch: <xsl:value-of select="batch" />

                        </li>
                    </ul>
                </xsl:for-each>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>