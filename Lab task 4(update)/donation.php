<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <style>
        body {
            background-color: powderblue;
            margin: 50px;
        }
        label{
            font-weight: bold;
        }
        i{
            color: red;
        }
        form  { display: table;      }
        p     { display: table-row;  }
        label { display: table-cell; }
        input { display: table-cell; } 
        
    </style>
</head>
<body>
    <?php 
        include "h.php";
    ?>
    <br>
    <!-- <p>
        <label for=""><i>*</i></label>
        <input type="text">
        <br><br>
    </p> -->
    <span><i>*</i> - Denoted Required Information</span>
    <br><br>

    <p><b> > 1 Donation</b><span> > 2 Confirmation > Thank You!</span> </p><br>
    <form action="#" method="POST">
        <h2 style="color: red;">Donor Information</h2>
        
        <p><label for="fname">First name<i>*</i></label>
            <input id="fname" type="text" required>
            <br><br>
        </p>
        <p><label for="sname">Second name<i>*</i></label>
            <input id="sname" type="text" required>
            <br><br>
        </p>
        <p><label for="company">Company</label>
            <input id="company" type="text">
            <br><br>
        </p>
        <p><label for="address1">Address 1<i>*</i></label>
            <input id="address1" type="text" required>
            <br><br>
        </p>
        <p>
            <label for="address2">Address 2</label>
        <input id="address2" type="text">
        <br><br>
        </p>
        <p>
            <label for="city">City<i>*</i></label>
        <input id="city" type="text" required>
        <br><br>
        </p>
        <p>
            <label for="">State<i>*</i></label>
            <select name="state" id="" required>
                <option value="" disabled selected hidden>Select a State</option>
                <option value="chandigarh">Chandigarh</option>
                <option value="ranchi">Ranchi</option>
                <option value="kohima">Kohima</option>
                <option value="itanagar">Itanagar</option>
            </select>          
            
            <br><br>
        </p>
        <p>
            <label for="zipCode">Zip Code<i>*</i></label>
            <input type="text" required>
            <br><br>
        </p>
        <p>
            <label for="">Country<i>*</i></label>
            <select name="country" id="" required>
                <option value="" disabled selected hidden>Select a Country</option>
                <option value="Armenia">Armenia</option>
                <option value="Australia">Australia</option>
                <option value="Belarus">Belarus/option>
                <option value="Bulgaria">Bulgaria</option>
            </select>         
            
            <br><br>
        </p>
        <p>
            <label for="phone">Phone</label>
            <input type="text">
            <br><br>
        </p>
        <p>
            <label for="fax">Fax</label>
            <input type="text">
            <br><br>
        </p>
        <p>
            <label for="email">Email<i>*</i></label>
            <input type="email">
            <br><br>
        </p>
        <p>
            <label for="donationAmount">Donation Amount<i>*</i>
                <span>(Check a button or type in your amount)                    
                </span>
            </label>
            
            <input type="radio" name="donation" checked required>None
            <input type="radio" name="donation">$50
            <input type="radio" name="donation">$75
            <input type="radio" name="donation">$100
            <input type="radio" name="donation">$150
            <input type="radio" name="donation">$250
            <input type="radio" name="donation">other            
            <br><br>
        </p>
        <br>
        <p>
            <label for="recurringDonation">Recurring Donation</label>
            <input type="checkbox">I am interested in giving on a regular basis.
            <br><br>
            Monthly Credit Card $ <input type="text"> For <input type="text"> Months
            <br><br>
        </p>
        <br>

        <h2 style="color: red;">Honorarum and Memorial Donation Information</h2>
        <p>
            <label for="">I would like to make this donstion</label>
            <input type="radio"> To Honor<br>
            <input type="radio"> In Memory of 
            <br><br>
        </p>
        <p>
            <label for="nam">Name</label>
            <input type="text">
            <br><br>
        </p>
        <p>
            <label for="">Acknowledge Donation to</label>
            <input type="text">
            <br><br>
        </p>
        <p>
            <label for="address">Address</label>
            <input type="text">
            <br><br>
        </p>
        <p>
            <label for="city">City</label>
            <input type="text">
            <br><br>
        </p>
        <p>
            <label for="">State<i>*</i></label>
            <select name="state" id="" required>
                <option value="" disabled selected hidden>Select a State</option>
                <option value="chandigarh">Chandigarh</option>
                <option value="ranchi">Ranchi</option>
                <option value="kohima">Kohima</option>
                <option value="itanagar">Itanagar</option>
            </select>          
            
            <br><br>
        </p>
        <p>
            <label for="zip">Zip</label>
            <input type="text">
            <br><br>
        </p>
        <br><br>
        <h2 style="color: red;">Additional Information</h2>
        <span>Please enter ur name, company or organization as you would like it to appeared in our publication : </span>
        <p>
            <label for="Oname">Name</label>
            <input type="text">
            <br><br>
        </p>
        
        <input type="checkbox" >I would like my gift to remain anonymous.
        <br>
        <input type="checkbox" name="" id="" ">My employer offers a matching gift program. I will mail the matching gift form. 
        <br>
        <input type="checkbox" >Please save the cost of acknowledging this gift by not mailing a thank you letter.<br><br>
        <p>
            <label for="comment">Comment<span style="font-weight: 100;">(please type any questions or feedback here)</span></label>
        </p>
        
        <p>
            <label for=""></label>            
            <textarea name="" id="" cols="40" rows="5"></textarea>
            <br><br>
        </p>

        <p>
            <label for="">How may we contact you?</label>
            <input type="checkbox"> E-mail<br>
            <input type="checkbox"> Postal Mail<br>
            <input type="checkbox"> Telephone<br>
            <input type="checkbox">Fax
        </p>
        <span style="font-weight: 100; opacity: .5;">I would lie to recieve newsletters and information about special event by : </span>
        <p>
            <label for=""> </label>
            <input type="checkbox" name="" id="">E-mail<br>
            <input type="checkbox"> Postal Mail
        </p>
        <br>
        <p>
            <input type="checkbox"> I would like information about volunteering with the 
            <br><br>
        </p>
        <div style="text-align: center;">
            <input style="border: 1px solid #333; border-radius: 25px;" type="reset" value="Reset"> 
            <span>   </span>
            <input style="border: 1px solid #333; border-radius: 25px;" type="button" name="" id="" value="Continue">
       </div>
       <br><br>
       <div><img src="lock.png" alt="" width="20" height="20"> Donate online with confidence. You are a secure server</div><br>
       <span>If you have any problem or ques , Please contact <a href="#">Support</a></span>

        
        
        
        
</form>
<?php 
        include "footer.php";
    ?>
    <br><br>
</body>
</html>