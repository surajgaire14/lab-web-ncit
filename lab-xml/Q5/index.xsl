<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Subjects</title>
                <style>
                    * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    }

                    li {
                    list-style: none;
                    }
                    .container {
                    width: 700px;
                    margin: 0 auto;
                    margin-top: 2px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    gap: 5px;
                    }

                    .container h1 {
                    background-color: #018001;
                    color: #fff;
                    text-align: center;
                    padding: 10px 20px;
                    }

                    .container .subject {
                    text-align: center;
                    border: 1px solid #ccc;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    background-color: #cccccc43;
                    padding: 0.2em;
                    }

                    .container .subject h2 {
                    text-decoration: underline;
                    text-decoration-color: #018001;
                    text-align: center;
                    }

                    .container .subject ul li:first-child {
                    color: #018001;
                    }

                    li:nth-child(2){
                    color: #BB6363;
                    }
                    li:nth-child(3){
                    color: #4E4EFB;
                    }
                    li:last-child{
                    color: #F9D28F;
                    }
                </style>
            </head>
            <body>
                <div class="container">
                    <h1>Hello Everyone! welcome to XML to CSS</h1>
                    <div class="subject">
                        <h2>Algo</h2>
                        <ul>
                            <li>Greedy Algo</li>
                            <li>Randomized Algo</li>
                            <li>Searching Algo</li>
                            <li>Sorting Algo</li>
                        </ul>
                    </div>
                    <div class="subject">
                        <h2>Data Structure</h2>
                        <ul>
                            <li>Array</li>
                            <li>Stack</li>
                            <li>Queue</li>
                            <li>Linked List</li>
                        </ul>
                    </div>
                    <div class="subject">
                        <h2>Web Technology</h2>
                        <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JS</li>
                            <li>PHP</li>
                        </ul>
                    </div>
                    <div class="subject">
                        <h2>Languages</h2>
                        <ul>
                            <li>C/C++</li>
                            <li>JAVA</li>
                            <li>Python</li>
                            <li>Ruby</li>
                        </ul>
                    </div>
                    <div class="subject">
                        <h2>DBMS</h2>
                        <ul>
                            <li>Basics</li>
                            <li>ER Diagram</li>
                            <li>Normalization</li>
                            <li>Transaction Concepts</li>
                        </ul>
                    </div>
                </div>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>