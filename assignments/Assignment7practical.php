<html lang="en">
<head>
    <title>Document</title>
    <style>
        /* Define a grid layout with 3 columns and 6 rows */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(6, 1fr);
            gap: 10px; /* Gap between grid items */
            padding: 20px;
        }

        /* Style for each grid item */
        .grid-item {
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
        }
    </style>
    <script type="Text/Javascript"  src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <H1 style="text-align: center;">HTML FORMATTING</H1>
    <div class="grid-container">
        <!-- HTML FORMATTING -->
        <div class="grid-item">
            <h1>Bold text</h1>
            <p>The following word uses a <b>bold</b> typeface.</p>
        </div>
        <div class="grid-item">
            <h1>Italic text</h1>
            <p>The following word uses an <i>italicized</i> typeface.</p>
        </div>
       
        <div class="grid-item">
            <h1>underlined text</h1>
            <p>The following word uses an <u>underlined</u> typeface.</p>
        </div>

        
        <div class="grid-item">
            <h1>Strike through </h1>
            <p>The following word uses a <strike>strikethrough</strike> typeface.</p>
        </div>
        <div class="grid-item">
            <h1>Monospaced font</h1>
            <p>The following word uses a <tt>monospaced</tt> typeface.</p>
        </div>
        <div class="grid-item">
            <h1>Superscript</h1>
            <p>The following word uses a <sup>superscript</sup> typeface.</p>
        </div>
            
        
        <div class="grid-item">
            <h1>Subscript</h1>
            <p>The following word uses a <sub>subscript</sub> typeface.</p>
        </div>
        <div class="grid-item">
            <h1>Deleted</h1>
            <p>I want to drink <del>cola</del> <ins>wine</ins></p>
        </div>
        <div class="grid-item">
            <h1>Inserted</h1>
            <p>I want to drink <del>cola</del> <ins>wine</ins></p>
        </div>

        
        <div class="grid-item">
            <h1>Larger text</h1>
            <p>The following word uses a <big>big</big> typeface.</p>
        </div>
        <div class="grid-item">
            <h1>Smaller text</h1>
            <p>The following word uses a <small>small</small> typeface.</p>
        </div>
        <div class="grid-item">
            <h1>Grouping Content</h1>
            <div id = "menu" align = "middle" >
                <a href = "/index.htm">HOME</a> | 
                <a href = "/about/contact_us.htm">CONTACT</a> | 
                <a href = "/about/index.htm">ABOUT</a>
             </div>
       
             <div id = "content" align = "left" >
                <h5>Content Articles</h5>
                <p>Actual content goes here.....</p>
             </div>
        </div>

        
        <div class="grid-item">
            <h1>Span And Div</h1>
            <p>This is the example of <span style = "color:green">span tag</span>
                and the <span style = "color:red">div tag</span> alongwith CSS</p>
        </div>
        <div class="grid-item">Row 5, Column 2</div>
        <div class="grid-item">Row 5, Column 3</div>

        
        <div class="grid-item">Row 6, Column 1</div>
        <div class="grid-item">Row 6, Column 2</div>
        <div class="grid-item">Row 6, Column 3</div>
    </div>

    <H1 style="text-align: center;">HTML PHRASE TAGS</H1>

    <div class="grid-container">
        <!-- HTML PHRASE TAGS -->
        <div class="grid-item">
            <H1>Emphasized Text</H1>
            <p>The following word uses an <em>emphasized</em> typeface.</p>
        </div>
        <div class="grid-item">
            <H1>Marked Text</H1>
            <p>The following word has been <mark>marked</mark> with yellow</p>
        </div>
        <div class="grid-item">
            <h1>Strong Text</h1>
            <p>The following word uses a <strong>strong</strong> typeface.</p>
        </div>

        
        <div class="grid-item">
            <h1>Text Abbreviation</h1>
            <p>My best friend's name is  <abbr title = "Abhishek">Abhy</abbr>.</p>
        </div>
        <div class="grid-item">
            <h1>Acronym Element</h1>
            <p>This chapter covers marking up text in <acronym>XHTML</acronym>.</p>
        </div>
        <div class="grid-item">
            <h1>Text Direction</h1>
            <p>This text will go left to right.</p>
            <p><bdo dir = "rtl">This text will go right to left.</bdo></p>
        </div>

        
        <div class="grid-item">
            <h1>Special Terms</h1>
            <p>The following word is a <dfn>special</dfn> term.</p>
        </div>
        <div class="grid-item">
            <h1>Quoting Text</h1>
            <p>The following description of XHTML is taken from the W3C Web site:</p>

            <blockquote>XHTML 1.0 is the W3C's first Recommendation for XHTML,following on 
            from earlier work on HTML 4.01, HTML 4.0, HTML 3.2 and HTML 2.0.</blockquote>
        </div>
        <div class="grid-item">
            <h1>Short Quotations</h1>
            <p>Amit is in Spain, <q>I think I am wrong</q>.</p>
        </div>

        
        <div class="grid-item">
            <h1>Text Citations</h1>
            <p>This HTML tutorial is derived from <cite>W3 Standard for HTML</cite>.</p>
        </div>
        <div class="grid-item">
            <h1>Computer Code</h1>
            <p>Regular text. <code>This is code.</code> Regular text.</p>
        </div>
        <div class="grid-item">
            <h1>Keyboard Text</h1>
            <p>Regular text. <kbd>This is inside kbd element</kbd> Regular text.</p>
        </div>

        
        <div class="grid-item">
            <h1>Programming Variables</h1>
            <p><code>document.write("<var>user-name</var>")</code></p>
        </div>
        <div class="grid-item">
            <h1>Program Output</h1>
            <p>Result produced by the program is <samp>Hello World!</samp></p>
        </div>
        <div class="grid-item">
            <h1>Address Text</h1>
            <address>388A, Road No 22, Jubilee Hills -  Hyderabad</address>
        </div>

        
        <div class="grid-item">Row 6, Column 1</div>
        <div class="grid-item">Row 6, Column 2</div>
        <div class="grid-item">Row 6, Column 3</div>
    </div>

    <h1>HTML IMAGES</h1>

    <div class="grid-container">
        <!-- HTML IMAGES -->
        <div class="grid-item">
            <h1>Simple Insert Image</h1>
            <p>Simple Image Insert</p>
            <img src = "Images/download.jpeg" alt = "Test Image" />
        </div>
        <div class="grid-item">
            <h1>Setting Height And Width</h1>
            <p>Setting image width and height</p>
            <img src = "Images/download.jpeg" alt = "Test Image" width = "150" height = "100"/>
        </div>
        <div class="grid-item">
            <h1>Set Image Border</h1>
            <p>Setting image Border</p>
            <img src = "Images/download.jpeg" alt = "Test Image" border = "3"/>
        </div>

        <div class="grid-item">
            <h1>Image Alignment</h1>
            <p>Setting image Alignment</p>
            <img src = "Images/download.jpeg" alt = "Test Image" border = "3" align = "right"/>
        </div>

         <!-- HTML TABLES -->

        <div class="grid-item">
            <h1>HTML TABLES WITH BORDER</h1>
            <table border = "1">
                <tr>
                   <td>Row 1, Column 1</td>
                   <td>Row 1, Column 2</td>
                </tr>
                
                <tr>
                   <td>Row 2, Column 1</td>
                   <td>Row 2, Column 2</td>
                </tr>
             </table>
        </div>
        <div class="grid-item">
            <h1>TABLES WITH HEADINGS</h1>
            <table border = "1">
                <tr>
                   <th>Name</th>
                   <th>Salary</th>
                </tr>
                <tr>
                   <td>Ramesh Raman</td>
                   <td>5000</td>
                </tr>
                
                <tr>
                   <td>Shabbir Hussein</td>
                   <td>7000</td>
                </tr>
             </table>
        </div>

        <div class="grid-item">
            <h1>Table cellpadding and cellspacing attributes</h1>
            <table border = "1" cellpadding = "5" cellspacing = "5">
                <tr>
                   <th>Name</th>
                   <th>Salary</th>
                </tr>
                <tr>
                   <td>Ramesh Raman</td>
                   <td>5000</td>
                </tr>
                <tr>
                   <td>Shabbir Hussein</td>
                   <td>7000</td>
                </tr>
             </table>
        </div>
        <div class="grid-item">
            <h1>Colspan and Rowspan Attributes</h1>
            <table border = "1">
                <tr>
                   <th>Column 1</th>
                   <th>Column 2</th>
                   <th>Column 3</th>
                </tr>
                <tr>
                   <td rowspan = "2">Row 1 Cell 1</td>
                   <td>Row 1 Cell 2</td>
                   <td>Row 1 Cell 3</td>
                </tr>
                <tr>
                   <td>Row 2 Cell 2</td>
                   <td>Row 2 Cell 3</td>
                </tr>
                <tr>
                   <td colspan = "3">Row 3 Cell 1</td>
                </tr>
             </table>
        </div>
        <div class="grid-item">
            <h1>Tables Backgrounds</h1>
            <table border = "1" bordercolor = "green" bgcolor = "yellow">
                <tr>
                   <th>Column 1</th>
                   <th>Column 2</th>
                   <th>Column 3</th>
                </tr>
                <tr>
                   <td rowspan = "2">Row 1 Cell 1</td>
                   <td>Row 1 Cell 2</td>
                   <td>Row 1 Cell 3</td>
                </tr>
                <tr>
                   <td>Row 2 Cell 2</td>
                   <td>Row 2 Cell 3</td>
                </tr>
                <tr>
                   <td colspan = "3">Row 3 Cell 1</td>
                </tr>
             </table>
        </div>

        <div class="grid-item">
            <h1>Tables with Background Images</h1>
            <table border = "1" bordercolor = "green" background = "Images/download.jpeg">
                <tr>
                   <th>Column 1</th>
                   <th>Column 2</th>
                   <th>Column 3</th>
                </tr>
                <tr>
                   <td rowspan = "2">Row 1 Cell 1</td>
                   <td>Row 1 Cell 2</td><td>Row 1 Cell 3</td>
                </tr>
                <tr>
                   <td>Row 2 Cell 2</td>
                   <td>Row 2 Cell 3</td>
                </tr>
                <tr>
                   <td colspan = "3">Row 3 Cell 1</td>
                </tr>
             </table>
        </div>
        <div class="grid-item">
            <h1>Table Height and Width</h1>
            <table border = "1" width = "400" height = "150">
                <tr>
                   <td>Row 1, Column 1</td>
                   <td>Row 1, Column 2</td>
                </tr>
                
                <tr>
                   <td>Row 2, Column 1</td>
                   <td>Row 2, Column 2</td>
                </tr>
             </table>
        </div>
        <div class="grid-item">
            <h1>Table Caption</h1>
            <table border = "1" width = "100%">
                <caption>This is the caption</caption>
                
                <tr>
                   <td>row 1, column 1</td><td>row 1, columnn 2</td>
                </tr>
                
                <tr>
                   <td>row 2, column 1</td><td>row 2, columnn 2</td>
                </tr>
             </table>
        </div>

        <div class="grid-item">
            <h1>Table Header, Body, and Footer</h1>
            <table border = "1" width = "100%">
                <thead>
                   <tr>
                      <td colspan = "4">This is the head of the table</td>
                   </tr>
                </thead>
                
                <tfoot>
                   <tr>
                      <td colspan = "4">This is the foot of the table</td>
                   </tr>
                </tfoot>
                
                <tbody>
                   <tr>
                      <td>Cell 1</td>
                      <td>Cell 2</td>
                      <td>Cell 3</td>
                      <td>Cell 4</td>
                   </tr>
                </tbody>
                
             </table>
        </div>
        <div class="grid-item">
            <h1>Nested Tables</h1>
            <table border = "1" width = "100%">
         
                <tr>
                   <td>
                      <table border = "1" width = "100%">
                         <tr>
                            <th>Name</th>
                            <th>Salary</th>
                         </tr>
                         <tr>
                            <td>Ramesh Raman</td>
                            <td>5000</td>
                         </tr>
                         <tr>
                            <td>Shabbir Hussein</td>
                            <td>7000</td>
                         </tr>
                      </table>
                   </td>
                </tr>
                
             </table>
        </div>

        <!-- HTML LISTS -->

        <div class="grid-item">
            <H1>HTML Unordered Lists</H1>
            <ul>
                <li>Beetroot</li>
                <li>Ginger</li>
                <li>Potato</li>
                <li>Radish</li>
             </ul>
        </div>
        <div class="grid-item">
            <H1>The type Attribute Square</H1>
            <ul type = "square">
                <li>Beetroot</li>
                <li>Ginger</li>
                <li>Potato</li>
                <li>Radish</li>
             </ul>
        </div>
        <div class="grid-item">
            <h1>The Circle Atrribute</h1>
            <ul type = "circle">
                <li>Beetroot</li>
                <li>Ginger</li>
                <li>Potato</li>
                <li>Radish</li>
             </ul>
        </div>
        <div class="grid-item">
            <h1>The disc Atrribute</h1>
            <ul type = "disc">
                <li>Beetroot</li>
                <li>Ginger</li>
                <li>Potato</li>
                <li>Radish</li>
             </ul>
        </div>

            <div class="grid-item">
                <h1>HTML Ordered Lists</h1>
                <ol>
                    <li>Beetroot</li>
                    <li>Ginger</li>
                    <li>Potato</li>
                    <li>Radish</li>
                 </ol>
            </div>
            <div class="grid-item">
                <h1>Oderderd Default-Case Numerals</h1>
                <ol type = "1">
                    <li>Beetroot</li>
                    <li>Ginger</li>
                    <li>Potato</li>
                    <li>Radish</li>
                 </ol>
            </div>
            <div class="grid-item">
                <h1>Oderderd Upper-Case Numerals.</h1>
                <ol type = "I">
                    <li>Beetroot</li>
                    <li>Ginger</li>
                    <li>Potato</li>
                    <li>Radish</li>
                 </ol>
            </div>
    
            <div class="grid-item">
                <h1>Oderderd Lower-Case Numerals.</h1>
                <ol type = "i">
                    <li>Beetroot</li>
                    <li>Ginger</li>
                    <li>Potato</li>
                    <li>Radish</li>
                 </ol>
            </div>
            <div class="grid-item">
                <h1>Oderderd Upper-Case Letters.</h1>
                <ol type = "A">
                    <li>Beetroot</li>
                    <li>Ginger</li>
                    <li>Potato</li>
                    <li>Radish</li>
                 </ol>
            </div>
            <div class="grid-item">
                <h1>Oderderd Lower-Case Letters.</h1>
                <ol type = "a">
                    <li>Beetroot</li>
                    <li>Ginger</li>
                    <li>Potato</li>
                    <li>Radish</li>
                 </ol>
            </div>
    
            <div class="grid-item">
                <h1>The start Attribute</h1>
                <ol type = "i" start = "4">
                    <li>Beetroot</li>
                    <li>Ginger</li>
                    <li>Potato</li>
                    <li>Radish</li>
                 </ol>
            </div>

            <!-- HTML Linking Documents -->

            <div class="grid-item">
                <h1>Linking Documents</h1>
                <p>Click following link</p>
                <a href = "https://www.tutorialspoint.com" target = "_self">Tutorials Point</a>
            </div>
            <div class="grid-item">
                <H1>Setting Link Colors</H1>
                    <p>Setting Link Colors You can set colors of your links, 
                    active links and visited links using link, alink and 
                    vlink attributes of <body> tag.</p>
                
                <body alink = "#54A250" link = "#040404" vlink = "#F40633">
                    <p>Click following link</p>
                    <a href = "/html/index.htm" target = "_blank" >HTML Tutorial</a>
                 </body>
            </div>
            <div class="grid-item">
                <H1>Download Links</H1>
                <P>You can create text link to make your PDF, or DOC or ZIP files downloadable. 
                    This is very simple; you just need to give complete URL of the downloadable 
                    file as follows</P>
                <a href = "https://www.tutorialspoint.com/page.pdf">Download PDF File</a>
            </div>

            <!-- HTML - Image Links -->

            <div class="grid-item">
                <h1>HTML - Image Links</h1>
                <a href = "Assignment3practical.html" target = "_self"> 
                    <img src = "Images/pngegg.png" alt = "Tutorials Point" height="50px"/> 
                 </a>
            </div>

            <!-- HTML - Backgrounds -->

            <div class="grid-item">
                <h1>Html Background with Colors</h1>
                <table bgcolor = "yellow" width = "100%">
                    <tr>
                       <td>
                          This background is yellow
                       </td>
                    </tr>
                 </table>
            
                 <!-- Format 2 - Use hex value -->
                 <table bgcolor = "#6666FF" width = "100%">
                    <tr>
                       <td>
                          This background is sky blue
                       </td>
                    </tr>
                 </table>
            
                 <!-- Format 3 - Use color value in RGB terms -->
                 <table bgcolor = "rgb(255,0,255)" width = "100%">
                    <tr>
                       <td>
                          This background is green
                       </td>
                    </tr>
                 </table>
            </div>
    
            <div class="grid-item">
                <h1>Html Background with Images</h1>
                <table background = "Images/download.jpeg" width = "100%" height = "100">
                    <tr style="color: antiquewhite;"><td>
                       This background is filled up with HTML image.
                    </td></tr>
                 </table>
            </div>

            <!-- HTML Fonts -->

            <div class="grid-item">
                <h1>HTML Font sizes</h1>
                <font size = "1">Font size = "1"</font><br />
                <font size = "2">Font size = "2"</font><br />
                <font size = "3">Font size = "3"</font><br />
                <font size = "4">Font size = "4"</font><br />
                <font size = "5">Font size = "5"</font><br />
                <font size = "6">Font size = "6"</font><br />
                <font size = "7">Font size = "7"</font>
            </div>
            <div class="grid-item">Row 6, Column 3</div>
        </div>
        <div class="grid-container">
            <!-- Font Face -->
            <div class="grid-item">
                <h1>Setting Font Face</h1>
                <font face = "Times New Roman" size = "5">Times New Roman</font><br />
                <font face = "Verdana" size = "5">Verdana</font><br />
                <font face = "Comic sans MS" size =" 5">Comic Sans MS</font><br />
                <font face = "WildWest" size = "5">WildWest</font><br />
                <font face = "Bedrock" size = "5">Bedrock</font><br />
            </div>
            <div class="grid-item">
                <h1>Setting Font Color</h1>
                <font color = "#FF00FF">This text is in pink</font><br />
                <font color = "red">This text is red</font>
            </div>
            <div class="grid-item">
                <h1>The basefont Element</h1>
                <basefont face = "arial, verdana, sans-serif" size = "2" color = "#ff0000">
                    <p>This is the page's default font.</p>
                    <h2>Example of the &lt;basefont&gt; Element</h2>
                    
                    <p><font size = "+2" color = "darkgray">
                          This is darkgray text with two sizes larger
                       </font>
                    </p>
              
                    <p><font face = "courier" size = "-1" color = "#000000">
                          It is a courier font, a size smaller and black in color.
                       </font>
                    </p>
            </div>
    
            <!-- HTML FONTS -->
            <div class="grid-item">
                <H1>Single-line text input controls</H1>
                <form >
                    First name: <input type = "text" name = "first_name" />
                    <br>
                    Last name: <input type = "text" name = "last_name" />
                 </form>
            </div>
            <div class="grid-item">
                <H1>Password input controls</H1>
                <form >
                    User ID : <input type = "text" name = "user_id" />
                    <br>
                    Password: <input type = "password" name = "password" />
                 </form>
            </div>
            <div class="grid-item">
                <H1>Multiple-Line Text Input Controls</H1>
                <form>
                    Description : <br />
                    <textarea rows = "5" cols = "50" name = "description">
                       Enter description here...
                    </textarea>
                 </form>
            </div>
            <div class="grid-item">
                <H1>Radio Button Control</H1>
                <form>
                    <input type = "radio" name = "subject" value = "maths"> Maths
                    <input type = "radio" name = "subject" value = "physics"> Physics
                 </form>
            </div>
            <div class="grid-item">
                <H1>Select Box Control</H1>
                <form>
                    <select name = "dropdown">
                       <option value = "Maths" selected>Maths</option>
                       <option value = "Physics">Physics</option>
                    </select>
                 </form>
            </div>
            <div class="grid-item">
                <H1>File Upload Box</H1>
                <form>
                    <input type = "file" name = "fileupload" accept = "image/*" />
                 </form>
            </div>
            <div class="grid-item">
                <H1>Button Controls</H1>
                <form>
                    <input type = "submit" name = "submit" value = "Submit" />
                    <input type = "reset" name = "reset"  value = "Reset" />
                    <input type = "button" name = "ok" value = "OK" />
                    <input type = "image" name = "imagebutton" src = "Images/pngegg.png" height="50px" />
                 </form>
            </div>
            <div class="grid-item">
                <H1>Hidden Form Controls</H1>
                <form>
                    <p>This is page 10</p>
                    <input type = "hidden" name = "pagename" value = "10" />
                    <input type = "submit" name = "submit" value = "Submit" />
                    <input type = "reset" name = "reset"  value = "Reset" />
                 </form>
            </div>

            <!-- HTML - Embed Multimedia -->

            <div class="grid-item">
                <embed src = "https://youtu.be/IvN5h9BE444?t=1" width = "100%" height = "60" >
                    <noembed><img src = "https://youtu.be/IvN5h9BE444?t=1" alt = "Alternative Media" ></noembed>
                 </embed>
            </div>
            <!-- HTML - Marquees -->
            <div class="grid-item">
                <H1>HTML Marquees</H1>
                <marquee>This is basic example of marquee</marquee>
            </div>
            <div class="grid-item">
                <h1>Marquee with 50%</h1>
                <marquee width = "50%">This example will take only 50% width</marquee>
            </div>
            <div class="grid-item">
                <h1>Marquee from right</h1>
                <marquee direction = "right">This text will scroll from left to right</marquee>
            </div>
            <div class="grid-item">
                <h1>Marquee from bottom to up</h1>
                <marquee direction = "up">This text will scroll from bottom to up</marquee>
            </div>
            <!-- HTML Stylesheets -->
            <div class="grid-item">
                <h1>HTML - Style Sheet</h1>
                <p style = "color:green; font-size:24px;" >Hello, World!</p>
            </div>
            <!-- HTML Javascript -->
            <div class="grid-item">
                <input type = "button" onclick = "Hello();" name = "ok" value = "Click Me" />
            </div>
        </div>
        <div class="container-fluid">
            <!-- HTML LAYOUTS -->
            <div class="grid-item">
                <table width = "100%" border = "0">
         
                    <tr valign = "top">
                       <td bgcolor = "#aaa" width = "20%">
                          <b>Main Menu</b><br />
                          HTML<br />
                          PHP<br />
                          PERL...
                       </td>
                           
                       <td bgcolor = "#b5dcb3" height = "200" width = "60%">
                          Technical and Managerial Tutorials
                       </td>
                           
                       <td bgcolor = "#aaa" width = "20%">
                          <b>Right Menu</b><br />
                          HTML<br />
                          PHP<br />
                          PERL...
                       </td>
                    </tr>
                    
                 <table>
            </div>
            <div class="container-lg">
                <div style = "width:100%">
		
                    <div style = "background-color:#b5dcb3; width:100%">
                       <h1>This is Web Page Main title</h1>
                    </div>
                       
                    <div style = "background-color:#aaa; height:200px; width:100px; float:left;">
                       <div><b>Main Menu</b></div>
                       HTML<br />
                       PHP<br />
                       PERL...
                    </div>
                       
                    <div style = "background-color:#eee; height:200px; width:350px; float:left;" >
                       <p>Technical and Managerial Tutorials</p>
                    </div>
                   
                    <div style = "background-color:#aaa; height:200px; width:100px; float:right;">
                       <div><b>Right Menu</b></div>
                       HTML<br />
                       PHP<br />
                       PERL...
                    </div>
                       
                    <div style = "background-color:#b5dcb3; clear:both">
                       <center>
                          Copyright © 2007 Tutorialspoint.com
                       </center>
                    </div>
                       
                 </div>
            </div>
            
    </div>
    
    
</body>
</html>