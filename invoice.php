<html>
    <head>
        <title>Invoice</title>

        <!--Linking Style Sheet-->
        <link rel="stylesheet" href="admin.css" type="text/css">
        <link rel="stylesheet" href="common.css" type="text/css" />

        <link rel="stylesheet" href="global_css.css" type="text/css">
        <link rel="stylesheet" href="global_colors.css" type="text/css">

        <style type="text/css">
            .td1 {
                border: 1px solid grey;
            }

            .left {
                text-align: left;
            }

            .right {
                text-align: right;
            }

            .center {
                text-align: center;
            }

            table {
                width: 780px;
            }
        </style>
    </head>
    <body>
        <!--Top Bar Container-->
        <div id="topbar-container">
            <!--Top Bar-->
            <div id="topbar">
                <!--Logo Image-->
                <a href="index.php"><img id="logo-image" src="images/logo-white1.png" alt="Logo" /></a>

                <!--Name and search bar-->
                <div id="name-container">
                    <h1>Big Fat Belly</h1>
                    <h2>Invoice</h2>
                </div>

                <!--User Account Container-->
                <div id="user-account" class="dropdown">
                    <img id="user-image" src="images/user.png" alt="User Image" />
                    Username

                    <div class="dropdown-content">
                        <div class="links-container display-flex bold" onclick=""><img class="dropdown-icons" src="images/logout.png"><span class="red">Logout</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!--Clear All Float-->
        <div id="clear"></div>

        <!--Content Container-->
        <div id="content-container">
            <div id="content-div" class="margins">
                <div>
                <table class="td1" height=500px>
                    <tr>
                        <th colspan="6">
                            <h1 class="bold larger underlined">Big Fat Belly</h1>
                        </th>
                    </tr>
                    <tr>
                        <th class="left" width="20%">Order No:</th>
                        <td colspan="3"><span id="s1">123</span></td>

                        <th class="left">Order Date:</th>
                        <td><span id="s2">1/2/3</span></td>
                    </tr>
                    <tr>
                        <th class="left">Name:</th>
                        <td colspan="3"><span id="s3">Ramu</span></td>

                        <th class="left">Order Time:</th>
                        <td><span id="s4">1:30</span></td>
                    </tr>
                    <tr>
                        <th class="left">Address:</th>
                        <td colspan="5"><span id="s5">#123 sec-23</span></td>
                    </tr>
                    <tr>
                        <th class="left">Payment Mode:</th>
                        <td colspan="2"><span id="s6"></span></td>

                        <th class="left">Agent Name:</th>
                        <td colspan="2"><span id="s7"></span></td>
                    </tr>
                    <tr>
                        <th colspan="6" class="td1">Order Details</th>
                    </tr>
                    <tr>
                        <th class="td1 left">Sr NO.</th>
                        <th class="td1 left" colspan="2">Item Name</th>
                        <th class="td1 left">Quantity</th>
                        <th width="14%" class="td1 left" width="17%">Amount</th>
                        <th width="16%" class="td1 left">Net Amount</th>
                    </tr>
                    <tr >
                        <td class="td1 left"><span id="s8"></span>1</td>
                        <td class="td1" colspan="2"><span id="s9"></span>kulfi</td>
                        <td class="td1 right"><span id="s10"></span>2</td>
                        <td class="td1 right"><span id="s11"></span>200.00</td>
                        <td class="td1 right"><span id="s12"></span>230.00</td>
                    </tr>
                    <tr >
                        <td class="td1 left"><span id="s8"></span>2</td>
                        <td class="td1" colspan="2"><span id="s9"></span>kulfi</td>
                        <td class="td1 right"><span id="s10"></span>2</td>
                        <td class="td1 right"><span id="s11"></span>200.00</td>
                        <td class="td1 right"><span id="s12"></span>230.00</td>
                    </tr>
                    <tr >
                        <td class="td1 left"><span id="s8"></span>3</td>
                        <td class="td1" colspan="2" width="35%"><span id="s9"></span>kulfi</td>
                        <td class="td1 right"><span id="s10"></span>2</td>
                        <td class="td1 right"><span id="s11"></span>200.00</td>
                        <td class="td1 right"><span id="s12"></span>230.00</td>
                    </tr>
                    <tr>
                        <th class="left">Total:</th>
                        <td colspan="2"></td>
                        <td></td>
                        <td></td>
                        <td class="td1 right"><span id="s13"></span></td>
                    </tr>
                    <tr>
                        <th class="left">Tax:</th>
                        <td colspan="2"></td>
                        <td></td>
                        <td></td>
                        <td class="td1 right"><span id="s13"></span></td>
                    </tr>
                    <tr>
                        <th class="left">Discount:</th>
                        <td colspan="2"></td>
                        <td></td>
                        <td></td>
                        <td class="td1 right"><span id="s13"></span></td>
                    </tr>
                    <tr>
                        <th class="left">Net Total:</th>
                        <td colspan="2"></td>
                        <td></td>
                        <td></td>
                        <td class="td1 right"><span id="s13"></span></td>
                    </tr>
                </table>
                <button id="print">Print</button></div>
            </div>
        </div>
    </body>
</html>