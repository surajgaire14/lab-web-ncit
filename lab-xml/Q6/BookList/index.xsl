<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Book List</title>
            </head>
            <body>
                <table border="1" cellspacing="2" cellpadding="8">
                    <thead>
                        <tr>
                            <th>
                                Title
                            </th>
                            <th>
                                Author
                            </th>
                            <th>
                                Publisher
                            </th>
                            <th>
                                Edition
                            </th>
                            <th>
                                Price
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <xsl:for-each select="/BookList/Book">
                            <tr>
                                <td>
                                    <xsl:value-of select="Title" />
                                </td>
                                <td>
                                    <xsl:value-of select="Author" />
                                </td>
                                <td>
                                    <xsl:value-of select="Publisher" />
                                </td>
                                <td>
                                    <xsl:value-of select="Edition" />
                                </td>
                                <td>
                                    <xsl:value-of select="Price" />
                                </td>
                            </tr>
                        </xsl:for-each>
                    </tbody>

                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>