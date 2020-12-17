<?php
include('student.php');
?>
<html>
<title>Application form</title>

<head> </head>

<body align="center" style="font-size: 20px; background-color: skyblue;">
    <h1 align="centre">Application Form</h1>
    <p>Application For Reimbursement Of Children Education Allowance For The Academic Year<input type="month" </p> <p>(Ref:RAilway Board Letter No.E(w)/2019/ED-2/3 dtd.12.02.2019(RBE NO.147/2019)</p>
    <form method="post" action="index1.html">
        <table align="centre">
            <tr>
                <td> 01- Name of the Employee:</td>
                <td><input type="text" name=""></td>
            </tr>
            <tr>
                <td> 02- PF Number/Employee No.</td>
                <td><input type="number" name=""></td>
            </tr>
            <tr>
                <td> 03- Pay Bill Unit No.</td>
                <td><input type="number" </td> </tr> <tr>
                <td>
                    <h4>
                        04- PARTICULARS OF CHILDREN</h4>
                </td>
                <th>CHILD-1</th>
                <th>CHILD-2</th>
            </tr>
            <tr>
                <td>Name of the student</td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>D.O.B</td>
                <td><input type="date"></td>
                <td><input type="date"></td>
            </tr>
            <tr>
                <td>Class</td>
                <td><input type="number"></td>
                <td><input type="number"></td>
            </tr>
            <tr>
                <td>Name Of The School And Address</td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Nature of claim :</td>
                <td><input type="checkbox">
                    Education allowance <br>
                    <input type="checkbox">
                    Hostel Subsidy <br>
                    <input type="checkbox">
                    Disabled child
                </td>
                <td><input type="checkbox">
                    Education allowance <br>
                    <input type="checkbox">
                    Hostel Subsidy <br>
                    <input type="checkbox">
                    Disabled child
                </td>
            </tr>
            <tr>
                <td>05- Whether Bonafide Certificate From School is enclosed</td>
                <td><input type="file"></td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td>06- Amount of CEA claimed for Academic Session</td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>


        </table>

        <h4 align="left">Certified that :</h4>


        <h5 align="left">1 My Child/Children mentioned above in respect of whom reimbursement of education expeness is claimed is/are wholly dependent upon me.</h5>
        <h5 align="left"> 2 My wife/husband is not Central Govt.Employee.</h5>
        <h5 align="left">My Wife/husband is a Central Govt.Employee and she/he will not claim reimbursement of education expenses in respect of our child /children. </h5>
        <h5 align="left"> 3 My Child/Children in respect of Whom reimbursement is claimed is/are studying in recognised school.</h5>
        <h5 align="left">4 (i)I hereby declare that reimbursement of CEA has not been claimed in respect of the child /children by a person other than me.</h5>
        <h5 align="left">5 I hereby declare that reimbursement of CEA is claimed for my eldest two surviving children only.</h5>
        <h4> I hereby declare that the particulars mentioned above are correct to the best of my knowledge .if any information furnished above is not correct,i am liable to be taken up under D&AR.</h4>

        <table>
            <tr>
                <td>
                    Signature of the applicant</td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td>Name :</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>EMployee NO :</td>
                <td><input type="number"></td>
            </tr>
            <tr>
                <td>Date :</td>
                <td><input type="date"></td>
            </tr>
            <tr>
                <td>Signature of Forwarding offical
                    With date & Office Seal
                </td>
                <td><input type="file"></td>
            </tr>
        </table>
        <h2 align="center">
            <input type="submit" value="submit"></h2>

    </form>
</body>

</html>